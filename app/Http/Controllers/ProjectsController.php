<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{

public function show()
{
    $pageList = ["Gallery"  => "/portfolio/artwork",
                 "About"  => "/portfolio/about"];

    return view('projects', compact('pageList'));
}

}
