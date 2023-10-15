<?php

use Esteban\Facturacion\models\Client;

    $clients = Client::getAll();
   /*  print_r($clients) */
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro de Clientes </h1>
    <?php
        foreach($clients as $client){
            echo "<div>{$client->getName()}</div>";
            echo "<div>{$client->getEmail()}</div>";
            echo "<div>{$client->getLastName()}</div>";
            echo "<div>{$client->getAddress()}</div>";
            echo "<div>{$client->getDNI()}</div>";
        }
    ?>
</body>
</html>