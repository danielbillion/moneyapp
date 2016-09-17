<?php $check = mysql_query("SELECT * FROM agent_new_customer") or die('Query failed: ' . mysql_error());
 $checkagn = mysql_query("SELECT * FROM agent_new_customer WHERE email = '$sender_email' ORDER BY fname  ")or die(mysql_error());

 $num=0;

while($agn=mysql_fetch_array($checkagn)){
	
	$agem=$agn['agent_email'];
	
	}
 $checknam = mysql_query("SELECT * FROM agent WHERE email = '$agem' ORDER BY fname  ")or die(mysql_error());	
 
 while($seln=mysql_fetch_array($checknam)){
	
	$ags=ucfirst($seln['fname']) ." ".ucfirst($seln['lname']);
	
	}
 			
	echo ($ags)	;	
	
	?>	
				