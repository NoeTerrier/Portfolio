<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show() {

        $pageList = ["Gallery"  => "/portfolio/artwork",
                     "Project"  => "/portfolio/artwork"];

        return view('about', compact('pageList'));
    }
}
