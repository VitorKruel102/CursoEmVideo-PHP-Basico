<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta 
        name="viewport" 
        content="width=device-width, initial-scale=1.0"
    >
    <title>POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';

        $c1 = New Caneta('Bic', 'Vermelha', 0.5);
        $c2 = New Caneta('Bic New', 'Verde', 0.6);
        print_r($c1);
        print_r($c2);
    ?>
    </pre>
</body>