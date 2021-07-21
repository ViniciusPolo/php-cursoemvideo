<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aulaPHP/_css/estilo.css">
    <?php
    $n1 = isset($_GET["nota1"])?$_GET["nota1"]:"inválido";
    $n2 = isset($_GET["nota2"])?$_GET["nota2"]:"inválido";
    $media = number_format(($n1 + $n2)/2,1);
    ?>
    <title>Document</title>
</head>
<body>
    <div>
       <?php
       echo "Sua média é " .number_format($media,2)." e você está ";
       if($media<5){
           echo "REPROVADO";
       }
       elseif($media>=5 && $media<7){
           echo "em RECUPERAÇÃO";
       }
       else{
           echo "APROVADO";
       }
      
       ?> 
       <br>
       <a href="if_aula9_ex03.html">Voltar</a>
    </div>
        
</body>
</html>