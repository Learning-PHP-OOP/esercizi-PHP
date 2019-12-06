<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>Basket</title>

  <?php

   $partite = [

   [
    'Olimpia Milano',
   'Cantù',
    55,
    60
   ],
   [
    'Varese',
    'Benetton',
    22,
    53
   ],
   [
    'Catania',
    'Siracusa',
     55,
     60
    ],
   ];
  ?>

 </head>
 <body>

  <?php
   //var_dump($partite);
   ?>

   <h2> Risutati partite di Basket : </h2>
   <br><br>

  <?php

   foreach ($partite as $partita) {
    echo $partita[0].' - '.$partita[1].'|'
         .$partita[2].' - '.$partita[3];

         ?> <br> <?php
   };

   ?>

 </body>
</html>
