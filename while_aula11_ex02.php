<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aulaPHP/_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
       <?php
                $i = 1;
                while ($i <= 5) {
                    $v = "num".$i;
                    $url = "v".$c;
                    $$v = isset($_GET[$url])?$_GET[$url]:0;
                    $i++;
                }
                echo "$num3";
                /*$i = 1;
                while ($i <= 5){
                    $v = "num".$i;
                    echo "Valor $i :".$$v."<br/>";
                    $i++;
                }*/
            ?>
    </div>
        
</body>
</html>