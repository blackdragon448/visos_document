<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function __construct()
    {
        // $this->middlware('auth');
    }
    public function index()
    {
        return view('home');
    }
}
