<!-- WAP to find Odd and Even  -->

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

$num = $_POST['number'];

if ($num % 2 == 0) {
    echo $num . " is Even ";
} else {
    echo $num . " is odd ";
}

?>