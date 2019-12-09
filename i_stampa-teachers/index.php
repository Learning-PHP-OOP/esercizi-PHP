<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/style.css">
  <title>teachers</title>
 </head>
 <!--Utilizzare questo array: https://pastebin.com/CkX3680A.
   Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
   e i PM in un rettangolo verde. -->

 <?php

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

 ?>

 <body>

  <div class="grey">
   <?php

   foreach ($db['teachers'] as $teachers) {
    echo '<h1>'.$teachers['name']. ''
          .$teachers['lastname'].'</h1>';
   }
    ?>
  </div>

  <div class="green">
   <?php

    foreach ($db['pm'] as $pm){
     ?>
      <h1>
       <?php echo $pm['name'] ?>
       <?php echo $pm['lastname'] ?>
      </h1>
     <?php
    }
    ?>
  </div>

 </body>
</html>
