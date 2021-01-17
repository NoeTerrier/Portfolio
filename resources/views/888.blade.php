@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/888.css">
    <title>Noé Terrier - 888</title>
@endsection

@section('content')
    <div class="presentation">
        <h3>888</h3>
        <p class = "title-back"> “Ces séries d'illustrations partagent ma vision du monde scientifique, la poésie de ce que l'on sait et de ce que l'on cherche, la beauté que seuls les curieux remarquent.”</p>
    </div>

    <div class="images">
        @foreach ($series as $serieName => $imgs)
            <h3>{{$serieName}}</h3>
            <hr>
            <div class="image-table">
                @foreach ($imgs as $img)
                    <div class="element">
                        <img loading = "lazy" src={{$img->url}} alt={{$img->name}}>
                        <p class="description">
                        @php ($descriptions = explode('\n', $img->description))
                            @foreach ($descriptions as $text)
                                {{$text}}
                                <br>
                            @endforeach
                        </p>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
