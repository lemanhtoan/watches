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
use App\Groupnews;
//call model
use App\Model\Contacts;
use App\Slidecate;
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
        $data = array();
        $cates = DB::table('category')
            ->where('category.isHome','=','1')
            ->orderBy('category.position', 'asc')
            ->select(['category.id as cateId', 'category.slug as cateSlug', 'category.type as cateType', 'category.name as cateName',  'category.banner as cateImage'])
            ->get();

        foreach ($cates as $cate) { 
            $cataId = $cate->cateId;
            $products = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->where('category.id','=', $cataId )
                ->where('products.status','=','1')
                ->where('products.isGroup','=','1')
                ->select(['products.*'])
                ->orderBy('products.id', 'desc')
                ->get();
            array_push($data, array('category' => $cate, 'products' => $products));
        }
        
        return view('home',['data'=>$data ]);
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
        return view('detail.card',['slug'=>'Danh sách Sản phẩm', 'relation' => $relation]);
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
            $emailData = trim($rq->cus_name).'@email.guest';
            $checkExist = DB::table('users')->where('email', $emailData)->get();
            if ($checkExist) {
                $idCustomer = $checkExist[0]->id;
            } else {
                $idCustomer = DB::table('users')->insertGetId(
                [
                    'name' => trim($rq->cus_name), 
                    'email' => $emailData,
                    'password' => bcrypt('123456a@'),
                    'phone' => trim($rq->cus_phone),
                    'address' => trim($rq->cus_address),
                    'status' => 0,
                    'created_at' => new datetime,
                ]
            );
            }
            
        }

        $oder->c_id = $idCustomer;
        $oder->qty = Cart::count();
        $oder->sub_total = floatval($total);
        $oder->total =  floatval($total);
        $oder->note = uniqid();
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

        $getOrderId = DB::table('oders')->where('id', $o_id)->select('note')->get()[0];

        $relation = DB::table('products')
            ->where('products.status','=','1')
            ->select('products.*')
            ->orderBy('id', 'desc')
            ->paginate(8);
        return view ('detail.oder', ['slug' =>'Đặt hàng thành công', 'flash_massage'=>' Đơn hàng của bạn đã được gửi đi!','relation' => $relation, 'orderNumber' => $getOrderId]);
        
    }

    public function dataConstant() {
        $dataCount = count(DB::table('products')->where('products.status','=','1')->get());
        $branch =  Category::where('id', '>', '1')->orderBy('name','asc')->lists( 'name', 'id')->toArray();
        $may = May::where('status' ,'=' ,'1')->orderBy('name','asc')->lists( 'name', 'id')->toArray();
        $day = Day::where('status' ,'=' ,'1')->orderBy('name','asc')->lists( 'name', 'id')->toArray();
        $dataConstant = array(
            'w_branch' => $branch,
            'w_type' => $may,
            'w_in' =>  $day,
            'op_price' => \Config::get('constants.khoanggia'),
            'op_sapxep' => \Config::get('constants.sapxep'),
            'dataCount' => $dataCount
        );
        return $dataConstant;
    }

    public function getSlideCate($cat, $cat2=null) {
        return Slidecate::where('cateid', $cat)->orWhere('cateid', $cat2)->orderby('id', 'desc')->get();
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
                    ->orWhere('pro_details.w_sex', '2')
                    ->where('products.status','=','1')
                    ->select('products.*','pro_details.*')
                     ->orderBy('products.created_at', 'desc')
                    ->paginate(16);
                    $slideCate =  $this->getSlideCate('1'); // tintuc
                return view('category.list',['slideCate'=>$slideCate,'data'=>$data, 'cateName' => 'Đồng hồ nam','dataConstant' => $this->dataConstant(), 'catSlug' => '1']);

            case 'olym':
                $data = DB::table('products')
                    ->join('category', 'products.cat_id', '=', 'category.id')
                    ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                    ->where('pro_details.w_sex','=','0') // nam
                    ->orWhere('pro_details.w_sex', '2')
                    ->where('products.status','=','1')
                    ->where('category.slug','=','olym-pianus') // nam
                    ->orWhere('category.slug', 'olympia-star')
                    ->select('products.*','pro_details.*')
                    ->orderBy('products.created_at', 'desc')
                    ->paginate(16);

                $catId1 = DB::table('category')->where('slug', 'olym-pianus')->first();
                $catId2 = DB::table('category')->where('slug', 'olympia-star')->first();

                if (count($this->getSlideCate($catId1->id, $catId2->id))) {
                    $slideCate = $this->getSlideCate($catId1->id, $catId2->id);
                } else {
                    $slideCate =  $this->getSlideCate('1'); // tintuc
                }

                return view('category.list',['slideCate'=>$slideCate, 'data'=>$data, 'cateName' => 'Đồng hồ Olym','dataConstant' => $this->dataConstant(), 'catSlug' => '1']);


            case 'dong-ho-nu':
                 $data = DB::table('products')
                    ->join('category', 'products.cat_id', '=', 'category.id')
                    ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                    ->where('pro_details.w_sex','=','1') // nu
                    ->orWhere('pro_details.w_sex', '2')
                    ->where('products.status','=','1')
                    ->select('products.*','pro_details.*')
                     ->orderBy('products.created_at', 'desc')
                    ->paginate(16);
                    $slideCate =  $this->getSlideCate('1'); // tintuc
                return view('category.list',['slideCate'=>$slideCate,'data'=>$data, 'cateName' => 'Đồng hồ nữ','dataConstant' => $this->dataConstant(), 'catSlug' => '0']);
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
                    ->orderBy('products.created_at', 'desc')
                    ->paginate(16);

                if (count($this->getSlideCate($cateId))) {
                    $slideCate = $this->getSlideCate($cateId); 
                } else {
                    $slideCate =  $this->getSlideCate('1'); // tintuc
                }

                    return view('category.list',['slideCate'=>$slideCate, 'data'=>$data, 'cateName' => $cateName, 'dataConstant' => $this->dataConstant(), 'catSlug' => $cat]);
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

    public function getcateParam($catSlug, $param, $value)
    {
        $cate = Category::where('slug', '=', $catSlug)->get(['name', 'id']);
        $cateName = $cate[0]->name;
        $cateId = $cate[0]->id;
        

        $query = DB::table('products')
            ->join('category', 'products.cat_id', '=', 'category.id')
            ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
            ->where('products.cat_id','=',$cateId)
            ->where('products.status','=','1');

        if ($param == 'price') {
            switch ($value) {
                case '0':
                    $query->whereBetween('products.price', array('0','2000000'));
                    break;
                case '2':
                    $query->whereBetween('products.price', array('2000000','4000000'));
                    break;
                case '4':
                    $query->whereBetween('products.price', array('4000000','6000000'));
                    break;
                case '4x':
                    $query->where('products.price', '>=', '4000000');
                    break;
                case '6':
                    $query->whereBetween('products.price', array('6000000','9000000'));
                    break;
                case '15x':
                    $query->where('products.price', '>=', '15000000');
                    break;
            }
        }

        if ($param == 'chatlieu') {
            if ($value) {
                $query->where('pro_details.w_in', '=', $value);
            }
        }
        
        if ($param == 'kieumay') {
            if ($value) {
                $query->where('pro_details.w_type', '=', $value);
            }
        }
        

        $data = $query->select('products.*','pro_details.*')
            ->paginate(16);

        //dd($data);    
        return view('category.list',['data'=>$data, 'cateName' => $cateName, 'dataConstant' => $this->dataConstant(),  'catSlug' => $catSlug]);

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
        $news =  DB::table('news')
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        
        $list = DB::table('news')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
                
        $catenews =  DB::table('groupnews')
                ->orderBy('name', 'asc')
                ->get();

        return view('category.news',['cateName' => $cateName->name, 'news'=>$news,'list'=>$list,'catenews'=>'Tin tức']);
         
    }


    public function getNewGroup($groupId)
    { 
        $news =  DB::table('news')
                ->where('group', $groupId)
                ->orderBy('created_at', 'desc')
                ->paginate(5);
        
        $list = DB::table('news')
                ->where('group', $groupId)
                ->orderBy('created_at', 'desc')
                ->paginate(10);
                
        $catenews =  DB::table('groupnews')
                ->orderBy('name', 'asc')
                ->get();
        $cateName = Groupnews::where('id',$groupId)->first();

        return view('category.news',['cateName' => $cateName->name, 'news'=>$news,'list'=>$list,'catenews'=>$catenews]);
         
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
        $products = DB::table('products')->leftJoin('category','products.cat_id', '=', 'category.id')->where('products.name', 'LIKE', '%' . $keyword . '%')->orWhere('products.code', 'LIKE', '%' . $keyword . '%')->orWhere('category.name', 'LIKE', '%' . $keyword . '%')->select('products.*')->paginate(12);
        return view('category.list',['data'=>$products, 'cateName' => 'Kết quả tìm kiếm', 'dataConstant' => $this->dataConstant(), 'catSlug' =>  'Tìm kiếm']);
    }

    public function searchAjax(Request $request)
    {
        $keyword = $request->input('txtkeyword');
        $products = DB::table('products')->leftJoin('category','products.cat_id', '=', 'category.id')->where('products.name', 'LIKE', '%' . $keyword . '%')->orWhere('products.code', 'LIKE', '%' . $keyword . '%')->orWhere('category.name', 'LIKE', '%' . $keyword . '%')->select('products.*')->paginate(10);
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
                    case '1':
                        $sqlData .= " AND products.price BETWEEN '0' AND '2000000'";
                        break;
                    case '2':
                        $sqlData .= " AND products.price BETWEEN '2000000' AND '4000000'";
                        break;
                    case '4':
                        $sqlData .= " AND products.price BETWEEN '4000000' AND '6000000'";
                        break;
                    case '6':
                        $sqlData .= " AND products.price BETWEEN '6000000' AND '9000000'";
                        break;
                    case '15x':
                        $sqlData .= " AND products.price >= '15000000'";
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
