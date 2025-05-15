
<?php

//WAP to create a table


$conn = new mysqli("localhost", "root", "", "college");

if ($conn->connect_error) {
    die("Connection Failed");
} else {
    echo "Connection Success";
}

$sql = "create table students (id int(3), Name varchar(25), Dept varchar(25))";

if ($conn->query($sql)) {
    echo "\nTable Created";
} else {
    echo "Table Creation Failed" . $conn->error;
}

$conn->close()

?>