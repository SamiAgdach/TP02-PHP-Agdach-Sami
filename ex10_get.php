<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
<title>Traitement GET</title>
</head>
    <body>
        <?php
        if (!isset($_GET['nom'], $_GET['prenom'], $_GET['groupe']) || 
            trim($_GET['nom'])==='' || trim($_GET['prenom'])==='' || trim($_GET['groupe'])==='') {
            echo "<p>Veuillez remplir le formulaire depuis <a href='ex10_get.html'>ex10_get.html</a>. Tous les champs sont requis.</p>";
        } else {
            $nom = htmlspecialchars($_GET['nom'], ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($_GET['prenom'], ENT_QUOTES, 'UTF-8');
            $groupe = htmlspecialchars($_GET['groupe'], ENT_QUOTES, 'UTF-8');
            echo "<p>Bienvenue $prenom $nom du groupe $groupe ! (méthode GET)</p>";
            echo "<p>Observez l'URL : les données sont visibles après ?nom=...</p>";
        }
        ?>
    </body>
</html>
