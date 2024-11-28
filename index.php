<?php

// On charge les classes grâce à Composer
require 'vendor/autoload.php';

// On importe les classes nécessaires
use Zakary\Poo\Card;
use Zakary\Poo\ListCards;

// On crée une liste de cartes
$listCards = new ListCards();

// Demande à l'utilisateur combien de cartes il veut créer
echo "Combien de cartes voulez-vous ajouter ?";
$nbCards = readline();

if ($nbCards <= 0) {
    // Si le nombre est invalide, on arrête tout
    echo "Vous devez ajouter au moins une carte";
    exit;
}

// On boucle pour ajouter le nombre de cartes demandé
for ($i = 1; $i <= $nbCards; $i++) {
    echo "Entrez une question pour la carte $i :";
    $question = readline(); // On récupère la question

    echo "Entrez une réponse pour la carte $i :";
    $answer = readline(); // On récupère la réponse

    // On crée une carte avec question + réponse et on l'ajoute à la liste
    $listCards->addCard(new Card($question, $answer));
}

// Affiche toutes les cartes ajoutées
echo "Listing des cartes contenues dans la liste : " . PHP_EOL;
$listCards->printCards();
