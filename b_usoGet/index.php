<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title></title>
  <?php
  //secondo esercizio uso di $_GET commentato per far ordine
  //$userName = $_GET["name"];
  //sotto scrivo : <?php var_dump($_GET);(qui
  //chiudo il tag php) non lo metto perchè si scommenta)
  //<h1>
  // La mia fidanzata è :
  // <?php echo $userName; (chiusura tag php)
  //</h1>
  //sul link metto chiave=valore , chiave in  uesto caso è "name" e il valore
  //lo passo io tipo : http://localhost:8888/&name=minnie.
   ?>
   <?php
   //terzo esercizio
    //Passare due argomenti allo script: Nome e Cognome.
    //Lo script dovrà salutare l’interlocutore
    $myName= "Daenerys";
    $mySurname = "Targarien";
    ?>
 </head>

 <body>
  <h1><?php echo "Hello ".$myName." ".$mySurname ?></h1>
 </body>
</html>
