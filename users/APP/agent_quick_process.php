<?php

 $check5 = mysql_query("SELECT * FROM agent ")or die(mysql_error());
									
									 $check_name = mysql_query("SELECT * FROM agent WHERE email = '$email' ")or die(mysql_error());
									 $table_array = mysql_fetch_array($check5);
									 
									 if(isset($table_array) && $table_array[0] != "") {

									while($row=mysql_fetch_array($check_name)){  $agent_name=$row['fname']."  ".$row['lname'];}}						 
	if(!isset($country)){$country= "Unavailbl";};if(!isset($postcode)){$postcode= "Unavailbl";};if(!isset($town)){$town= "Unavailbl";}	 
	if(!isset($c_name)){$c_name= "Unavailbl";};	if(!isset($s_phone)){$s_phone= "Unavailbl";};	if(!isset($county)){$county= "Unavailbl";};								 
									 
		
		mysql_query("INSERT INTO agent_cust_transaction (date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,r_transfer,r_bank,r_idtype,
		amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,agent_name,agent_ps,dtime,address,postcode,town,county,country,clear)

 VALUES ('$date','$ref', '$email','$c_email', '$c_name', '$s_phone','$r_name', '$r_phone', '$r_transfer', '$r_bank', '$r_idtype',
 '$mon','$ap', '$lc', '$tf', '$com_a', ' $com_d', ' $status', '$er','$r_actno', '$agent_name','$ag_ps','$dtime','$senderd','$postcode','$town','$county','$country','uc') ") or die(mysql_error());




	
	
	include "email_msg.php";

echo" <script type='text/javascript'>
 
 {
 window.alert('Transaction Successful ')
window.location='agent_page.php';
 }
</script> ";


?>