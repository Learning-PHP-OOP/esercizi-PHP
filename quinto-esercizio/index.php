<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title></title>
  <?php
  //quinto esercizio
  // Controllare che la mail passata in GET sia ben formata e contenga un punto
  //e una chiocciola. Se è corretta stampare un div che contenga “OK”,
  //altrimenti che contenga “KO”.
  $email = $_GET["mail"];
  $ok = true;

  if (!strpos($email,"@") || !strpos($email,".")){
   $ok = false;
  }
   ?>
 </head>
 <body>

  <!-- SOLUZIONE 1 -->
  <h1>
    <?php
      if ($ok) {
        echo "Risultato prima soluzione : ok";
      } else {
        echo "Risultato prima soluzione : ko";
      }
     ?>
  </h1>

  <!-- SOLUZIONE 2 -->
  <?php
    if ($ok) {
      ?>
        <h1>Risultato seconda soluzione : ok</h1>
      <?php
    } else {
      ?>
        <h2>Risultato seconda soluzione : ko</h2>
      <?php
    }
  ?>

 </body>
</html>
