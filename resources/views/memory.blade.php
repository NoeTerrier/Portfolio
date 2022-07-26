@extends('artworkLayout')

@section('head')
    <script src="/js/flipCards.js"></script>
    <link rel="stylesheet" href="/css/memory.css">
    <title>Noé Terrier - Memory</title>
@endsection

@section('title')
    <div class="title">
        <i class="back-button"><a href="/portfolio"></a></i>
        <h1>//Memory</h1>
    </div>
@endsection

@section('content')
    <div class="presentation">
        <div class="presentation-text">
            <div>
                <h3>Memory</h3>
                <p class = "title-back"> Un projet en colaboration avec 
                    <a href="https://vipaire.fr/">Chloé Dechavanne</a> 
                    qui illustre 24 personnalités historiques inspirantes dans le format d'un jeu de memory.
                    <br><br>
                    Le projet est constitué de deux séries de 12 portaits chacunes. 12 hommes ont été dessinés par moi et 12 femmes par Chloé.
                </p>
            </div>
        </div>
        <img src="/images/memory/all_mockup.jpg">
    </div>

    <div class="images">
        <div class="image-table">
            @foreach ($imgs as $img)
                <div class="element">
                    <h3>{{$img->name}}</h3>
                    <div class="card"> 
                        <img class = "back-card" src="/images/memory/card_back.jpg">
                        <img class = "front-card" loading = "lazy" src={{url($img->url)}} alt={{$img->name}}>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
