
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <!--Afficher ces informations dans le navigateur en utilisant `echo` et `''`.-->
  <?php
   $monNom="abdeladim";
   $monPrenom="BOUKRIM";
   $monAge=25;

   echo  "$monNom  $monPrenom  $monAge" ;


   ?>



  <!--Afficher ces informations dans le navigateur en utilisant le syntaxe Nowdoc-->
   <?php
    $monNom="abdeladim";
    $monPrenom="BOUKRIM";
    $monAge=25;

    echo  '$monNom  $monPrenom  $monAge' ;


    ?>


    <!--  la différence que on utilisant Heredoc pour afficher le valeur de variable.
  et  Nowdoc pour afficher variable -->

</body>
</html>
