<?php

$frase ="La traduzione di var_dump è 'Variabile imbecille' ";

$lunghezzaFrase = strlen ($frase)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<h1>La frase corretta senza 'imbecille' è:</h1>

<div>
        <?php
            echo str_ireplace("imbecille", "###", $frase);
        ?>
</div>




    
</body>
</html>