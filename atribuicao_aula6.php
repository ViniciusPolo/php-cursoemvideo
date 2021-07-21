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
           $preco = $_GET["p"];
           echo "O preço do produto é R$".number_format($preco,2);
           $preco *=1.1;
           echo "<br>O novo preço é R$ ".number_format($preco,2);
           
        ?>
        </div>
        <div>
        <?php
           $atual = $_GET["aa"];
           echo "Estamos no ano de ".$atual;
           --$atual;
           /*Se o menos menos estivesse na frente seria pos-decremento, assim exibiria 2021 e não daria certo, ele valeira somente depois*/
           echo "<br>Ano passado foi ".$atual
            /* # e // além do /* são formas de comentar*/
           
        ?>
        </div>
        <div>
        <?php
           $a = 3;
           $b = $a;
           echo "A variável $b é igual a variavel $a e toda alterção em b será aplicado a a"
           
        ?>
        </div>
        <div>
            <h3>Variaveis Variantes</h3>
        <?php
           $site = "viniciuspolo";
           $$site = "cursoPHP"; #criei um variavei a partir da variavel site, e seu conteudo sera CursoPHP
           echo "A variavel site é $site e a variavel viniciuspolo  é $viniciuspolo "
        ?>
        </div>
        
</body>
</html>