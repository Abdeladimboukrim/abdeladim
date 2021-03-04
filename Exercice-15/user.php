<?php


if(isset($_POST['enter'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    
 echo "Mr/Mme: " . $nom . " ". $prenom . '</br>'; 
}

$url = pathinfo(__FILE__);
echo $url['basename'] . "<br>";
echo $url['extension'] . "<br>";

?>
<a href="index.php">
    <button name="Retour">Retour</button>
</a>