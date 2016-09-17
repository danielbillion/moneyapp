
<?php
				$email=$_SESSION['email'];

 include "conn.php"; 

		$check = mysql_query("SELECT * FROM agent WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
while($rowe=mysql_fetch_array($check)){
$rs=$rowe['agrs'];


;}

if( $rs=="N"){
	$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') 
					or die('Invalid query: ' . mysql_error());
    	while ($row = mysql_fetch_assoc($result)) { $er= $row['rate']; } 
		   echo number_format($er,2) ; 
			}
	
else {
	if( $rs=="R1"){
	$result = mysql_query('SELECT id,rate1 FROM todays_rate ORDER BY id DESC LIMIT 1')
	 or die('Invalid query: ' . mysql_error());
		while ($row = mysql_fetch_assoc($result)) {$er= $row['rate1']; }
  	
  echo $er ;
	}
	
	if( $rs=="R2"){
	$result = mysql_query('SELECT id,rate2 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate2']; }
  echo $er ;
	}
	
		if( $rs=="R3"){
	$result = mysql_query('SELECT id,rate3 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate3']; }
  echo $er ;
	}
	
		if( $rs=="R4"){
	$result = mysql_query('SELECT id,rate4 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
	while ($row = mysql_fetch_assoc($result)) {
  //echo $row['messageid'];
  $er= $row['rate4']; }
  echo $er ;
	}
	
		if( $rs=="R5"){
	$result = mysql_query('SELECT id,rate5 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
	while ($row = mysql_fetch_assoc($result)) { $er= $row['rate5']; }
 	 echo $er ;
	}
	
	}
				
				
				
				 

?>