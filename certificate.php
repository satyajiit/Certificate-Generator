
<?php

//No validation has been done
//Make sure you add proper validations

/* Author : Satyajit 
 * Created on 24th August 2019
 * Simple Script to Generate Certificates
 * May usge high CPU , better use in localhost!
 * https://github.com/satyajiit
 */

function getCertificates($name = 'Satyajit Pradhan') {

 
 $str_arr = preg_split("/\,/", $name); //Split the string to form an array of names
 
 




$font = 'C:\xampp\htdocs\test\font\arial.ttf'; //Use Absolute location , relative location may give errors

 


$fontSize = 65; // Font size is in pixels.

$flag = 0;

foreach($str_arr as $value) {
  
$image = imagecreatefrompng('res/blank.png'); //The template we will be using change with any pngs

$black = imagecolorallocate($image, 25, 25, 25); //color to be used with RGB values

imagettftext($image, $fontSize, 0, 437, 1300, $black, $font, trim($value)); //imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )



$flag = imagepng($image,'cert/'.trim($value).'.png' ); //store

imagedestroy($image);

}

return $flag;
 

}

?>