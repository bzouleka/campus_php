<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau</title>
</head>

<body>
    <h1>Exercice 1</h1>



    <?php

$users =  json_decode(file_get_contents('data.json'));

$males = [];
$females = [];

foreach ($users as $user) {
    if ($user -> gender === 'Male') {
        $males[]= $user;
    } else {
        $females[]= $user;
    }
}
echo "<pre>";
var_dump(['male' => $males, 'female' => $females]);
echo "</pre>";



    /* Parcourir le tableau $users. Mettre tous les utilisateurs donc le gender est "male" dans un tableau, et tous les gender
    "female" dans un autre tableau Résultat attendu: $males, $females remplis. var_dump($males, $females); */
?>
</body>

</html>