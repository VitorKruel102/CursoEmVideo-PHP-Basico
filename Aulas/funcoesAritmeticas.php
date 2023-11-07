<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
        $numero1 = (int)4;
        $numero2 = (int)3;

        $absouluteN1 = abs($numero1);
        $absouluteN2 = abs($numero2);
        $potenciacao = pow($numero1, $numero2);
        $raizQuadradaN1 = sqrt($numero1);
        $arredondamentoN1 = round($numero1);
        $arredondamentoCeilN1 = ceil($numero1); // Arredonda pra cima;
        $arredondamentoFloorN1 = floor($numero1); // Arredonda pra baixo;
        $intvalN1 = intval($numero1); // Número inteiro;
        $formatNumero = number_format(
            $numero1, 
            $decimals=2, 
            $decimals_separator=",",
            $thousands_separator="."
        );

        echo "O valor absoluto de $numero1 é $absouluteN1 <hr>";
        echo "O valor absoluto de $numero2 é $absouluteN2 <hr>";
        echo "A potência de $numero1 elevado a $numero2 é $potenciacao <hr>";
        echo "A Raiz de $numero1 é $raizQuadradaN1 <hr>";
        echo "O arrendondamento de $numero1 é $arredondamentoN1 <hr>";
        echo "O arrendondamento pra cima de $numero1 é $arredondamentoCeilN1 <hr>";
        echo "O arrendondamento pra baixo de $numero1 é $arredondamentoFloorN1 <hr>";
        echo "O valor inteiro de $numero1 é $intvalN1 <hr>";
        echo "O valor em reias $numero1 é R$ $formatNumero <hr>";
    ?>
</body>
</html>