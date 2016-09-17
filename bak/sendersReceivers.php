<?php require('config/init.php'); ?>

<?php


//Get Template & Assign Vars
$template = new Template('templates/sendersReceivers.php');
$sendMoney=new sendMoney;
$trans= new Transaction;
$user=new User;
$cust= new Senders;

$template->rate=$trans->todaysrate();

	
			// List  agent customer	
		if((getUser()['type']=='agent') && !isset($_GET['agr']) ){		
		
		$user_id=getUser()['user_id'];
		$table="SELECT a.*,(SELECT COUNT(id) FROM agent_cust_transaction I3 WHERE I3.agcid=a.id)as countTrans  FROM agent_new_customer a
		WHERE a.agid='$user_id' ORDER BY a.date_reg DESC ";	//table for pagination setting
		$pages = new Paginator($table,9,array(15,3,6,9,12,25,50,100,250,'All'));
			$start=$pages->limit_start;
			$end=$pages->limit_end;
		$table="SELECT a.*,(SELECT COUNT(id) FROM agent_cust_transaction I3 WHERE I3.agcid=a.id)as countTrans  FROM agent_new_customer a
		WHERE a.agid='$user_id' ORDER BY a.date_reg DESC LIMIT $start,$end";
		$template->trans_result=$cust->custList($table);// display table result
		$template->pagin= $pages->display_pages();														//quick menu
		$template->pages=$pages->display_jump_menu(); $template->items=$pages->display_items_per_page();	//quick menu
	
		}
				// List  customer	Receiver
		if((getUser()['type']=='customer') && !isset($_GET['agr']) ){			
	
	$user_id=getUser()['user_id'];
		$table="SELECT a.*,(SELECT COUNT(id) FROM cust_transaction I3 WHERE I3.crid=a.id)as countTrans  FROM receiver a
		WHERE a.cid='$user_id' ORDER BY a.date DESC ";	//table for pagination setting
		$pages = new Paginator($table,9,array(15,3,6,9,12,25,50,100,250,'All'));
			$start=$pages->limit_start;
			$end=$pages->limit_end;
		$table="SELECT a.*,(SELECT COUNT(id) FROM cust_transaction I3 WHERE I3.crid=a.id)as countTrans  FROM receiver a
		WHERE a.cid='$user_id' ORDER BY a.date DESC LIMIT $start,$end";
		$template->trans_result=$cust->custList($table);// display table result
		$template->pagin= $pages->display_pages();														//quick menu
		$template->pages=$pages->display_jump_menu(); $template->items=$pages->display_items_per_page();	//quick menu
				}
				
				// List  Agent customer	Receiver
		if(isset($_GET['agr'])){	
			$agcid=$_GET['agcid'];
			$user_id=getUser()['user_id'];
			$template->agcid=$agcid;
	$user_id=getUser()['user_id'];
		$table="SELECT a.*,(SELECT COUNT(id) FROM agent_cust_transaction I3 WHERE I3.agcrid=a.id)as countTrans  FROM agent_cust_receiver a
		WHERE a.agcid='$agcid' ORDER BY a.date DESC ";	//table for pagination setting
		$pages = new Paginator($table,9,array(15,3,6,9,12,25,50,100,250,'All'));
			$start=$pages->limit_start;
			$end=$pages->limit_end;
		$table="SELECT a.*,(SELECT COUNT(id) FROM agent_cust_transaction I3 WHERE I3.agcrid=a.id)as countTrans  FROM agent_cust_receiver a
		WHERE a.agcid='$agcid' ORDER BY a.date DESC LIMIT $start,$end";
		$template->trans_result=$cust->custList($table);// display table result
		$template->pagin= $pages->display_pages();														//quick menu
		$template->pages=$pages->display_jump_menu(); $template->items=$pages->display_items_per_page();	//quick menu
		
				}

echo $template;