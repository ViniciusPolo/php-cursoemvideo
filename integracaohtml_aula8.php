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
        <?php/*
          $valor = $_GET["v"];
          $rq = sqrt($valor);
          echo "A raiz de $valor é " .number_format($rq,2)
           */
        ?>
        <a href="integraçaophp_aula08.html">Voltar</a>
        </div>
        <div>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
            $ano = isset($_GET["ano"])?$_GET["ano"]:"[0]";
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";
            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos"; 
        ?>
        <a href="integraçaophp_aula08.html">Voltar</a>
        </div>
        
</body>
</html>