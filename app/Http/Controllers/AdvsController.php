<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Advs;
use DateTime;

class AdvsController extends Controller
{
   public function getlist()
   {
		$data = Advs::all();
		return View ('back-end.advs.list',['data'=>$data]);
   }
   public function getadd()
   {	
		$data = Advs::all();
		return View ('back-end.advs.add',['data'=>$data]);
   }
   public function postadd(Request $rq)
   {
	  $cat = new Advs();
      $cat->parent_id= $rq->sltCate;
      $cat->name= $rq->txtCateName;
      $cat->slug = str_slug($rq->txtCateName,'-');
         $cat->created_at = new DateTime;

       $f = $rq->file('txtimg')->getClientOriginalName();
       $filename = time().'_'.$f;
       $cat->banner = $filename;
       $rq->file('txtimg')->move('uploads/advs/',$filename);

      $cat->save();
      return redirect()->route('getadvs')
      ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function getedit($id)   {
      $cat = Category::all();
      $data = Category::findOrFail($id)->toArray();
      return View ('back-end.advs.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit($id, Request $request)
   {
      $cat = category::find($id);
      $cat->name = $request->txtCateName;
      $cat->slug = str_slug($request->txtCateName,'-');
      $cat->parent_id = $request->sltCate;
      $cat->updated_at = new DateTime;

       $file_path = public_path('uploads/advs/').$cat->banner;
       if ($request->hasFile('txtimg')) {
           if (file_exists($file_path))
           {
               unlink($file_path);
           }

           $f = $request->file('txtimg')->getClientOriginalName();
           $filename = time().'_'.$f;
           $cat->banner = $filename;
           $request->file('txtimg')->move('uploads/category/',$filename);
       }

      $cat->save();
      return redirect()->route('getadvs')
      ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

   }
   public function getdel($id)
   {
      $parent_id = category::where('parent_id',$id)->count();
      if ($parent_id==0) {
         $category = category::find($id);
         $category->delete();
         return redirect()->route('getadvs')
         ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
      } else{
         echo '<script type="text/javascript">
                  alert("Không thể xóa danh mục này !");                
                window.location = "';
                echo route('getcat');
            echo '";
         </script>';
      }
   }
}
