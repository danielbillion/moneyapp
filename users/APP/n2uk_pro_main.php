
<?php

 if(isset($_POST['mon']))
{


include "conn.php"; 

	
		$result = mysql_query('SELECT id,bou,sold FROM  trans2_rate ORDER BY id DESC LIMIT 1') or die('Invalid query: ' . mysql_error());
	/* Extract Commission  value from database */		

		//print values to screen
		while ($row = mysql_fetch_assoc($result)) {
		  //echo $row['messageid'];
		  $bou= $row['bou']; $sold= $row['sold']; $bou=number_format(($bou),2); $sold=number_format(($sold),2); }
		  
			$mon =($_POST['mon']);
			$m_n=number_format(($mon),2);
			$m_p=number_format(($mon/$bou),2);
			$mar=number_format(($bou-$sold),2);
			$pro=number_format(($mar*$m_p),2);
			
			//$er=248;


//if (!isset($_POST['calculate'])) {
//echo "please enter a choice of transfer";}

		
			
		
		 
		  echo "₦";echo ($m_n);echo "<p>";echo "<br>";echo "£";echo $m_p; echo "</br></br>";
	
		 
		
					
		


		
					

}







?>