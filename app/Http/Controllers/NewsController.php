<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddNewsRequest;
use App\Http\Requests\EditNewsRequest;

use App\Http\Requests;
use App\News;
use App\Category;
use App\Groupnews;

use Auth;
use DateTime,File,Input,DB;

class NewsController extends Controller
{
    public function getlist()
    {
    	$data =  DB::table('news')
            ->leftjoin('groupnews', 'groupnews.id', '=', 'news.group')
            ->where('news.status','=','1')
            ->select('news.*', 'groupnews.name as groupName')
            ->orderBy('id', 'desc')
            ->paginate(20);
    	return view('back-end.news.list',['data'=>$data]);
    }
     public function dataConstant() {
        return array(
            'nhomtin' => Groupnews::where('status' ,'=' ,'1')->orderBy('name','asc')->lists( 'name', 'id')->toArray()
        );
    }
    public function getadd()
    {    	
		$cat= Category::where('parent_id',13)->get();

    	return view('back-end.news.add',['cat'=>$cat,'dataConstant'=>$this->dataConstant()]);
    }
    public function postadd(AddNewsRequest $rq)
    {
    	$n = new News();
    	$n->title = $rq->txtTitle;
    	$n->slug = str_slug($rq->txtTitle,'-');
    	$n->author = $rq->txtAuth;
    	$n->tag = $rq->txttag;
    	$n->status = $rq->slstatus;
    	$n->source = $rq->txtSource;
    	$n->intro = $rq->txtIntro;
    	$n->full = $rq->txtFull;
    	$n->cat_id = $rq->sltCate;
    	$n->user_id = Auth::guard('admin')->user()->id;
    	$n->created_at = new datetime;
        $n->group = $rq->group;
if ($rq->hasFile('txtimg')) {
    	$f = $rq->file('txtimg')->getClientOriginalName();
    	$filename = time().'_'.$f;
    	$n->images = $filename;    	
    	$rq->file('txtimg')->move('uploads/news/',$filename);
}
    	$n->save();
    	return redirect('admin/news')
      	->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);    	
    }
    public function getedit($id)
    {	$cat= Category::where('parent_id',13)->get();
    	$n = News::where('id',$id)->first();
    	return view('back-end.news.edit',['data'=>$n,'cat'=>$cat,'dataConstant'=>$this->dataConstant()]);
    }
    public function postedit(EditNewsRequest $rq,$id)
    {
    	$n = News::find($id);
    	$n->title = $rq->txtTitle;
    	$n->slug = str_slug($rq->txtTitle,'-');
    	$n->author = $rq->txtAuth;
    	$n->tag = $rq->txttag;
    	$n->status = $rq->slstatus;
    	$n->source = $rq->txtSource;
    	$n->intro = $rq->txtIntro;
    	$n->full = $rq->txtFull;
    	$n->cat_id = $rq->sltCate;
         $n->group = $rq->group;
    	$n->user_id = Auth::guard('admin')->user()->id;
    	$n->created_at = new datetime;

    	$file_path = public_path('uploads/news/').$n->images;
    	 if ($rq->hasFile('txtimg')) {
            if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            
            $f = $rq->file('txtimg')->getClientOriginalName();
            $filename = time().'_'.$f;
            $n->images = $filename;       
            $rq->file('txtimg')->move('uploads/news/',$filename);
        }

    	$n->save();
    	return redirect('admin/news')
      	->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công !']);
    }

    public function getdel($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('admin/news')
         ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã xóa !']);
    }
}
