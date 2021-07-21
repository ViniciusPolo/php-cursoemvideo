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
        <h2>Vetor/Array</h2>
       <pre>
       <?php
          $n = array(3,5,2,9);//criação do array normal
          $n[] = 7;//inclusão de valores no array
          print_r($n);//print_r serve somente para testes, para exibição devemos usar o for com echo
        ?>
        </pre>
    </div>
    <div class="form">
        Array/Range
       <pre>
       <?php
          $n = range(2,40,7);//cria um vetor que incia no 2, termina no 40 e sua progressão é 7
          print_r($n);
        ?>
        </pre>
    </div>
    <div class="form">
        For each
       <pre>
           <table border="1px"><tr>
               <?php
          $c = range(2,40,7);
          foreach($c as $v){
              echo "<td>$v</td>";
            }
            ?>
            </table>
        </pre>
    </div>
    <div class="form">
        <h2>Chaves Personalizadas</h2>
       <pre>
            <?php
           $v = array(1=>5, 3=>8, 5=>7, 8=>3);
           print_r ($v);
            ?>
        </pre>
    </div>
    </div>
    <div class="form">
        <h2>UNSET</h2>
       <pre>
            <?php
           $v = array(1=>5, 3=>8, 5=>7, 8=>3);
           print_r ($v);
           unset($v[8]);
           print_r ($v);//retirar e excluir um elemento do array
            ?>
        </pre>
    </div>
    <div class="form">
        <h2>Chaves associativas</h2>
       <pre>
            <?php
           $cad = array("nome"=>"Ana", "idade"=>"23", "peso"=>78.5);
           print_r($cad);
           $cad["fuma"]=true;
           print_r($cad);
           foreach($cad as $v => $c){
               echo "O campo $v possui o conteudo $c <br>";
           }
            ?>
        </pre>
    </div>
    <div class="form">
        <h2>Matrizes/ Vetores de Vetores</h2>
       <pre>
            <?php
           $n=array(array(2,3),
                    array(4,5),
                    array(6,7));
           print_r($n);
           $n[0][1]=$n[1][0];//substituir??
           print_r($n);
            ?>
        </pre>
    </div>
    <div class="form">
        <h2>print_r, var_dump, count, arraypush, pop, shift, unshift, sort, rsort<, arsort</h2>
       <pre>
            <?php
           $n=array("a","b","c","d");
           print_r($n);
           $n[]="o";
           var_dump($n);//mostea o tipo, mais detalhado
           echo "O vetor tem ".count($n)." elementos.";
           $t=array(5,8,4,9);
           array_push($t, 7);//outra forma de incluir 
           print_r($t);
           array_pop($t);
           print_r($t);//exclui o ultimo
           array_unshift($t, 3);//inclui um elemento no inicio do vetor e modifica o indice dos demais, o array_shift apaga do começo.
           print_r($t);
           sort($t);//ordena
           print_r($t);
           rsort($t);//ordena de forma reversa
           print_r($t);
           asort($t);//ordena os indices
           print_r($t);
           arsort($t);//ordena os indices reversa
           print_r($t);
           $u=array(2=>"A",3=>"D",4=>"C",1=>"B");
           print_r($u);
           ksort($u);//ordena os indices
           print_r($u);
           krsort($u);//ordena reverso os indices
           print_r($u);
           $x = 4;
            $y = &$x;
            $z = ++ $y;
            echo "$x Y=$y Z=$z";
            ?>
        </pre>
    </div>
    <div><?php 
   function soma($b==5, $c==4){ 
	   return $b+$c; 
   } 
   echo soma(); 
?></div>
</body>
</html>