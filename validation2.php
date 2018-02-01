<?php 

/* function multiply($value, $a = 3)
{
    return $value * $a;
}
Fonction factoriser pour validation.php
 */

$age = (int )$_POST ['age'];

if ($age < 18) {
    echo "Vous êtes minieur";
} elseif ($age === 18) {
    echo "bravo tu es majeur!";
} else {
    echo "Bravo tu peux faire tout ce que veux";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">
            <p>Age
                <input type="number" name="age">
            </p>
            <p>
                <input type="submit" value="entrer">
            </p>
        </label>
    </form>

</body>

</html>