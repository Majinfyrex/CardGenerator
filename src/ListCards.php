<?php

namespace Zakary\Poo;

// La classe ListCards gère une collection de cartes
class ListCards {
    // Tableau privé qui contient toutes les cartes ajoutées
    private array $listCards = [];

    // Méthode pour ajouter une carte à la liste
    public function addCard(Card $card): void
    {
        // Ajoute l'objet Card au tableau $listCards
        $this->listCards[] = $card;
    }

    // Méthode pour afficher toutes les cartes de la liste
    public function printCards(): void {
        // Parcourt chaque carte dans $listCards
        foreach ($this->listCards as $index => $card) {
            // Affiche les informations de la carte avec son index
            echo "Infos sur la carte " . ($index + 1) . " :" . PHP_EOL;
            echo "Question : " . $card->getQuestion() . PHP_EOL; // Affiche la question
            echo "Answer : " . $card->getAnswer() . PHP_EOL;     // Affiche la réponse
        }
    }

}
