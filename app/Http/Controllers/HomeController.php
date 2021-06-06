<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function formula1()
    {
        return view('pages.formula1');
    }

    public function formula2()
    {
        return view('pages.formula2');
    }
}
