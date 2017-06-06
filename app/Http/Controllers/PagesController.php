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
use App\Day;
use App\May;
//call model
use App\Model\Contacts;
use Session;
use Validator;

class PagesController extends Controller
{
    public function __construct() {
        $new = DB::table('products')
            ->where('products.status','=','1')
            ->where('products.isHome','=','1')
            ->select('products.*')
            ->orderBy('id', 'desc')
            ->paginate(12);
        \View::share ( 'new', $new );
    }

    public function index()
    {
        $group_orient = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->where('category.slug','=','orient')
                ->where('products.status','=','1')
                ->where('products.isGroup','=','1')
                ->select('products.*')
                ->orderBy('id', 'desc')
                ->paginate(12);
        $banner_orient = DB::table('category')->where('category.slug','=','orient')->whereNotNull('banner')->select('banner')->get();
        $group_olym_pianus = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->where('category.slug','=','olym-pianus')
                ->where('products.status','=','1')
                ->where('products.isGroup','=','1')
                ->select('products.*')
                ->orderBy('id', 'desc')
                ->paginate(12);
        $banner_olym_pianus = DB::table('category')->where('category.slug','=','olym-pianus')->whereNotNull('banner')->select('banner')->get();
    	return view('home',['group_orient'=>$group_orient, 'group_olym_pianus' => $group_olym_pianus, 'banner_orient' => $banner_orient, 'banner_olym_pianus' => $banner_olym_pianus ]);
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
        
        if ( !Auth::guest() ) {
            $idCustomer = Auth::user()->id;
        } else {
            $idCustomer = DB::table('users')->insertGetId(
                [
                    'name' => trim($rq->cus_name), 
                    'email' => trim($rq->cus_name).'@email.guest',
                    'password' => bcrypt('123456a@'),
                    'phone' => trim($rq->cus_phone),
                    'address' => trim($rq->cus_address),
                    'status' => 0,
                    'created_at' => new datetime,
                ]
            );
        }

        $oder->c_id = $idCustomer;
        $oder->qty = Cart::count();
        $oder->sub_total = floatval($total);
        $oder->total =  floatval($total);
        $oder->note = trim($rq->txtnote);
        $oder->status = 0;
        $oder->type = trim($rq->cus_method);
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

    public function dataConstant() {
        $dataCount = count(DB::table('products')->where('products.status','=','1')->get());
        $branch =  Category::where('id', '>', '1')->orderBy('name','asc')->lists( 'name', 'id')->toArray();
        $may = May::where('status' ,'=' ,'1')->orderBy('name','asc')->lists( 'name', 'id')->toArray();
        $day = Day::where('status' ,'=' ,'1')->orderBy('name','asc')->lists( 'name', 'id')->toArray();
        $dataConstant = array(
            'w_branch' => $branch,
            'w_type' => $may,//\Config::get('constants.w_type'),
            'w_in' =>  $day, //\Config::get('constants.w_in'),
            'op_price' => \Config::get('constants.khoanggia'),
            'op_sapxep' => \Config::get('constants.sapxep'),
            'dataCount' => $dataCount
        );
        //echo "<pre>"; var_dump($dataConstant); die;
        return $dataConstant;
    }

    public function getcate($cat)
    {
        switch ($cat) {
            case 'tin-tuc':
                 $new =  DB::table('news')
                        ->orderBy('created_at', 'desc')
                        ->paginate(3);
                 $top1 = $new->shift();
                 $all =  DB::table('news')
                        ->orderBy('created_at', 'desc')
                        ->paginate(5);
                 return view('category.news',['data'=>$new,'hot1'=>$top1,'all'=>$all]);

            case 'dong-ho-nam':
                 $data = DB::table('products')
                    ->join('category', 'products.cat_id', '=', 'category.id')
                    ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                    ->where('pro_details.w_sex','=','0') // nam
                    ->where('products.status','=','1')
                    ->select('products.*','pro_details.*')
                    ->paginate(16);
                return view('category.list',['data'=>$data, 'cateName' => 'Đồng hồ nam','dataConstant' => $this->dataConstant(), 'catSlug' => '1']);
            
            case 'dong-ho-nu':
                 $data = DB::table('products')
                    ->join('category', 'products.cat_id', '=', 'category.id')
                    ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                    ->where('pro_details.w_sex','=','1') // nu
                    ->where('products.status','=','1')
                    ->select('products.*','pro_details.*')
                    ->paginate(16);
                return view('category.list',['data'=>$data, 'cateName' => 'Đồng hồ nữ','dataConstant' => $this->dataConstant(), 'catSlug' => '0']);
            default:

                $cate = Category::where('slug', '=', $cat)->get(['name', 'id']);
                $cateName = $cate[0]->name; 
                $cateId= $cate[0]->id;
                $data = DB::table('products')
                    ->join('category', 'products.cat_id', '=', 'category.id')
                    ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                    ->where('products.cat_id','=',$cateId)
                    ->where('products.status','=','1')
                    ->select('products.*','pro_details.*')
                    ->paginate(16);
                    return view('category.list',['data'=>$data, 'cateName' => $cateName, 'dataConstant' => $this->dataConstant(), 'catSlug' => $cat]);
        }
         
    }

    public function getcateAll()
    {
        $data = DB::table('products')
            ->join('category', 'products.cat_id', '=', 'category.id')
            ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->where('products.status','=','1')
            ->select('products.*','pro_details.*')
            ->paginate(16);
        return view('category.list',['data'=>$data, 'cateName' => 'Tất cả sản phẩm', 'dataConstant' => $this->dataConstant(), 'catSlug' => '']);

    }

    public function getcatelv2($lv1, $lv2)
    {
        $parent = Category::where('slug', '=', $lv1)->get(['name', 'id']);
        $parentName = $parent[0]->name;

        $cate = DB::table('category')
        ->where('slug', '=', $lv2)
        ->where('parent_id', '=', $parent[0]->id)
        ->get(['name', 'id']);
        $cateName = $cate[0]->name;
        $cateId = $cate[0]->id;

        $data = DB::table('products')
            ->join('category', 'products.cat_id', '=', 'category.id')
            ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->where('category.parent_id','=', $parent[0]->id)
            ->where('products.cat_id','=',$cateId)
            ->where('products.status','=','1')
            ->select('products.*','pro_details.*')
            ->paginate(16);
        return view('category.list',['data'=>$data, 'cateName' => $cateName, 'parentName' => $parentName, 'parentSlug' => $lv1,  'dataConstant' => $this->dataConstant(),  'catSlug' => $lv2]);

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
        $products = DB::table('products')->where('name', 'LIKE', '%' . $keyword . '%')->paginate(12);
         return view('category.list',['data'=>$products, 'cateName' => 'Kết quả tìm kiếm', 'dataConstant' => $this->dataConstant(), 'catSlug' =>  'Tìm kiếm']);
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

    public function filterCate(Request $request) {
        $thuonghieu = $request->input('thuonghieu'); //w_branch or cate_id
        $bomay = $request->input('bomay'); // w_type
        $loaiday = $request->input('loaiday'); // w_in
        $khoanggia = $request->input('khoanggia'); // price
        $sapxep = $request->input('sapxep'); // name , price

        $slugCate = $request->input('catSlug');
        if ($slugCate !="") {
            if ($slugCate =='0' || $slugCate =='1') {
                $queryCurrentCategory = " AND pro_details.w_sex='$slugCate' ";
            } else {
                $queryCurrentCategory = " AND category.slug='$slugCate' ";
            }
        } else {
            $queryCurrentCategory = " ";
        }

        $sqlData = "
            SELECT products.*, pro_details.* 
            FROM products INNER JOIN category ON products.cat_id = category.id
            INNER JOIN pro_details ON pro_details.pro_id = products.id
            WHERE products.status = '1'
            $queryCurrentCategory
        ";
        $dataFilter = array();

        if ($thuonghieu != "") {
            $dataFilter['thuonghieu']=$thuonghieu;
            $sqlData .= " AND category.id = '$thuonghieu'";
        }

        if ($bomay != "") {
            $dataFilter['bomay']=$bomay;
            $sqlData .= " AND pro_details.w_type = '$bomay'";
        }

        if ($loaiday != "") {
            $dataFilter['loaiday']=$loaiday;
            $sqlData .= " AND pro_details.w_in = '$loaiday'";
        }

        if ($khoanggia != "") {
            $dataFilter['khoanggia']=$khoanggia;
            if ($khoanggia != '0') { // all
                switch ($khoanggia) {
                    case '2':
                        $sqlData .= " AND products.price BETWEEN '0' AND '2000000'";
                        break;
                    case '5':
                        $sqlData .= " AND products.price BETWEEN '2000000' AND '5000000'";
                        break;
                    case '6':
                        $sqlData .= " AND products.price >= '5000000'";
                        break;
                }

            }
        }

        if ($sapxep != "") {
            $dataFilter['sapxep']=$sapxep;
            switch ($sapxep) {
                case 'priceAsc':
                    $sqlData .= " ORDER BY products.price ASC ";
                    break;
                case 'priceDesc':
                    $sqlData .= " ORDER BY products.price DESC ";
                    break;
                case 'nameAz':
                    $sqlData .= " ORDER BY products.name ASC ";
                    break;
                case 'nameZa':
                    $sqlData .= " ORDER BY products.name DESC ";
                    break;
            }
        }

        $filterNotPaging = DB::select(DB::raw($sqlData));

        return view('category.list',['data'=>$filterNotPaging, 'cateName' => 'Lọc dữ liệu sản phẩm', 'dataFilter' => $dataFilter,  'dataConstant' => $this->dataConstant(), 'catSlug' =>  $slugCate]);


    }
}
