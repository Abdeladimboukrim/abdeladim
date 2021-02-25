<?php
        if(isset($_GET['submit'])) {
          $name = $_GET['name'];
          $poidKg = $_GET['poidKg'];
          $tailleCm = $_GET['tailleCm'];
          $tailleM= $tailleCm/100;
          $hauteurCArre= $tailleM**2;
          $valeurImc=$poidKg/$hauteurCArre;

           echo " Bonjour,  $name  le résultat de l'IMC: $valeurImc";

        }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form  action="index.php" method="GET">
      <label>Nom: </label>
      <input type="text" name="name" value=""><br/> <br/>
      <label>Poid en Kg:</label>
      <input type="text" name="poidKg" value=""><br/><br/>
      taille en cm:
      <input type="text" name="tailleCm" value=""> <br/><br/>
      <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>
