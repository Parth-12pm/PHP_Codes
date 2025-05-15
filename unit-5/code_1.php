
<?php

//write a script of PHP to Connection to Database


$conn = new mysqli("localhost", "root", "", "college");

if ($conn->connect_error) {
    die("Connection failed");
} else {
    echo "Connection success";
}


$conn->close()

?>
