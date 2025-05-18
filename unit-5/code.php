<?php

//WAP to Create Database


$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    die("Connection Failed");
} else {
    echo "Connection Success";
}

$sql = "create database if not exists college";

if ($conn->query($sql)) {
    echo "\nDatabase Created";
} else {
    echo "Database creation Failed" . $conn->error;
}

mysqli_select_db($conn, "college");

$conn->close();
