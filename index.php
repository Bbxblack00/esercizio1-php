<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php

      $rndNumrs = [];

      for ($i=0; $i < 15; $i++) {

        $rnd = rand(1, 100);

        echo '<h1>' . $rnd . '</h1>';
      }



   ?>
  </body>
</html>
