<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Settings;
use DateTime;

class SettingsController extends Controller
{
  public function getData() {
    $data = Settings::all();
    $dataLogo = Settings::where('name', 'logo')->get(['content'])->toArray();
    $dataAddress = Settings::where('name', 'diachi')->get(['content'])->toArray();
    $dataWelcome = Settings::where('name', 'welcome')->get(['content'])->toArray();
    $dataCopyright = Settings::where('name', 'copyright')->get(['content'])->toArray();
    $dataLogoPay = Settings::where('name', 'logopay')->get(['content'])->toArray();
    $dataSocial = Settings::where('name', 'social')->get(['content'])->toArray();
    $dataFooter = Settings::where('name', 'footerLink')->get(['content'])->toArray();
    $dataBuyok = Settings::where('name', 'buyok')->get(['content'])->toArray();
    $dataHotline = Settings::where('name', 'hotline')->get(['content'])->toArray();
      $dataIntro = Settings::where('name', 'intro')->get(['content'])->toArray();
    return ['data'=>$data, 
      'dataLogo'=> $dataLogo,
      'dataAddress' => $dataAddress,
      'dataWelcome' => $dataWelcome,
      'dataCopyright' => $dataCopyright,
      'dataLogoPay' => $dataLogoPay,
      'dataSocial' => $dataSocial,
      'dataFooter' => $dataFooter,
      'dataBuyok' => $dataBuyok,
        'dataHotline' => $dataHotline,
        'dataIntro' => $dataIntro
    ];
  }
   public function getlist()
   {
		return View ('back-end.settings.list', $this->getData());
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

       return redirect()->route('getsettings');
   }

   public function settDiachichung(Request $rq) {
       $check = Settings::where('name', 'diachi')->lists( 'content', 'id')->toArray();
       if ($check) {
           $checkId = key($check);
           $checkContent = array_values($check)[0];
           $cat = Settings::find($checkId);
           $cat->name = 'diachi';
           $cat->content = $rq->diachi;
           $cat->save();

       } else {
           $item = new Settings();
           $item->name = 'diachi';
           $item->content = $rq->diachi;
           $item->save();
       }

       return redirect()->route('getsettings');
   }

   public function settWelcome(Request $rq) {
    $check = Settings::where('name', 'welcome')->lists( 'content', 'id')->toArray();
       if ($check) {
           $checkId = key($check);
           $checkContent = array_values($check)[0];
           $cat = Settings::find($checkId);
           $cat->name = 'welcome';
           $cat->content = $rq->welcome;
           $cat->save();

       } else {
           $item = new Settings();
           $item->name = 'welcome';
           $item->content = $rq->welcome;
           $item->save();
       }

       return redirect()->route('getsettings');
   }
   
   public function settCopyright(Request $rq) {
    $check = Settings::where('name', 'copyright')->lists( 'content', 'id')->toArray();
       if ($check) {
           $checkId = key($check);
           $checkContent = array_values($check)[0];
           $cat = Settings::find($checkId);
           $cat->name = 'copyright';
           $cat->content = $rq->copyright;
           $cat->save();

       } else {
           $item = new Settings();
           $item->name = 'copyright';
           $item->content = $rq->copyright;
           $item->save();
       }

       return redirect()->route('getsettings');
   }

   public function settLogoPay(Request $rq) {
       $check = Settings::where('name', 'logopay')->lists( 'content', 'id')->toArray();
       if ($check) {
           $checkId = key($check);
           $checkContent = array_values($check)[0];
           $cat = Settings::find($checkId);
           $cat->name = 'logopay';
           $file_path = public_path('uploads/commons/').$checkContent;
           if ($rq->hasFile('logopay')) {
               if (file_exists($file_path))
               {
                   unlink($file_path);
               }

               $f = $rq->file('logopay')->getClientOriginalName();
               $filename = time().'_'.$f;
               $cat->content = $filename;
               $rq->file('logopay')->move('uploads/commons/',$filename);
           }
           $cat->save();

       } else {
           $item = new Settings();
           $f = $rq->file('logopay')->getClientOriginalName();
           $filename = time().'_'.$f;
           $item->name = 'logopay';
           $item->content = $filename;
           $rq->file('logopay')->move('uploads/commons/',$filename);
           $item->save();
       }

       return redirect()->route('getsettings');
   }

   public function settSocial(Request $rq) {
    $check = Settings::where('name', 'social')->lists( 'content', 'id')->toArray();
       if ($check) {
           $checkId = key($check);
           $checkContent = array_values($check)[0];
           $cat = Settings::find($checkId);
           $cat->name = 'social';
           $cat->content = $rq->social;
           $cat->save();

       } else {
           $item = new Settings();
           $item->name = 'social';
           $item->content = $rq->social;
           $item->save();
       }

       return redirect()->route('getsettings');
   }

   public function settFooterlink(Request $rq) {
    $check = Settings::where('name', 'footerLink')->lists( 'content', 'id')->toArray();
       if ($check) {
           $checkId = key($check);
           $checkContent = array_values($check)[0];
           $cat = Settings::find($checkId);
           $cat->name = 'footerLink';
           $cat->content = $rq->footerLink;
           $cat->save();

       } else {
           $item = new Settings();
           $item->name = 'footerLink';
           $item->content = $rq->footerLink;
           $item->save();
       }

       return redirect()->route('getsettings');
   }

   public function settMessage(Request $rq) {
    $check = Settings::where('name', 'buyok')->lists( 'content', 'id')->toArray();
       if ($check) {
           $checkId = key($check);
           $checkContent = array_values($check)[0];
           $cat = Settings::find($checkId);
           $cat->name = 'buyok';
           $cat->content = $rq->buyok;
           $cat->save();

       } else {
           $item = new Settings();
           $item->name = 'buyok';
           $item->content = $rq->buyok;
           $item->save();
       }

       return redirect()->route('getsettings');
   }

    public function settHotline(Request $rq) {
        $check = Settings::where('name', 'hotline')->lists( 'content', 'id')->toArray();
        if ($check) {
            $checkId = key($check);
            $checkContent = array_values($check)[0];
            $cat = Settings::find($checkId);
            $cat->name = 'hotline';
            $cat->content = $rq->hotline;
            $cat->save();

        } else {
            $item = new Settings();
            $item->name = 'hotline';
            $item->content = $rq->hotline;
            $item->save();
        }

        return redirect()->route('getsettings');
    }

    public function settIntro(Request $rq) {
        $check = Settings::where('name', 'intro')->lists( 'content', 'id')->toArray();
        if ($check) {
            $checkId = key($check);
            $checkContent = array_values($check)[0];
            $cat = Settings::find($checkId);
            $cat->name = 'intro';
            $cat->content = $rq->intro;
            $cat->save();

        } else {
            $item = new Settings();
            $item->name = 'intro';
            $item->content = $rq->intro;
            $item->save();
        }

        return redirect()->route('getsettings');
    }


}
