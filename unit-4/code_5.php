 <!-- Validate Name Field -->

 <?php
    $name = "John";

    if (preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo "Valid name.";
    } else {
        echo "Invalid name. Only letters and spaces allowed.";
    }
    ?>