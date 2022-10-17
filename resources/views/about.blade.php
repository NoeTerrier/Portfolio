@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/about.css">
    <script src="/js/particles.js" charset="utf-8"></script>
    <title>Noé Terrier - About</title>
@endsection

@section('title')
    <div class="title">
        <i class="back-button"><a href="/portfolio"></a></i>
        <h1>//About</h1>
    </div>
    <div class="particles" id = "particles-left"></div>
    <div class="particles" id = "particles-midle"></div>
    <div class="particles" id = "particles-right"></div>
@endsection

@section('content')
    <div class="content">
        <div class="presentation">
            <h2>Noé Terrier</h2>
            <p>Étudiant en informatique à l'EPFL - {{date_diff(date_create(date("M j, Y")), date_create("2001-11-30"))->format("%y")}} ans</p>
            <hr>
            <p>Bienvenue sur mon portfolio !<br><br>Je dessine de temps en temps (mais pas que) et ce site est un moyen pour moi d'expérimenter sur un nouveau support numérique.</p>
            <p></p>
        </div>

        <img class="main-img" src="/images/curiosity_alpha.png" alt="">
    </div>
@endsection
