<?php

$num = 2039;
$revnum = 0;
while ($num != 0)
{
$revnum = $revnum * 10 + $num % 10;
$num = (int)($num / 10); 
}
 
echo "Reverse number: $revnum";

?>