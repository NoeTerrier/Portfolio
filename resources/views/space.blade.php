@extends('artworkLayout')

@section('head')

    <link rel="stylesheet" href="/css/space.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <script src="/js/stars.js" charset="utf-8"></script>
    <title>Space</title>
@endsection

@section('content')
    <div class="stars" id="stars-background"></div>
    <div class="stars" id="stars-midle"></div>
    <div class="stars" id="stars-foreground"></div>
    <div class="intro">
        <p class="intro_text">Cette courte série de 3 illustrations représente des objets humains emblématiques de l'exploration spatiale et des progrès technologiques des 50 dernières années.</p>
    </div>
    <div class="set">
        <img src="/images/curiosity_alpha.png" alt="curiosity">
        <div class="description">
            <p class="description-name">curiosity</p>
            <hr>
            <p>Atterissage sur Mars: 6 Août 2012<br>Curiosity est un rover effectuant des mesures sur Mars dans le but de déterminer si la vie est possible sur la planète rouge</p>
        </div>
    </div>
    <div class="set_reverse">
        <div class="description">
            <p class="description-name">ISS</p>
            <hr>
            <p>Mise en service: 1998<br>L'International Space Station est un laboratoire en orbite à 400km au dessus de la surface de la Terre. C'est le plus grand objet artificiel en orbite (110m de longueur). </p>
        </div>
        <img src="/images/ISS_alpha.png" alt="ISS">
    </div>
    <div class="set last">
        <img src="/images/voyager1_alpha.png" alt="voyager1">
        <div class="description">
            <p class="description-name">Voyager 1</p>
            <hr>
            <p>Lancement: 5 septembre 1977<br>Voyager 1 est l'une des deux sondes Voyager envoyées dans l'espace pour étudier les planètes du système solaire. C'est l'objets humain le plus éloigné de la Terre, à 22 milliards de kilomètres.</p>
        </div>
    </div>
@endsection
