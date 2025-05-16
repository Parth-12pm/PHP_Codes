<?php
// Display selected checkboxes
if (isset($_POST['languages'])) {

    echo "You selected the following languages:<br>";

    foreach ($_POST['languages'] as $lang) {
        echo "<br>$lang<br>";
    }
}
?>

<!-- Form with checkboxes -->
<form method="post">
    <h3>Select Programming Languages:</h3>
    <input type="checkbox" name="languages[]" value="PHP"> PHP<br>
    <input type="checkbox" name="languages[]" value="JavaScript"> JavaScript<br>
    <input type="checkbox" name="languages[]" value="Python"> Python<br>
    <input type="checkbox" name="languages[]" value="Java"> Java<br>
    <input type="checkbox" name="languages[]" value="C++"> C++<br><br>
    <input type="submit" value="Submit">
</form>