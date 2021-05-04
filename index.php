<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php

      // Creare un array con 15 numeri casuali, tenendo conto
      // che l'array non dovrà contenere lo stesso numero più di una volta

      $rndNumrs = [];

      // for ($i=0; $i < 15; $i++) {
      //
      //   $rnd = rand(1, 100);
      //
      //
      // }


      while (count($rndNumrs) < 15) {

        $rnd = rand(1, 100);

        if(in_array($rnd, $rndNumrs)){

          $rndNumrs []= $rnd;

        }
      }

      var_dump($rndNumrs)

   ?>
  </body>
</html>
