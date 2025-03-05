<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function submitform(Request $request)
    {
    
        $data = $request->all();
        return view('orderplaced', compact('data'));
    }
}
