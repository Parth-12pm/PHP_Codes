<!-- WAP to find Prime Number -->

<?php

if (isset($_POST['submit'])) {
    $num = $_POST['number'];
    if ($num <= 1) {
        echo $num . " is not a prime number";
    } else {
        $prime = true;
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $prime = false;
                break;
            }
        }
        if ($prime) {
            echo $num . " is a prime number";
        } else {
            echo $num . " is not a prime number";
        }
    }
}

?>

<form method="post">
    <label>Enter a Number</label>
    <input type="number" name="number"><br>
    <input type="submit" name="submit" />
</form>