<?php

$email=$_SESSION['email'];
								//$s_phone = ($_GET['s_phone']);
								//$s_mphone = ($_GET['s_mphone']);
								//$address = ($_GET['address']);
							
							$check = mysql_query("SELECT * FROM agent WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
							while($row=mysql_fetch_array($check)){
							$rs=$row['agrs'];
							$cust_id_sta=$row['cust_id_sta'];$agt_status=$row['active'];
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
				
									
									if( $rs=="R3"){
								$result = mysql_query('SELECT id,rate3 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
								while ($row = mysql_fetch_assoc($result)) {$er= $row['rate3']; }
										}
										
										
										if( $rs=="R4"){
								$result = mysql_query('SELECT id,rate4 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
								while ($row = mysql_fetch_assoc($result)) {$er= $row['rate4']; }
										}
										
										if( $rs=="R5"){
								$result = mysql_query('SELECT id,rate5 FROM todays_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
								while ($row = mysql_fetch_assoc($result)) {$er= $row['rate5']; }
										}
				
				}


?>