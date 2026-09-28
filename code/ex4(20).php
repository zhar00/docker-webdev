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
            $nav = mktime(23,59,59,12,24,2026);
            $hoy = time();
            
            $falta=((($nav-$hoy)/60)/60)/24;
            echo "Faltan " .round($falta). " dias.";
        ?>
    </p>
</body>
</html>