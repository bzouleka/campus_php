<?php

$users =  json_decode(file_get_contents('data.json'));


function getEmail($email)
{
    echo $email -> email;
}

foreach ($users as $user) {
    echo "<pre>";
    echo getEmail($user);
    echo "</pre>";
}



/*
Créer une fonction getEmail(). Cette fonction qui prend en parametre une ligne du tableau $users
doit retourner l'adresse email.

Résultat attendu: Pour chaque ligne du tableau $users la fonction appelée doit retourner l'adresse email.
*/
