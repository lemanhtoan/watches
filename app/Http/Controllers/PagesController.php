<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Products;
use App\Category;
use App\Pro_detail;
use App\News;
use App\Oders;
use App\Oders_detail;
use DB,Cart,Datetime;
//call model
use App\Model\Contacts;
use Session;
use Validator;

class PagesController extends Controller
{
    public function __construct() {
        // new - noi bat
        $new = DB::table('products')
            ->where('products.status','=','1')
            ->select('products.*')
            ->orderBy('id', 'desc')
            ->paginate(12);
        \View::share ( 'new', $new );
    }

    public function index()
    {
        // new - noi bat
        $new = DB::table('products')
                ->where('products.status','=','1')
                ->select('products.*')
                ->orderBy('id', 'desc')
                ->paginate(12);

        $group_orient = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->where('category.slug','=','orient')
                ->where('products.status','=','1')
                ->select('products.*')
                ->orderBy('id', 'desc')
                ->paginate(12);

        $group_olym_pianus = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->where('category.slug','=','olym-pianus')
                ->where('products.status','=','1')
                ->select('products.*')
                ->orderBy('id', 'desc')
                ->paginate(12); 



    	return view('home',['new'=>$new, 'group_orient'=>$group_orient, 'group_olym_pianus' => $group_olym_pianus]);
    }
    public function addcart($id)
    {
        $pro = Products::where('id',$id)->first();
        Cart::add(['id' => $pro->id, 'name' => $pro->name, 'qty' => 1, 'price' => $pro->price,'options' => ['img' => $pro->images]]);
        return redirect()->route('getcart');
    }

    public function getupdatecart($id,$qty,$dk)
    {
      if ($dk=='up') {
         $qt = $qty+1;
         Cart::update($id, $qt);
         return redirect()->route('getcart');
      } elseif ($dk=='down') {
         $qt = $qty-1;
         Cart::update($id, $qt);
         return redirect()->route('getcart');
      } else {
         return redirect()->route('getcart');
      }
    }

    public function getdeletecart($id)
    {
     Cart::remove($id);
     return redirect()->route('getcart');
    }

    public function xoa()
    {
        Cart::destroy();   
        return redirect()->route('index');   
    }

    public function getcart()
    {   
        $relation = DB::table('products')
            ->where('products.status','=','1')
            ->select('products.*')
            ->orderBy('id', 'desc')
            ->paginate(8);
        return view('detail.card',['slug'=>'Chi tiết đơn hàng', 'relation' => $relation]);
    }


    public function getoder()
    {
        $relation = DB::table('products')
            ->where('products.status','=','1')
            ->select('products.*')
            ->orderBy('id', 'desc')
            ->paginate(8);
       return view ('detail.oder', ['slug' =>'Xác nhận', 'relation' => $relation]);
    }

    public function postoder(Request $rq)
    {
        $oder = new Oders();
        $total =0;
        foreach (Cart::content() as $row) {
            $total = $total + ( $row->qty * $row->price);
        }
        $oder->c_id = Auth::user()->id;
        $oder->qty = Cart::count();
        $oder->sub_total = floatval($total);
        $oder->total =  floatval($total);
        $oder->note = $rq->txtnote;
        $oder->status = 0;
        $oder->type = 'cod';
        $oder->created_at = new datetime;
        $oder->save();
        $o_id =$oder->id;

        foreach (Cart::content() as $row) {
           $detail = new Oders_detail();
           $detail->pro_id = $row->id;
           $detail->qty = $row->qty;
           $detail->o_id = $o_id;
           $detail->created_at = new datetime;
           $detail->save();
        }
        Cart::destroy();   
        return redirect()->route('getcart')
        ->with(['flash_level'=>'result_msg','flash_massage'=>' Đơn hàng của bạn đã được gửi đi!']);
        
    }

    public function getcate($cat)
    {
        $cate = Category::where('slug', '=', $cat)->get(['name']);
        $cateName = $cate[0]->name;
    	if ($cat == 'tin-tuc') {
            $new =  DB::table('news')
                    ->orderBy('created_at', 'desc')
                    ->paginate(3);
            $top1 = $new->shift();
            $all =  DB::table('news')
                    ->orderBy('created_at', 'desc')
                    ->paginate(5);
            return view('category.news',['data'=>$new,'hot1'=>$top1,'all'=>$all]);
        } else {

            $data = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                //->where('category.parent_id','=','1')
                ->where('products.status','=','1')
                ->select('products.*','pro_details.*')
                ->paginate(16);
            return view('category.list',['data'=>$data, 'cateName' => $cateName]);

        }
         
    }

    public function getcatelv2($lv1, $lv2)
    {
        $parent = Category::where('slug', '=', $lv1)->get(['name', 'id']);
        $parentName = $parent[0]->name;

        $cate = DB::table('category')
        ->where('slug', '=', $lv2)
        ->where('parent_id', '=', $parent[0]->id)
        ->get(['name']);
        $cateName = $cate[0]->name;

        $data = DB::table('products')
            ->join('category', 'products.cat_id', '=', 'category.id')
            ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->where('category.parent_id','=', $parent[0]->id)
            ->where('products.status','=','1')
            ->select('products.*','pro_details.*')
            ->paginate(16);
        return view('category.list',['data'=>$data, 'cateName' => $cateName, 'parentName' => $parentName, 'parentSlug' => $lv1]);

    }

    public function detail($id,$slug)
    {

        $category = DB::table('products')
            ->where('products.id','=', $id)
            ->get(['cat_id']);

        if ($category) {
            $relation = DB::table('products')
                ->where('products.status','=','1')
                ->where('products.cat_id', '=', $category[0]->cat_id)
                ->select('products.*')
                ->orderBy('id', 'desc')
                ->paginate(8);
        } else {
            $relation = DB::table('products')
                ->where('products.status','=','1')
                ->select('products.*')
                ->orderBy('id', 'desc')
                ->paginate(8);
        }


        $detail = Products::where('id',$id)->first();
        if (empty($detail)) {
        return view ('errors.503');
        } else {
           return view ('detail.detail',['data'=>$detail,'slug'=>$slug, 'relation' => $relation]);
       }

    }

    public function getNews()
    { 
        $new =  DB::table('news')
                ->orderBy('created_at', 'desc')
                ->paginate(3);
        $top1 = $new->shift();
        $all =  DB::table('news')
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        return view('category.news',['data'=>$new,'hot1'=>$top1,'all'=>$all]);
         
    }

    public function detailNews($id,$slug)
    {
        $news = News::where('id',$id)->first();
        $relation = DB::table('news')
                    ->orderBy('created_at', 'desc')
                    ->paginate(5); 
        $newProduct = DB::table('products')
                ->where('products.status','=','1')
                ->select('products.*')
                ->orderBy('id', 'desc')
                ->paginate(8);
        return view('detail.news',['data'=>$news,'slug'=>$slug, 'relation' => $relation, 'newProduct' => $newProduct]);
    }

    public function lienhe() {
         return view('modules.contact', ['slug'=> 'Liên hệ']);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('txtkeyword');
        $products = DB::table('products')->where('name', 'LIKE', '%' . $keyword . '%')->paginate(10);
         return view('category.list',['data'=>$products, 'cateName' => 'Kết quả tìm kiếm']);
    }

    public function searchAjax(Request $request)
    {
        $keyword = $request->input('txtkeyword');
        $products = DB::table('products')->where('name', 'LIKE', '%' . $keyword . '%')->paginate(10);
        return \Response::json($products);
    } 

    public function createContact(Request $request) {
        $contact = new Contacts();
        $contact->contact_name = $request->input('contact_name');
        $contact->contact_email = $request->input('contact_email');
        $contact->contact_message = $request->input('contact_message');
        $contact->contact_status = 1;
        $contact->save();
        Session::flash('message', 'Cảm ơn liên hệ của quý khách, chúng tôi sẽ phản hồi trong 24h!');
        return redirect('lien-he');
    }

    public function getlistContact() {
        $data = Contacts::orderBy('id', 'desc')->paginate(10);
        return View ('back-end.contacts.list',['data'=>$data]);
    }

    public function getdelContact($id) {
        $pro = Contacts::find($id);
        $pro->delete();
        return redirect('admin/contacts')
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
    }
}
