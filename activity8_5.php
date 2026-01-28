<?php
$a = fopen("krish.txt", "r");
$b = fread($a, 3);
$c = fread($a, 2);
$d = $b + $c;
echo $d. "<br>";
fclose($a);
?>
