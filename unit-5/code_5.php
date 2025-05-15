<?php

//WAP to delete a Record 

$conn = new mysqli("localhost", "root", "", "college");

if ($conn->connect_error) {
    die("Connection failed");
} else {
    echo "Connection success";
}

$sql = "delete from students where id=1";

if ($conn->query($sql)) {
    echo "Record deleted";
} else {
    echo "delete failed";
}

$conn->close();

