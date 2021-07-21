<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aulaPHP/_css/estilo.css">
    <?php
    $n = isset($_GET["num"])?$_GET["num"]:"inválido";
    $o = isset($_GET["oper"])?$_GET["oper"]:"1";
    ?>
    <title>Document</title>
</head>
<body>
    <div>
       <?php
          switch ($o){
              case 1:
                $r = $n * 2;
                break;
               case 2:
                $r = pow($n,3); 
                break;
               case 3:
                $r = sqrt($n); // $r = n^(1/2)
                break;
          }
          echo "O resultado da operação solicitada foi: $r ";
       ?> 
       <br>
       <a class="botao" href="switch_aula10.html">Voltar</a>
    </div>
    <div>
        <?php
            $d = isset($_GET["ds"])?$_GET["ds"]:"0";
            if($d== 2){
                echo "Hoje é Segunda";
            }
            elseif($d== 3){
                echo "Hoje é Terça";
            }
            elseif($d== 4){
                echo "Hoje é Quarta";
            }
            elseif($d== 5){
                echo "Hoje é Quinta";
            }
            elseif($d== 6){
                echo "Hoje é Sexta";
            }
            elseif($d== 7){
                echo "Hoje é Sabado";
            }
            else{
                echo "Hoje é Domingo";
            }
            switch($d){
                case 2:
                case 6:
                case 3:
                case 4:
                case 5:
                echo "<br>Levanta e vai estudar";
                break;
                case 1:
                case 7:
                echo "<br>Pode descansar";
                break;

            }
        ?>
    </div>
        
</body>
</html>