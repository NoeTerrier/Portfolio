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
        <img class="titan" src = "/images/Titan.png" alt="titan">
        <div class="description">
            <div class="content">
                <div>
                    <h2>Titan</h2>
                    <p>Titan est la plus grande lune de Saturne. Elle possède des lacs de méthane liquide et une atmostphère dense et riche en méthane, ce qui lui donne une teinte orangée.</p>
                </div>
                <i class="arrow"></i>
            </div>
        </div>

        <img loading = "lazy" src="/images/chevalier.png" alt="curiosity">
        <img loading = "lazy" src="/images/oiseau.png" alt="titan">
        <img loading = "lazy" src="/images/oiseau.png" alt="titan">
    </div>
@endsection
