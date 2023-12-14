<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scan;

class ViewController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function layout()
    {
        return view('layout');
    }

    public function liste()
    {
        $scans = Scan::all();
        
        return view('liste', ['scans' => $scans]); 
    }

    public function create()
    {
        return view('form_create');
    }

    public function edit($id)
    {
        $scan = Scan::findOrFail($id);

        return view('edit', compact('scan'));
    }


}

