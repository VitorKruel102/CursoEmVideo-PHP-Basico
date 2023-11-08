<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prints</title>
</head>
<body>
    <?php 
        $price = 4.5;
        $product = 'Leite';

        printf(
            "O %s custa R$ %.2f", 
            $product, 
            $price
        );
        print('<br>');
        
        $array[0] = 1;
        $array[1] = 3;
        $array[2] = 4;
        print_r($array); // Deixe o array detalhado
        print('<br>');

        $lengthString = strlen($product);
        $trim = trim('  Vitor Kruel '); // Remove os espaços do inicio e do fim
        $wordCount = str_word_count('Vitor Kruel', 0);
        $split = str_split('Vitor');
    ?>
</body>
</html>