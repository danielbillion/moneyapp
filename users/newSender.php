<?php require('config/init.php'); ?>

<?php


//Get Template & Assign Vars
$template = new Template('templates/newSender.php');


$user=new User;
$trans= new Transaction;

$template->rate=$trans->todaysrate();

	
			// List  agent	
		if(getUser()['type']=='agent'){	
if(isset($_POST['submit'])){
	$template->fName=trim($_POST['fName']);
	$template->lName=trim($_POST['lName']);
	$template->mName=trim($_POST['mName']);
	
	$arrayField=array();
	$arrayField['title']=trim($_POST['title']);
	$arrayField['fName']=trim($_POST['fName']);
	$arrayField['mName']=trim($_POST['mName']);
	$arrayField['lName']=trim($_POST['lName']);
	$arrayField['mNumber']=trim($_POST['mNumber']);
	$arrayField['pNumber']=trim($_POST['pNumber']);
	$arrayField['email']=trim($_POST['email']);
	$arrayField['cEmail']=trim($_POST['cEmail']);
	$arrayField['agid']=getUser()['user_id'];
	$arrayField['agentEmail']=getUser()['email'];
	$arrayField['dob']=trim($_POST['dob']);
	$arrayField['postcode']=trim($_POST['postcode']);
	$arrayField['company']=trim($_POST['company']);
	$arrayField['line1']=trim($_POST['line1']);
	$arrayField['line2']=trim($_POST['line2']);
	$arrayField['line3']=trim($_POST['line3']);
	$arrayField['town']=trim($_POST['town']);
	$arrayField['county']=trim($_POST['county']);
	$arrayField['country']=trim($_POST['country']);
	$arrayField['dateReg']=dateTime();
	$arrayField['address']=$arrayField['line1']." ".$arrayField['line2']." ".$arrayField['line3']." ".$arrayField['town']." ".$arrayField['county']."
  ".$arrayField['country'];
	
	$requiredField=array('fName','lName','mNumber','postcode','title');
	
	$validate=new Validator;
	$senders=new Senders;
	if($validate->isRequired($requiredField)){
		if(isset($_POST['checkTerms'])){
		
						if(($arrayField['email']!="") || ($arrayField['email']  !="") ){
							if($arrayField['email'] == $arrayField['cEmail'] ){
				//email entered		
								if($validate->isValidEmail($arrayField['email'])){
									$return=$senders->insertNew($arrayField);
									if($return[0]){
										$value="agcid=".$return[1]."&name=".$return[2];
										
										redirectValue('cReceiver.php', 'New Sender Has Now Been Registered','success',$value);
									}
									else{
										
										redirect('newSender.php', 'Something Went Wrong','error');	
										
									}
								}
								
								else{
									redirect('newSender.php', 'Your Email is not in the right format','error');	
									}
							}
							else{
								redirect('newSender.php', 'Your Email did not match','error');	
							}
						
						}
				//email not entered	
					else{
						
									$return=$senders->insertNew($arrayField);
							if($return[0]){
										$value="agcid=".$return[1]."&name=".$return[2];
										
										redirectValue('cReceiver.php', 'New Sender Has Now Been Registered','success',$value);
							}
							else{
								
								redirect('newSender.php', 'Something Went Wrong','error');	
								
							}
						}
				
					}
					else{
						redirect('newSender.php', 'Please check Our Terms And Conditions','error');	
					}
				
				}
	
	else{
		
		redirect('newSender.php', 'Please Fill All Marked  Fields','error');
	}
	
}		
		
			
	
		}
				// List  customer	
		if(getUser()['type']=='customer'){	
		}

echo $template;