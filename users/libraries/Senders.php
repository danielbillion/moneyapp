<?php 
class Senders{
	//Init DB Variable
	private $db;
	
	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }
	 
	/*
	 * Register User
	 */
	 


		public function todaysrate(){
			$this->db->query('SELECT rate, id FROM todays_rate  ORDER BY id DESC 
                        LIMIT 1 ');
			//$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

		}
		
		
		public function senders($user_id){
			$this->db->query("SELECT * FROM agent_new_customer WHERE agid='$user_id'  ORDER BY id DESC "); 
                        
			//$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

		}
	//List All Agent Senders
		public function custList($table){
			
			$this->db->query($table);
			$row=$this->db->resultset();
			
			return $row;
			
		}
		
		
		//checking validity of id to be uploaded and uploaded id
		
		
		//checking validity of id to be uploaded and uploaded address
		public function addressUploaded($getValue){
			
			$allowedExts=array('gif','jpg','jpeg', 'png','pdf');
			$temp=explode('.',$_FILES["imageAdd"]["name"]);
			$extension=end($temp);
			
			if(($_FILES["imageAdd"]["type"]=="image/jpeg") || ($_FILES["imageAdd"]["type"]=="image/png") ||
			($_FILES["imageAdd"]["type"]=="image/gif") || ($_FILES["imageAdd"]["type"]=="image/jpg") &&
			in-array('$extension','$allowedExts') && ($_FILES["imageAdd"]["size"]<100000)
			){
				if($_FILES["imageAdd"]["error"]>0){
					
					redirectValue('acModify.php',$_FILES["imageAdd"]["error"],'error',$getValue);
				}
				
				else{
					if(file_exists("img/agent/senders/address/".$_FILES["imageAdd"]["name"])){
						redirectValue('acModify.php','File Already Exist,if different Please rename it ','error',$getValue);
						
					}
					else{
						move_uploaded_file($_FILES["imageAdd"]["tmp_name"],"img/agent/senders/address/".$_FILES["imageAdd"]["name"]);
						return true;
					}
				}
				
				
			}
			else{
				redirectValue('acModify.php','image not in the right format or too lage','error',$getValue);
			}
		}
		
		public function idUploaded($getValue){
			
			$allowedExts=array('gif','jpg','jpeg', 'png','pdf');
			$temp=explode('.',$_FILES["imageId"]["name"]);
			$extension=end($temp);
			
			if(($_FILES["imageId"]["type"]=="image/jpeg") || ($_FILES["imageId"]["type"]=="image/png") ||
			($_FILES["imageId"]["type"]=="image/gif") || ($_FILES["imageId"]["type"]=="image/jpg") &&
			in-array('$extension','$allowedExts') && ($_FILES["imageId"]["size"]<100000)
			){
				if($_FILES["imageId"]["error"]>0){
					
					redirectValue('acModify.php',$_FILES["imageId"]["error"],'error',$getValue);
				}
				
				else{
					if(file_exists("img/agent/senders/address/".$_FILES["imageId"]["name"])){
						redirectValue('acModify.php','File Already Exist,if different Please rename it ','error',$getValue);
						
					}
					else{
						move_uploaded_file($_FILES["imageId"]["tmp_name"],"img/agent/senders/id/".$_FILES["imageId"]["name"]);
						return true;
					}
				}
				
				
			}
			else{
				redirectValue('acModify.php','image not in the right format or too lage','error',$getValue);
			}
		}
		
		//List All Agent Senders
		public function update($listArray,$agcid){
			$table="UPDATE agent_new_customer SET email=:email,pnumber=:contact, mnumber=:mobile ,proofid_name=:proofId_name , proofid_size=:proofId_size,proofid_type=:proofId_type,proofad_name=:proofad_name,proofad_size=:proofad_size,proofad_type=:proofad_type WHERE id='$agcid'";
			$this->db->query($table);
			
			$this->db->bind(':email',$listArray['email']);
			$this->db->bind(':mobile',$listArray['mobile']);
			$this->db->bind(':contact',$listArray['contact']);
			$this->db->bind(':proofId_name',$listArray['proofId_name']);
			$this->db->bind(':proofId_size',$listArray['proofId_size']);
			$this->db->bind(':proofId_type',$listArray['proofId_type']);
			
			$this->db->bind(':proofad_name',$listArray['proofad_name']);
			$this->db->bind(':proofad_size',$listArray['proofad_size']);
			$this->db->bind(':proofad_type',$listArray['proofad_type']);
			$row=$this->db->execute();
			
			return true;
			
		}
		public function insertNew($arrayField){
			$this->db->query('INSERT INTO agent_new_customer(fname,lname,mname,email,mnumber,pnumber,dob,address,postcode,
			date_reg,agent_email,agid,title,company,line1,line2,line3,town,county,country)VALUES(:fName,:lName,:mName,:email,:mNumber,:pNumber,
			:dob,:address,:postcode,:dateReg,:agentEmail,:agid,:title,:company,:line1,:line2,:line3,:town,:county,:country)');
			$this->db->bind(':fName',$arrayField['fName']);
			$this->db->bind(':lName',$arrayField['lName']);
			$this->db->bind(':mName',$arrayField['mName']);
			$this->db->bind(':dob',$arrayField['dob']);
			$this->db->bind(':title',$arrayField['title']);
			$this->db->bind(':pNumber',$arrayField['pNumber']);
			$this->db->bind(':mNumber',$arrayField['mNumber']);
			$this->db->bind(':email',$arrayField['email']);
			$this->db->bind(':agid',$arrayField['agid']);
			$this->db->bind(':agentEmail',$arrayField['agentEmail']);
			$this->db->bind(':postcode',$arrayField['postcode']);
			$this->db->bind(':company',$arrayField['company']);
			$this->db->bind(':line1',$arrayField['line1']);
			$this->db->bind(':line2',$arrayField['line2']);
			$this->db->bind(':line3',$arrayField['line3']);
			$this->db->bind(':town',$arrayField['town']);
			$this->db->bind(':county',$arrayField['county']);
			$this->db->bind(':country',$arrayField['country']);
			$this->db->bind(':address',$arrayField['address']);
			$this->db->bind(':dateReg',$arrayField['dateReg']);
			$name=$arrayField['fName']." ".$arrayField['lName'];
			if($this->db->execute()){
			$id=$this->db->lastInsertId();
				$return=array(true,$id,$name);
				return $return;
				
			}
			else{
				
				return false;
			}
			
			
			
			
		}

	
}