<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return Inertia::render('Welcome');
    }

    public function about()
    {
        return Inertia::render('AboutUs');
    }

    public function help()
    {
        return Inertia::render('Help');
    }

    public function demo()
    {
        return Inertia::render('Demo');
    }
}
