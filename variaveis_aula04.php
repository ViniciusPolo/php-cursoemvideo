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
        /*
        -Toda variavel em php vai com $ na frente (ex. $idade = 3;)
        -No PHP não existe declaração de variaveis
        - mas pode forçar, escrever int ou integer, real ou float ou double e string para textos
        */
        $n = 4;
        $nome = "Vinicius";
        $especie = "Gato";
        $pet = "Penelope";
        echo $nome. " nasceu dia ". $n;/*contatenação*/
        echo "<br>$pet é um $especie" /*Entre as aspas funciona também*/
        
        ?>
    </div>
</body>
</html>