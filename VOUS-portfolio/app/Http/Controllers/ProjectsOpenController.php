<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsOpenController extends Controller
{
    public function index()
    {
        return view('projects_open');
    }
}
