<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="og:description" content="Portfolio de Noé Terrier. @noe_terrier terriernoe@gmail.com ">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;500;900&family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="/resources/favicon.ico" />

        @yield('head')
    </head>
    <body>
        <div class="main">
            <header>
                @section('title')
                    <div class="title">
                        <i class="back-button"><a href="/portfolio/artwork"></a></i>
                        <h1>//Artwork</h1>
                    </div>
                @endsection
                @yield('title')
                <div class="menu-div">
                    <ul class="menu">
                        @php ($i = 0)
                        @foreach ($pageList as $name => $url)
                            @php ($i = $i + 1)
                            <li style = "animation: fromDown 0.5s both; animation-delay: {{($i * 0.2) . 's'}}">
                                <a class="menu-item" href={{$url}}>{{$name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </header>

            @yield('content')

            <div class="end">
                <ul id="contacts">
                    <li>
                        <a class = "" href="https://www.instagram.com/noe_terrier/">
                            <div class="contacts_link">
                                    <span class="logo-img logo-insta"></span>
                                <p>noe_terrier</p>
                            </div>
                        </a>
                    <li>
                        <a class = "contacts_link" href="mailto: noeterrier@proton.me">
                            <div class="contacts_link">
                                    <span class="logo-img logo-mail"></span>
                                <p>noeterrier@proton.me</p>
                            </div>
                        </a>
                </ul>
                <a href="/portfolio" class="signature">
                    <span class="img-signature"></span>
                </a>
            </div>
        </div>
    </body>
</html>
