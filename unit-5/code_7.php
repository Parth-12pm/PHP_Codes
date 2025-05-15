<!-- (d) Write a PHP program to count total number of rows in the database table. -->

<?php

$conn = new mysqli("localhost", "root", "", "college");

if ($conn->connect_error) {
    die("Connection failed");
} else {
    echo "Connection success" . "<br>";
}

$count = null;

$sql = "Select * from students";
$result = $conn->query($sql);

if ($result) {
    $count = $result->num_rows;

    echo "Number of Rows : " . $count;
} else {
    echo "No records";
}

$conn->close();

?>