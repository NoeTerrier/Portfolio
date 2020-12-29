<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Project888Controller extends Controller
{
    public function show() {
        $series = ['amour chimique'     => ["chevalier" => "\"On mourra toutes les nuits l'un dans les bras de l'autre, pendant que l'amour soufflera les braises de nos esprits inflammables.\"",
                                            "fruit" => "Recette de l'amour: \n-dopamine \n-phényléthylamine \n-endorphines \n-ocytocine \n-adrénaline \n-noréphédrine \n-quelqu'un de bien.",
                                            "card" => "L'effet de l'amour sur le cerveau est semblable à celui que procure une drogue. Aimer libère de la dopamine dans le cerveau, qui active notre système de récompense et nous commande à en vouloir toujours plus."],

                   'gravité'            => ["chevalier" => "Les pulsars sont des objets qui tournent vite. Très vite. Plusieurs centaines de rotations par seconde. Le plus rapide connue est une étoile à neutron de 16km de rayon et 3 masses solaires qui effectue 716 rotations par secondes. De tels objets ont la propriété de faire vibrer l'espace et de nous faire parvenir des ondes dont l'existence a été prédite en 1916 par Albert Einstein: les ondes gravitationnelles.",
                                            "fruit" => "Pour qu'un objet quitte définitivement l'attraction gravitationnelle d'un astre, il faut qu'il atteigne une vitesse limite: la vitesse de libération. Sur Terre cette vitesse à atteindre pour se perdre à jamais dans l'espace sans jamais revenir est d'environ 11.2km/s. Sur un trou noir, la vitesse de libération est infinie: rien ne peut en sortir, ni même la lumière.",
                                            "card"  => "Gargantuesques centres des mondes ambulants dans l'espace, déchirant les limites de l'espace et du temps, ils grossissent en cachant la lumière derrière leurs horizons invisibles."],

                   'longueur d\'onde'   => ["chevalier" => "Il y a 5 millions d'années, un photon naît au cœur d'une étoile, trace péniblement son chemin vers l'atmosphère et, une fois arrivé à l'air libre, s'échappe dans le vide, sans que rien ne puisse un jour le rattraper. Il voyage des milliers d'années dans cet univers sombre, dévié par les astres, suivant les géodésiques. Il traverse galaxies, nébuleuses, systèmes solaires et fini son chemin sur la rétine de l’œil d’un enfant. Une image du passé qui brille dans un ciel constellé de tâches: des photons perdus suivant leurs chemins vers nos yeux.",
                                            "fruit" => "A l'échelle microscopique, la matière commence à se comporter à la fois comme un corps et comme une onde, étant partout à la fois quand on ne la surveille pas et reprenant sagement sa place quand on l'observe. Elle n'est ni l'un, ni l'autre, mais un mélange des deux: ce phénomène se nomme \"la dualité onde-corpuscule\"",
                                            "card" => "La couleur est le plus beau trait d'union entre la science et l'art. \n- Bernard Valeur"],

                   'vie'                => ["chevalier" => "La diversité biologique que l'on connaît sur Terre est due au mécanisme d'évolution naturelle. Les organismes naissent avec des mutations, les mutations augmentant les chances de survie sont sélectionnées naturellement par l'environnement puis persistent dans les gênes des organismes de la prochaine génération.",
                                            "fruit" => "recommence le cycle, la mère donne l'enfant, l'enfant devient mère, et ainsi",
                                            "card" => "recommence le cycle, la mère donne l'enfant, l'enfant devient mère, et ainsi"]];

        return view('888', compact('series'));
    }
}
