<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>Basket</title>

  <!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del
   calendario. Ogni array avrà una squadra di casa e una squadra ospite,
   punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
   Stampiamo a schermo tutte le partite con questo schema.
   Olimpia Milano - Cantù | 55-60-->

   
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
