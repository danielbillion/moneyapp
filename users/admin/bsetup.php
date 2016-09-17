<?php 
require_once('/../config/init.php');
$template=new Template('templates/bsetup.php');
$user=new User;
$setup=new Setup;
$validator = new Validator;
$template->dataResult=$setup->bsetup();

if(isset($_POST['submit'])){
//business info
	$arrayValue=array();
	$arrayValue['name1'] =trim($_POST['name1']);
	$arrayValue['name2'] =trim($_POST['name2']);
	$arrayValue['slogan1'] =trim($_POST['slogan1']);
	$arrayValue['slogan2'] =trim($_POST['slogan2']);
	$arrayValue['email'] =trim($_POST['email']);
	$arrayValue['email2'] =trim($_POST['email2']);
	$arrayValue['tel1'] =trim($_POST['tel1']);
	$arrayValue['tel2'] =trim($_POST['tel2']);
	$arrayValue['tel3'] =trim($_POST['tel3']);
	$arrayValue['web1'] =trim($_POST['web1']);
	$arrayValue['web2'] =trim($_POST['web2']);
	$arrayValue['fax'] =trim($_POST['fax']);
	$arrayValue['address'] =trim($_POST['address']);
	$arrayValue['postcode'] =trim($_POST['postcode']);
	$arrayValue['country'] =trim($_POST['country']);
//for sms
	$arrayValue['smsStatus'] =trim($_POST['smsStatus'])=='Enable'? 'ON':'OFF';
	$arrayValue['smsHash'] =trim($_POST['smsHash']);
	$arrayValue['smsEmail'] =trim($_POST['smsEmail']);
//for paypal
	$arrayValue['paypalStatus'] =trim($_POST['paypalStatus'])=='Enable'? 'ON' : 'OFF';
	$arrayValue['paypalEmail'] =trim($_POST['paypalEmail']);
	$arrayValue['paypalLimit'] =trim($_POST['paypalLimit']);
	$arrayValue['paypalLimit'] =trim($_POST['paypalLimit']);
//Transactions	
	$arrayValue['businessCode'] =trim($_POST['businessCode']);
	//convert into 1,2,3,4
	$arrayValue['businessType'] =trim($_POST['businessType'])=='Customer Only' ? '1':(trim($_POST['businessType'])=='Agent Only' ? '2':
	(trim($_POST['businessType'])=='Agent-Customer' ? '3':'4'));
	$arrayValue['eCredit'] =trim($_POST['eCredit'])=='Enable'? '1': '0';		//change value to 0 & 1 for entry
	$arrayValue['businessNameOnReceipt'] =trim($_POST['businessNameOnReceipt'])=='Enable'? '1': '0';  //change value to 0 & 1 for entry
	
	$arrayValue['maxTransaction'] =trim($_POST['maxTransaction'])=='Enable'? '1':'0'; //to Activate maximium transaction view
	$arrayValue['dailyLimit'] =trim($_POST['dailyLimit'])=='Enable'? '1':'0';			//to activate daily transaction Limit
	$arrayValue['activateId'] =trim($_POST['activateId'])=='Enable'? '1':'0';			//to Activate need for id b4 Tranaction
	$arrayValue['maxValue'] =trim($_POST['maxValue']);									//value for maximum Transaction
	$arrayValue['limitValue'] =trim($_POST['limitValue']);								//value for daily limit transaction
	
	



/*
$brc =trim($_POST['brc']);
$type2 =trim($_POST['type']);
$br =trim($_POST['br']);
$code =trim($_POST['code']);
$ecredit =trim($_POST['ecredit']);
$ecal =trim($_POST['ecal']);

$mv =trim($_POST['mv']);
$max =trim($_POST['max']);
$tln =trim($_POST['tln']);
$st =trim($_POST['st']);
$vdtl =trim($_POST['vdtl']);


*/

	$emailArray=array($arrayValue['email'],$arrayValue['email2']);
	if($validator->multiple_isValidEmail($emailArray)){
		if($setup->newSubmission($arrayValue)){
			redirect('bsetup.php','New Submission Successful','success');
		}
		else{
			redirect('bsetup.php','Something Went Wrong','error');
		}
		
	}
	else{
		redirect('bsetup.php','Email Entered Is Invalid','error');
	}
	
	
}

echo $template;


?>