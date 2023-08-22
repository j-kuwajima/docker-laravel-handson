<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberregistController extends Controller
{
    // index メソッド
    public function index()
    {
        return view('auth.memberregist');
    }
}
