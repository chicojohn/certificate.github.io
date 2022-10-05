<?php 
header('Content-type: image/jpeg');
$font=realpath('GeraldinePersonalUseItalic-PK12m.ttf');
$image=imagecreatefromjpeg("jc.jpg");
$color=imagecolorallocate($image, 51, 51, 102);
$date="Best in Maugip";
imagettftext($image, 80, 0, 750, 790, $color,$font, $date);
$name=$_POST['name'];
imagettftext($image, 100, 0, 650, 650, $color,$font, $name);
//imagejpeg($image,"certificate/$name.jpg");
imagejpeg($image);
imagejpeg($image,"certificate/$name.jpg");
imagedestroy($image);
?>