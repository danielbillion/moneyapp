<?php require('/../config/init.php'); ?>
<?php
//Get Template & Assign Vars
$template = new Template('templates/turnOver.php');
$user=new User;
$transaction=new Transaction;
$nmonth=100;


if(isset($_GET['type'])){
	$type=$_GET['type'];
	if($type=='a'){
	$table="agent_cust_transaction";	
	}
	else{
		$table="cust_transaction";	
	}
		
}

else{
		$table="agent_cust_transaction";	
}



$template->result=$transaction->turnoverAgentTrans($table,$nmonth);


echo $template;


?>