<?php
session_start();

// Regenerate captcha code
$captcha_code = substr(md5(rand()), 0, 6); 
$captcha_code = strtoupper($captcha_code); 

$_SESSION['true_captcha_code'] = $captcha_code;
$_SESSION['captcha_time'] = time(); // Record the time when captcha was generated

$image = imagecreatetruecolor(120, 16);

$background_color = imagecolorallocate($image, 36, 30, 124);
imagefill($image, 0, 0, $background_color);

$text_color = imagecolorallocate($image, 255, 255, 255); 

imagestring($image, 3, 5, 1, $_SESSION['true_captcha_code'], $text_color); // Use session captcha code

// Output the image
header('Content-type: image/png');
imagepng($image);

// Destroy the image resource
imagedestroy($image);
?>
