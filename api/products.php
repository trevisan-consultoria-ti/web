<?php

require_once('../config.php');    
require_once(DBAPI);

try
{
    $user = $_GET["User"];
    $token = $_GET["Token"];

    //Validacao

    if ($token == "tokenautorizado")
    {
        // Recupera a lista de produtos

        $products = find_all('products');

        $myJSON = json_encode($products);

        echo $myJSON;
    }
    else
    {
        echo "ERRO: TOKEN INVÁLIDO";
    }    
}
catch (Exception $e) 
{
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}



    


