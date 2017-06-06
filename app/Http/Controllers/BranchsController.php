<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Branchs;
use DateTime;

class BranchsController extends Controller
{
   public function getlist()
   {
		$data = Branchs::all();
		return View ('back-end.branchs.list',['data'=>$data]);
   }
   public function getadd()
   {	
		$data = Branchs::all();
		return View ('back-end.branchs.add',['data'=>$data]);
   }
   public function postadd(Request $rq)
   {
	   $item = new Branchs();
       $item->address= $rq->address;
       $item->phone= $rq->phone;
       $item->status= $rq->status;
       $item->save();
       return redirect()->route('getbranchs')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function getedit($id)   {
      $cat = Branchs::all();
      $data = Branchs::findOrFail($id)->toArray();
      return View ('back-end.branchs.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit($id, Request $request)
   {
      $cat = Branchs::find($id);
      $cat->address = $request->address;
       $cat->phone = $request->phone;
      $cat->status = $request->status;
      $cat->save();
      return redirect()->route('getbranchs')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

   }
   public function getdel($id)
   {
     Branchs::find($id)->delete();
     return redirect()->route('getbranchs')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
   }
}
