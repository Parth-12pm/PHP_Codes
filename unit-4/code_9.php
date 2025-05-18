<?php
if (isset($_POST["submit"])) {
    echo "You have selected " . $_POST["list"];
} else {
    echo "Error";
}

?>

<form method="post">
    <label>Select anything :</label><br>
    <select name="list">
        <option value="1">Opt 1</option>
        <option value="2">Opt 2</option>
        <option value="3">Opt 3</option>
        <option value="4">Opt 4</option>
    </select>
    <input type="submit" name="submit" />
</form>