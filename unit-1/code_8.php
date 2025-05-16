<!-- WAP to find Prime Number -->

<html>

<body>
    <form action="code_2.php" method="post">
        <label>Enter a Number</label>
        <input type="number" name="number"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php

if (isset($_POST['number'])) {
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