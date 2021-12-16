<!-- Escribe una lista en un documento HTML usando un Array en PHP -->
<?php

$belen = ['Maria','Jose','Jesus', 'Burro', 'Buey', 'pastor'];


?>
<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
  </head>

  <body>


    <?php

    foreach($belen as $valor){

        echo '<li>'.$valor.'</li>';
    }
?>

 </body>
</html>