<?php require('config/init.php'); ?>

<?php


//Get Template & Assign Vars
$template = new Template('templates/cReceiver.php');


$user=new User;
$receiver=new Receiver;
$trans= new Transaction;
$validate=new Validator;

$template->rate=$trans->todaysrate();

	
		
		$user_id=getUser()['user_id'];
		$template->bank_a=$trans->transBank_b();
		$template->bank_p=$trans->transBank_p();
		
		
		if(isset($_POST['submit'])){
			
					// List  agent	
				

					$user_id=getUser()['user_id'];
					$fName=trim($_POST['fName']);
					$lName=trim($_POST['lName']);
					$rPhone=trim($_POST['rPhone']);
					$tMode=trim($_POST['tMode']);
					$abank=trim($_POST['abank']);
					$pbank=trim($_POST['pbank']);
					$modeId=trim($_POST['modeId']);
					$actNo=trim($_POST['actNo']);
					
					$listArray=array();
					
						if($_POST['tMode']=='Pick Up'){
						$required=array('fName','lName','pbank','modeId');	
						$bank=$pbank; //allowing value into bank variable for submission
						}
						else{
							$required=array('fName','lName','abank','actNo');
							$bank=$abank;
						}
		
								$listArray['fName']=ucfirst($fName);
								$listArray['lName']=ucfirst($lName);
								$listArray['rPhone']=$rPhone;
								$listArray['tMode']=$tMode;
								$listArray['bank']=$bank;
								$listArray['actNo']=$actNo;
								$listArray['modeId']=$modeId;
								$listArray['dtime']=dateTime();
								
								// Setting for agent customer receiver
								if(getUser()['type']=='agent'){	 
								$listArray['agid']=$user_id;
								$listArray['type']='agent';
								}
								
								// setting for customer receivers & setting insert GET 'value'
								if(getUser()['type']=='customer'){	
								$listArray['type']='customer';
								$listArray['cid']=$user_id;
								$name=getUser()['fname'];
								$value='name='.$name.'&fName='.$fName. '&lName='.$lName.'&rPhone='.$rPhone. '&actNo='.$actNo;
								}
								
								
								
	//checking if rid get variable is set ---mainly to be used to modify							
								if(isset($_GET['rid'])){
									$rid=$_GET['rid'];
									$name=$_GET['name'];
									$value='rid='.$rid.'&name='.$name;
								}
								else{
								$rid="";	
								}
								
	//insert-for agent customer receiver: checking if agcid get variable is set() ---mainly to be used to insert new record
								if(isset($_GET['agcid'])) {
									$agcid=$_GET['agcid'];
									$listArray['agcid']=$agcid;

								}
								else{
								$agcid="";	
								
								}
								

							
							
					if($validate->isRequired($required)){
	// insert new receiver when rid(for update is not available)
						if(!isset($_GET['rid'])){
							
	// insert new record here	
								$returnValue=$receiver->insert($listArray);
								if($returnValue[0]){
									$string="rid=".$returnValue[1]."&agcid=".$listArray['agcid'];
									redirectValue('sendMoney.php','New Receiver Registered, <a  href=sendMoney.php><strong style=font-size:22px;>SEND MONEY?</strong></a> ','success',$string);
								}
								else{
									redirectValue('cReceiver.php','Something Went wrong inserting','error',$value);
								}
						}
						
						else{
							
	//update else
								if(isset($_GET['rid'])){
							// update record here
								$rid=$_GET['rid'];
							if($receiver->update($listArray,$rid)){
								$value='rid='.$rid.'&name='.$fName."-".$lName;
								redirectValue('cReceiver.php','Receiver record updated ','success',$value);
							}
							else{
								redirectValue('cReceiver.php','Something Went wrong updating','error', $value);
							}
						}
						}
					}
		
					else{
						
					redirectValue('cReceiver.php','Please Fill in All Sections Marked With Asterik * ','error',$value);	
					}
		
					
				
			
		}
		
				
		//for updating existing receiver or agent cust receiver records(for display)
		
		if(isset($_GET['rid']) && (getUser()['type']=='agent') ){
			
			$ridValue=trim($_GET['rid']);
			$template->result=$receiver->agent_cust_receiver($ridValue);
		}	
		
		if((getUser()['type']=='customer') && isset($_GET['rid'])){
			
			$ridValue=trim($_GET['rid']);
			$template->result=$receiver->receiver($ridValue);
		}
		
				
				

echo $template;