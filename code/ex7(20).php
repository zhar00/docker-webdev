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
            $color = array('blanc', 'verd', 'vermell', 'marró', 'negre', 'blau');
            echo"<ul>";
            foreach($color as $c){
                echo"<li>$c</li>";
            }
            echo"</ul>";
        ?>
    </p>
    
</body>
</html>