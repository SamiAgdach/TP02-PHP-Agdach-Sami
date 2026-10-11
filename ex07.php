<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ex07</title>
    </head>
    <body>
        <h2>Table de multiplication</h2>
        <?php
        $nombre = 7;
        for ($i=1; $i<=10; $i++) {
            echo "$nombre x $i = " . ($nombre*$i) . "<br>";
        }
        ?>
    <h2>Pyramide</h2>
    <pre>
        <?php
        for ($ligne=1; $ligne<=6; $ligne++) {
            for ($etoile=1; $etoile<=$ligne; $etoile++) {
                echo "* ";
            }
            echo "\n";
        }
        ?>
    </pre>
    </body>
</html>
