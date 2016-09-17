<?php
class sendMoney{
	
	private $db;
	
	public function __construct(){
		
		$this->db=new Database;
	}
	
	public function sendingStatus(){
		
		$userid=getUser()['user_id'];
		$this->db->query('SELECT active,id FROM agent WHERE id=:id && active=-1');
		$this->db->bind(':id',$userid);
		$result=$this->db->resultset();
		if(($this->db->rowCount()) <= 0){
			
			return true;
		}
		
		else{
			return false;
		}
	}
	
	//check agent customer across the database if id is uploaded
	public function checkCId($sFName,$sLName,$sMName)
	
	{
		$this->db->query("SELECT fname,mname,lname,proofid_size,proofad_size FROM agent_new_customer WHERE (fname=:sFName && mname=:sMName && lname=:sLName) && (proofid_size='0' ||proofad_size='0') ");
		$this->db->bind(":sFName",$sFName);
		$this->db->bind(":sMName",$sMName);
		$this->db->bind(":sLName",$sLName);
		$this->db->resultset();
			if(($this->db->rowCount()) <= 0){
			return true;
			}
		
			else{
				return false;
			}
		
	}
	public function moneySent($required){
		$amount=$required['amount'];
		$agentCredit=getUser()['credit'];
		$ecredit=binfo()['ecredit'];
			// for business who uses credit to operate
		if ($ecredit==1){
			if($agentCredit>=$amount){
				$this->manageCredit($amount,$agentCredit);
				//if successfully submitted go back to send money page
					if($this->submitTransaction($required)){
						redirect('sendMoney.php','New Transaction Successfully  Submitted','success');
					}
				
						else{
							redirect('sendMoney.php','Somethig Went Wrong submitting this Transaction','error');
							}
				}
			else{
				redirect('sendMoney.php','Your Credit is Insufficient To Proceeed With The Transaction','error');
			}
			
		}
			//for regualr business without using credit to operate
		else{
			//if successfully submitted go back to send money page
			if($this->submitTransaction($required)){
				redirect('sendMoney.php','New Transaction Successfully  Submitted','success');
			}
			
			else{
				redirect('sendMoney.php','Somethig Went Wrong submitting this Transaction','error');
			}
		}
		
	}
	//for business with credit, to manage credit after sending money
	private function manageCredit($amount,$agentCredit){
		$user_id=getUser()['user_id'];
		$newCredit=$agentCredit-$amount;
		$this->db->query("UPDATE agent SET credit=:newCredit WHERE id=:user_id" );
		$this->db->bind(':newCredit',$newCredit);
		$this->db->bind(':user_id',$user_id);
		$this->db->execute();
	}
	
	public function tcode(){
				$length = 7;
				$characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
				$randomString = '';
				for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, strlen($characters) - 1)];
					}
				$ref=$randomString;
				$tcode= $ref;
				//Avoid Tcode repetition
				$this->db->query("SELECT receiptno, id FROM agent_cust_transaction WHERE receiptno =:ref ");
				$this->db->bind(':ref',$ref );
				$result=$this->db->resultset();
				
					if($this->db->rowCount()>0){
											
												$length = 7;
												$characters = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
												$randomString = '';
												for ($i = 0; $i < $length; $i++)
													{
													$randomString .= $characters[rand(0, strlen($characters) - 1)];
													}
														return $randomString;
									}
				
							else{	
								return $randomString;
							} 				
			}

		private function submitTransaction($required){
				
				$this->db->query("INSERT INTO agent_cust_transaction(date,receiptno,agent_email,sender_email,sender_name,s_phone,r_name,r_phone,
							r_transfer,r_bank,r_idtype,
							amt_send,total,amt_local,commission,com_a,com_d,status, exchange_rate,r_actno,
							agent_name,agent_ps,dtime,address,postcode,town,county,country,clear,agcrid,agcid,agid)

							VALUE(:dDate,:tcode,:agentEmail,:senderEmail,:senderName,:senderPhone,:receivers,:rPhone,
							  :tOption,:rBank,:rIdType,:amount,:tAmount,:lAmount,:commission,:aCom,:bCom,
							  :status,:eRate,:rActno,:agentName,:agentPaidStatus,:dateTime,:senderAddress,:postcode,:town,
							  :county,:country,:uc,:agcrid,:agcid,:agid)");
							  
								$this->db->bind(':dDate',$required['dDate'] );
								$this->db->bind(':dateTime',$required['dateTime'] );
							   $this->db->bind(':tcode',$required['tcode'] );
							    $this->db->bind(':agentEmail',$required['agentEmail'] );
								$this->db->bind(':senderEmail',$required['senderEmail'] );
								$this->db->bind(':senderAddress',$required['senderAddress'] );
								$this->db->bind(':postcode',$required['postcode'] );
								$this->db->bind(':county',$required['county'] );
								$this->db->bind(':town',$required['town'] );
								$this->db->bind(':country',$required['country'] );
								$this->db->bind(':senderName',$required['senderName'] );
								$this->db->bind(':senderPhone',$required['senderPhone'] );
								$this->db->bind(':receivers',$required['receivers'] );
								$this->db->bind(':rPhone',$required['rPhone'] );
								$this->db->bind(':tOption',$required['tOption'] );
								$this->db->bind(':rBank',$required['rBank'] );
								$this->db->bind(':rActno',$required['rActno'] );
								$this->db->bind(':rIdType',$required['rIdType'] );
								$this->db->bind(':amount',$required['amount'] );
								$this->db->bind(':tAmount',$required['tAmount'] );
								$this->db->bind(':lAmount',$required['lAmount'] );
								$this->db->bind(':eRate',$required['eRate'] );
								$this->db->bind(':bCom',$required['bCom'] );
								$this->db->bind(':aCom',$required['aCom'] );
								$this->db->bind(':commission',$required['commission'] );
								$this->db->bind(':status',$required['status'] );
								$this->db->bind(':agentName',$required['agentName'] );
								$this->db->bind(':agentPaidStatus',$required['agentPaidStatus']);
								$this->db->bind(':uc',$required['uc'] );
								$this->db->bind(':agid',$required['agid'] );
								$this->db->bind(':agcid',$required['agcid'] );
								$this->db->bind(':agcrid',$required['agcrid'] );
								
								
				$this->db->execute();
				return true;
				
			}
	
	
}





?>