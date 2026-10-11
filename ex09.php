<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ex09</title>
    </head>
    <body>
        <?php
            $notes = [
                "Amine" => 12,
                "Sara" => 16,
                "Youssef" => 8,
                "Lina" => 14,
                "Adam" => 10
            ];
            $somme = 0;
            $nbValide = 0;
            $meilleureNote = 0;
            $meilleurEtudiant = "";

            foreach ($notes as $n => $note) {
                $somme += $note;
                if ($note >= 10) $nbValide++;
                   if ($note > $meilleureNote) {
                        $meilleureNote = $note;
                        $meilleurEtudiant = $n;
                    }
                }
            $moyenne = $somme / count($notes);
        ?>

    <table border="1" cellpadding="5">
    <tr><th>Étudiant</th><th>Note</th><th>Statut</th></tr>
        <?php foreach ($notes as $nom => $note): ?>
    <tr>
        <td><?= htmlspecialchars($nom) ?></td>
        <td><?= $note ?></td>
        <td><?= $note >= 10 ? "Validé" : "Non validé" ?></td>
    </tr>
        <?php endforeach; ?>
    </table>

    <p>Somme : <?= $somme ?></p>
    <p>Moyenne : <?= $moyenne ?></p>
    <p>Nombre validés : <?= $nbValide ?></p>
    <p>Meilleure note : <?= $meilleureNote ?> par <?= $meilleurEtudiant ?></p>
    </body>
</html>
