<?php

$email=$_SESSION['email_ad'];
								//$s_phone = ($_GET['s_phone']);
								//$s_mphone = ($_GET['s_mphone']);
								//$address = ($_GET['address']);
							
							$check = mysql_query("SELECT * FROM new_customer WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
							while($row=mysql_fetch_array($check)){
							$rs=$row['agrs'];
							
										;}
			
							if( $rs=="N"){
								$result = mysql_query('SELECT id,rate FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
								while ($row = mysql_fetch_assoc($result)) { $er= $row['rate']; }
																					  
								}
				
							else {
							if( $rs=="R1"){
							$result = mysql_query('SELECT id,rate1 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
							while ($row = mysql_fetch_assoc($result)) {  $er= $row['rate1']; }
				
											}
				
								if( $rs=="R2"){
								$result = mysql_query('SELECT id,rate2 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
								while ($row = mysql_fetch_assoc($result)) {$er= $row['rate2']; }
										}
				
				}


?>