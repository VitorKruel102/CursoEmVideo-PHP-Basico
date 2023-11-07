<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
        $numero1 = $_GET['a']; // Obtem valor passados na URL
        $numero2 = $_GET['b']; // Obtem valor passados na URL

        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $multiplicacao = $numero1 * $numero2;
        $divisao = $numero1 / $numero2;
        $modulo = $numero1 % $numero2;
        
        echo "Soma: $numero1 + $numero2 = $soma <br>";
        echo "Subtração: $numero1 - $numero2 = $subtracao <br>";
        echo "Multiplicação: $numero1 * $numero2 = $multiplicacao <br>";
        echo "Divisão: $numero1 / $numero2 = $divisao <br>";
        echo "Modulo: $numero1 % $numero2 = $modulo <br>";
    ?>
</body>
</html>