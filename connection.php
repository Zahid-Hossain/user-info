<?php
	
	$servername="localhost";
	$dbuser="root";
	$dbpass="";
	$database="user-info";

	$con= new mysqli($servername,$dbuser,$dbpass,$database);

	if ($con) {
		//echo " Connected <br>";
	}
	else{
		echo " Not Connected ";
	}
?>
