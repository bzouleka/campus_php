<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="blog_style.css" rel="stylesheet" />
</head>

<body>

    <h1>FMAC !</h1>
    <p>Derniers billets du blog :</p>

    <?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');


while ($donnees = $req->fetch()) {
    ?>

        <div class="news">
            <h3>
                <?php echo htmlspecialchars($donnees['titre']); ?>
                <em>le
                    <?php echo $donnees['date_creation_fr']; ?>
                </em>
            </h3>
            <p>
                <?php
    echo nl2br(htmlspecialchars($donnees['contenu'])); ?>
                    <br />
                    <em>
                        <a href="blog_com.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a>
                    </em>
            </p>
        </div>
        <?php
}
$req->closeCursor();

?>

</body>

</html>