<?php


echo "
<!-- Developed and Scripted by SatyaJit Pradhan --!>

<html>
<head>

<title>E-Certificate Generator</title>
<link rel='stylesheet' href='style.css'>
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet'>
<link rel='icon' href='favicon.ico' type='image/png'>
</head>

<body>

<div class='top' style='margin-bottom: 10px;'><b>&#60;? SHOWING CERTIFICATES ?&#62;</b></div>
<a href='/'><small>[ BACK ]</small></a><br><br><center>
<table cellspacing='10' width='50'><tr>";
$dir = 'cert/';
$files = scandir($dir);

$i = -3;

foreach($files as $f){

if ($f!="." && $f!="..")
	echo "<td class='iii'><a href='".$dir.$f."'><img src='".$dir.$f."' height='214px' width='300px'/></a></td>";

if($i%2==0) echo "</tr><tr>";

$i++;

}
echo "</tr></table></center><br><br><br><div class='top2'><small>Designed with <font color='red'>❤</font> by <a href='https://linkedin.com/in/satyajiit/' target='_blank'><font color='white'>SatyaJit Pradhan</font></a></small></div>
</body></html>"



?>