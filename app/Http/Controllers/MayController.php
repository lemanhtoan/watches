<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\May;
use DateTime;

class MayController extends Controller
{
   public function getlist()
   {
		$data = May::all();
		return View ('back-end.may.list',['data'=>$data]);
   }
   public function getadd()
   {	
		$data = May::all();
		return View ('back-end.may.add',['data'=>$data]);
   }
   public function postadd(Request $rq)
   {
	   $item = new May();
       $item->name= $rq->name;
       $item->status= $rq->status;
       $item->save();
       return redirect()->route('getmay')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function getedit($id)   {
      $cat = May::all();
      $data = May::findOrFail($id)->toArray();
      return View ('back-end.may.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit($id, Request $request)
   {
      $cat = May::find($id);
      $cat->name = $request->name;
      $cat->status = $request->status;
      $cat->save();
      return redirect()->route('getmay')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

   }
   public function getdel($id)
   {
     May::find($id)->delete();
     return redirect()->route('getmay')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
   }
}
