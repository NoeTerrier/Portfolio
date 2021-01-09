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
        <span class = "line"></span>
        <p class="description">ASCII ART<br>Le but de ce projet est de créer un logiciel pour convertir facilement des images en "art ascii". </p>
        <div class="pearl">
            <img src="/images/ascii_art/PEARL.png" alt="">
        </div>
    </div>
    <div class="interface">
        <div class="infos">
            <p class = "info">Language utilisé:<br>Java</p>
            <p class = "info">Librairie graphique:<br>JavaFX</p>
            <p class = "info">
                <a href="https://github.com/NoeTerrier/ASCII_ART">
                    github<br>
                </a>
            </p>
        </div>
        <img src="/images/ascii_art/interface.png" class = "interface-img">
    </div>
@endsection
