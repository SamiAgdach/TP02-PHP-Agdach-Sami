<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ex08</title>
    </head>
    <body>
        <h2>Question 1 - Nombres pairs 0 à 20 et 10 en gras</h2>
            <?php
            $n = 0;
            while ($n <= 20) {
                if ($n == 10) echo "<strong>$n</strong> ";
                else echo "$n ";
                $n+=2;
            }
            ?>
        <h2>Question 2 - while vs do-while</h2>
            <?php
            $compteur = 5;
            $execWhile = 0;
            while ($compteur < 5) {
                $execWhile++;
                $compteur++;
            }
            echo "while : $execWhile exécution(s)<br>";

            $compteur = 5;
            $execDoWhile = 0;
            do {
                $execDoWhile++;
                $compteur++;
            } while ($compteur < 5);
            echo "do-while : $execDoWhile exécution(s)<br>";
            ?>
        <h2>Question 3 - continue et break</h2>
            <?php
            for ($i=1; $i<=20; $i++) {
                if ($i % 3 == 0) continue;
                if ($i >= 16) break;
                echo "$i ";
            }
            ?>
    </body>
</html>
