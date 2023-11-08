<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes</title>
</head>
<body>
    <?php 
        $number1 = 50; 
        $number2 = 20; 
        
        function _sum($n1, $n2) {
            $sum = $n1 + $n2;
            return $sum;
        }

        function _sum_array() {
            $args = func_get_args(); // Transforma em Array os args
            $total = func_num_args(); // Conta quantos args foram enviados

            $sum = 0;
            for ($i=0; $i < $total; $i++) { 
                $sum += $args[$i];
            }
            return $sum;
        }
        $sum = _sum($number1, $number2);
        $array_sun = _sum_array(1, 2, 3);

        echo $sum;
        echo "<br>";
        echo $array_sun;
        echo "<br>";

        // O valor passado em $x é alterado diretamente na variável enviada;
        function tests(&$x) {
            $x += 2;
            echo "O valor de X é $x";
            echo "<br>";
        }

        $a = 3;
        tests($a);
        echo "O valor de A é $a";
    ?>
</body>
</html>