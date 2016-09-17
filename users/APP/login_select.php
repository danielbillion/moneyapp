<?php
	
 if (isset($_POST['Login'])) {
	 
	 
		if($_POST['act_type']=='Customer'){
		include('cust_log_proc.php');
		}
	 
		if($_POST['act_type']=='Agent'){
		include('login.php');
		} 
		
	 
	 }
?>