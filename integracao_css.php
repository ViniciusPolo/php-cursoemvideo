<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aulaPHP/_css/estilo.css">
    <?php
    $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div>
       <?php
       echo "<span class='texto'>$txt</span>";
       ?> 
       <a href="integracao_css_php.html">Voltar</a>
    </div>
        
</body>
</html>