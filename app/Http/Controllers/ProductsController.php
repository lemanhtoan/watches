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

		$dataConstant = array(
            'w_branch' => \Config::get('constants.w_branch'),
            'w_type' => \Config::get('constants.w_type'),
            'w_in' => \Config::get('constants.w_in'),
        );
        
        return view('back-end.products.add',['data'=>$pro,'cat'=>$cat, 'dataConstant' => $dataConstant]);
		
    }

    public function watermarkImage($imgType, $SourceFile, $DestinationFile=NULL, $opacity) {
        $main_img = $SourceFile;
        $padding = 3;
        $WaterMarkJpg = url('/public').'/source/jpg-watermark.jpg';
        $WaterMarkPng = url('/public').'/source/png-watermark.png';
        $WaterMarkGif = url('/public').'/source/gif-watermark.gif';
        switch($imgType){
            case 'image/jpeg':
            case 'image/jpg':
                $watermark_img = $WaterMarkJpg;
                $watermark = imagecreatefromjpeg($watermark_img); // create watermark
                $image = imagecreatefromjpeg($main_img); // create main graphic
                break;
            case 'image/png':
                $watermark_img = $WaterMarkPng;
                $watermark = imagecreatefrompng($watermark_img); // create watermark
                $image = imagecreatefrompng($main_img); // create main graphic
                break;
            case 'image/gif':
                $watermark_img = $WaterMarkGif;
                $watermark = imagecreatefromgif($watermark_img); // create watermark
                $image = imagecreatefromgif($main_img); // create main graphic
                break;
        }

        if(!$image || !$watermark) die("Error: main image or watermark could not be loaded!");

        $watermark_size = getimagesize($watermark_img);
        $watermark_width = $watermark_size[0];
        $watermark_height = $watermark_size[1];

        $image_size = getimagesize($main_img);
        $dest_x = $image_size[0] - $watermark_width - $padding;
        $dest_y = $image_size[1] - $watermark_height - $padding;

        // keep transparency
        

        // copy watermark on main image
        imagecopymerge($image, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, 100);

        if ($DestinationFile<>'') {
            header('Content-Type: image/png');
            @imagejpeg($image, $DestinationFile, 100);
        }
        else {
            header('Content-Type: image/png');
            @imagepng($image);
        }
        imagedestroy($image);
        imagedestroy($watermark);
    }

    public function uploadFile($fileUploadData) {
        $imgType = $fileUploadData->getMimeType();
        switch($imgType){
            case 'image/jpeg':
            case 'image/png':
            case 'image/jpg':
            case 'image/gif':
                $fileOriginal = $fileUploadData->getClientOriginalName();
                $newName = time().'_'.$fileOriginal;
                $tempDir = 'uploads/temp/'. $newName;
                $targetDir = 'uploads/products/'.$newName;
                $up =  copy($fileUploadData->getPathname(), $tempDir);
                if($up == true){
                    $this->watermarkImage ($imgType, $tempDir, $targetDir, 50);
                }else{
                    echo 'Có lỗi tải file xảy ra.';
                }
                break;
            default:
                echo 'Vui lòng chọn đúng định dạng file tải lên.';
        }
        return $newName;
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

//        if ($rq->hasFile('txtimg')) {
//            $fileUploadData = $rq->file('txtimg');
//            $pro->images = $this->uploadFile($fileUploadData);
//        }

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

        $dataConstant = array(
            'w_branch' => \Config::get('constants.w_branch'),
            'w_type' => \Config::get('constants.w_type'),
            'w_in' => \Config::get('constants.w_in'),
        );

        return view('back-end.products.edit',['pro'=>$pro,'cat'=>$cat, 'dataConstant' => $dataConstant]);
      
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
