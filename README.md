# TP 02 PHP — Programmation Web 2 (PHP) — 2026/2027

**Nom:** AGDACH
**Prénom:** Sami
**Groupe:** G3
**Module:** Programmation Web 2 (PhP)

## Liste des exercices
- ex01.php : balises, echo, commentaires
- ex02.php : variables, concaténation, casse
- ex03.php : constantes, calculs, +=
- ex04.php : types, conversions, var_dump
- ex05.php : conditions if/elseif
- ex06.php : switch mois
- ex07.php : for table multiplication + pyramide
- ex08.php : while, do-while, break, continue
- ex09.php : tableau associatif notes
- ex10_get.html / ex10_get.php : formulaire GET
- ex10_post.html / ex10_post.php : formulaire POST


## Réponses:

### Ex02 - Variables valides
- Valides: $a, $_a, $a_a, $AAA, $a1
- Invalides: $a! (caractère ! interdit), $1a (commence par chiffre)
- $note et $Note sont différentes car PHP est sensible à la casse.

### Ex04 - false avec echo vs var_dump
echo false n'affiche rien (chaîne vide), var_dump affiche bool(false). echo true affiche 1.

### Ex05 - Tests moyenne
- -1 => Note invalide
- 9 => Non validé
- 10 => Passable
- 12 => Assez bien
- 14 => Bien
- 16 => Très bien
- 21 => Note invalide

### Ex10 - GET vs POST
- GET: valeurs visibles dans l'URL ?nom=...&prenom=...&groupe=...
- POST: valeurs non visibles dans l'URL, dans le corps de la requête. Plus sécurisé pour données sensibles.
