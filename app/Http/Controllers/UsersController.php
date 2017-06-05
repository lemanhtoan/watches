<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
   public function getlist()
   {
   		$data = User::paginate(10);
    	return view('back-end.users.list',['data'=>$data]);
   }
   public function getedit($id)
   {
       User::where('id',$id)->update(['status' => 1]);
       $data = User::paginate(10);
       return view('back-end.users.list',['data'=>$data]);
   }
}
