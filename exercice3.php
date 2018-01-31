<?php
/*
Créer un formulaire d'inscription avec les champs suivants en method POST :
- Nom
- Prenom
- Email

Vérifier que l'adresse email est bien conforme.
Si elle ne l'est pas, afficher un message d'erreur.

/!\ Penser à remettre les valeurs si il y a un message d'erreur.

Sinon afficher un message de succès, (ex: Bravo {Nom} {Prenom}. Nous avons bien enregistré votre adresse {email}}

Résultat attendu: 1 ou 2 fichiers php affichant le formulaire, si method = POST traiter les données, et afficher les erreurs.
*/

?>

    <!DOCTYPE html>
    <html>
    <meta charset="UTF-8">

    <head></head>

    <body>
        <h3> Ajouter un utilisateur </h3>





        <form method="POST">
            Nom:
            <input type="text" name="nom">
            <br> Prénom:
            <input type="text" name="prenom">
            <br> E-mail:
            <input type="text" name="email">
            <br>
            <input type="submit" value="Ajouter">
        </form>

        <?php

/*if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}*/
        
$email = isset($_POST['email']) ? $_POST['email'] : '';
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';

  
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) /* ou avec regec ==> (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email)) */

    {
       echo'<p>Bravo '.htmlspecialchars($nom) .' ' .$prenom .'. Nous avons bien enregistré votre adresse '. $email.'</p>';
   } else {
       echo "Veuillez entrer un email n'est pas valide";
   }

       ?>
    </body>

    </html>