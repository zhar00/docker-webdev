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
            echo"<table>";
            echo"<tr style='text-align:right'>";
            for($i = 1; $i<=7; $i++){
                for($j = 1; $j<=7; $j++){
                    $res = $i * $j;
                    echo"<td>$res</td>";
                }
                echo"</tr><tr style='text-align:right'>";
            }
            echo"</tr></table>"
        ?>
    </p>
</body>
</html>