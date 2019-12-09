<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/style.css">
  <title>alunni</title>
 </head>
 <!--Creare un array contenente qualche alunno di un'ipotetica classe. Ogni
     alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
     Stampare Nome, Cognome e la media dei voti di ogni alunno.-->

 <?php

  $students = [
           [
            "name" => "Valentin",
            "lastname" => "Giannons",
            "votes" => [ 8, 8, 9, 6 , 9]
           ],
           [
            "name" => "Sabrin",
            "lastname" => "Chiaradia",
            "votes" => [ 8, 3, 9, 6 , 7]
           ],
           [
            "name" => "Renata",
            "lastname" => "Maranci",
            "votes" => [ 8, 8, 9, 4 , 7]
           ]
        ];

 ?>

 <body>

  <?php
  
  foreach ($students as $student) {
   $votes = $student['votes'];
   $voteSum = 0 ;
   foreach ($votes as $vote) {
    $voteSum += $vote;
   }
   $voteAvg = $voteSum /count($votes);
   echo'<h1>'.$student['name']. ''
       .$student['lastname'].'-->'.$voteAvg
       .'</h1>';
  }

   ?>

 </body>
</html>
