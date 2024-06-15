<?php
$x = 50;
$y = 50;
$z = 25;  /*The spaceship operator is used for combined comparison. It returns:
    0 if the values on both sides are equal.
    1 if the value on the left is greater.
    -1 if the value on the right is greater.*/
echo $x <=> $y;
echo "
\n";
echo $x <=> $z;
echo "
\n";
echo $z <=> $y;
echo "
\n";
// We can do the same for Strings
$x = "Ram";
$y = "Krishna";
echo $x <=> $y;
echo "
\n";
echo $x <=> $y;
echo "
\n";
echo $y <=> $x;
?>