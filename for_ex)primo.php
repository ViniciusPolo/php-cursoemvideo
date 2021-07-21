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
            $p=isset($_GET["primo"])?$_GET["primo"]:0;
            $r=0;
            echo $p." é divisivel por: ";
                for($i=1;$i<=$p;$i++){
                    if($p/$p==1 && $p%$i==0){
                        echo $i.", ";  
                        $r = $r + $i;
                    }
                }
                if($r==$p+1){
                        echo "então $p é Primo.";  
                    }
                else{
                    echo "então $p não é Primo";
                }
       ?>
       <a class="botao" href="for_ex)primo.html">Voltar</a>
    </div>
</body>
</html>