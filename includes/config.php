<?php 

$josip = "josip";
$frend = "frend";


$results = mysqli_query($link, "SELECT * FROM nastavitve");
while ($row = mysqli_fetch_array($results)) {

	$ime = $row['ime'];
	$footer = $row['footer'];
	$tekmovalec1 = $row['tekmovalec1'];
	$tekmovalec2 = $row['tekmovalec2'];
	$predmet1 = $row['predmet1'];
	$predmet2 = $row['predmet2'];
	$predmet3 = $row['predmet3'];
	$predmet4 = $row['predmet4'];
	$predmet5 = $row['predmet5'];
	$predmet6 = $row['predmet6'];
	$predmet7 = $row['predmet7'];
	$predmet8 = $row['predmet8'];
	$predmet9 = $row['predmet9'];
	$predmet10 = $row['predmet10'];
	$predmet11 = $row['predmet11'];
	$predmet12 = $row['predmet12'];

}

 ?>