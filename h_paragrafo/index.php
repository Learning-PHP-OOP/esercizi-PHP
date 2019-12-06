<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>Paragrafo</title>
  <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
  Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un
  nuovo paragrafo.-->
  <?php
   $pr = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

    $multiPr = explode(".", $pr );
  ?>

 </head>
 <body>

 <?php
  echo $pr  . "<br><br><br>";
  foreach ($multiPr as $value) {
   echo"<p>".$value . "<p>";
  }
  ?>

 </body>
</html>
