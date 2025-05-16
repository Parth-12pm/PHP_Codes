 <!-- Average of First Ten Natural Numbers Using for Loop -->

<?php
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}
$average = $sum / 10;
echo "Average of first 10 natural numbers is: $average";
?>