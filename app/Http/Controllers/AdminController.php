<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('home');

    }
    function operator()
    {
        return view('home');

    } function keuangan()
    {
        return view('home');
    }
    function marketing()
    {
        return view('home');
    }
}
