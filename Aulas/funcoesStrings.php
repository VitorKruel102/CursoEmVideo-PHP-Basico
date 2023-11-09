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

        printf("O %s custa R$ %.2f", $product, $price);
        print('<br>');
        
        $array = array(1, 3, 4);
        print_r($array); // Deixe o array detalhado
        print('<br>');

        $lengthString = strlen($product);
        $trim = trim('  Vitor Kruel '); // Remove os espaços do inicio e do fim
        $wordCount = str_word_count('Vitor Kruel', 0);
        $split = str_split('Vitor');
        $stringToLower = strtolower('VITOR');
        $stringToUpper = strtoupper('vitor');
        $ucFirst = ucfirst('vitor kruel'); // Primeira letra deve ser maiuscula
        $ucWord = ucwords('vitor kruel'); // Todas as primeiras letras em maiusculas
        $stringPos = stripos('Vitor Kruel', 'Kruel'); //Encontra a posição da palavra
        $stringSub = substr('Frase', 3, 2); // Começa pelo caracter 3 e pega mais dois caracteres após.
        $replace = str_replace('eu', 'nos', 'Frase que eu quero'); // Vai subistituir o eu pelo nos na frase
    ?>
</body>
</html>