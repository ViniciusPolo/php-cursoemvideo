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
            $n1 = 10;
            $n2 = 25;
            $soma = $n1 + $n2;
            echo "A soma entre $n1 e $n2 é igual a $soma"
        ?>
        <?php
            $n1 = 5;
            $n2 = 3;
            echo "<br>A soma entre $n1 e $n2 é igual a ".($n1 + $n2);
            echo "<br>A subtração entre $n1 e $n2 é igual a ".($n1 - $n2);
            echo  "<br>A multiplicação entre $n1 e $n2 é igual a ".($n1 * $n2);
            echo  "<br>A divisão entre $n1 e $n2 é igual a ".($n1 / $n2);
            echo  "<br>O resto da divisão entre $n1 e $n2 é igual a ".($n1 % $n2);
        ?>
        </div>
        <div>
        <h4>Usando paramentros externos</h4>
        <?php
        /*Para se receber valores personalizados, insere-se na frente da url por exemplo 3 e 2 para a e b ex:?a=3&b=2 ou http://localhost/op_arit_aula05.php?a=3&b=2
        Depois atribui-se os parametros as variaveis*/
            $j1 = $_GET["a"];
            $j2 = $_GET["b"];
            echo "<br>A soma entre $j1 e $j2 é igual a ".($j1 + $j2);
            echo "<br>A subtração entre $j1 e $j2 é igual a ".($j1 - $j2);
            echo  "<br>A multiplicação entre $j1 e $j2 é igual a ".($j1 * $j2);
            echo  "<br>A divisão entre $j1 e $j2 é igual a ".($j1 / $j2);
            echo  "<br>O resto da divisão entre $j1 e $j2 é igual a ".($j1 % $n2);
        ?>  
    </div>
    <div>
        <h4>Funções matematicas</h4>
        <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<h5>Valores recebidos: $v1 e $v2</h5>";
            echo "O Valor absoulto de $v1 é " .abs($v1);
            echo "<br/>O Valor absoulto de $v1<sup>$v2</sup> é " .pow($v1, $v2);
            echo "<br/>A raiz de $v1 é". sqrt($v1);
            echo"<br/>O valor de $v2 dividido por três arredondado é: ".round(($v2/3));
            echo "<br/>A parte inteira $v2 dividido por três arredondado é: ".intval(($v2/3));
            echo "<br/>A valor em moeda de $v2 é R$" . number_format($v2,2);
            /*numero de casas decimais, nesse ex são duas, o proximo é para exibir uma virgula, depois uso o "." se quiser dividir milhares*/

        ?>
    </div>
</body>
</html>