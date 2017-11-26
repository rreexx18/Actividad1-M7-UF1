<?php
  session_start();

      if (isset($_POST)&&
          !empty($_POST['numero'])){
            $numero=htmlspecialchars($_POST['numero']);
            $array=[];
            $a=0;
            $i=1;
            while ($i <= $_POST['numero']) {
              if($_POST['numero']%$i==0){
                $array[$a]=$i;
                $a++;
              }
              $i++;
            }

          }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type?"text/css" href="../../css/style.css">
    <title>Act 1</title>
  </head>
  <body>

    <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
      <p>Numero:<input type="number" name="numero"></p>
      <p><input type="submit" value="Ok"></p>
    </form>

    <?php
      for($i=0;$i<count($array);$i++){
        echo $array[$i].', ';
      }
    ?>

  </body>
</html>
