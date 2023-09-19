<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    function index()
    {
        $data = [1, 2, 3, 5, 4, 6];
        $age = '123';
        return view('site1.index', compact('data', 'age'));
    }

    function contact()
    {
        return 'contact';
    }

    function about()
    {
        return 'about';
    }

    function service()
    {
        return 'service';
    }
}
