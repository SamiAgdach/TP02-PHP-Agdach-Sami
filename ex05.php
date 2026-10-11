<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ex05</title>
    </head>
    <body>
        <?php
        $moyenne = 14; 

        if ($moyenne < 0 || $moyenne > 20) {
            echo "Note invalide";
        } elseif ($moyenne < 10) {
            echo "Non validé";
        } elseif ($moyenne < 12) {
            echo "Passable";
        } elseif ($moyenne < 14) {
            echo "Assez bien";
        } elseif ($moyenne < 16) {
            echo "Bien";
        } else {
            echo "Très bien";
        }
        ?>
        <p>Moyenne testée: <?= $moyenne ?></p>
    </body>
</html>
