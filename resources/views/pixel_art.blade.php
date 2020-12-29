<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/artwork.css">
        <link rel="stylesheet" href="/css/pixel_art.css">
        <script src="/js/setNaviguationMenu.js" charset="utf-8"></script>
        <script src="/js/squares.js" charset="utf-8"></script>
        <title>Pixel Art</title>
    </head>
    <body>
        <div class="main">

            @for ($i = 0; $i < 30; $i++)
                <div class="square"></div>
            @endfor

            <header>
                <div class="title">
                    <i class="back-button"><a href="/portfolio/artwork"></a></i>
                    <h1>//Artwork</h1>
                </div>
                <ul id="menu" data-location = "pixel art"></ul>
            </header>

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
            <div class="end">
                <ul id="contacts">
                    <li>
                        <a class = "" href="https://www.instagram.com/noe_terrier/">
                            <div class="contacts_link">
                                <img class="logo-img" src="/resources/instagram_logo.svg" alt="instagram"></img>
                                <p>noe_terrier</p>
                            </div>
                        </a>
                    <li>
                        <a class = "contacts_link" href="mailto: terriernoe@gmail.com">
                            <div class="contacts_link">
                                <img class="logo-img" src="/resources/mail.svg" alt="mail"></img>
                                <p>terriernoe@mail.com</p>
                            </div>
                        </a>
                </ul>
                <a href="/portfolio" class="signature"><img class="signature" src="/resources/signature.png" alt="signature"></a>
            </div>
        </div>
    </body>
</html>
