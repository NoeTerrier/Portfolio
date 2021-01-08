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
            <p>J'aime apprendre et exprérimenter pour créer.<br>Je suis autodidacte: j'ai appris le dessin digital sur internet, et en observant les techniques et les réalistation d'artistes confirmés et d'étudiants en art.</p>
            <p>J'utilise plusieurs techniques: digital painting, le dessin vectoriel, le pixel art, la programmation, etc. J'aime avoir des approches différentes pour créer des visuels.</p>
            <p>Mes influences sont principalement le monde du jeu vidéo, la science fiction qu'elle soit cinématographique ou littéraire, et le monde scientifique.</p>
        </div>

        <img class="main-img" src="/images/curiosity_alpha.png" alt="">
    </div>
@endsection

@section('img-instagram')
    <img class="logo-img" src="/resources/instagram_logo.svg" alt="instagram"></img>
@endsection
@section('img-mail')
    <img class="logo-img" src="/resources/mail.svg" alt="mail"></img>
@endsection
@section('img-signature')
    <img class="signature" src="/resources/signature.png" alt="signature">
@endsection
