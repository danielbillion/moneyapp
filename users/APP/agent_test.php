<?php
if ($ecredit==1){
$check_credit = mysql_query("SELECT * FROM agent WHERE email='$email'  ") or die('Query failed: ' . mysql_error());
while($ag_cr=mysql_fetch_array($check_credit)){
$ag_cred=$ag_cr['credit'];}

				 if ( $ag_cred >= $mon ){if (isset($_POST['Calculate'])){include "pro2.php";	}else {echo "Insufficient credit";}}
	}
	if ($ecredit==0){
	// for Debt
 if (isset($_POST['Calculate']))
  
  {
	
	include "pro2.php";	
	}
	
	}

?>