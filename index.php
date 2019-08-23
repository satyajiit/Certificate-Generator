<?php

$go = 0;

if (isset($_POST['names'])) {

 

require_once('certificate.php');

 

if(getCertificates($_POST['names']))
	$go = 1;
else $go = 0;



}

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

<div class='top'><b>&#60;? PHP - CERTIFICATE GENERATOR ?&#62;</b></div>





<form action='' method='POST'>

<br>

<label>Enter Names ( Separated by comma ) : </label>

<br>
		
		<textarea name = 'names' style='padding: 10px; margin-top: 10px; font-family: inherit;' rows='6' cols='60' >
         </textarea>
		 
		 <br>
		
		<input value='GENERATE CERTIFICATES' type='submit' class='btn'/>

</form>";

if ($go)
echo "<a href='view.php' target='_blank'><button class='sss'>Successfully Generated - Click here to View</button></a>";


echo "</body>

<br>
<br>
<br>
<br>
<br>

<div class='top2'><small>Designed with <font color='red'>❤</font> by <a href='https://linkedin.com/in/satyajiit/' target='_blank'><font color='white'>SatyaJit Pradhan</font></a></small></div>


</html>";



?>