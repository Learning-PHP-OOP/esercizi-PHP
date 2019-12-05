<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title></title>
 </head>

 <body>

 <?php
 //primo esercizio stampa nome php
   $miaVar = "Pippo";
   $miavar = "Topolino";

   //secondo esercizio uso di $_GET commentato per far ordine
   //$userName = $_GET["name"];
   //sotto scrivo : <?php var_dump($_GET);(qui
   //chiudo il tag php non lo metto perchè si scommenta)

   //terzo esercizio
    //Passare due argomenti allo script: Nome e Cognome.
    //Lo script dovrà salutare l’interlocutore
    $myName= "Daenerys";
    $mySurname = "Targarien";

   //quarto esercizio
   //Creare una variabile con un paragrafo di testo.
   //Visualizzare a schermo il paragrafo con la relative lunghezza e
   //sostituire la badword passata in GET con tre *.
   $val = $_GET["val"];
   $pr = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. " ;
   $prLng = strlen($pr);
   $prSost = str_replace($val, "***" ,$pr );

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
    <!--primo esercizio -->
  <h1>
   I miei amici sono :
   <?php echo $miavar." e ".$miaVar; ?>
   <br>

   <!--secondo esercizio -->
   La mia fidanzata è :
   <?php echo $userName; ?>
   <br>

   <!--terzo esercizio -->
   <?php echo "Hello ".$myName." ".$mySurname ?>
   <br>
   </h1>

   <!--quarto esercizio -->
   <p><?php echo $val; ?></p>
   <p><?php echo $pr; ?></p>
   <p><?php echo $prLng ; ?></p>
   <p><?php echo $prSost; ?></p>

   <!--quinto esercizio -->
   <!-- SOLUZIONE 1 -->
   <h1>
     <?php
       if ($ok) {
         echo "ok";
       } else {
         echo "ko";
       }
      ?>
   </h1>
   <!-- SOLUZIONE 2 -->
   <?php
     if ($ok) {
       ?>
         <h1>ok</h1>
       <?php
     } else {
       ?>
         <h2>ko</h2>
       <?php
     }
   ?>


 </body>
</html>
