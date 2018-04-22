<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php

  include_once 'vehiculos.php';
  $mazda=new Coche();
  $pegaso=new Camion();

  echo "El Mazda tiene " . $mazda->ruedas." ruedas <br>";
  echo "El Pegaso tiene " . $pegaso->ruedas. " ruedas <br>";

  $mazda->establece_color("red","mazda");

  $pegaso->establece_color("blue","pegaso");
  $pegaso->arrancar();
  

  ?>




</body>
</html>
