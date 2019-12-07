<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>Funzioni stringhe</title>

 </head>
 <body>

  <?php
  $str = 'hello world    ';
  $lengh = strlen($str); //lunghezza stringa
  $exp = explode(" " , $str);// creerà un array dividendo su un delimitatore una stringa
  $trm = trim($str); //eliminazione spazi
  $rpl = str_replace(" ","-", $str);//sostituzione valore in questo caso il "-" al posto dello "spazio"
  $pos = strpos($str, "world");//cerca una parola e torna la posizione
  $ucf = ucfirst($str);//rende maiuscolo il primo carattere di una parola
  $ucw = ucwords($str);//rende maiuscolo il primo carattere di ogni parola
  ?>

  <h3>
   Output :
   <?php
   echo "<br><br>";
   echo "<b>Lunghezza stringa : <b><br>";
   var_dump($lengh);
   echo "<br><br>";
   echo "<b>Dettagli array: <b><br>";
   var_dump($exp);
   echo "<br><br>";
   echo "<b>Eliminazione spazi dalle stringhe : <b><br>";
   var_dump($trm);
   echo "<br><br>";
   echo "<b>Sostituzione valore nelle stringhe : <b><br>";
   var_dump($rpl);
   echo "<br><br>";
   echo "<b>Cerca la parola e torna la posizione : <b><br>";
   var_dump($pos);
   echo "<br><br>";
   echo "<b>Rende maiuscolo il primo carattere di una parola: <b><br>";
   var_dump($ucf);
   echo "<br><br>";
   echo "<b>Rende maiuscolo il primo carattere di ogni parola : <b><br>";
   var_dump($ucw);
   ?>
  </h3>






 </body>
</html>
