<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <style media="screen">

    body{
      display: flex;
      justify-content: center;
      align-items: center;

      background-color: darkorange;
    }

    .cl-th{
      padding: 15px;
      background-color: gray;
    }

    .cl-pm{
      padding: 15px;
      background-color: green;
    }

    </style>
    <title></title>
  </head>
  <body>
      <?php

      // Creare un array con 15 numeri casuali, tenendo conto
      // che l'array non dovrà contenere lo stesso numero più di una volta

      // $rndNumrs = [];

      // for ($i=0; $i < 15; $i++) {
      //
      //   $rnd = rand(1, 100);
      //
      //
      // }


      // while (count($rndNumrs) < 15) {
      //
      //   $rnd = rand(1, 100);
      //
      //   if(in_array($rnd, $rndNumrs)){
      //
      //     $rndNumrs []= $rnd;
      //
      //   }
      // }
      //
      // var_dump($rndNumrs)

// -----------------------------------------------------------------------------

      // Prendere un paragrafo abbastanza lungo, contenente
      // diverse frasi. Prendere il paragrafo e suddividerlo
      // in tanti paragrafi. Ogni punto un nuovo paragrafo.


      // $par = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
      //
      // $parN = str_replace('.', '.</p><p>', $par);
      //
      // echo '<p>' . $parN . '</p>';


//------------------------------------------------------------------------------

      // Utilizzare questo array: https://pastebin.com/CkX3680A.
      // Stampiamo il nostro array mettendo gli insegnanti in un
      // rettangolo grigio e i PM in un rettangolo verde.

      $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
      ];

      for ($i=0; $i < 2; $i++) {
      echo '<div class="cl-th">' . $db[0]['name'] . ' ' . $db[0]['name'] . '</div>';

      echo '<div class="cl-pm">' . $db[1][i] . '</div>';

      }

    ?>
  </body>
</html>
