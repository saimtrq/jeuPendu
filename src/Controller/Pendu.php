<?php

namespace App\Controller;

class Pendu
{
    public function choisir_mot()
    {
        $mots = array(
            "chat",
            "soleil",
            "arbre",
            "maison",
            "fleur",
            "plage",
            "oiseau",
            "lune",
            "étoile",
            "route",
            "fraise",
            "montagne",
            "rivière",
            "pont",
            "pomme",
            "voiture",
            "école",
            "ballon",
            "livre",
            "nuage",
            "jardin",
            "arc-en-ciel",
            "café",
            "cœur",
            "chocolat",
            "cerise",
            "papillon",
            "nuage",
            "fenêtre",
            "porte",
            "poisson",
            "ciel",
            "chapeau",
            "chien",
            "chaton",
            "piano",
            "danse",
            "oiseau",
            "ballon",
            "forêt",
            "gâteau",
            "rue",
            "église",
            "vélo",
            "train",
            "avion",
            "bateau",
            "poème",
            "histoire",
            "musique",
            "amour",
            "bonheur",
            "rêve",
            "sourire",
            "rire",
            "pluie",
            "neige",
            "étoile filante",
            "hiver",
            "printemps",
            "été",
            "automne",
            "famille",
            "ami",
            "voyage",
            "sable",
            "pieds",
            "fenêtre",
            "porte",
            "ordinateur",
            "internet",
            "écran",
            "clavier",
            "souris",
            "table",
            "chaise",
            "lampe",
            "coussin",
            "couverture",
            "tapis",
            "cadeau",
            "carte",
            "lettre",
            "merci",
            "santé",
            "bonjour",
            "au revoir",
            "silence",
            "couleur",
            "joie",
            "tristesse",
            "douceur",
            "câlin",
            "bisou",
            "nuit",
            "jour",
            "moment",
            "instant",
            "tranquillité",
            "tendresse",
            "jouet",
            "musée",
            "photo",
            "parc",
            "rue",
            "manger",
            "boire",
            "dormir",
            "lire",
            "écrire",
            "dessiner",
            "jouer",
            "courir",
            "marcher",
            "écouter",
            "regarder",
            "sentir",
            "goûter",
            "aimer",
            "partager",
            "rêver",
            "penser",
            "espérer",
            "vivre",
            "grandir"
        );
        return $mots[array_rand($mots)];
    }

    private $nombreTentative, $motSecret, $tentativesRestantes;
    public function __construct()
    {
        $this->nombreTentative = 10;
        $this->motSecret = $this->choisir_mot();
        $this->tentativesRestantes = 9;

    }

    public function get_tentativesRestantes()
    {
        return $this->tentativesRestantes;
    }

    public function get_nombreTentative()
    {
        return $this->nombreTentative;
    }

    public function get_motSecret()
    {
        return $this->motSecret;
    }

}