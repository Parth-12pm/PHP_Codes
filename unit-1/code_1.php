<!-- WAP to Find factorial of Number  -->

<html>

<body>
    <form method="post" action="code_1.php">
        <label>Enter a Number</label><br>
        <input type="number" name="number"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php

$num = $_POST['number'];
$result = 1;
for ($i = 1; $i <= $num; $i++) {
    $result *= $i;
}

echo "Factorial of Number :" . $result;
