<?php


include "conn.php";
/****************  Transfer Code */
											$length = 7;
											$characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
											$randomString = '';
											for ($i = 0; $i < $length; $i++) {
												$randomString .= $characters[rand(0, strlen($characters) - 1)];
											}
											
											
											//return $randomString;
										
		
											$ref=$randomString;
											 $tcode= $ref;
										//return $ref;
							//$ref = "B5YWLV599";
							/****************  Avoid repetition of transfer code */
							
							 $check0 = mysql_query("SELECT * FROM agent_cust_transaction WHERE receiptno = '$ref' ")or die(mysql_error());
								$check2_code = mysql_num_rows($check0);

 										if (($check2_code) >= 1) {
										 function generateRandomString($length = 7) {
											$characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
											$randomString = '';
											for ($i = 0; $i < $length; $i++) {
												$randomString .= $characters[rand(0, strlen($characters) - 1)];
											}
											return $randomString;
										}
		
											$ref=generateRandomString();
											}
										
 						 /****************  Avoid repetition of transfer code */
                        $tcode= $ref;
                         ?>
						 
                         