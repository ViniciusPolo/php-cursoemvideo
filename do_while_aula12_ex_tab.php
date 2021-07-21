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
          $tab = isset($_GET["tab"])?$_GET["tab"]:0;
          $c = 0;
          do{
              echo "$tab x $c = ".$tab * $c."<br/>";
              $c++;
          }
          while($c<=10);
        ?>
        <a class="botao" href="do_while_aula12_ex_tab.html">Versão Digitar</a>
        <a class="botao" href="for_aula13_ex_tab .php">Versão Selecionar</a>
    </div>
</body>
</html>