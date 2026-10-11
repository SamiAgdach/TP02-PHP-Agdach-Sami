<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ex03</title>
</head>
<body>
    <?php
        define("TAUX_TVA", 20);
        const DEVISE = "MAD";

        $prixHT = 60;
        $quantite = 3;

        $totalHT = $prixHT * $quantite;
        $montantTVA = $totalHT * TAUX_TVA / 100;
        $totalTTC = $totalHT + $montantTVA;
        $totalTTC += 15;

        echo "<h2>Récapitulatif</h2>";
        echo "<p>Prix unitaire HT : $prixHT " . DEVISE . "</p>";
        echo "<p>Quantité : $quantite</p>";
        echo "<p>Total HT : $totalHT " . DEVISE . "</p>";
        echo "<p>TVA (" . TAUX_TVA . "%) : $montantTVA " . DEVISE . "</p>";
        echo "<p>Total TTC + livraison : $totalTTC " . DEVISE . "</p>";

        echo "<p>TAUX_TVA définie ? " . (defined('TAUX_TVA') ? 'Oui' : 'Non') . "</p>";
    ?>
</body>
</html>
