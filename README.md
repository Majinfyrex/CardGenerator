# CardGenerator
Une application PHP simple pour créer et gérer des cartes avec des questions et des réponses.

## Fonctionnalités

1. Créer des cartes avec une question et une réponse.
2. Ajouter plusieurs cartes dans une liste.
3. Afficher toutes les cartes avec leurs questions et réponses.

---

## Prérequis

- PHP >= 7.4
- Composer

---

## Installation

1. Clonez ce dépôt :
   ```bash
   git clone <lien_du_depot>
   cd <nom_du_dossier>
   ```

2. Installez les dépendances avec Composer :
   ```bash
   composer install
   ```

3. Exécutez l'application :
   ```bash
   php index.php
   ```

---

## Exemple d'utilisation

L'application vous demandera combien de cartes créer, puis collectera vos questions et réponses avant de les afficher.

Exemple d'interaction dans le terminal :
```
Combien de cartes voulez-vous ajouter ? 2
Entrez une question pour la carte 1 : Quelle est la capitale de la France ?
Entrez une réponse pour la carte 1 : Paris
Entrez une question pour la carte 2 : Combien font 2 + 2 ?
Entrez une réponse pour la carte 2 : 4

Listing des cartes contenues dans la liste :
Infos sur la carte 1 :
Question : Quelle est la capitale de la France ?
Answer : Paris

Infos sur la carte 2 :
Question : Combien font 2 + 2 ?
Answer : 4
```

---

Bon Coding
