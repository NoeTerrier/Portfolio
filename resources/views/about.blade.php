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
            <p>Étudiant en informatique à l'EPFL - 19 ans</p>
            <hr>
            <p>J'aime apprendre et exprérimenter pour créer.<br>Autodidacte, j'ai appris le dessin digital sur internet et en suivant des artistes professionels.</p>
            <p>J'utilise plusieurs techniques: digital painting, le dessin vectoriel, le pixel art, la programmation, ... <br>C'est important d'avoir des approches différentes pour créer des choses.</p>
            <p>Je m'inspire principalement des jeux vidéos, de la science fiction, et du monde scientifique: ce sont des univers très riches.</p>
        </div>

        <img class="main-img" src="/images/curiosity_alpha.png" alt="">
    </div>
@endsection
