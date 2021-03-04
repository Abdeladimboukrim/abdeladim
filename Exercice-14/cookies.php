
<?php

$name =  $_POST['name'];
setcookie($name, time() + (86400 * 30), "/");
?>
<?php
if(!isset($_COOKIE[$name])) {
     echo "zero Cookie !";
} else {
     echo " bienvenue !" . $name ;
}
?>
<form action="cookies.php" method="POST">
<label for=""> enter voter nom:</label>
<input type="text" name="name">
<input type="submit" name="submit" value="enter">
</form>