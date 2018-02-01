<?php

include('validation2.php');

$tab = [1, 2, 2, 3, 4];



foreach ($tab as $key => $value) {
    /* multiply($value); */

    $tab[$key]= multiply($value);
}

 var_dump($tab);
