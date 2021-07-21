<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aulaPHP/_css/estilo.css">
    <?php
    $a = isset($_GET["ano"])?$_GET["ano"]:"1900";
    $i = date("Y") - $a
    ?>
    <title>Document</title>
</head>
<body>
    <div>
       <?php
       echo "Você nasceu em $a e tem $i anos";
       if($i>=18){
           $v = "já deve votar";
           $d = "já pode dirigir";
       }
       elseif($i>=16 && $i<18){//if dentro do else
            $v = "já pode votar";
            $d = "não pode dirigir";
           }
        else{
            $v = "não pode votar";
            $d = "não pode dirigir";       
           } 
       echo "<br>Com essa idade você $v e também $d."
       ?> 
       <br>
       <a href="if_aula9.html">Voltar</a>
    </div>
        
</body>
</html>