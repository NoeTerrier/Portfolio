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
            <div class="image-table">
                @foreach ($series as $name => $imgs)
                    @foreach ($imgs as $img)
                        <div class="element">
                            <h2>{{$name}}</h2>
                            <img src="{{'/Images/'.$img.'.png'}}" alt="image">
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </body>
</html>
