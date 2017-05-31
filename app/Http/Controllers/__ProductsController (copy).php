<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddProductsRequest;
use App\Http\Requests\EditProductsRequest;
use App\Http\Requests;
use App\Products;
use App\Category;
use App\Pro_details;
use App\Detail_img;
use Auth;
use DateTime,File,Input,DB;


class ProductsController extends Controller
{
	public function getlist($id)
	{
        if ($id!='all') {
            $pro = Products::where('cat_id',$id)->orderBy('id', 'desc')->paginate(20);
            $cat= Category::all()->except([13 ,14]);
            return view('back-end.products.list',['data'=>$pro,'cat'=>$cat,'loai'=>$id]);                    
        } else {
            $pro = Products::orderBy('id', 'desc')->paginate(20);
            $cat= Category::all()->except([13 ,14]);//Category::all();
            return view('back-end.products.list',['data'=>$pro,'cat'=>$cat,'loai'=>0]);
        }		
	}

    public function getadd()
    {
		$cat= Category::all()->except([13 ,14]);
		$pro = Products::all();	
        
        return view('back-end.products.add',['data'=>$pro,'cat'=>$cat]);
		
    }

    public function postadd(AddProductsRequest $rq)
    {
    	$pro = new Products();

    	$pro->name = $rq->txtname;
    	$pro->slug = str_slug($rq->txtname,'-');
    	$pro->intro = $rq->txtintro;
    	$pro->promo1 = $rq->txtpromo1;
    	$pro->promo2 = $rq->txtpromo2;
    	$pro->promo3 = $rq->txtpromo3;
    	$pro->packet = $rq->txtpacket;
    	$pro->r_intro = $rq->txtre_Intro;
    	$pro->review = $rq->txtReview;
    	$pro->tag = $rq->txttag;
    	$pro->price = $rq->txtprice;
    	$pro->cat_id = $rq->sltCate;
    	$pro->user_id = Auth::guard('admin')->user()->id;
    	$pro->created_at = new datetime;

    	$pro->status = $rq->w_status;
    	$f = $rq->file('txtimg')->getClientOriginalName();
    	$filename = time().'_'.$f;
    	$pro->images = $filename;    	
    	$rq->file('txtimg')->move('uploads/products/',$filename);
    	$pro->save();    	
    	$pro_id =$pro->id;

    	$detail = new Pro_details();

        $detail->w_group = $rq->w_group ? $rq->w_group : '';
        $detail->w_branch = $rq->w_branch ? $rq->w_branch : '';
        $detail->w_country = $rq->w_country ? $rq->w_country : '';
        $detail->w_role = $rq->w_role ? $rq->w_role : '';
        $detail->w_type = $rq->w_type ? $rq->w_type : '';
        $detail->w_sex = $rq->w_sex ? $rq->w_sex : '';
        $detail->w_size = $rq->w_size ? $rq->w_size : '';
        $detail->w_out = $rq->w_out ? $rq->w_out : '';
        $detail->w_in = $rq->w_in ? $rq->w_in : '';
        $detail->w_on = $rq->w_on ? $rq->w_on : '';
        $detail->w_water = $rq->w_water ? $rq->w_water : '';
        $detail->w_other = $rq->w_other ? $rq->w_other : '';
        $detail->w_time = $rq->w_time ? $rq->w_time : '';
        $detail->w_time_base = $rq->w_time_base ? $rq->w_time_base : '';

    	
    	$detail->pro_id = $pro_id;

    	$detail->created_at = new datetime;
    	$detail->save();    	

    	if ($rq->hasFile('txtdetail_img')) {
    		$df = $rq->file('txtdetail_img');
    		foreach ($df as $row) {
    			$img_detail = new Detail_img();
    			if (isset($row)) {
    				$name_img= time().'_'.$row->getClientOriginalName();
    				$img_detail->images_url = $name_img;
    				$img_detail->pro_id = $pro_id;
    				$img_detail->created_at = new datetime;
    				$row->move('uploads/products/details/',$name_img);
    				$img_detail->save();
    			}
    		}
		}
	return redirect('admin/sanpham/all')
      ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);    	

    }

    public function getdel($id)
    {
        $detail = Detail_img::where('pro_id',$id)->get();
        foreach ($detail as $row) {                
               $dt = Detail_img::find($row->id);
               $pt = public_path('uploads/products/details/').$dt->images_url; 
               // dd($pt);   
                if (file_exists($pt))
                {
                    unlink($pt);
                }
               $dt->delete();                              
            }
    	$pro = Products::find($id);
        $pro->delete();
        return redirect('admin/sanpham/all')
         ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
    }

    public function getedit($id)
    {
        $cat= Category::all()->except([13 ,14]);
        $pro = Products::where('id',$id)->first();
        return view('back-end.products.edit',['pro'=>$pro,'cat'=>$cat]);    
      
    }
    public function postedit($id,EditProductsRequest $rq)
    {
    	$pro = Products::find($id);

        $pro->name = $rq->txtname;
        $pro->slug = str_slug($rq->txtname,'-');
        $pro->intro = $rq->txtintro;
        $pro->promo1 = $rq->txtpromo1;
        $pro->promo2 = $rq->txtpromo2;
        $pro->promo3 = $rq->txtpromo3;
        $pro->packet = $rq->txtpacket;
        $pro->r_intro = $rq->txtre_Intro;
        $pro->review = $rq->txtReview;
        $pro->tag = $rq->txttag;
        $pro->price = $rq->txtprice;
        $pro->cat_id = $rq->sltCate;
        $pro->user_id = Auth::guard('admin')->user()->id;
        $pro->updated_at = new datetime;
        
        $pro->status = $rq->w_status;

        $file_path = public_path('uploads/products/').$pro->images;        
        if ($rq->hasFile('txtimg')) {
            if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            
            $f = $rq->file('txtimg')->getClientOriginalName();
            $filename = time().'_'.$f;
            $pro->images = $filename;       
            $rq->file('txtimg')->move('uploads/products/',$filename);
        }       
        $pro->save();

        $pro->pro_details->w_group = $rq->w_group ? $rq->w_group : '';
        $pro->pro_details->w_branch = $rq->w_branch ? $rq->w_branch : '';
        $pro->pro_details->w_country = $rq->w_country ? $rq->w_country : '';
        $pro->pro_details->w_role = $rq->w_role ? $rq->w_role : '';
        $pro->pro_details->w_type = $rq->w_type ? $rq->w_type : '';
        $pro->pro_details->w_sex = $rq->w_sex ? $rq->w_sex : '';
        $pro->pro_details->w_size = $rq->w_size ? $rq->w_size : '';
        $pro->pro_details->w_out = $rq->w_out ? $rq->w_out : '';
        $pro->pro_details->w_in = $rq->w_in ? $rq->w_in : '';
        $pro->pro_details->w_on = $rq->w_on ? $rq->w_on : '';
        $pro->pro_details->w_water = $rq->w_water ? $rq->w_water : '';
        $pro->pro_details->w_other = $rq->w_other ? $rq->w_other : '';
        $pro->pro_details->w_time = $rq->w_time ? $rq->w_time : '';
        $pro->pro_details->w_time_base = $rq->w_time_base ? $rq->w_time_base : '';

        $pro->pro_details->updated_at = new datetime;        

        if ($rq->hasFile('txtdetail_img')) {
            $detail = Detail_img::where('pro_id',$id)->get();
            $df = $rq->file('txtdetail_img');
            foreach ($detail as $row) {                
               $dt = Detail_img::find($row->id);
               $pt = public_path('uploads/products/details/').$dt->images_url; 
               // dd($pt);   
                if (file_exists($pt))
                {
                    unlink($pt);
                }
               $dt->delete();                              
            }
            foreach ($df as $row) {
                $img_detail = new Detail_img();
                if (isset($row)) {
                    $name_img= time().'_'.$row->getClientOriginalName();
                    $img_detail->images_url = $name_img;
                    $img_detail->pro_id = $id;
                    $img_detail->created_at = new datetime;
                    $row->move('uploads/products/details/',$name_img);
                    $img_detail->save();
                }
            }
        }
    $pro->pro_details->save();
    return redirect('admin/sanpham/all')
      ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã lưu !']);       
    }
}
