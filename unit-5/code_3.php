
<?php

//WAP to Insert Data into Table


$conn = new mysqli("localhost", "root", "", "college");

if ($conn->connect_error) {
    die("Connection failed");
} else {
    echo "Connection success";
}

$sql = "insert into students values(2,'tejas','IF')";

if ($conn->query($sql)) {
    echo "\nInserted Data Successfully";
} else {
    echo "Inserting Data Failed" . $conn->error;
}

$conn->close()

?>