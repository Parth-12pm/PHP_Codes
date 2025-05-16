<!-- Demonstrate Use of Cookies -->

<?php
// Set cookie
setcookie("user", "John Doe", time() + (86400 * 30), "/");

// Retrieve cookie
if (isset($_COOKIE["user"])) {
    echo "Welcome " . $_COOKIE["user"];
} else {
    echo "Cookie not set!";
}
?>