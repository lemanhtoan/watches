<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Settings;
use DateTime;

class SettingsController extends Controller
{
   public function getlist()
   {
		$data = Settings::all();
        $dataLogo = Settings::where('name', 'logo')->get(['content'])->toArray();
		return View ('back-end.settings.list',['data'=>$data, 'dataLogo'=> $dataLogo]);
   }

   public function postsettLogo(Request $rq) {
       $check = Settings::where('name', 'logo')->lists( 'content', 'id')->toArray();
       if ($check) {
           $checkId = key($check);
           $checkContent = array_values($check)[0];
           $cat = Settings::find($checkId);
           $cat->name = 'logo';
           $file_path = public_path('uploads/commons/').$checkContent;
           if ($rq->hasFile('logo')) {
               if (file_exists($file_path))
               {
                   unlink($file_path);
               }

               $f = $rq->file('logo')->getClientOriginalName();
               $filename = time().'_'.$f;
               $cat->content = $filename;
               $rq->file('logo')->move('uploads/commons/',$filename);
           }
           $cat->save();

       } else {
           $item = new Settings();
           $f = $rq->file('logo')->getClientOriginalName();
           $filename = time().'_'.$f;
           $item->name = 'logo';
           $item->content = $filename;
           $rq->file('logo')->move('uploads/commons/',$filename);
           $item->save();
       }

       $dataLogo = Settings::where('name', 'logo')->get(['content'])->toArray();
       return View ('back-end.settings.list',['dataLogo'=>$dataLogo]);
   }

}
