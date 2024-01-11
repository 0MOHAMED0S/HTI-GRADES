<?php

namespace App\Http\Controllers\grades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class grades extends Controller
{
    public function index()
    {
        return view('grades_pages.main.grades');
    }
}
