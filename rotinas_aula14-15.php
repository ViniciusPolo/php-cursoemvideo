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
        <h2>Função sem retorno</h2>
       <?php
            function soma ($a,$b){
                $s = $a + $b;
                echo "A soma é $s";
            }
            $x=5;
            $y=8;
            soma($x,$y)


       ?>
       <a class="botao" href="for_ex)primo.html">Voltar</a>
    </div>
    <div class="form">
        <h2>Funcao com retorno</h2>
       <?php
            function adicao ($a, $b){
                //a mesma funcao não pode estar declarada na mesma pagina.
                $s = $a + $b;
                return $s;
            }

            $x=5;
            $y=8;
            $r= adicao($x, $y);
            echo "A soma entre $x e $y = $r";


       ?>
       <a class="botao" href="for_ex)primo.html">Voltar</a>
    </div>
    <div class="form">
        <h2>Função com get_args e num args</h2>
       <?php
            function args (){
                $p=func_get_args();//COloca todos argumentos dentro de um vetor.
                $tot=func_num_args();//Retorna a quantidade de argumentos dentro de variavel
                $s=0;
                for($i=0;$i<$tot;$i++){
                    $s+=$p[$i];
                }
                return $s;
            }

            $r = args (3,5,2,45);
            echo "A soma dos valores é $r";
            


       ?>
    </div>
    <div class="form">
        <h2>Prametros por referência</h2>
        <h3>Parametros sem referência</h3>
       <?php
          function teste($x){
              $x+=2; 
              echo "O valor de X é $x<br>";
          }  
          $a=3;
          teste($a);
          echo "O valor de A é $a"//Não alterou a variavel fora da função, somente dentro
       ?>
       <h3>Parametros por referência</h3>
       <?php
          function teste2(&$x){
              $x+=2; 
              echo "O valor de X é $x<br>";
          }  
          $a=3;
          teste2($a);
          echo "O valor de A é $a"//neste caso alterou a variavel fora da função
       ?>
    </div>
    <div class="form">
        <h2>Include</h2>
       <?php
        include "funcao.php"; //inclui o arquivo, caso não encontre, segue o fluxo
        ola();
        Mostrar($a);

       ?>
    </div>
    <div class="form">
        <h2>Require</h2>
       <?php
        require "funcao2.php";  //inclui o arquivo, caso não o encontre bloquea o processo.
        //include once executa somente uma vez, funciona também com o require
        ola();
        Mostrar($a);
        
       ?>
    </div>
</body>
</html>