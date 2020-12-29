<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/artwork.css">
        <link rel="stylesheet" href="/css/888.css">
        <script src="/js/setNaviguationMenu.js" charset="utf-8"></script>
        <title>888</title>
    </head>
    <body>
        <div class="main">
            <header>
                <div class="title">
                    <i class="back-button"><a href="/portfolio/artwork"></a></i>
                    <h1>//Artwork</h1>
                </div>
                <ul id="menu" data-location = "888"></ul>
            </header>
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
            </div>
        </div>
    </body>
</html>
