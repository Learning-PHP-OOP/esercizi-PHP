<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title></title>
  <!--Creare un array di array. Ogni array figlio avrà come chiave una data in
   questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di
   post associati a quella data.
   Stampare ogni data con i relativi post -->

   <?php

   $posts = [

       '10/01/2019' => [
           [
               'title' => 'Post 1',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 1'
           ],
           [
               'title' => 'Post 2',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 2'
           ],
       ],
       '10/02/2019' => [
           [
               'title' => 'Post 3',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 3'
           ]
       ],
       '15/05/2019' => [
           [
               'title' => 'Post 4',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 4'
           ],
           [
               'title' => 'Post 5',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 5'
           ],
           [
               'title' => 'Post 6',
               'author' => 'Michele Papagni',
               'text' => 'Testo post 6'
           ]
       ],
   ];
   ?>
 </head>
 <body>
  <?php

  //var_dump($posts);
  //echo "<br>......................<br>";

   foreach ($posts as $date => $datePosts) {
    //var_dump($date);
    //echo "<br>";

    //var_dump($datePosts);
    //echo "<br>";

    foreach ($datePosts as $posts) {
     echo $date ."<br>";
     echo $posts["title"]."<br>" . $posts["text"]
     ."<br>".$posts["author"]."<br><br>";
    }
   }
   ?>

 </body>
</html>
