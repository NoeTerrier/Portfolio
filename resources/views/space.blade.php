@extends('artworkLayout')

@section('head')

    <link rel="stylesheet" href="/css/space.css">
    <script src="/js/stars.js" charset="utf-8"></script>
    <title>Noé Terrier - Space</title>
@endsection

@section('content')
    <div class="stars" id="stars-background"></div>
    <div class="stars" id="stars-midle"></div>
    <div class="stars" id="stars-foreground"></div>
    <div class="intro">
        <p class="intro_text">Cette courte série de 3 illustrations représente des objets humains emblématiques de l'exploration spatiale et des progrès technologiques des 50 dernières années.</p>
    </div>


    @php ($i = 0)
    @foreach ($imgs as $img)
        <div class={{$i % 2 == 0 ? 'set' : 'set_reverse'}}>
            <img src={{$img->url}} alt={{$img->name}}>
            <div class="description">
                <p class="description-name">{{$img->name}}</p>
                <hr>
                <p>{{$img->description}}</p>
            </div>
        </div>
        @php ($i += 1)
    @endforeach
@endsection
