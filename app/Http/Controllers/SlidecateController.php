<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Slidecate;
use DateTime;

class SlidecateController extends Controller
{
    public function getlist()
   {
		$data = Slidecate::orderBy('id', 'desc')->paginate(20);;
		return View ('back-end.slidecate.list',['data'=>$data, 'cat'=>$this->getCate()]);
   }
   public  function getCate() {
       return Category::all();
   }

   public function getadd()
   {	
		$data = Slidecate::all();
		return View ('back-end.slidecate.add',['data'=>$data, 'cat'=>$this->getCate()]);
   }
   public function postadd(Request $rq)
   {
	   $item = new Slidecate();
       $item->cateid= $rq->cateid;
       $item->status= $rq->status;
       if ($rq->hasFile('image')) {
       $f = $rq->file('image')->getClientOriginalName();
       $filename = time().'_'.$f;
       $item->image = $filename;
       $rq->file('image')->move('uploads/slidecate/',$filename);
     }
       $item->save();
       return redirect()->route('getslidecate')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function getedit($id)   {
      $data = Slidecate::findOrFail($id)->toArray();
      return View ('back-end.slidecate.edit',['data'=>$data, 'cat'=>$this->getCate()]);
   }
   public function postedit($id, Request $request)
   {
      $cat = Slidecate::find($id);
      $cat->cateid = $request->cateid;
      $cat->status = $request->status;

       $file_path = public_path('uploads/slidecate/').$cat->banner;
       if ($request->hasFile('image')) {
           if (file_exists($file_path))
           {
               unlink($file_path);
           }

           $f = $request->file('image')->getClientOriginalName();
           $filename = time().'_'.$f;
           $cat->image = $filename;
           $request->file('image')->move('uploads/slidecate/',$filename);
       }

      $cat->save();
      return redirect()->route('getslidecate')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

   }
   public function getdel($id)
   {
     Slidecate::find($id)->delete();
     return redirect()->route('getslidecate')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
   }
}
