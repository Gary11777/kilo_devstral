<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }
}