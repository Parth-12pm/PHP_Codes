<?php
// Display form results

// Radio button
if (isset($_POST['gender'])) {
    echo "Selected Gender: " . $_POST['gender'] . "<br>";
} else {
    echo "No gender selected.<br>";
}

if (isset($_POST['hobbies'])) {
    echo "Selected Hobbies:<ul>";
    foreach ($_POST['hobbies'] as $hobby) {
        echo "<li>$hobby</li>";
    }
    echo "</ul>";
} else {
    echo "No hobbies selected.<br>";
}

?>

<!-- Form controls: radio buttons and checkboxes -->
<form method="post">
    <h3>Select Gender:</h3>
    <input type="radio" name="gender" value="Male"> Male<br>
    <input type="radio" name="gender" value="Female"> Female<br>
    <input type="radio" name="gender" value="Other"> Other<br><br>

    <h3>Select Hobbies:</h3>
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
    <input type="checkbox" name="hobbies[]" value="Music"> Music<br>
    <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming<br>
    <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling<br>
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br><br>

    <input type="submit" value="Submit">
</form>