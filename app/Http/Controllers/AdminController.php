<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
class AdminController extends Controller
{
    public function index(Request $request){
        
        
        if($request->post()){
            // dd($request->username);
            if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
                return redirect()->intended('/');
            }
        }

        return view('admin.admin-login');
    }
}
