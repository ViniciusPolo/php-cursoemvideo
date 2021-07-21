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
       <form action="./do_while_aula12_ex_tab.php">
       <select type='number' name='tab'>
       <?php
       
       for($i=0;$i<=10;$i++){
           echo "<option>$i</option>";
       }
       ?>
        <input type="submit" value="Tabuada"></form>
        
    </div>
</body>
</html>