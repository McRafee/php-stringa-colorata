<?php
/*
Stampare una stringa verde se la variabile password passata in GET è uguale a
“Boolean”, altrimenti stampare una stringa rossa.
*/

$password = $_GET["pwd"];

if ($password == "Boolean") {
    echo "<h1 style=\"color:green;\">" . "La password è corretta!" . "</h1>";
}  elseif (empty($password)) {
    echo "<h1 style=\"color:gray;\">" . "Inserisci una password." . "</h1>";
} else {
    echo "<h1 style=\"color:red;\">" . "La password non è corretta!" . "</h1>";
}

 ?>
