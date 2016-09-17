<?php require('config/init.php'); ?>

<?php


//Get Template & Assign Vars
$template = new Template('templates/search.php');


$user=new User;
$trans= new Transaction;

$template->rate=$trans->todaysrate();

	
			// List  agent	
		if(getUser()['type']=='agent'){		
		
		$user_id=getUser()['user_id'];
		$table="SELECT * FROM agent_cust_transaction WHERE agid='$user_id' ORDER BY dtime DESC ";	//table for pagination setting
		$pages = new Paginator($table,9,array(15,3,6,9,12,25,50,100,250,'All'));
			$start=$pages->limit_start;
			$end=$pages->limit_end;
			if(isset($_POST['Submit'])){
				
				if($_POST['queryTable']=='transferCode'){ //search based on receipt no or transfer code
					$value=trim($_POST['value']);
				$table_full="SELECT * FROM agent_cust_transaction WHERE agid='$user_id' && receiptno='$value' ORDER BY dtime DESC LIMIT $start,$end";	
				}
				if($_POST['queryTable']=='cFristLastname'){ // search based first name or last name
					$value=trim($_POST['value']);
				$table_full="SELECT agent_cust_transaction.*,agent_new_customer.* FROM agent_cust_transaction INNER JOIN agent_new_customer 
				ON agent_new_customer.id=agent_cust_transaction.agcid
				 WHERE agent_cust_transaction.agid='$user_id' && (agent_new_customer.fname='$value' || agent_new_customer.lname='$value') 
				ORDER BY agent_cust_transaction.dtime DESC LIMIT $start,$end";		
				}
				
				if($_POST['queryTable']=='phoneNo'){// search based on phone Number
					$value=trim($_POST['value']);
				$table_full="SELECT * FROM agent_cust_transaction WHERE agid='$user_id' && (s_phone='$value' || r_phone='$value')ORDER BY dtime DESC LIMIT $start,$end";		
				}
				
				if($_POST['queryTable']=='date'){// search based date
				$var = $_POST['date1'];
				$date1 = DateTime::createFromFormat('m/d/Y', $var);
				$date1= $date1->format('Y-m-d'); // => 2013-12-24
				$date1 = date('Y-m-d', strtotime($date1));
				
				$var2 = $_POST['date2'];
				$date2 = DateTime::createFromFormat('m/d/Y', $var2);
				$date2= $date2->format('Y-m-d'); // => 2013-12-24
				$date2 = date('Y-m-d', strtotime($date2));
				
					
				$table_full="SELECT * FROM agent_cust_transaction WHERE (date BETWEEN '$date1' AND '$date2') && agid='$user_id'  ORDER BY dtime DESC LIMIT $start,$end";		
				}
				
				if($_POST['queryTable']=='today'){// search based todats date
				$today = date('Y-m-d');
				$table_full="SELECT * FROM agent_cust_transaction WHERE date='$today'  ORDER BY dtime DESC LIMIT $start,$end";		
				}
			}
			else{
				$table_full="SELECT * FROM agent_cust_transaction WHERE agid='$user_id' ORDER BY dtime DESC LIMIT $start,$end";
			}
		$template->trans_result=$trans->agentCusttrans_full($table_full,getUser()['user_id'],$start,15);// display table result
		$template->pagin= $pages->display_pages();														//quick menu
		$template->pages=$pages->display_jump_menu(); $template->items=$pages->display_items_per_page();	//quick menu
	
		}
				// List  customer	
		if(getUser()['type']=='customer'){			
	$user_id=getUser()['user_id'];
		$table="SELECT * FROM cust_transaction WHERE cid='$user_id' ORDER BY dtime DESC ";	//table for pagination setting
		$pages = new Paginator($table,9,array(15,3,6,9,12,25,50,100,250,'All'));
			$start=$pages->limit_start;
			$end=$pages->limit_end;
			if(isset($_POST['Submit'])){
				
				if($_POST['queryTable']=='transferCode'){ 				//search based on receipt no or transfer code
					$value=trim($_POST['value']);
				$table_full="SELECT * FROM cust_transaction WHERE cid='$user_id' && receiptno='$value' ORDER BY dtime DESC LIMIT $start,$end";	
				}
				
				if($_POST['queryTable']=='cFristLastname'){ 			// search based first name or last name
					$value=trim($_POST['value']);
				$table_full="SELECT cust_transaction.*,receiver.* FROM cust_transaction INNER JOIN receiver 
				ON receiver.id=cust_transaction.crid
				 WHERE cust_transaction.cid='$user_id' && (receiver.b_fname='$value' || receiver.b_lname='$value') 
				ORDER BY cust_transaction.dtime DESC LIMIT $start,$end";		
				}
				
				if($_POST['queryTable']=='phoneNo'){					// search based on phone Number
					$value=trim($_POST['value']);
				$table_full="SELECT * FROM cust_transaction WHERE cid='$user_id' && (s_phone='$value' || r_phone='$value')ORDER BY dtime DESC LIMIT $start,$end";		
				}
				
				if($_POST['queryTable']=='date'){						// search based date
				$var = $_POST['date1'];
				$date1 = str_replace('/', '-', $var);
				$date1 = date('Y-m-d', strtotime($date1));
				$date1 = DateTime::createFromFormat('d/m/Y', $var);
				$template->date1= $date1->format('Y-m-d'); // => 2013-12-24
				
				$var2 = $_POST['date2'];
				$date2 = str_replace('/', '-', $var2);
				$date2 = date('Y-m-d', strtotime($date2));
				$date2 = DateTime::createFromFormat('d/m/Y', $var2);
				$template->date2= $date2->format('Y-m-d'); // => 2013-12-24
				
					
				$table_full="SELECT * FROM cust_transaction WHERE (date BETWEEN '$date1' AND '$date2') && cid='$user_id'  ORDER BY dtime DESC LIMIT $start,$end";		
				}
				
				
				if($_POST['queryTable']=='today'){// search based todats date
				$today = date('Y-m-d');
				$table_full="SELECT * FROM cust_transaction WHERE date='$today'  ORDER BY dtime DESC LIMIT $start,$end";		
				}
			}
			else{
				$table_full="SELECT * FROM cust_transaction WHERE cid='$user_id' ORDER BY dtime DESC LIMIT $start,$end";
			}
		$template->trans_result=$trans->Custtrans_full($table_full,getUser()['user_id'],$start,15);// display table result
		$template->pagin= $pages->display_pages();														//quick menu
		$template->pages=$pages->display_jump_menu(); $template->items=$pages->display_items_per_page();	//quick menu
				}

echo $template;