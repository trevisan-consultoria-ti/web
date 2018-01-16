<?php

$user = $_GET["User"];
$token = $_GET["Token"];

if ($token == "tokenautorizado")
    echo "SUCESSO";
else
    echo "TOKEN INVÁLIDO";
    