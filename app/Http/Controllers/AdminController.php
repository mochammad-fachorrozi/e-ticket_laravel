<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Ji Cinema';
        return view('backend.index', [
            'title' => $title,
        ]);
    }
}
