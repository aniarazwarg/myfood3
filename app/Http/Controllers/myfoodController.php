<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myfoodController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function login()
    {
        return view ('login');
    }

    public function validar()
    {
        return view ('validar');
    }

    public function restaurantes()
    {
        return view ('restaurantes');
    }

    public function pet()
    {
        return view ('pet');
    }

    public function drink()
    {
        return view ('drink');
    }
}
