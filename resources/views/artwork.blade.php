<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/artwork.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&family=Roboto:wght@300;900&display=swap" rel="stylesheet">
        <script src="/js/imgSelection.js"></script>
        <script src="/js/setNaviguationMenu.js" charset="utf-8"></script>
        <title>Artwork</title>
    <body>
        <div class="main">
            <header>
                <div>
                    <div class="title">
                        <i class="back-button"><a href="/portfolio"></a></i>
                        <h1>//Artwork</h1>
                    </div>
                    <ul id="menu" data-location = "artwork"></ul>
                </div>
            </header>
            <div class="image-table">
                @foreach ($imgsByColumns as $column => $imgs)
                <div class="column" id = {{$column}}>
                    @foreach ($imgs as $img)
                        <img src="{{'/images/'.$img.'.png'}}" alt="image">
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
