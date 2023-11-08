<?php
    // isset() -> Foi configurado; 
    $nome = isset($_GET['nome']) ? $_GET['nome'] : 'Não Informado';

    echo "Você digitou $nome";
?>