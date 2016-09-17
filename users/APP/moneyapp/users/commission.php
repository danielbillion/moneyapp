<?php require('config/init.php'); ?>

<?php


//Get Template & Assign Vars
$template = new Template('templates/commission.php');


$user=new User;
$trans= new Transaction;

$template->rate=$trans->todaysrate();

	
			// List  agent	
		if(getUser()['type']=='agent'){		
		
		$user_id=getUser()['user_id'];
		$table="SELECT a.*,(SELECT SUM(com_a) FROM agent_cust_transaction I1 WHERE I1.agcid=a.id )as totalCom_a,
		(SELECT SUM(com_d) FROM agent_cust_transaction I2 WHERE I2.agcid=a.id )as totalCom_b,
		(SELECT COUNT(id) FROM agent_cust_transaction I3 WHERE I3.agcid=a.id )as countTrans 
		FROM agent_new_customer a WHERE a.agid='$user_id' ORDER BY a.fname DESC";	//table for pagination setting
		$pages = new Paginator($table,9,array(15,3,6,9,12,25,50,100,250,'All'));
			$start=$pages->limit_start;
			$end=$pages->limit_end;
		$table_full="SELECT a.*,(SELECT SUM(com_a) FROM agent_cust_transaction I1 WHERE I1.agcid=a.id )as totalCom_a,
		(SELECT SUM(com_d) FROM agent_cust_transaction I2 WHERE I2.agcid=a.id )as totalCom_b,
		(SELECT COUNT(id) FROM agent_cust_transaction I3 WHERE I3.agcid=a.id )as countTrans 
		FROM agent_new_customer a WHERE a.agid='$user_id' ORDER BY a.fname DESC LIMIT $start,$end";
		
		$template->trans_result=$trans->agentCusttrans_full($table_full,getUser()['user_id'],$start,15);// display table result
		$template->pagin= $pages->display_pages();														//quick menu
		$template->pages=$pages->display_jump_menu(); $template->items=$pages->display_items_per_page();	//quick menu
	
		}
		

echo $template;