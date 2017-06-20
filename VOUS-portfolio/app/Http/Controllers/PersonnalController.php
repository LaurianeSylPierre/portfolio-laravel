<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnalController extends Controller
{
    public function index()
    {
        return view('personnal');
    }
}
