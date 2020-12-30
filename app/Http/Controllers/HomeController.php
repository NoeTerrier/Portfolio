<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function show() {

        $pageList = ["Gallery"  => "/portfolio/artwork",
                     "Project"  => "/portfolio/artwork",
                     "About"    => "/portfolio/about"];

        return view('index', compact('pageList'));
    }
}
