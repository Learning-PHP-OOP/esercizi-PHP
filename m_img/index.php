<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>img</title>
  <link rel="stylesheet" href="/style.css">
  <!--Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ
    Ad ogni refresh della pagina visualizzare una pubblicità a schermo,
    tenendo conto che possono essere sorteggiate solo quelle is_active
    true.-->

    <?php
    include "data.php";
    include "helper.php";

    $ad = getRandomActiveElem($ads);
    ?>

 </head>

 <body>
  <!-- <div class="container">
   //(tag apertura php )
      // print first element of $ads
     // $ad = $ads[0]
     // echo  $ad["image_path"] . "<br>"
       //   . $ad["link"] . "<br>"
       //   . $ad["is_active"] . "<br>";
    //(tag chiusura php)
  </div>-->

  <a href="<?php echo $ad['link'] ?>">
    <span><?php echo $ad['link'] ?></span><br>
    <img src="<?php echo $ad['image_path'] ?>" alt="">
  </a>
  
</body>
</html>
