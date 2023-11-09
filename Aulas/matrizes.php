<?php
    $array = array();

    $arrayText = array(
        'nome'=> 'Vitor',
        'idade'=> 19,
        'cep'=> '93458-400',
    );

    // Remover um indice
    unset($array[3]);

    // Adicionar valores no Array
    array_push($array, 'Valor'); // Add no Final
    array_unshift($array, 'Valor'); // Add no Inicio

    // Remover valores no Array
    array_pop($array); // Remove no Final e Retorna
    array_shift($array); // Remove no Inicio
?>