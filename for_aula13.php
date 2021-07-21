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
          for($i=0;$i<10;$i++){
              echo $i."º afimação: Vinicius Desenvolvedor Back-end<br/>";
          }
          echo "<br/>";
          for ($i=10;$i>0;$i--){
              echo "Estou contratado na Irroba<br/>";
          }
        ?>
        <a href="for_aula13.html">Voltar</a>
    </div>
</body>
</html>