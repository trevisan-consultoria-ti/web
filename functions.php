<?php

// Formata um número com casas decimais
// $number = número, $decimals = casas decimais
// Retorna a string formatada
function numberToStr($number, $decimals)
{
    return number_format($number, $decimals, ',', '.');
}