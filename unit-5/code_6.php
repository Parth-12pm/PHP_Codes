<?php

//WAP to select a record 

$conn = new mysqli("localhost", "root", "", "college");

if ($conn->connect_error) {
    die("Connection failed");
} else {
    echo "Connection success" . "<br>";
}


$sql = "select * from students";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID :" . $row["id"] . "Name : " . $row["Name"] . "Dept : " . $row["Dept"] . "<br>";
    }
} else {
    echo "No Records";
}
$conn->close();
