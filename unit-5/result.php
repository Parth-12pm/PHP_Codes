<?php

$rollno = $_POST['rollno'] ?? null;
$delete_rollno = $_POST['delete_rollno'] ?? null;


$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "create database if not exists my_db";
$conn->query($sql);

mysqli_select_db($conn, "my_db");

$sql = "create table if not exists result_table(rollno int(3),status varchar(25))";
$conn->query($sql);

if ($rollno !== null) {

    $sql = "SELECT status FROM result_table WHERE rollno = $rollno";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Result Status : " . $row['status'];
    } else {
        echo "No result found for Roll No: " . $rollno;
    }
}


if ($delete_rollno !== null) {
    $sql = "delete from result_table where rollno= $delete_rollno";

    if ($conn->query($sql)) {
        echo "Record Deleted";
    } else {
        echo "Failed to delete";
    }
}

$conn->close();
