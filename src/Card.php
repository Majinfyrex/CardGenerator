<?php

namespace Zakary\Poo;

// La classe Card représente une carte qui contient une question et une réponse
class Card
{
    // Propriété privée pour stocker la question de la carte
    private string $question;

    // Propriété privée pour stocker la réponse de la carte
    private string $answer;

    // Le constructeur permet de créer une carte en définissant sa question et sa réponse
    public function __construct(string $question, string $answer)
    {
        $this->question = $question; // On attribue la question à la propriété $question
        $this->answer = $answer;    // On attribue la réponse à la propriété $answer
    }

    // Méthode publique pour récupérer la question de la carte
    public function getQuestion(): string
    {
        return $this->question; // Retourne la question stockée dans la carte
    }

    // Méthode publique pour récupérer la réponse de la carte
    public function getAnswer(): string
    {
        return $this->answer; // Retourne la réponse stockée dans la carte
    }
}
