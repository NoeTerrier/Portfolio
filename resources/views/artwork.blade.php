@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/artwork.css">
    <script src="/js/imgSelection.js"></script>
    <title>Noé Terrier - Artwork</title>
@endsection

@section('title')
    <div class="title">
        <i class="back-button"><a href="/portfolio"></a></i>
        <h1>//Artwork</h1>
    </div>
@endsection

@section('content')
    <div class="image-table">
        @foreach ($imgsByColumns as $column => $imgs)
            <div class="column" id = {{$column}}>
                @foreach ($imgs as $img)
                    <img src="{{'/images/'.$img.'.png'}}" alt="image">
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
