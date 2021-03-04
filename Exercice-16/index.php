<?php
 //(ex : 28/02/2021)
echo "1:  ".  date("d/m/Y") . "<br>". "<br>";
 //(ex : 28-02-21)
 echo "2: ".  date("d-m-y") . "<br>". "<br>";

setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
echo "3". strftime("%A %d %B %Y" ). "<br>". "<br>"; 


//(ex : mardi 2 août 2020)
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
echo "4: " . (strftime("%A %d %B %Y" ,mktime(15, 0, 0, 8, 2, 2020))). "<br>". "<br>"; 

$day=strtotime("2021-03-04");
$oldDate=strtotime("2020-05-16");
$days= $day - $oldDate;
echo "5:days between two date: " . floor($days/(60*60*24)). "<br>". "<br>";

echo "6: " . date("t",strtotime("-13 month")). "<br>". "<br>";
// echo date("Y", strtotime("2011-01-07")); // gives 201101

echo "7: ".date('d-m-Y' , time()+(20*24*60*60)). "<br>". "<br>";

echo "8: " . date('d-m-Y', time()-(22*24*60*60)). "<br>". "<br>";


 


?>