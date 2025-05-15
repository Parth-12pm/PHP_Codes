<?php

//WAP to update record 

$conn = new mysqli("localhost", "root", "", "college");

if ($conn->connect_error) {
    die("Connection failed");
} else {
    echo "Connection Success";
}


$sql = "update students set Name = 'parth', Dept = 'CO' where id = 1 ";

if ($conn->query($sql)) {
    echo "record updated";
} else {
    echo "update failed" . $conn->error;
}

$conn->close();
