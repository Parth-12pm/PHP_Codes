<!--  Reverse of a Number Using Loop -->

<?php
$number = 12345;
$reverse = 0;

while ($number > 0) {
    $remainder = $number % 10;
    $reverse = ($reverse * 10) + $remainder;
    $number = (int)($number / 10);
}
echo "Reversed number is: $reverse";
?>