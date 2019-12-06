<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>Accesso</title>
  <!--Passare come parametri GET name, mail e age e verificare (cercando i
  metodi che non conosciamo nella documentazione) che name sia più
  lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che
  age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti
  "Accesso negato" tipo così: http://localhost:8888/?mail=valeerr@.&name=ererere&age=3-->

  <?php
   $name = $_GET["name"];
   $mail = $_GET["mail"];
   $age = $_GET["age"];
   $access = strlen($name) > 3 && strpos($mail, ".") !== false && strpos($mail, "@") !== false && is_numeric($age);
   ?>

 </head>
 <body>

  <?php
   if ($access) {
   echo ("Accesso RIUSCITO");
   }
   else {
    echo("Accesso NEGATO");
   }

   ?>

 </body>
</html>
