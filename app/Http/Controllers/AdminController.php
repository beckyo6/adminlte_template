<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admins.index');
    }

    public function create()
    {
        return view('admins.create');
    }
}
