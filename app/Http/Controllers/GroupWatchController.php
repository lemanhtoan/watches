<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\GroupWatch;
use DateTime;

class GroupWatchController extends Controller
{
   public function getlist()
   {
		$data = GroupWatch::all();
		return View ('back-end.group_watch.list',['data'=>$data]);
   }
   public function getadd()
   {	
		$data = GroupWatch::all();
		return View ('back-end.group_watch.add',['data'=>$data]);
   }
   public function postadd(Request $rq)
   {
	   $item = new GroupWatch();
       $item->name= $rq->name;
       $item->link= $rq->link;
       $item->status= $rq->status;
       $f = $rq->file('image')->getClientOriginalName();
       $filename = time().'_'.$f;
       $item->image = $filename;
       $rq->file('image')->move('uploads/group_watch/',$filename);
       $item->save();
       return redirect()->route('getgroup_watch')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function getedit($id)   {
      $item = GroupWatch::all();
      $data = GroupWatch::findOrFail($id)->toArray();
      return View ('back-end.group_watch.edit',['cat'=>$item,'data'=>$data]);
   }
   public function postedit($id, Request $request)
   {
      $item = GroupWatch::find($id);
       $item->name= $request->name;
       $item->link= $request->link;
      $item->status = $request->status;

       $file_path = public_path('uploads/group_watch/').$item->banner;
       if ($request->hasFile('image')) {
           if (file_exists($file_path))
           {
               unlink($file_path);
           }

           $f = $request->file('image')->getClientOriginalName();
           $filename = time().'_'.$f;
           $item->image = $filename;
           $request->file('image')->move('uploads/group_watch/',$filename);
       }

      $item->save();
      return redirect()->route('getgroup_watch')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

   }
   public function getdel($id)
   {
     GroupWatch::find($id)->delete();
     return redirect()->route('getgroup_watch')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
   }
}
