<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <link rel="stylesheet" href="./aulaPHP/_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>printf</h2>
        <?php
            $p ="Leite";
            $pr = 4.50;
            printf ("O %s custa R$ %.2f",$p,$pr);
            /*
            %d valor decimal(positivo ou negativo)
            %u valor decimal sem sinal, somente positivo
            %f valor real(float)
            %s string
            */
        ?>
    </div>
    <div>
        <h2>print_r</h2>
        <?php
            $v[0]=1;
            $v[1]=5;
            $v[2]=8;
            print_r($v);//exibe o vetor, util para testes
            echo "<br>";
            $v2 = array(9,2,8,7,5,4);
            print_r($v2);
            echo "<br>";
            var_dump($v2);
            echo "<br>";
            var_export($v);
        ?>
    </div>
    <div>
        <h2>wordwrap</h2>
        <?php
            $txt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quo libero recusandae facere quasi excepturi molestiae aliquam incidunt. Temporibus obcaecati ut eius esse hic eum ducimus fugit exercitationem? Voluptas, eaque."  ;
            $t=wordwrap($txt, 20, "<br/>\n", false);/*Quebra de 20 em 20 caracteres, na pagina com o <br> e no codigo com o \n, o false não quebra, passa se necessário, o true quebra de qualquer maneira*/
            echo $t;
        ?>
    </div>
    <div>
        <h2>strlen - String length</h2>
        <?php
            $txt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quo libero recusandae facere quasi excepturi molestiae aliquam incidunt. Temporibus obcaecati ut eius esse hic eum ducimus fugit exercitationem? Voluptas, eaque."  ;
            $t=strlen($txt);//calcula quantidade de letras e espaços da string
            echo $t;
        ?>
    </div>
    <div>
        <h2>Trim</h2>
        <?php
            $txt = "       Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quo libero recusandae facere quasi excepturi molestiae aliquam incidunt. Temporibus obcaecati ut eius esse hic eum ducimus fugit exercitationem? Voluptas, eaque.   "  ;
            $t=trim($txt);/*Elimina os espaços do começo e do final, matem os do meio, ltrim elimina somente os do fim, rtrim elimina os espaços do fim*/ 
            echo $t; 
        ?>
    </div>
    <div>
        <h2>str_word_count</h2>
        <?php
            $txt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quo libero recusandae facere quasi excepturi molestiae aliquam incidunt. Temporibus obcaecati ut eius esse hic eum ducimus fugit exercitationem? Voluptas, eaque."  ;
            $t=str_word_count($txt,0);/*Conta as palavras do string
            Com zero conta as palavras
            Com 1 Cria um vetor com as palavras
            Com 2 Cria um vetor mantendo as palavras dentros de suas respsctivas posições*/ 
            print_r ($t);
            echo "<br/>";
            $a=str_word_count($txt,1);
            print_r ($a); 
        ?>
    </div>
    <div>
        <h2>explode</h2>
        <?php
            $site="Curso em video";
            $vetor=explode(" ",$site);
            print_r($vetor);
            //explode divide em palavras
            //str_split divide em letras
            //implode e join coloca o caraceter destacado "#" entre as palavras.
        ?>
    </div>
    <div>
        <h2>chr</h2>
        <?php
            $letra = chr(67);
            echo "letra 67 é $letra";
        ?>
    </div>
    <div>
        <h2>ord</h2>
        <?php
            $letra = "C";
            $cod = ord($letra);
            echo "letra C é codigo $cod";
        ?>
    </div>
    <div>
        <h2>srtolower</h2>
        <?php
            $nome = "Vinicius Roberto Polo";
            echo "Seu nome é ".strtolower($nome);
            //tudo em minusculas
        ?>
    </div>
    <div>
        <h2>srtoupper</h2>
        <?php
            $nome = "Vinicius Roberto Polo";
            echo "Seu nome é ".strtoupper($nome);
            //TUDO EM MAIUSCULAS
        ?>
    </div>
    <div>
        <h2>ucfirst</h2>
        <?php
            $nome = "vinicius roberto polo";
            echo "Seu nome é ".ucfirst($nome);
            //Coloca somente a primeira em maiuscula "upper case first"
            
        ?>
    </div>
    <div>
        <h2>ucwords</h2>
        <?php
            $nome = "vinicius roberto polo";
            echo "Seu nome é ".ucwords($nome);
            //Coloca somente a primeira de cada palavra em maiuscula "upper case first"
            
        ?>
    </div>
    <div>
        <h2>strreverse</h2>
        <?php
            $nome = "vinicius roberto polo";
            echo "Seu nome é ".strrev($nome);
            //Coloca somente a primeira de cada palavra em maiuscula "upper case first"
            
        ?>
    </div>
    <div>
        <h2>strpos</h2>
        <?php
            $nome = "vinicius roberto polo";
            $pos = strpos($nome, "polo");
            echo "A string foi encontrada na posição ".$pos;
            //Encontra a posição onde a string esta, respeita low case and upper case
            
        ?>
    </div>
    <div>
        <h2>strpos</h2>
        <?php
            $nome = "vinicius roberto polo";
            $pos = strpos($nome, "polo");
            echo "A string foi encontrada na posição ".$pos;
            //Encontra a posição onde a string esta, respeita low case and upper case
            
        ?>
    </div>
    <div>
        <h2>strpos ignore</h2>
        <?php
            $nome = "vinicius roberto Polo";
            $pos = stripos($nome, "polo");
            echo "A string foi encontrada na posição ".$pos;
            //Ignora as maiusculas e procura mesmo assim.
        ?>
    </div>
    <div>
        <h2>substr_count</h2>
        <?php
            $nome = "vinicius roberto Polo, Angelica Polo, Erika Polo, Guilherme Polo";
            $cont = substr_count($nome, "Polo");
            echo "A string foi encontrada ".$cont." vezes";
            //Conta quantas vezes a string foi encontrada.
        ?>
    </div>
    <div>
        <h2>substr</h2>
        <?php
            $site = "Curso em Video";
            $cont = substr($site, 0,8);
            echo "A string da letra 0 até a 8 é ".$cont;
            //Buscou da letra zero até a letra 8
            // um valor vai buscar somente aquela letra da posição
        ?>
    </div>
    <div>
        <h2>str_pad</h2>
        <?php
            $site = "Curso em Video";
            $novo = str_pad($site, 30," ",STR_PAD_CENTER);
            print("O curso é $novo é muito bom");
            //Buscou da letra zero até a letra 8
            // um valor vai buscar somente aquela letra da posição
        ?>
    </div>
    <div>
        <h2>str_repeat</h2>
        <?php
            $novo = str_repeat("PHP ", 5);
            print("O curso é $novo é muito bom");
            
        ?>
    </div>
    <div>
        <h2>str_replace</h2>
        <?php
            $frase = "Gosto de estudar PHP";
            $novo = str_ireplace("PHP", "Matematica", $frase);
            echo $novo
            //replace tem que estar identico
            //ireplace ignora maiusculas
            
        ?>
    </div>
</body>
</html>