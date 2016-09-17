<?php

class Setup{
	private $db;
	
			public function __construct(){
				$this->db= new Database;
			}
			// fetch message to display from the database
			
			public function get_rate(){
				$this->db->query("SELECT rate,rate1,rate2,rate3,rate4,rate5,nu FROM todays_rate ORDER BY id DESC LIMIT 1  ");
				$row=$this->db->resultset();
				return $row;
				
			}
			
			public function submitRate($require){
				$date=dDate();
				$this->db->query("INSERT INTO todays_rate (rate,rate1,rate2,rate3,rate4,rate5,nu,date) VALUE(:rate,:rate1,:rate2,:rate3,:rate4,:rate5,:ratenu,$date) ");
				
				$this->db->bind(':rate', $require['rate']);
				$this->db->bind(':rate1', $require['rate1']);
				$this->db->bind(':rate2', $require['rate2']);
				$this->db->bind(':rate3', $require['rate3']);
				$this->db->bind(':rate4', $require['rate4']);
				$this->db->bind(':rate5', $require['rate5']);
				$this->db->bind(':ratenu', $require['ratenu']);
				
				$this->db->execute();
				return true;
				
			}
			
			public function comTableAgent(){
				
				$this->db->query("SELECT * FROM agent_cr ORDER BY `from` DESC");
				$row=$this->db->resultset();
				return $row;
			}
			
			public function comTableCust(){
				
				$this->db->query("SELECT * FROM cust_cr ORDER BY `from`  DESC");
				$row=$this->db->resultset();
				return $row;
			}
			
		
		
		
			public function rangeNotExist($arrayValue){
					
					if(isset($_GET['type'])){
							$type=$_GET['type'];
							if($type=='c'){
								$this->db->query("SELECT * FROM  `cust_cr` WHERE `to` =:amountTo AND  `from` =:amountFrom");
							}
							else{
								$this->db->query("SELECT * FROM  `agent_cr` WHERE `to` =:amountTo AND  `from` =:amountFrom");	
							}
					}
					else{
						$this->db->query("SELECT * FROM  `agent_cr` WHERE `to` =:amountTo AND  `from` =:amountFrom");
					}
					$this->db->bind(':amountFrom',$arrayValue['amountFrom']);
					$this->db->bind(':amountTo',$arrayValue['amountTo']);
					$row=$this->db->resultset();
					
					if($this->db->rowCount()<= 0){
						return true;
					}
					else {
						return false;
					}
					
				}
	//insert new commission range			
			public function newRange($arrayValue){
					$dateTime=dateTime();
					
				if(isset($_GET['type'])){
						$type=$_GET['type'];
						//insert into Agent_cr Table 
						if($_GET['type']=='a'){
							$this->db->query("INSERT INTO `agent_cr`(`from`,`to`,`value`,`pa`,`date`) VALUES(:amountFrom,:amountTo,:value,:rate,'$dateTime') ");
						}
						//insert into Cust_cr Table 
						else{
							$this->db->query("INSERT INTO `cust_cr`(`from`,`to`,`value`,`pa`,`date`) VALUES(:amountFrom,:amountTo,:value,:rate,'$dateTime') ");
						}
					}
						//insert into Agent_cr Table
					else{
						$this->db->query("INSERT INTO `agent_cr`(`from`,`to`,`value`,`pa`,`date`) VALUES(:amountFrom,:amountTo,:value,:rate,'$dateTime') ");
					}
						$this->db->bind(':amountFrom',$arrayValue['amountFrom']);
						$this->db->bind(':amountTo',$arrayValue['amountTo']);
						$this->db->bind(':value',$arrayValue['value']);
						$this->db->bind(':rate',$arrayValue['rate']);
					
					$this->db->execute();
					
					return true;
				}
	//Delete from commision table of agent and customer
			public function delRange($id){
				if(isset($_GET['type'])){
						$type=$_GET['type'];
							if($_GET['type']=='a'){
								//Delete from agent_cr
								$this->db->query("DELETE FROM `agent_cr` WHERE `id`=:id");
							}
							else{
								//Delete from cust_cr
								$this->db->query("DELETE FROM `cust_cr` WHERE `id`=:id");
							}
					}
				
				else{
					$this->db->query("DELETE FROM `agent_cr` WHERE `id`=:id");
				}
					$this->db->bind(':id',$id);
					$this->db->execute();
					return true;
			}
//for retireving record for business setup
		public function bsetup(){
			$this->db->query('SELECT * FROM busy ORDER BY id DESC LIMIT 1');
			$row=$this->db->resultset();
			return $row;
		}
//new business setup submission
	public function newSubmission($arrayValue){
		//dtls:daily transaction limit satus,  dtl:daily transaction limit value,   mtl:max trans view value,   mtls:max trans view status
		//br:business name on receipt-agent,  ecredit: type of system credit/debit, size:type of business:cust only,agent only,agent-cust only,paypal_ipn:paypal limit value
		//vdtl:activate if id is needed fortransaction
		
		$this->db->query("INSERT INTO busy(name1,name2,slogan1,slogan2,email,email2,tel1,tel2,tel3,web1,web2,fax,address,postcode,country,paypal_status,paypal_email,paypal_ipn,sms_status,sms_email,sms_hash,code,size,ecredit,br,mtls,dtls,vdtl,mtl,dtl) VALUE(:name1,:name2,:slogan1,:slogan2,:email,:email2,:tel1,:tel2,:tel3,:web1,:web2,:fax,:address,:postcode,:country,:paypalStatus,:paypalEmail,:paypalLimit,:smsStatus,:smsEmail,:smsHash,:businessCode,:businessType,:eCredit,:businessNameOnReceipt,:maxTransaction,:dailyLimit,:activateId,:maxValue,:limitValue)");
		$this->db->bind(':name1',$arrayValue['name1']);
		$this->db->bind(':name2',$arrayValue['name2']);
		$this->db->bind(':slogan1',$arrayValue['slogan1']);
		$this->db->bind(':slogan2',$arrayValue['slogan2']);
		$this->db->bind(':email',$arrayValue['email']);
		$this->db->bind(':email2',$arrayValue['email2']);
		$this->db->bind(':tel1',$arrayValue['tel1']);
		$this->db->bind(':tel2',$arrayValue['tel2']);
		$this->db->bind(':tel3',$arrayValue['tel3']);
		$this->db->bind(':web1',$arrayValue['web1']);
		$this->db->bind(':web2',$arrayValue['web2']);
		$this->db->bind(':fax',$arrayValue['fax']);
		$this->db->bind(':address',$arrayValue['address']);
		$this->db->bind(':postcode',$arrayValue['postcode']);
		$this->db->bind(':country',$arrayValue['country']);
		
		$this->db->bind(':smsStatus',$arrayValue['smsStatus']);
		$this->db->bind(':smsEmail',$arrayValue['smsEmail']);
		$this->db->bind(':smsHash',$arrayValue['smsHash']);
		$this->db->bind(':paypalStatus',$arrayValue['paypalStatus']);
		$this->db->bind(':paypalEmail',$arrayValue['paypalEmail']);
		$this->db->bind(':paypalLimit',$arrayValue['paypalLimit']);
		
		$this->db->bind(':businessCode',$arrayValue['businessCode']);
		$this->db->bind(':businessType',$arrayValue['businessType']);
		$this->db->bind(':eCredit',$arrayValue['eCredit']);
		$this->db->bind(':businessNameOnReceipt',$arrayValue['businessNameOnReceipt']);
		
		$this->db->bind(':maxTransaction',$arrayValue['maxTransaction']);
		$this->db->bind(':dailyLimit',$arrayValue['dailyLimit']);
		$this->db->bind(':activateId',$arrayValue['activateId']);
		$this->db->bind(':maxValue',$arrayValue['maxValue']);
		$this->db->bind(':limitValue',$arrayValue['limitValue']);
		
		$this->db->execute();
		return true;
	}
			
	
}

?>