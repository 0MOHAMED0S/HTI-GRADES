<?php

namespace App\Http\Controllers\grades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ra3d extends Controller
{
    public function index()
    {
        return view('grades_pages.main.ra3d');
    }
}
