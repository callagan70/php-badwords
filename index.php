<?php

$frase ="La traduzione di var_dump è 'Variabile imbecille' ";
$lunghezzaFrase = strlen ($frase);
$uri = ( isset($_GET['parola'] ) ) ? $_GET['parola'] : ' ';

$parametro = $_GET['parametro'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PhP</title>
</head>
<body>

<h1>La frase è:</h1>
<div>
        <?php
            echo $frase;
        ?>
</div>

<br>
<h1>La lunghezza della frase è:</h1>
<div>
        <?php
            echo $lunghezzaFrase;
        ?>
</div>

<br>
<h1>La frase corretta senza 'imbecille' e senza GET è:</h1>
<div>
        <?php
            echo str_ireplace("imbecille", "###", $frase);
        ?>
</div>

<br>
<h1>Inserisci parola da eliminare nella frase</h1>
<form method="GET">
    <input type="text" name="parametro">
    <button type="submit">Invia</button>
</form>

<h1>La frase corretta senza <?php $parametro ?> e con GET è:</h1>
<div>
        <?php
            echo str_ireplace($parametro, "###", $frase);
        ?>
</div>


    
</body>
</html>