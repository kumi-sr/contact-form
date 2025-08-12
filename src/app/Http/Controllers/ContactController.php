<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('contact', compact('categories'));
    }

    public function confirm(Request $request)
    {
        $contacts=$request->all();
        return view('confirm', compact('contacts'));
    }
}
