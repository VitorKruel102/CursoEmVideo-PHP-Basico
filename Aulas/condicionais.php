<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <?php 
        $numero1 = 10; 
        $numero2 = 10;
        
        if($numero1 === $numero2) {
            echo 'igual';
        } else if($numero1 > $numero2) {
            echo 'maior';
        } else {
            echo 'menor';
        }
    ?>
</body>
</html>