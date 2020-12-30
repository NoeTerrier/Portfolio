@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/888.css">
    <title>Noé Terrier - 888</title>
@endsection

@section('content')
    <div class="presentation">
        <h2>888</h2>
        <p class = "title-back"> “Ces séries d'illustrations partagent ma vision du monde scientifique, la poésie de ce que l'on sait et de ce que l'on cherche, la beauté que seuls les curieux remarquent.”</p>
    </div>

    <div class="images">
        @foreach ($series as $name => $imgs)
            <h2>{{$name}}</h2>
            <hr>
            <div class="image-table">
                @foreach ($imgs as $imgName => $text)
                    <div class="element">
                        <img loading = "lazy" src="{{'/images/'.$imgName.'.png'}}" alt="image">
                        <p class="description">{{$text}}</p>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
