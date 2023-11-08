<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php 
        $numero1 = 2; 
        
        switch($numero1) {
            case 1:
                echo 'A';
                break; // Obrigatório
            case 2:
                echo 'B';
                break; // Obrigatório
            default:
                echo 'A-B';
        }
    ?>
</body>
</html>