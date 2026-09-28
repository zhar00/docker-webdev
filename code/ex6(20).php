<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        $mesActual = date('F');
        $numDias = date('t');

        echo "El mes actual es " . $mesActual . " y tiene " . $numDias . " días.";
        ?>
    </p>
</body>
</html>