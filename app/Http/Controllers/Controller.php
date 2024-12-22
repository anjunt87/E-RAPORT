<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    //
}

class PageController extends Controller
{
    public function index()
    {
        return view('dashboard'); // Pastikan nama view benar
    }

    // public function admin()
    // {
    //     return view('layout');
    //     // return view('admindashboard'); // Pastikan nama view benar
    // }
}
