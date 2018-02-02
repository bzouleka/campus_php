<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Mini Chat</title>
</head>
<?php
//connexion PDO
try {
    $bdd= new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (exception $e) {
    die('Erreur : ' . $e.getMessage());
}
?>

    <body>
        <form action="index_post.php" method="post">
            <?php if (isset($_COOKIE['pseudo_minichat'])) {
    ?>
            <p>
                <label>Votre pseudo</label>
                <input type="text" name="pseudo" value=<?php echo $_COOKIE[ 'pseudo_minichat']; ?>></p>
            <?php
} else {
        ?>
                <p>
                    <label>Votre pseudo</label>
                    <input type="text" name="pseudo" />
                </p>
                <?php
    }
    ?>
                    <p>
                        <label>Votre message</label>
                        <input type="text" name="message" />
                    </p>
                    <input type="submit" value="Envoyer le message" />
        </form>
    </body>

    <?php

$reponse = $bdd->query('SELECT * FROM message ORDER BY id DESC LIMIT 10');

while ($donnees = $reponse->fetch()) {
    ?>
        <p>
            <strong>
                <?php echo htmlspecialchars($donnees['pseudo'])?> :</strong>
            <?php echo htmlspecialchars($donnees['message'])?>.</p>
        <?php
}
?>

        <footer>
            <a href="mini_chat.php">Rafraichir la page.</a>
        </footer>

</html>