<?php 
include "conn2.php";


$query_ct = $db->query("SELECT * FROM trans2_customer WHERE agent_email='$email' ");

	if($query_ct) {
					while ($result = $query_ct ->fetch_object()) {
						
						$result2=$result->fname;
						$result3=$result->lname;
	
	echo "<a href='agent_cust_search.php?info=$result3'><li onClick='fill(\''.ucfirst($result->fname).'\');'>".strtolower($result3). ' '.strtolower($result2).'</li></a>';

						
					}}
?>