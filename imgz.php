<?php
error_reporting(0);

str_write("jpeg","blackboard_mid.jpg","ZEND");
	

function str_write($mime_type,$s_path,$string)
{
   header('Content-type: image/jpeg');
$im     = imagecreatefromjpeg($s_path);  //load the image

$string = "It occurred to me that some of  my friends do not really know how to taste  and describe beer properly. Even my wine friends, descriptive as they are, are pretty poor at describing beer.  The methods of tasting are not all that different, really.  Theres more of a snobbery surrounding wine aNd some of people are loathe to come down to the beer world, even though we beer snobs are far bigger jerks this is a test and a good test ";




if ($_GET['text']) {$string=   $_GET['text']. " server ip"  . $_SERVER['REMOTE_ADDR'];}

$px= (imagesx($im) - 10.5 * strlen($string)) / 2;
$px= (imagesx($im));
$py= imagesy($im) - 0 ;
//$string = $string ."\n" . $px ."\n" . $py;
$font = "c:/wamp64/www/EraserDust.ttf";
//$font = "c:/wamp64/www/Colchester.ttf";

$x1 = 30;
$y1 = 40;
$si =16;
$fs = 820 / $si;
$string = wordwrap($string, $fs, "\n");

$orange = imagecolorallocate($im, 50,50,50);  
$grey = imagecolorallocate($im, 255,255,255);
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagettftext($im, $si, 0, $x1,$y1, $white, $font, $string);
imagejpeg($im);  //Generate the jpeg image
return (imagejpeg($im));
   
}



?>