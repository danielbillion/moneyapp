<?php require('config/init.php'); ?>

<?php


//Get Template & Assign Vars
$template = new Template('templates/editTrans.php');


$user=new User;
$trans= new Transaction;
$template->rate=$trans->todaysrate();

	


	
			// List  agent	
		$transid=$_GET['transId'];	
		if(getUser()['type']=='agent'){		
		
		$user_id=getUser()['user_id'];
		$table="SELECT * FROM agent_cust_transaction WHERE id='$transid' ORDER BY dtime DESC ";
		$template->trans_result=$trans->agentCusttrans($table);
		$template->banks=$trans->transBank();
		}
				// List  customer	
		if(getUser()['type']=='customer'){			
		$table="SELECT * FROM cust_transaction WHERE id='$transid' ORDER BY dtime DESC ";
		$template->trans_result=$trans->Custtrans($table);
		$template->banks=$trans->transBank();
				}



if(isset($_POST['submit'])){
	$transid=$_GET['transId'];
	$rName=trim($_POST['rName']);
	$rPhone=trim($_POST['rPhone']);
	$transferMode=trim($_POST['transferMode']);                       	
	$modeId=trim($_POST['modeId']);
	$actNo=trim($_POST['actNo']);
	$rBank=trim($_POST['rBank']);
	$arrayField=array();
	$arrayField['rName']=trim($_POST['rName']);
	$arrayField['rPhone']=trim($_POST['rPhone']);
	$arrayField['transferMode']=trim($_POST['transferMode']);
	$arrayField['modeId']=trim($_POST['modeId']);
	$arrayField['actNo']=trim($_POST['actNo']);
	$arrayField['rBank']=trim($_POST['rBank']);
	
		if(getUser()['type']=='agent'){	
				if($trans->updateAgentTrans($arrayField,$transid)){
					
					redirect('prevTrans.php','Edit Of Transaction Successful', 'success');
				}
				else
				{redirect('prevTrans.php','Something Went Wrong', 'error');}
			}			

		if(getUser()['type']=='customer'){	
				if($trans->updateCustTrans($arrayField,$transid)){
					
					redirect('prevTrans.php','Edit Of Transaction Successful', 'success');
				}
				else
				{redirect('prevTrans.php','Something Went Wrong', 'error');}
			}			
		
	}
echo $template;
?>
