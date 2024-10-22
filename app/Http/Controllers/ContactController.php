<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'isim' => 'required',
            'konu' => 'required',
            'mesaj' => 'required|min:10',
        ]);

        dd($validatedData);
    }
}
