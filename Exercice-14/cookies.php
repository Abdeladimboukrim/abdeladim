<!DOCTYPE html>
<?php

$name = "ABDELADIM";
setcookie($name, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$name])) {
     echo "zero Cookie !";
} else {
     echo " bienvenue !" . $name ;

}
?>



</body>
</html>
