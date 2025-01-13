<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class SiteController extends Controller
{

    public function home(): View
    {
        return view('home');
    }

    public function homev2(): View
    {
        return view('homev2');
    }

    public function contact(): View
    {
        return view('contact');
    }
}
