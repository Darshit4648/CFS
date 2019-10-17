<?php
session_start();
$random_alpha = rand(1,30);
$random_alpha2 = rand(1,30);
$captcha_code = $random_alpha.' + '.$random_alpha2;
$_SESSION["captcha_code"] = $random_alpha+$random_alpha2;
$target_layer = imagecreatetruecolor(70,30);
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119);
imagefill($target_layer,0,0,$captcha_background);
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
header("Content-type: image/jpeg");
imagejpeg($target_layer);
?>