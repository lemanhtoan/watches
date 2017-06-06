<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Day;
use DateTime;

class DayController extends Controller
{
   public function getlist()
   {
		$data = Day::all();
		return View ('back-end.day.list',['data'=>$data]);
   }
   public function getadd()
   {	
		$data = Day::all();
		return View ('back-end.day.add',['data'=>$data]);
   }
   public function postadd(Request $rq)
   {
	   $item = new Day();
       $item->name= $rq->name;
       $item->status= $rq->status;
       $item->save();
       return redirect()->route('getday')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function getedit($id)   {
      $cat = Day::all();
      $data = Day::findOrFail($id)->toArray();
      return View ('back-end.day.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit($id, Request $request)
   {
      $cat = Day::find($id);
       $cat->name= $request->name;
       $cat->status= $request->status;
      $cat->save();
      return redirect()->route('getday')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

   }
   public function getdel($id)
   {
     Day::find($id)->delete();
     return redirect()->route('getday')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
   }
}
