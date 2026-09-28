<?php 
$v = "Hello"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <br><br>
        <div>
            <p>
                Avui és 
                <script>
                    var d = new Date();
                    document.write(d.toLocaleDateString('es-Es'))
                </script>
                i sol les
                <script>
                    document.write(d.toLocaleTimeString('es-Es'))
                </script>
            </p>
            <br><br>
            <p>
                Avui és <?php echo date("j/n/Y") ?> i son les <?php echo date ("H:i:s") ?>
            </p>
            <br><br>
            <p>
                <?php 
                    echo "$v World";
                    //print_r($_SERVER); 
                
                ?>
            </p>
            
            <p>
                <?php 
                    //var_dump($_SERVER);

                    if (rand(1,10)>5){
                        echo "JACKPOT!!";
                    }else{
                        echo "GOD DAMN IT...";
                    }
                ?>
            </p>
            <br>
            <h3>Expressió condicional: Match</h3>
            <?php
            $v1 = rand(1,10) < 5 ? "Ha tocat": "Unlucky";
            ?>
            <?=  $v1 ?>
            <p>
                <?php
                $d = intval(date('w'));
                $text = match($d){
                    1,2,3,4 => "La set es fara molt llarga!",
                    5 => "Finde aprop",
                    6,0 => "Millor finde",
                    default => "no existeixo"
                };
                ?>
                <?= $text ?>
            </p>
            <br>
            <h3>Reps</h3>
            <p>
                <?php
                $colors = ['#ff0000','#00ff11']
                ?>
                <?php
                    $compt=1;
                    while($compt<=10){      
                ?>
                <span style="background: <?= $colors[$compt%2] ?>; padding: 10px">
                    <?= $compt ?>
                </span>
                <?php
                    $compt = $compt + 1; //$compt++ // $compt +=1;

                    }?>
            </p>
            
        </div>
    </div>
</body>
</html>