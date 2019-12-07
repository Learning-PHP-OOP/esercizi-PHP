<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>GET</title>

  <!--SECONDO ESERCIZIO USO DI : $_GET
  ______________________________________
  //TO REMEMBER : sul link metto chiave=valore , chiave in  uesto caso è
  "name" e il valore lo passo io tipo : http://localhost:8888/&name=minnie.


   $userName = $_GET["name"];

   output :
   <?php var_dump($_GET);?>
   <h1>La mia fidanzata è : <?php echo $userName; ?></h1>



   TERZO ESERCIZIO
   _______________________________________
    Passare due argomenti allo script: Nome e Cognome.
    //Lo script dovrà salutare l’interlocutore-->

    <?php
    $myName= "Daenerys";
    $mySurname = "Targarien";
    ?>

 </head>

 <body>
  <h1><?php echo "Hello ".$myName." ".$mySurname ?></h1>
 </body>
</html>
