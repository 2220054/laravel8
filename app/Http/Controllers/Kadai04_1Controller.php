<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Kadai04Request;

class Kadai04_1Controller extends Controller
{
    //
    public function index(){
        $courses = [
            [
            'id' => 1,
            'name' => 'IT開発エキスパート',
            ],
            [
            'id' => 2,
            'name' => 'IT開発研究',
            ],
            [
            'id' => 3,
            'name' => 'システムエンジニア',
            ],
            [
            'id' => 4,
            'name' => 'Webデザイン',
            ],
        ];
        return view('kadai04_1', compact('courses'));
    }

    public function post(Kadai04Request $request) {
        $result = [];
        $result['name']       = $request->input( 'name' );
        $result['student_id'] = $request->input( 'student_id' );
        $result['email']      = $request->input( 'email' );
        $result['course']     = $request->input( 'course' );
        $result['note']       = $request->input( 'note' );

        // CSRFトークンを破棄
        $request->session()->regenerateToken();

        return view('kadai04_2', compact('result'));
    }

}
