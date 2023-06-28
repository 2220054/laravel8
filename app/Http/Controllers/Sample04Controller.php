<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Sample04Request;

class Sample04Controller extends Controller
{
    //
    public function index(){
        $result = [];
        $result['user_name'] = "";
        $result['email'] = "";
        return view('sample04', compact('result'));
    }

    public function post(Sample04Request $request) {
        $result = [];
        $result['user_name']       = $request->input( 'user_name' );
        $result['email']      = $request->input( 'email' );


        // CSRFトークンを破棄
        $request->session()->regenerateToken();

        return view('sample04', compact('result'));
    }
}
