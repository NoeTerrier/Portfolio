@extends('artworkLayout')

@section('head')
    <link rel="stylesheet" href="/css/graphicDesign.css">
    <title>Noé Terrier - Design Graphique</title>
@endsection

@section('content')
    <div class="section">
        <div class="case">
            <div class="presentation">
                <h2>PT* loritz</h2>
                <p class="description">
                    L'ayant déjà fait, on m'a proposé de refaire le logo pour la classe
                    préparatoire aux grandes écoles PT* du lycée Loritz à Nancy.
                    J'ai donc proposé deux versions en m'inspirant de mon ancien travail,
                    et c'est celle de droite qui fût retenue.
                </p>
                <h3 class="description">KRITA | GIMP | INSKCAPE</h3>
            </div>
        </div>

        <div class="case">
            <img class = "img-loritz" src="/images/dg/pull_PT.jpg">
            <img class = "img-loritz up" src="/images/dg/loritz_mockup.jpg">
        </div>
    </div>

    <div class="section light">
        <div class="case">
            <div class="imgs-enim">
                <img class = "img-enim foreground-left" src="/images/dg/enim_1.jpg">
                <img class = "img-enim foreground-right" src="/images/dg/enim_2.jpg">
                <img class = "img-enim main-img" src="/images/dg/enim_3.jpg">
            </div>
        </div>
        <div class="case">
            <div class="presentation">
                <h2>Enim</h2>
                <p>
                    Voici une proposition de logo pour l'Ecole Nationale d'Ingénieurs de Metz.
                    Le symbole de la ville de Metz est le Graoully, un dragon légendaire qui
                    aurait dévasté la ville au Moyen-Age.
                </p>
                <h3>INKSCAPE</h3>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="case">
            <div class="presentation">
                <h2>projet DUT</h2>
                <p class="description">
                    Un ami m'a commandé un logo pour son projet de DUT agronomie portant sur la protection des espèces amphibiennes.
                    <a href="https://www.facebook.com/finbienlesamphibiens/">Allez-voir ça!</a>
                </p>
                <h3 class="description">KRITA | INSKCAPE</h3>
            </div>
        </div>
        <div class="case">
            <img class = "img-amphibien" src="/images/dg/amphi.png">
        </div>
    </div>


    <div class="section light">
        <div class="case">
            <img class = "img-couture" src="/images/dg/logo_couture_planche.jpg">
        </div>
        <div class="case">
            <div class="presentation">
                <h2>Méthode de travail</h2>
                <p>Je fais parfois mes croquis sur Krita et je créer le rendu final sur inkscape,
                    c'est un logiciel de création vectoriel gratuit et open source très pratique
                    pour débuter.
                </p>
                <h3>INKSCAPE</h3>
            </div>
        </div>
    </div>

@endsection
