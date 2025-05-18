<!-- Draw a Rectangle Filled with Red Colour -->

<?php
$img = imagecreate(200, 100);
$red = imagecolorallocate($img, 255, 0, 0);
imagefilledrectangle($img, 0, 0, 200, 100, $red);
imagestring($img, 10, 10, 20, "this is string", $red);
header("Content-Type: image/png");
imagepng($img);
imagedestroy($img);
?>