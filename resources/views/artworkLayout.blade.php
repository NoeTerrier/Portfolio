<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&family=Roboto:wght@300;900&display=swap" rel="stylesheet">
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
                    <ul id="menu">
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
                                @section('img-instagram')
                                    <img class="logo-img" src="/resources/instagram_logo_white.svg" alt="instagram"></img>
                                @endsection
                                @yield('img-instagram')
                                <p>noe_terrier</p>
                            </div>
                        </a>
                    <li>
                        <a class = "contacts_link" href="mailto: terriernoe@gmail.com">
                            <div class="contacts_link">
                                @section('img-mail')
                                    <img class="logo-img" src="/resources/mail_white.svg" alt="mail"></img>
                                @endsection
                                @yield('img-mail')
                                <p>terriernoe@mail.com</p>
                            </div>
                        </a>
                </ul>
                <a href="/portfolio" class="signature">
                    @section('img-signature')
                        <img class="signature" src="/resources/signature_white.png" alt="signature">
                    @endsection
                    @yield('img-signature')
                </a>
            </div>
        </div>
    </body>
</html>
