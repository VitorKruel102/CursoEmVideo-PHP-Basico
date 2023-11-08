<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 001</title>
</head>
<body>
    <?php
        // Colocar juros de 10% no valor enviado na URL;
        $preco = $_GET['preco'];
        $juros = 0.1;
        $preco += ($preco * $juros) ;

        echo "R$".number_format($preco, 2);
    ?>
</body>
</html>