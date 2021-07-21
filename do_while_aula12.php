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
          $c=1;
          do{
              $c+=2;
              echo "$c, ";
          }
          while ($c<100);
       ?>
    </div>
    <div>
        <?php
            $v = isset($_GET["fat"])?$_GET["fat"]:"0";
            echo "<h1>Calculando o Factorial de $v</h1></br>";
            $c = $v;
            $fat = 1;
            do{
                $fat = $fat * $c;
                $c--;
            }
            while($c>=1);
            echo "<h2>É igual a $fat!</h2>"
        ?>
        <a href="do_while_aula12.html">Voltar</a>
    </div>
</body>
</html>