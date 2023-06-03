<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    //
    public function home(Request $request) {
        dd($request["theme"]);
        return view('default.home');
    }
}
