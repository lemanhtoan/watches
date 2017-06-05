<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $new = \DB::table('products')
                ->where('products.status','=','1')
                ->where('products.isHome', '=', '1')
                ->select('products.*')
                ->orderBy('id', 'desc')
                ->paginate(12);
            \View::share ( 'new', $new );
        $this->middleware('guest');
    }
}
