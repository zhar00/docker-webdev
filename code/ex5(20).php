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
        $diaSet = date('N');

        if ($diaSet == 6 || $diaSet == 7) {
            echo "FINDE";
        } else {
            echo "No finde...";
        }
        ?>
    </p>
</body>
</html>