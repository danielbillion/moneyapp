<?php require('config/init.php'); ?>

<?php


//Get Template & Assign Vars
$template = new Template('templates/cancelTrans.php');


$user=new User;
$trans= new Transaction;

$template->rate=$trans->todaysrate();

	
			// List  agent	
		if(getUser()['type']=='agent'){		
		
		$user_id=getUser()['user_id'];
				if(isset($_GET['custId'])){
					$custId=$_GET['custId'];
				$table="SELECT * FROM agent_cust_transaction_cancel WHERE agid='$user_id' && agcid='$custId' ORDER BY dtime DESC ";	//table for pagination setting if custId is set
				}
				else {
				$table="SELECT * FROM agent_cust_transaction_cancel WHERE agid='$user_id' ORDER BY dtime DESC ";	//table for pagination setting if custid is not set	
				}
		$pages = new Paginator($table,9,array(15,3,6,9,12,25,50,100,250,'All'));
		$start=$pages->limit_start;
		$end=$pages->limit_end;
			if(isset($_GET['custId'])){
				$custId=$_GET['custId'];
			$table_full="SELECT * FROM agent_cust_transaction_cancell WHERE agid='$user_id' && agcid='$custId' ORDER BY dtime DESC LIMIT $start,$end";
			}
			else{
				$table_full="SELECT * FROM agent_cust_transaction_cancel WHERE agid='$user_id' ORDER BY dtime DESC LIMIT $start,$end";
			}
		$template->trans_result=$trans->agentCusttrans_full($table_full,getUser()['user_id'],$start,15);// display table result
		$template->pagin= $pages->display_pages();														//quick menu
		$template->pages=$pages->display_jump_menu(); $template->items=$pages->display_items_per_page();	//quick menu
	
		}
				// List  customer	
		if(getUser()['type']=='customer'){			
		$user_id=getUser()['user_id'];
				if(isset($_GET['receivertId'])){
							$recId=$_GET['receivertId'];
				$table="SELECT * FROM cust_transaction_cancel WHERE cid='$user_id' && crid='$recId' ORDER BY dtime DESC ";	//table for pagination setting if receiver id is set
				}
				else{
				$table="SELECT * FROM cust_transaction_cancel WHERE cid='$user_id' ORDER BY dtime DESC ";	//table for pagination setting if receiver id is not set
				}
		$pages = new Paginator($table,9,array(15,3,6,9,12,25,50,100,250,'All'));
			$start=$pages->limit_start;
			$end=$pages->limit_end;
			
				if(isset($_GET['receivertId'])){
							$recId=$_GET['receivertId'];
				$table_full="SELECT * FROM cust_transaction_cancel WHERE cid='$user_id' && crid='$recId' ORDER BY dtime DESC LIMIT $start,$end";
				}
				else{
					$table_full="SELECT * FROM cust_transaction_cancel WHERE cid='$user_id' ORDER BY dtime DESC LIMIT $start,$end";
				}
		$template->trans_result=$trans->Custtrans_full($table_full,getUser()['user_id'],$start,15);// display table result
		$template->pagin= $pages->display_pages();														//quick menu
		$template->pages=$pages->display_jump_menu(); $template->items=$pages->display_items_per_page();	//quick menu
				}

echo $template;