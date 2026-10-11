<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ex04</title>
    </head>
    <body>
        <pre>
        <?php
            $a = 42;
            $b = "42";
            $c = 15.8;
            $d = true;
            $e = false;
            $f = null;

            var_dump($a, $b, $c, $d, $e, $f);

            echo "Conversions :";
            $b_int = (int)$b;
            $c_int = (int)$c;
            $a_str = (string)$a;

            var_dump($b_int, $c_int, $a_str);

            echo "echo true : ";
            echo true;
            echo "echo false : ";
            echo false;
            echo " (rien)";

            var_dump(true);
            var_dump(false);

            echo "Conversion en bool:";
            var_dump((bool)0);
            var_dump((bool)"0");
            var_dump((bool)"PHP");
            var_dump((bool)[]);
        ?>
        </pre>
    </body>
</html>
