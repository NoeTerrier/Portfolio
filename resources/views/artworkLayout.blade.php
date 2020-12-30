<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/artwork.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&family=Roboto:wght@300;900&display=swap" rel="stylesheet">
        <script src="/js/setNaviguationMenu.js" charset="utf-8" defer></script>

        @yield('head')
    </head>
    <body>
        <div class="main">
        <header>
            <div class="title">
                <i class="back-button"><a href="/portfolio/artwork"></a></i>
                <h1>//Artwork</h1>
            </div>
            <ul id="menu"></ul>
        </header>

            @yield('content')

            <div class="end">
                <ul id="contacts">
                    <li>
                        <a class = "" href="https://www.instagram.com/noe_terrier/">
                            <div class="contacts_link">
                                <img class="logo-img" src="/resources/instagram_logo_white.svg" alt="instagram"></img>
                                <p>noe_terrier</p>
                            </div>
                        </a>
                    <li>
                        <a class = "contacts_link" href="mailto: terriernoe@gmail.com">
                            <div class="contacts_link">
                                <img class="logo-img" src="/resources/mail_white.svg" alt="mail"></img>
                                <p>terriernoe@mail.com</p>
                            </div>
                        </a>
                </ul>
                <a href="/portfolio" class="signature"><img class="signature" src="/resources/signature_white.png" alt="signature"></a>
            </div>
        </div>
    </body>
</html>
