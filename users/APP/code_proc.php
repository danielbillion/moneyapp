<?php
include "conn.php";
include "time.php";

	$check3_email = mysql_query("SELECT * FROM tcode WHERE email = '$email'")or die(mysql_error());
	$check4_email = mysql_num_rows($check3_email);
	
	if ($check4_email == 0) {
	mysql_query("INSERT INTO tcode(date,email,code) VALUES ('$dtime','$email','$tcode')"); }
	
	else {
	
	mysql_query("UPDATE tcode SET code = '$tcode',date = '$dtime' WHERE email = '$email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
	}
?>