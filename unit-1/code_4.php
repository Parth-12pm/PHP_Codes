 <!-- Sum of Digits of a Given Number -->



 <?php
    $number = 12345;
    $sum = 0;
    $temp = $number;

    while ($temp != 0) {
        $sum += $temp % 10;
        $temp = (int)($temp / 10);
    }
    echo "Sum of digits of $number is: $sum";
    ?>