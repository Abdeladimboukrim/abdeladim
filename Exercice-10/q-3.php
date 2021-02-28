<?php
for ($i = 1; $i <=100 ; $i++){
  if ($i%3==0 && $i%5==0) {
    echo " $i fizzbuzz<br>";
  }
  elseif ($i%3==0) {
    echo "$i fizz<br>";
  }
  elseif ($i%5==0) {
    echo "$i buzz<br>";
  }

}
?>
