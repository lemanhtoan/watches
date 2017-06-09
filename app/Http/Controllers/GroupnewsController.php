<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Groupnews;
use DateTime;

class GroupnewsController extends Controller
{
   public function getlist()
   {
		$data = Groupnews::all();
		return View ('back-end.groupnews.list',['data'=>$data]);
   }
   public function getadd()
   {	
		$data = Groupnews::all();
		return View ('back-end.groupnews.add',['data'=>$data]);
   }
   public function postadd(Request $rq)
   {
	   $item = new Groupnews();
       $item->name= $rq->name;
       $item->status= $rq->status;
       $item->save();
       return redirect()->route('getgroupnews')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function getedit($id)   {
      $cat = Groupnews::all();
      $data = Groupnews::findOrFail($id)->toArray();
      return View ('back-end.groupnews.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit($id, Request $request)
   {
      $cat = Groupnews::find($id);
      $cat->name = $request->name;
      $cat->status = $request->status;
      $cat->save();
      return redirect()->route('getgroupnews')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

   }
   public function getdel($id)
   {
     Groupnews::find($id)->delete();
     return redirect()->route('getgroupnews')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
   }
}
