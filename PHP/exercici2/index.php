<?php
  session_start();

  $apellidos1=["Abad", "Monterubio", "Mondelo", "Cortinas"];
  $apellidos2=["Jimenez", "Muñoz", "Dialga", "Hezra"];

  sort($apellidos1);
  sort($apellidos2);

  $todosapellidos = array_merge($apellidos1, $apellidos2);
  sort($todosapellidos);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Apellidos Alumnos 1o i 2o </h1>

    <?php
      for($i=0;$i<count($apellidos1);$i++){
      echo $apellidos1[$i].'<br>';}
      echo "<br>";
      for($i=0;$i<count($apellidos2);$i++){
      echo $apellidos2[$i].'<br>';}
      echo "<br>";
      for($i=0;$i<count($todosapellidos);$i++){
      echo $todosapellidos[$i].'<br>';}
    ?>

  </body>
</html>
