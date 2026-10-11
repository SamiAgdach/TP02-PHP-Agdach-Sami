<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Traitement POST</title>
    </head>
    <body>
        <?php
        if (!isset($_POST['nom'], $_POST['prenom'], $_POST['groupe']) || 
            trim($_POST['nom'])==='' || trim($_POST['prenom'])==='' || trim($_POST['groupe'])==='') {
            echo "<p>Veuillez remplir le formulaire depuis <a href='ex10_post.html'>ex10_post.html</a>. Tous les champs sont requis.</p>";
        } else {
            $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');
            $groupe = htmlspecialchars($_POST['groupe'], ENT_QUOTES, 'UTF-8');
            echo "<p>Bienvenue $prenom $nom du groupe $groupe ! (méthode POST)</p>";
            echo "<p>Observez l'URL : les données ne sont PAS visibles dans l'URL, contrairement à GET.</p>";
        }
        ?>
      </body>
</html>
