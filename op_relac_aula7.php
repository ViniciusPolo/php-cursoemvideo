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
        <h3>Operador Unário</h3>
        <?php
           /*operador unário expressão ? verdadeiro: falso
           $maior = $a>$b?$a:Sb escpressão se, bem similar ao excel*/
           
           $n1 = $_GET["a"];
           $n2 = $_GET["b"];
           $tipo = $_GET["op"];
           echo "Os valores passados forma $n1 e $n2.<br>";
           $r = ($tipo == "l" ) ? $n1+$n2 : $n1*$n2;
           echo "O resultado será $r"
        ?>
        </div>
        <div>
        <h3>Identico</h3>
        <?php
           $a = 3;#number
           $b = "3";#string
           $r = ($a == $b )? "Sim" : "Não"; # == igual
           echo "As variaveis são iguais: $r";
           $k = ($a === $b )? "Sim" : "Não";# ===identico
           echo "<br>As variaveis são iguais e do mesmo tipo: $k"
        ?>
        </div>
        <div>
        <h3>Exemplo se</h3>
        <?php
           $nota1 = $_GET["n1"];
           $nota2 = $_GET["n2"];
           $media = (($nota1 + $nota2)/2)>6?"Aprovado":"Reprovado";
           echo "O aluno está $media"
           # and &&, or ||, xor (ou exclusivo, um ou outro, nunca os dois)
        ?>
        </div>
        <div>
        <h3>Exemplo com and</h3>
        <?php
           $ano = $_GET["an"];
           $idade = 2021 - $ano;
           echo "Quem nasceu em $ano tem $idade anos.<br>";
           $tipo = ($idade>=18 and $idade<65)?"Você é obrigado a votar":"Você não é obrigado a votar";
           echo $tipo
           
        ?>
        </div>
       
        
</body>
</html>