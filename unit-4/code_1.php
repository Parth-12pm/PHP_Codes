<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    echo "Logged out";
} elseif (isset($_SESSION['name'])) {
    echo "Hi " . $_SESSION['name'] . "<br><a href='?logout=1'>Logout</a>";
} else {
    $_SESSION['name'] = "student";
    echo "Session started for " . $_SESSION['name'];
}
