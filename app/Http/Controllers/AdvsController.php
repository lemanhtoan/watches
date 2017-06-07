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
	   $item = new Advs();
       $item->url= $rq->url;
       $item->status= $rq->status;
       $item->type= $rq->type;
       $f = $rq->file('image')->getClientOriginalName();
       $filename = time().'_'.$f;
       $item->image = $filename;
       $rq->file('image')->move('uploads/advs/',$filename);
       $item->save();
       return redirect()->route('getadvs')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function getedit($id)   {
      $cat = Advs::all();
      $data = Advs::findOrFail($id)->toArray();
      return View ('back-end.advs.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit($id, Request $request)
   {
      $cat = Advs::find($id);
      $cat->url = $request->url;
       $cat->type = $request->type;
      $cat->status = $request->status;

       $file_path = public_path('uploads/advs/').$cat->banner;
       if ($request->hasFile('image')) {
           if (file_exists($file_path))
           {
               unlink($file_path);
           }

           $f = $request->file('image')->getClientOriginalName();
           $filename = time().'_'.$f;
           $cat->image = $filename;
           $request->file('image')->move('uploads/advs/',$filename);
       }

      $cat->save();
      return redirect()->route('getadvs')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

   }
   public function getdel($id)
   {
     Advs::find($id)->delete();
     return redirect()->route('getadvs')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
   }
}
