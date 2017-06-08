<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Sliders;
use DateTime;

class SlidersController extends Controller
{
   public function getlist()
   {
		$data = Sliders::all();
		return View ('back-end.sliders.list',['data'=>$data]);
   }
   public function getadd()
   {	
		$data = Sliders::all();
		return View ('back-end.sliders.add',['data'=>$data]);
   }
   public function postadd(Request $rq)
   {
	   $item = new Sliders();
       $item->name= $rq->name;
       $item->link= $rq->link;
       if ($rq->hasFile('image')) {
       $f = $rq->file('image')->getClientOriginalName();
       $filename = time().'_'.$f;
       $item->image = $filename;
       $rq->file('image')->move('uploads/sliders/',$filename);
     }
       $item->save();
       return redirect()->route('getsliders')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function getedit($id)   {
      $cat = Sliders::all();
      $data = Sliders::findOrFail($id)->toArray();
      return View ('back-end.sliders.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit($id, Request $request)
   {
      $cat = Sliders::find($id);
      $cat->name = $request->name;
      $cat->link = $request->link;

       $file_path = public_path('uploads/sliders/').$cat->banner;
       if ($request->hasFile('image')) {
           if (file_exists($file_path))
           {
               unlink($file_path);
           }

           $f = $request->file('image')->getClientOriginalName();
           $filename = time().'_'.$f;
           $cat->image = $filename;
           $request->file('image')->move('uploads/sliders/',$filename);
       }

      $cat->save();
      return redirect()->route('getsliders')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

   }
   public function getdel($id)
   {
     Sliders::find($id)->delete();
     return redirect()->route('getsliders')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
   }
}
