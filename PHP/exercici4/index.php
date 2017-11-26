<?php
  session_start();

  if  (isset($_POST['atacant'])){
        dado1 = echo rand(1,6);
    }
    if  (isset($_POST['defensor'])){
        dado2 = echo rand(1,6);
    }
    result1 = 0;
    result2 = 0;
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../../css/style.css">
     <title>Actividad 4</title>
   </head>
   <body>

     <h1>Juego de dados</h1>

    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
        <input type="button" name="atacant" value="Jugador atacant"> = <?php if (isset($_POST['atacant'])){ echo dado1; } ?> 
        <input type="button" name="defensor" value="Jugador defensor"> = <?php if (isset($_POST['defensor'])){ echo dado2; } ?>
        <?php if (dado1 > dado2){ ?>
        Puntuacio atacant: <input type="text" name="punt_atac" value="<?php echo dado1-dado2; ?>">
        <?php }else{ ?>
        Puntuacio defensor: <input type="text" name="punt_def" value="<?php echo dado2-dado1; ?>">
        <?php } ?>
    </form>
   </body>
 </html>