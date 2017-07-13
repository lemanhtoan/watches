<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Partners;
use DateTime;

class PartnersController extends Controller
{
    public function getlist()
    {
        $data = Partners::all();
        return View ('back-end.partners.list',['data'=>$data]);
    }
    public function getadd()
    {
        $data = Partners::all();
        return View ('back-end.partners.add',['data'=>$data]);
    }
    public function postadd(Request $rq)
    {
        $item = new Partners();
        $item->name= $rq->name;
        $item->link= $rq->link;
        $item->isort= $rq->isort;
        if ($rq->hasFile('image')) {
        $f = $rq->file('image')->getClientOriginalName();
        $filename = time().'_'.$f;
        $item->image = $filename;
        $rq->file('image')->move('uploads/partners/',$filename);
    }
        $item->save();
        return redirect()->route('getpartners')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);

    }
    public function getedit($id)   {
        $cat = Partners::all();
        $data = Partners::findOrFail($id)->toArray();
        return View ('back-end.partners.edit',['cat'=>$cat,'data'=>$data]);
    }
    public function postedit($id, Request $request)
    {
        $cat = Partners::find($id);
        $cat->name = $request->name;
        $cat->link = $request->link;
        $cat->isort= $request->isort;
        $file_path = public_path('uploads/partners/').$cat->banner;
        if ($request->hasFile('image')) {
            if (file_exists($file_path))
            {
                unlink($file_path);
            }

            $f = $request->file('image')->getClientOriginalName();
            $filename = time().'_'.$f;
            $cat->image = $filename;
            $request->file('image')->move('uploads/partners/',$filename);
        }

        $cat->save();
        return redirect()->route('getpartners')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

    }
    public function getdel($id)
    {
        Partners::find($id)->delete();
        return redirect()->route('getpartners')->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
    }
}
