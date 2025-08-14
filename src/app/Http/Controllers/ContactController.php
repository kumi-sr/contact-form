<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('contact', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contacts=$request->all();
        return view('confirm', compact('contacts'));
    }

    public function store(ContactRequest $request)
    {
        Contact::create($contact);
        return view('thanks');
    }
}
