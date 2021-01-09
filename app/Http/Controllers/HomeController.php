<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function show() {

        $pageList = ["Gallery"  => "/portfolio/artwork",
                     "Projects"  => "/portfolio/projects",
                     "About"    => "/portfolio/about"];

        return view('index', compact('pageList'));
    }
}
