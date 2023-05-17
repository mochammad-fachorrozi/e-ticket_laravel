<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Ji Cinema';
        return view('frontend.index', [
            'title' => $title,
        ]);
    }
}
