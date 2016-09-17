<?php require('config/init.php'); ?>

<?php


//Get Template & Assign Vars
$template = new Template('templates/index.php');


$user=new User;
$trans= new Transaction;
$update=new Update;
$setupFields=new SetupFields;

$template->rate=$trans->todaysrate();

		//update id for tablestaa for both agent & customer database table
		
		 if($setupFields->create()){
			
			$template->dbf="new column are created";
		}
		else{
			$template->dbf="database record not fields not create";
		}
		
		/*
		
		if($update->updateallrecord()){
			
			$template->upd="database record update";
		}
		else{
			$template->upd="database record not update";
		}
		*/
		
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

				if ($mysqli->connect_errno) {
					echo 'Connect failed: ', $mysqli->connect_error, '" }';
					exit();
				}

				if ($stmt = $mysqli->prepare("ALTER IGNORE TABLE ? ADD ? VARCHAR(20);")) {
					$stmt->bind_param("ss", 'agent_cust_receiver', 'bank');
					$stmt->execute();
					$stmt->close();
				}
				$mysqli->close();
	
			// List 'quick' transaction for agent	//List agent for quick view
		if(getUser()['type']=='agent'){		
	$template->trans_result=$trans->agentCusttransaction(getUser()['user_id']);
	$template->customers=$user->getAgentCustomer(getUser()['user_id']);
				}
				
					// List 'quick' transaction for customer // List Customer for quick view	
		if(getUser()['type']=='customer'){			
	$template->trans_result=$trans->Custtransaction(getUser()['user_id']);
	$template->customers=$user->getCustomer(getUser()['user_id']);
				}

echo $template;