<style type="text/css">
a:link {
	color: #0000;
	text-decoration: none;
}
a:visited {
	color: #999;
	text-decoration: none;
}
a:hover {
	color: #F00;
	text-decoration: none;
}
a:active {
	color: #F0F;
	text-decoration: none;
}
</style>

<?php session_start();
	
	
$info =$_POST['queryString'];	
	$email= "as";
	
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
	
	
			
			
			$queryString = $db->real_escape_string($_POST['queryString']);
			if(strlen($queryString) >0) {
			
		$querycs = $db->query("SELECT * FROM agent_new_customer WHERE agent_email='$email' && (fname LIKE '$queryString%' || lname LIKE '$queryString%' || pnumber LIKE '$queryString%'|| mnumber LIKE '$queryString%') LIMIT 5");
		
		$queryr2 = $db->query("SELECT * FROM agent_cust_receiver WHERE agent_email='$email' && (b_fname LIKE '$queryString%' || b_lname LIKE '$queryString%' || b_phone LIKE '$queryString%') LIMIT 5");
				if($querycs) {
					while ($resultst = $querycs ->fetch_object()) {
						
						$fname=$resultst->fname;
						$lname=$resultst->lname;
						$agcid=$resultst->id;
						$ag_emails=$resultst->email;
						
				//	echo "<a href='agent_send.php?fname=$fname & lname=$lname'><strong><li onClick='fill(\''.ucfirst($resultst->fname).'\');'>".strtoupper($fname). ' '.strtoupper($lname).'</li></a>';
						//echo '<li onClick="fill(\''.ucfirst($result->fname).'\');">'.strtolower($result2). ' '.strtolower($result3). '</li>';
						
					
					//	echo "<option>"; echo strtoupper($fname); echo "</option>";
						echo"<option>"; echo strtoupper($fname); echo"</option>";
						//echo "<input type='text' value='$fname'>";

						
				
						
					}}
					
					
					
					
					 }else {
					echo 'ERROR: There was a problem with the query.';
				}
			
		}
	
	
	
	
	
	
	
	
?>