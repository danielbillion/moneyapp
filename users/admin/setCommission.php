<?php require('/../config/init.php'); ?>
<?php

//Get Template & Assign Vars 
$template = new Template('templates/setCommission.php');
$trans=new Setup;
$validator=new Validator;

	//Display table based on type	
	
	if(isset($_GET['type'])){
				if(($_GET['type']=='a')){
					
					$template->result=$trans->comTableAgent();
				}
				
				if(($_GET['type']=='c')){
					
					$template->result=$trans->comTableCust();
				}

		}

		else{
			$template->result=$trans->comTableAgent();
		}

	//Submit for new entry
			
		if(isset($_POST['submit'])){
			$amountFrom=trim($_POST['amountFrom']);
			$amountTo=trim($_POST['amountTo']);
			$value=trim($_POST['value']);
			$rate=trim($_POST['rate']);
			
			$arrayValue=array();
			$arrayValue['amountTo']=$amountTo;
			$arrayValue['amountFrom']=$amountFrom;
			$arrayValue['value']=$value;
			$arrayValue['rate']=$rate;
			
			//check for empty entry
			$required=array('amountFrom','amountTo','value','rate');
			$trans=new Setup;
			$validator=new Validator;
			
			$value="";
			if(isset($_GET['type'])){
				$type=$_GET['type'];
				if($type=='c'){
					$value="type=c";
					}
					else{
					$value="type=a";	
					}
			}
			
			if($validator->isRequired($required)){
				if($trans->rangeNotExist($arrayValue)){
					if($trans->newRange($arrayValue)){
						redirectValue('setCommission.php','New Commission Range Successful','success',$value);
					}
				}
				
				else{
					redirectValue('setCommission.php','Your entry is already in existence, Please Check','error',$value);
				}
				
			}	
			
			else{
				redirectValue('setCommission.php','One of Your Entry is Empty','error',$value);
			}
			
			
			
			
		}

//Delete Range from Agent_cr/cust_cr
		if(isset($_GET['rangeId'])){
				$id=trim($_GET['rangeId']);
			if($trans->delRange($id)){
				//redirection to either agent_cr table or cust_cr  based on get value
				if($_GET['type']=='c'){
					$value='type=c';
				redirectValue('setCommission.php','Range Successfully Deleted','success',$value);
				}
				else{
					redirect('setCommission.php','Range Successfully Deleted','success');
				}
			}
			else{
				redirect('setCommission.php','Something Went Wrong','error');
			}
			
		}

	echo $template;
?>