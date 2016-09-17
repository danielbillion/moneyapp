<style type="text/css">
a:link {
	color: #333;
}
a:visited {
	color: #000;
}
a:hover {
	color: #009;
}
a:active {
	color: #333;
}
</style>

<?php session_start();
	
	
$info =$_POST['queryString'];	
	$email= mysql_escape_string($_SESSION['email']);
	
	include "conn2.php";
	
	if(!$db) {
		// Show error if we cannot connect.
		echo 'ERROR: Could not connect to the database.';
	} 
	
	else {
		// Is there a posted query string?
	
			
			if (isset($_POST['queryString'])) {
			
			
			$queryString = $db->real_escape_string($_POST['queryString']);
			$info = $db->real_escape_string($_POST['queryString']);
			
			// Is the string length greater than 0?
			
			if(strlen($queryString) >0) {
				
				


		$querya = $db->query("SELECT * FROM agent WHERE  (fname LIKE '$queryString%' || lname LIKE '$queryString%' || pnumber LIKE '$queryString%' || mnumber LIKE '$queryString%') LIMIT 5");
		
		$queryc = $db->query("SELECT * FROM new_customer WHERE (fname LIKE '$queryString%' || lname LIKE '$queryString%' || pnumber LIKE '$queryString%' || mnumber LIKE '$queryString%') LIMIT 5");
		
		$queryac = $db->query("SELECT * FROM agent_new_customer WHERE (fname LIKE '$queryString%' || lname LIKE '$queryString%' || pnumber LIKE '$queryString%' || mnumber LIKE '$queryString%') LIMIT 5");
				//$query = $db->query("SELECT value FROM countries WHERE value LIKE '$queryString%' LIMIT 10");
				if($querya) 
				echo " <align='center'><u><font size='2'> <strong>AGENTS </strong></font></u></align>";echo"<br/>";
				{
					while ($result = $querya ->fetch_object()) {
						
						$fname=$result->fname;
						$lname=$result->lname;
						$id=$result->id;
						$ag_email=$result->email;
	
	echo "<a href='admin_agent.php?fname=$fname & lname=$lname & ag_email=$ag_email'>".ucfirst($fname). ' '.ucfirst($lname).'</li></a>';

						
					}}
					//echo"</br>";
					
					
					if($queryc) {
					// While 	 are results loop through them - fetching an Object (i like PHP5 btw!).
					echo"<br/>";echo " <align='center'><u><font size='2'><strong> CUSTOMERS----- </strong></font></u></align>";echo"<br/>";
					while ($resultc = $queryc ->fetch_object()) {
						$fname=$resultc->fname;
						$lname=$resultc->lname;
						$id=$resultc->id;
						$c_email=$resultc->email;
					
						
					echo "<a href='admin_customer.php?fname=$fname & lname=$lname & c_email=$c_email'>".ucfirst($fname). ' '.ucfirst($lname).'</li></a>';
					}}
					
					//echo"</br>";
					
					
					if($queryac) {
					// While 	 are results loop through them - fetching an Object (i like PHP5 btw!).
					echo"<br/>";echo " <align='center'><u><font size='2'><strong> AGENT CUSTOMERS----- </strong></font></u></align>";echo"<br/>";
					while ($resultac = $queryac ->fetch_object()) {
						$fname=$resultac->fname;
						$lname=$resultac->lname;
						$id=$resultac->id;
						$c_email=$resultac->email;
						$ag_email=$resultac->agent_email;
						
						$queryca = $db->query("SELECT * FROM agent WHERE email= '$ag_email' LIMIT 5");
						
						while ($resultca= $queryca ->fetch_object()) { $ag_fname=$resultca->fname; $ag_lname=$resultca->lname;$ag_email=$resultca->email;
						}
						
			
					echo "<a href='admin_agent_cust_list.php?fname=$fname & lname=$lname & c_email=$c_email & ag_email=$ag_email'>".'<li>'.ucfirst($fname). '-'.ucfirst($lname).' 
					('.'@'.strtolower($ag_lname).'-'.strtolower($ag_fname).')'. '</li></a>';
					}}
					
					
					
					 }else {
					echo 'ERROR: There was a problem with the query.';
				}
				
		
		} 
	// Test for string	
	
	
			
			
	
	
	
	
	
	
	}
?>