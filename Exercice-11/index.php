<?php
function youcode($age){
 if ($age < 18){
   echo "Désolé l'age mini est 18 ans ";
 } elseif ($age >= 18 && $age <= 35) {
    echo "Bienvenu a youcode ";
} elseif ($age > 35){
  echo "Désolé l'age maxi est 35 ans " ;
}
}
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = (int)$_POST['age'];
  youcode($age);
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
  </head>
  <body>

    <form  action="index.php" method="POST">
      <label>Nom: </label>
      <input type="text" name="name" value=""><br/> <br/>

      <label>age:</label>
      <input type="text" name="age" value=""><br/><br/>

      <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>
