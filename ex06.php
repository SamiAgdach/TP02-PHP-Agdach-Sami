<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ex06</title>
    </head>
    <body>
        <?php
        $numeroMois = 3; 

            switch ($numeroMois) {
                case 1: echo "Janvier"; break;
                case 2: echo "Février"; break;
                case 3: echo "Mars"; break;
                case 4: echo "Avril"; break;
                case 5: echo "Mai"; break;
                case 6: echo "Juin"; break;
                case 7: echo "Juillet"; break;
                case 8: echo "Août"; break;
                case 9: echo "Septembre"; break;
                case 10: echo "Octobre"; break;
                case 11: echo "Novembre"; break;
                case 12: echo "Décembre"; break;
                default: echo "Numéro de mois invalide"; break;
            }

            echo "<hr>";
            echo "Mois courant serveur : ";
            $moisCourant = (int)date("m");
            echo $moisCourant . " => ";
            switch ($moisCourant) {
                case 1: echo "Janvier"; break;
                case 2: echo "Février"; break;
                case 3: echo "Mars"; break;
                case 4: echo "Avril"; break;
                case 5: echo "Mai"; break;
                case 6: echo "Juin"; break;
                case 7: echo "Juillet"; break;
                case 8: echo "Août"; break;
                case 9: echo "Septembre"; break;
                case 10: echo "Octobre"; break;
                case 11: echo "Novembre"; break;
                case 12: echo "Décembre"; break;
            }
            ?>
    </body>
</html>
