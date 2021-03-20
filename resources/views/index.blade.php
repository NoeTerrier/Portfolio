@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/index.css">
    <script src="/js/particles.js" charset="utf-8"></script>
    <script src="/js/carousel.js" charset="utf-8"></script>
    <title>Noé Terrier</title>
@endsection

@section('title')
    <div>
        <div class="title">
            <h1>//Noé Terrier</h1>
        </div>
    </div>
    <div class="particles" id = "particles-left"></div>
    <div class="particles" id = "particles-midle"></div>
    <div class="particles" id = "particles-right"></div>
@endsection

@section('content')
    <div class="content-div">
        {{-- <button type="button" name="previous-button" id="previous-button"></button> --}}
        <div class="slider">
                <a href="portfolio/artwork">
                <div id = "slides">
                    <div class = "slide"><img id = "first"></div>
                    <div class = "slide"><img id = "next"></div>
                </div>
            </a>
        </div>
        {{-- <button type="button" name="next-button" id="next-button"></button> --}}
    </div>
@endsection
