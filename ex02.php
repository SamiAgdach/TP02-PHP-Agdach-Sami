<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ex02</title>
</head>
<body>
    <?php
        $nom = "Agdach";
        $prenom = "Sami";
        $age = 19;
        $formation = "PHP";

        $presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en " . $formation . ".";
        echo "<p>$presentation</p>";

        $presentation .= " J'apprends PHP.";
        echo "<p>$presentation</p>";

        $note = 12;
        $Note = 16;
        echo "<p>note = $note et Note = $Note (deux variables différentes car sensible à la casse)</p>";
    ?>
</body>
</html>
