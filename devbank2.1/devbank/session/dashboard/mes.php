<?php

$MesesEntrada = array(
    1 => "Sem Valor",
    2 => "Sem Valor",
    3 => "Sem Valor",
    4 => "Sem Valor",
    5 => "Sem Valor",
    6 => "Sem Valor",
    7 => "Sem Valor",
    8 => "Sem Valor",
    9 => "Sem Valor",
    10 => "Sem Valor",
    11 => "Sem Valor",
    12 => "Sem Valor",
);

$MesesSaida = array(
    1 => "Sem Valor",
    2 => "Sem Valor",
    3 => "Sem Valor",
    4 => "Sem Valor",
    5 => "Sem Valor",
    6 => "Sem Valor",
    7 => "Sem Valor",
    8 => "Sem Valor",
    9 => "Sem Valor",
    10 => "Sem Valor",
    11 => "Sem Valor",
    12 => "Sem Valor",
);

function GuardarMesEntrada($Mes, $Valor){
    
    $MesesEntrada = 0;
    $MesesEntrada[$Mes] =+ $Valor;

}
function GuardarMesSaida($Mes, $Valor){

    $MesesSaida[$Mes] = 0;
    $MesesSaida[$Mes] += $Valor;

}

?>