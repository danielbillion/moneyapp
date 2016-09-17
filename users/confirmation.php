<?php 
require "config/init.php";
$template=new Template('templates/confirmation.php');
$trans= new Transaction;
$sendMoney=new sendMoney;

	$required=array();
	$required['tcode']=$sendMoney->tcode();
	$template->tcode=$required['tcode'];
	
	if(isset($_POST['Confirm'])){
		//need sender address, sender phone,sender email,r_idtype
			$required['dDate']=dDate();
			$required['dateTime']=dateTime();
			
			$required['senderId']=$_GET['senderId'];
			$required['rId']=$_GET['rId'];
			$required['senderName']=$_GET['senders'];
			$required['senderEmail']=$_GET['senderEmail'];
			$required['senderPhone']=$_GET['senderPhone'];
			
			$required['receivers']=$_GET['receivers'];
			$required['rPhone']=$_GET['rPhone'];
			$required['tOption']=$_GET['tOption'];
			$required['rBank']=$_GET['rBank'];
			$required['rActno']=$_GET['rActno'];
			$required['rIdType']="";
			$required['amount']=$_GET['amount'];
			$required['commission']=$_GET['commission'];
			$required['tAmount']=$_GET['tAmount'];
			$lAmount=explode(".",($_GET['lAmount']));$lAmount=$lAmount[0];$required['lAmount'] = str_replace(',', '', $lAmount);
			$required['eRate']=$_GET['eRate'];
			$required['aCom']=  $required['commission']* ((comValue($required['amount'])['coma'])/100);
			$required['bCom']=  $required['commission']*((comValue($required['amount'])['comb'])/100);
			$required['status']="Pending";
			$required['tcode']=$sendMoney->tcode();
			//exclusive for agent only
			
			if(getUser()['type']=="agent"){
			$required['senderAddress']=$_GET['senderAddress'];
			$required['postcode']=$_GET['postcode'];
			$required['town']=$_GET['town'];
			$required['county']=$_GET['county'];
			$required['country']=$_GET['country'];
			
			$required['agentEmail']=getuser()['email'];
			$required['agid']=getUser()['user_id'];
			$required['agentPaidStatus']="np";
			$required['uc']='uc';
			$required['agentName']=getUser()['fname']." " .getUser()['lname'];
			}
			
			
		if($sendMoney->moneySent($required)){
			redirect('confirmation.php','Your Money Has Been Sent Successfully','success');
	}
		else{
										
}
		
	}
echo $template;


 ?>