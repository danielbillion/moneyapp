<style type="text/css">
a:link {
	color: #000066;
	text-decoration: none;
}
a:visited {
	color: #00C;
	text-decoration: none;
}
a:hover {
	color: #600;
	text-decoration: none;
}
a:active {
	color: #636;
	text-decoration: none;
}
</style>

<?php session_start();
	
	
$info =$_POST['sv'];	
	$email= $_SESSION['email_ad'];
	
	// PHP5 Implementation - uses MySQLi.
	// mysqli('localhost', 'yourUsername', 'yourPassword', 'yourDatabase');
	
	include "conn2.php";
	//$db = new mysqli('localhost', 'kunzle' ,'dF6evf88', 'kunzle');
	
	if(!$db) {
		// Show error if we cannot connect.
		echo 'ERROR: Could not connect to the database.';
	} 
	
	else {
		// Is there a posted query string?
	
			
	// Test for string	
	
	
			
			
			$sv = $db->real_escape_string($_POST['sv']);
			if(strlen($sv) >0) {
			
		$querycs = $db->query("SELECT * FROM agent_new_customer WHERE agent_email='$email' && (fname LIKE '$sv%' || lname LIKE '$sv%' || pnumber LIKE '$sv%'|| mnumber LIKE '$sv%') LIMIT 5");
		
		$queryr2 = $db->query("SELECT * FROM agent_cust_receiver WHERE agent_email='$email' && (b_fname LIKE '$sv%' || b_lname LIKE '$sv%' || b_phone LIKE '$sv%') LIMIT 5");
				if($querycs) {
					while ($resultst = $querycs ->fetch_object()) {
						
						$fname=$resultst->fname;
						$lname=$resultst->lname;
						$agcid=$resultst->id;
						$c_email=$resultst->email;
						$address=$resultst->address;
						$town=$resultst->town;
						$county=$resultst->county;
						$country=$resultst->country;
						$postcode=$resultst->postcode;
						$s_phone=$resultst->mnumber;
						$sender=$fname." ".$lname;
						
					echo "<a href='agent_send2.php?fname=$fname & sender=$sender & lname=$lname & c_email=$c_email & address=$address & town=$town & county=$county & country= $country & postcode=$postcode & s_phone=$s_phone '><strong><li onClick='fill(\''.ucfirst($resultst->fname).'\');'>".strtoupper($fname). ' '.strtoupper($lname).'</li></a>';
						//echo '<li onClick="fill(\''.ucfirst($result->fname).'\');">'.strtolower($result2). ' '.strtolower($result3). '</li>';
						
					}}
					
					
					
					
					 }else {
					echo 'ERROR: There was a problem with the query.';
				}
			
		}
	
	
	
	
	
	
	
	
?>