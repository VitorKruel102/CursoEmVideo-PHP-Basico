<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Unário</title>
</head>
<body>
    <?php
        // Operador Unário 
        // CONDIÇÃO ? VERDADEIRO : FALSO
        $numero1 = 4;
        $numero2 = 5;
        
        // &&
        $e = ($numero1 > 0) and ($numero2 > 0);
        
        // ||(Um ou duas condição podem ser verdadeiras)
        $ou = ($numero1 > 0) or ($numero2 > 0);

        // (Apenas uma condição pode ser verdadeira)
        $xou = ($numero1 > 0) xor ($numero2 > 0);

        // É a mesma coisa que not
        $nao = !($numero1 > 0);
    ?>
</body>
</html>