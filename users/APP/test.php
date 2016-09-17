System test
<?php

include "conn.php";

	$checkm=mysql_query("SELECT t.`receiptno` 
FROM  `agent_cust_transaction` t
JOIN (

SELECT  `receiptno` ,`id`
FROM  `agent_cust_transaction` 
GROUP BY  `receiptno` 
HAVING COUNT( * ) >1
)t2 ON ( t.`receiptno` = t2.`receiptno` ) 
ORDER BY  `t`.`receiptno` ASC 
 ") or die('Query failed: ' . mysql_error());

	while($ag_cr=mysql_fetch_array($checkm)){
								
								$rece=$ag_cr['receiptno'];
								$id=$ag_cr['id'];
											 $ref= $rece;
											 
							 $check0 = mysql_query("SELECT * FROM agent_cust_transaction WHERE receiptno = '$ref' ")or die(mysql_error());
								$check2_code = mysql_num_rows($check0);

 										if (($check2_code) > 1) {
										 function generateRandomString($length = 7) {
											$characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
											$randomString = '';
											for ($i = 0; $i < $length; $i++) {
												$randomString .= $characters[rand(0, strlen($characters) - 1)];
											}
											return $randomString;
										}
		
											$ref=generateRandomString();
											
											  $tcode= $ref;
							mysql_query("UPDATE agent_cust_transaction SET receiptno='$tcode' WHERE id='$id'")or
								 die( "<b>Error:</b> Something went wrong, could not edit link status.");
											}
										
 										 //****************  Avoid repetition of transfer code 
                      
								 
								
						
						}
                         ?>
						 
                         
								  
