# Exercice : Construction d'une Classe PHP POO avec Méthodes Statique

## Objectif

Créer une classe `Mathematique` en PHP avec des méthodes statiques permettant de réaliser des opérations mathématiques.

## Instructions

1. **Créer la classe `Mathematique` avec les méthodes statiques suivantes :**

   - `addition` : prend 2 paramètres (float) et retourne le résultat.
   - `division` : prend 2 paramètres (float) et retourne le résultat.
   - `multiplication` : prend 2 paramètres (float) et retourne le résultat.
   - `soustraction` : prend 2 paramètres (float) et retourne le résultat.
   - `isNull` : méthode statique privée qui prend un paramètre (float) et retourne `false` si le paramètre est égal à 0, sinon retourne `true`.

2. **La méthode `division` doit appeler la méthode `isNull` pour vérifier si le second paramètre est égal à 0. La division ne doit se faire que si la méthode `isNull` retourne `true`.**

Testez chaque méthode statique de la classe `Mathematique` pour vous assurer qu'elles fonctionnent comme prévu. Faites attention aux cas où la division par zéro est tentée, et vérifiez que la méthode `isNotNull` est correctement appelée et gérée.
