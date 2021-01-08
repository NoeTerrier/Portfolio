@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/pixel_art.css">
    <script src="/js/squares.js" charset="utf-8"></script>
    <title>Noé Terrier - Pixel Art</title>
@endsection

@section('content')
    @for ($i = 0; $i < 30; $i++)
        <div class="square"></div>
    @endfor
    <div class="images">

        @foreach ($imgs as $img)
            <img src = {{$img->url}} alt={{$img->name}}>
            @if ($img->description != null)
                <div class="description">
                    <div class="content">
                        <div>
                            <h2>{{$img->name}}</h2>
                            <p>{{$img->description}}</p>
                        </div>
                        <i class="arrow"></i>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection

@section('img-instagram')
    <img class="logo-img" src="/resources/instagram_logo.svg" alt="instagram"></img>
@endsection
@section('img-mail')
    <img class="logo-img" src="/resources/mail.svg" alt="mail"></img>
@endsection
