<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title></title>
  <?php
  //quarto esercizio
  //Creare una variabile con un paragrafo di testo.
  //Visualizzare a schermo il paragrafo con la relative lunghezza e
  //sostituire la badword passata in GET con tre *.
  //(per visualizzare il risultato scrivere http://localhost:8888/?val=(parola del testo tipo dolor))
  $val = $_GET["val"];
  $pr = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. " ;
  $prLng = strlen($pr);
  $prSost = str_replace($val, "***" ,$pr );
   ?>
 </head>
 <body>
  <p><?php echo $val; ?></p>
  <p><?php echo $pr; ?></p>
  <p><?php echo $prLng ; ?></p>
  <p><?php echo $prSost; ?></p>
 </body>
</html>
