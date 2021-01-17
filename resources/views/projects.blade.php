@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/projects.css">
    <title>Noé Terrier - Projects</title>
@endsection

@section('title')
    <div class="title">
        <i class="back-button"><a href="/portfolio"></a></i>
        <h1>//Projects</h1>
    </div>
@endsection

@section('content')
    <div class="ascii-art-project">
        <p class="description">ASCII ART<br>Le but de ce projet est de créer un logiciel pour convertir facilement des images en "art ascii". </p>
        <div class="pearl">
            <img src="/images/ascii_art/PEARL.png" alt="">
        </div>
    </div>
    <div class="interface">
        <ul class="infos">
            <li class = "info">
                <h2>Language<br>utilisé:</h2>
                <p>Java</p>
            </li>
            <li class = "info">
                <h2>Librairie<br>graphique:</h2>
                <p>JavaFX</p>
            </li>
            <li class = "info">
                <h2>github</h2>
                <a href="https://github.com/NoeTerrier/ASCII_ART">
                    <p>>github<</p>
                </a>
            </li>
        </ul>
        <img src="/images/ascii_art/interface.png" class = "interface-img">
    </div>
@endsection
