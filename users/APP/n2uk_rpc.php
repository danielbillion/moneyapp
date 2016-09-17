<style type="text/css">
a:link {
	color: #FFF;
}
a:visited {
	color: #999;
}
a:hover {
	color: #F00;
}
a:active {
	color: #F0F;
}
</style>

<?php session_start();
	
	
$info =$_POST['queryString'];	
	$email= mysql_escape_string($_SESSION['email']);
	
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
	
			
			if (is_numeric($_POST['queryString'])) {
			
			
			$queryString = $db->real_escape_string($_POST['queryString']);
			$info = $db->real_escape_string($_POST['queryString']);
			
			// Is the string length greater than 0?
			
			if(strlen($queryString) >0) {
				// Run the query: We use LIKE '$queryString%'
				// The percentage sign is a wild-card, in my example of countries it works like this...
				// $queryString = 'Uni';
				// Returned data = 'United States, United Kindom';
				
				// YOU NEED TO ALTER THE QUERY TO MATCH YOUR DATABASE.
				// eg: SELECT yourColumnName FROM yourTable WHERE yourColumnName LIKE '$queryString%' LIMIT 10
/*				
$check0 = mysql_query("SELECT * FROM agent_new_customer WHERE agent_email = '$email' && fname='$custfn' || pnumber='$custfn' || mnumber='$custfn' ORDER BY fname  ")or die(mysql_error()); */
echo " <align='center'><u><font size='2'> Customer </font></u></align>";

		$query = $db->query("SELECT * FROM trans2_customer WHERE  (fname LIKE '$queryString%' || lname LIKE '$queryString%' || pnumber LIKE '$queryString%' || mnumber LIKE '$queryString%') LIMIT 5");
		
		$queryr = $db->query("SELECT * FROM  trans2_receiver WHERE  (b_fname LIKE '$queryString%' || b_lname LIKE '$queryString%' || b_phone LIKE '$queryString%)') LIMIT 5");
				//$query = $db->query("SELECT value FROM countries WHERE value LIKE '$queryString%' LIMIT 10");
				if($query) {
					while ($result = $query ->fetch_object()) {
						
						$fname=$result->fname;
						$lname=$result->lname;
						$custid=$result->custid;
	
	echo "<a href='n2uk_cust_list.php?info=$lname & custid=$custid'><li onClick='fill(\''.ucfirst($result->fname).'\');'>".strtolower($lname). ' '.strtolower($fname).'</li></a>';

						
					}}
					//echo"</br>";
					echo " <align='center'><u><font size='2'> Receiver----- </font></u></align>";
					
					if($queryr) {
					// While 	 are results loop through them - fetching an Object (i like PHP5 btw!).
					while ($resultr = $queryr ->fetch_object()) {
						
					
						$b_fname=$resultr->b_fname;
						$b_lname=$resultr->b_lname;
						$id=$resultr->id;
						$custid=$resultr->custid;
						$r_name=ucfirst($b_fname)." ". ucfirst($b_lname);
						//$r_transfer->b_transfer;
						
	//echo '<li onClick="fill(\''.ucfirst($resultr->b_fname).'\');">'.strtolower($result4). ' '.strtolower($result5). '</li>';
						
echo "<a href='#?b_lname=$b_lname &b_fname=$b_fname & r_name=$r_name & custid=$custid & id=$id '><li onClick='fill(\''.ucfirst($resultr->b_fname).'\');'>".strtolower($b_fname). ' '.strtolower($b_lname).'</li></a>';
					}}
					
					
					
					
					 }else {
					echo 'ERROR: There was a problem with the query.';
				}
				
		
		} 
	// Test for string	
	
	
			
			else {
			$queryString = $db->real_escape_string($_POST['queryString']);
			if(strlen($queryString) >0) {
			
		$querycs = $db->query("SELECT * FROM trans2_customer WHERE  (fname LIKE '$queryString%' || lname LIKE '$queryString%' || pnumber LIKE '$queryString%'|| mnumber LIKE '$queryString%') LIMIT 5");
		
		$queryr2 = $db->query("SELECT * FROM  trans2_receiver WHERE  (b_fname LIKE '$queryString%' || b_lname LIKE '$queryString%' || b_phone LIKE '$queryString%') LIMIT 5");
		echo " <align='center'><u><font size='2'> Customer </font></u></align>";
				if($querycs) {
					while ($resultst = $querycs ->fetch_object()) {
						
						$fname=$resultst->fname;
						$lname=$resultst->lname;
						$custid=$resultst->custid;
						
					echo "<a href='n2uk_cust_list.php?info=$fname & custid=$custid'><li onClick='fill(\''.ucfirst($resultst->fname).'\');'>".strtolower($fname). ' '.strtolower($lname).'</li></a>';
						//echo '<li onClick="fill(\''.ucfirst($result->fname).'\');">'.strtolower($result2). ' '.strtolower($result3). '</li>';
						
					}}
					
					
					echo"</br>";
					echo " <align='center'><u><font size='2'> Receiver </font></u></align>";
					
					if($queryr2) {
					// While 	 are results loop through them - fetching an Object (i like PHP5 btw!).
					while ($resultr2 = $queryr2 ->fetch_object()) {
						
						$b_fname=$resultr2->b_fname;
						$b_lname=$resultr2->b_lname;
						$b_fname=$resultr2->b_fname;
						$id=$resultr2->id;
						
						$custid=$resultr2->custid;
						
	//echo '<li onClick="fill(\''.ucfirst($resultr2->b_fname).'\');">'.strtolower($result6). ' '.strtolower($result7). '</li>';
	
echo "<a href='#?b_lname=$b_lname &b_fname=$b_fname  & custid=$custid & id=$id '><li onClick='fill(\''.ucfirst($resultr2->b_fname).'\');'>".strtolower($b_fname). ' '.strtolower($b_lname).'</li></a>';
						
					}}
					
					
					 }else {
					echo 'ERROR: There was a problem with the query.';
				}
			
		}
	
	
	
	
	
	
	
	}
?>