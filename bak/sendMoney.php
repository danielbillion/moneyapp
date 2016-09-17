<?php
		require "config/init.php";
		$template=new Template('templates/sendMoney.php');
		$trans= new Transaction;
		$template->rate=$trans->todaysrate();
		$senders=new Senders;
		$receivers=new Receiver;
		$sendMoney=new sendMoney;
		$validate=new Validator;
		
			//populate result for receiver using ajax jquery
	
	

			
			$user_id=getUser()['user_id'];
			if(!isset($_POST['get_receiver'])){
			$user_id=getUser()['user_id'];
			
				if(getUser()['type']=='agent')
				{
					//find sender name using GET
				$template->senders=$senders->senders($user_id);
				if(isset($_GET['agcid'])){
					$senderId=($_GET['agcid']);
					$template->senderName=$sendMoney->getSenderinfo($senderId);
					
				}
				//find receiver info using GET
				if(isset($_GET['rid'])){
					$receiverId=($_GET['rid']);
					$result=$sendMoney->getReceiverinfo($receiverId);
					foreach($result as $result){
						$template->receiverName=strtoupper($result->b_fname)." ".strtoupper($result->b_lname);
						$template->rLName=strtoupper($result->b_lname);
						$template->rFName=strtoupper($result->b_fname);
						$template->rPhone=$result->b_phone;
						$template->rActno=$result->b_actno;
						$template->rBank=$result->bank;
						$template->tOption=$result->b_transfer;
					
					}
						
						
					}
				
				}
				
				else{
					$template->senders=$receivers->receiversList($user_id);
					if(isset($_GET['rid'])){
					$receiverId=($_GET['rid']);
					$result=$sendMoney->getReceiverinfo($receiverId);
					foreach($result as $result){
						$template->receiverName=strtoupper($result->b_fname)." ".strtoupper($result->b_lname);
						$template->rLName=strtoupper($result->b_lname);
						$template->rFName=strtoupper($result->b_fname);
						$template->rPhone=$result->b_phone;
						$template->rActno=$result->b_actno;
						$template->rBank=$result->bank;
						$template->tOption=$result->b_transfer;
					}
				}
				}
			}
				
				if(isset($_POST['submit'])){
				// for agent account
				if(getUser()['type']=="agent"){
				$senders=$_POST['senders'];
				//explode sender post into array of first name,middle name nd last name
				$sName=explode(' ',$senders);$sFName=trim($sName['0']);$sLName=trim($sName['1']);
				if(isset($sName['2'])){$sMName=trim($sName['2']);} else {$sMName=""; }
				}
				//for customer account
				else{
					$_POST['senders']=getUser()['fname']." " .getUser()['lname']." ".getUser()['mname'];
					$senders=getUser()['fname']." " .getUser()['lname']." ".getUser()['mname'];
					$sFName=getUser()['fname'];$sLName=getUser()['lname'];
				if(isset(getUser()['mname'])){$sMName=getUser()['mname'];} else {$sMName="";}
				}
				
				
				$receivers=$_POST['receivers'];
				$amount=$_POST['amount'];
				
				$rFName=trim($_POST['rFName']);
				$rLName=trim($_POST['rLName']);
				$rPhone=$_POST['rPhone'];
				$tOption=$_POST['tOption'];
				$rActno=$_POST['rActno'];
				$rBank=$_POST['rBank'];
				
				$trans=array();
				$trans['commission']=$_POST['commission'];
				$trans['tAmount']=$_POST['tAmount'];
				$trans['lAmount']=$_POST['lAmount'];
				$trans['eRate']=$_POST['eRate'];
				
				$trans['senders']=$senders;
				$trans['receivers']=$receivers;
				$trans['amount']=$amount;
				
				$trans['rFName']=$rFName;
				$trans['rLName']=$rLName;
				$trans['rPhone']=$rPhone;
				$trans['tOption']=$tOption;
				$trans['rActno']=$rActno;
				$trans['rBank']=$rBank;
				//$transVal="trans=".$trans;
				//find senders info & receivers id if not set
				$senderPhone=findSenderinfo($sFName,$sLName,$sMName,$user_id)['phone'];
				$senderEmail=findSenderinfo($sFName,$sLName,$sMName,$user_id)['email'];
				$senderAddress=findSenderinfo($sFName,$sLName,$sMName,$user_id)['address'];
				$postcode=findSenderinfo($sFName,$sLName,$sMName,$user_id)['postcode'];
				$town=findSenderinfo($sFName,$sLName,$sMName,$user_id)['town'];
				$county=findSenderinfo($sFName,$sLName,$sMName,$user_id)['county'];
				$country=findSenderinfo($sFName,$sLName,$sMName,$user_id)['country'];
				
				$senderId=findSenderinfo($sFName,$sLName,$sMName,$user_id)['senderId'];
				
				//check only for agent as customer only account dont have customer
			
				$rId=findReceiverid($rFName,$rLName,$senderId);
				
				
				$transVal = json_encode($trans);
				$transVal ="senderId=". ($senderId). "&rId=". ($rId)."&senders=". ($senders)."&receivers=". ($receivers)."&amount=". ($amount)."&rFName=". ($rFName)
				."&rLName=". ($rLName)."&rPhone=". ($rPhone)."&tOption=". ($tOption)."&rActno=". ($rActno)
				."&rBank=". ($rBank)."&commission=". ($trans['commission'])."&tAmount=". ($trans['tAmount'])."&lAmount=". ($trans['lAmount'])
				."&eRate=". ($trans['eRate'])."&senderPhone=".($senderPhone)."&senderEmail=".($senderEmail)."&senderAddress=".($senderAddress)."&postcode=".($postcode)."&town=".($town)."&county=".($county)."&country=".($country);
				
				$required=array('senders','receivers','amount','rFName','rLName','rPhone','tOption','rActno','rBank');
				
				//check if all required fields are completed
				if($validate->isRequired($required)){
				//check if agent can trade or make transaction 
					if($sendMoney->sendingStatus()){
						//check business status if IDENTITY is needed to make transaction
						if(binfo()['dtls']==1){
							//check if amount is within limit to send money without id or else id is needed to make transction
							if($amount<= binfo()['dtl']){
								//Send Money now
									redirectValue('confirmation.php','Confirmation Page','success',$transVal);
							}
							else{
							//check if customer id is uploaded to send money
								if($sendMoney->checkCId($sFName,$sLName,$sMName)){
									//if returns is true, allow sender send money
										redirectValue('confirmation.php','Confirmation Page','success',$transVal);
									}
									else{
										redirectValue('sendMoney.php','You Need To Upload Your Identity To Proceed','error');
									}
							
							}
						}
						
						else{
							//Send Money now
									redirectValue('confirmation.php','Confirmation Page','success',$transVal);
							}
					}
					else{
						redirect('sendMoney.php','You Are Not Eligible To Make Transaction,Please Contact Admin','error');
					}
				}
				else{
					redirect('sendMoney.php','Please Fill All Required Fields','error');
				}
				
				
				
			}
			echo $template;
	



?>