<?php 
$a = 80;
$b = 50;
$c = "80";

var_dump($a == $c); // Loose equality comparison
echo "\n";

var_dump($a != $b); // Not equal comparison
echo "\n";

var_dump($a <> $b); // Alternate not equal comparison
echo "\n";

var_dump($a === $c); // Strict equality comparison
echo "\n";

var_dump($a !== $c); // Strict not equal comparison
echo "\n";

var_dump($a < $b); // Less than comparison
echo "\n";

var_dump($a > $b); // Greater than comparison
echo "\n";

var_dump($a <= $b); // Less than or equal comparison
echo "\n";

var_dump($a >= $b); // Greater than or equal comparison
echo "\n";
?>  
