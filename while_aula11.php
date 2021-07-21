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
    <div>
        <?php
        $n = 0;
        while($n<=10){
            echo "$n";
            $n++;
        }
        ?>
    </div>

    <div class="form">
       <form method="get "action="./while_aula11_ex02.php">
       <?php
                $c = 1;
                while ($c <= 5) {
                    echo "Valor $c: <input type='number' name='$c' max='100' min='1' value='0'/><br/>";
                    $c++;
                }
            ?>
            <input type="submit" vallue="Enviar" class="botao">
       </form>
    </div>
</body>
</html>