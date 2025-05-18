<?php



$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "create database if not exists my_db";
$conn->query($sql);

mysqli_select_db($conn, "my_db");

$sql = "create table if not exists result_table(rollno int(3),status varchar(25))";
$conn->query($sql);

if (isset($_POST["result"])) {
    $rollno = $_POST['rollno'];

    $sql = "SELECT status FROM result_table WHERE rollno = $rollno";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Result Status : " . $row['status'];
    } else {
        echo "No result found for Roll No: " . $rollno;
    }
}


if (isset($_POST["delete"])) {
    $rollno = $_POST['rollno'];

    $sql = "delete from result_table where rollno= $rollno";

    if ($conn->query($sql)) {
        echo "Record Deleted";
    } else {
        echo "Failed to delete";
    }
}

$conn->close();
