<?php 
class Transaction{
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
		
		
		

		
		
		
		// Update agent_cust_transaction table with agent id
		
		public function updateAgentIdOnTrans($email){
			$this->db->query("SELECT agent.email,agent.id, agent_cust_transaction.agent_email,agent_cust_transaction.receiptno FROM agent_cust_transaction
						INNER JOIN agent
						ON agent_cust_transaction.agent_email =agent.email
						WHERE agent_cust_transaction.agent_email= :email
		");
				
				$this->db->bind(':email',$email);
				
			$row=$this->db->resultset();
			
			foreach($row as $row){
				$id=$row->id;
				
				$this->db->query("UPDATE agent_cust_transaction SET agid=:id WHERE agent_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
				
				
			}
				$this->updateCustIdOnTrans($email);
					return true;
		}
		
		
		
		
		
		//fetch result of database of agent_cust  for quick display
			public function agentCusttransaction($user_id){
			$this->db->query("SELECT * FROM `agent_cust_transaction` WHERE `agid`='$user_id'  ORDER BY id DESC 
               LIMIT 7          ");
			//$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

		}
		
		//fetch result of database of agent_cust transaction
			public function agentCusttrans_full($table,$user_id,$start_from,$nr){
			$this->db->query($table);
			//$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

			}
			
			//fetch result of database of customer transaction
			public function Custtrans_full($table,$user_id,$start_from,$nr){
			$this->db->query($table);
			//$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

			}
		
		//fetch result of database of agent_cust transaction based on transaction id
			public function agentCusttrans($table){
			$this->db->query($table);
			//$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

		}
		
		//fetch result of database of customer transaction based on transaction id
			public function Custtrans($table){
			$this->db->query($table);
			//$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

		}
		//fetch result of database of cust transaction for quick display based on user_id
			public function Custtransaction($user_id){
			$this->db->query("SELECT * FROM `cust_transaction` WHERE `cid`='$user_id'  ORDER BY id DESC 
               LIMIT 7          ");
			//$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

		}
		
		//fetch result of bank
			public function transBank(){
			$this->db->query("SELECT * FROM `bank` ");
            
			//$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

		}
		//fetch result of bank for bank account 
			public function transBank_b(){
			$this->db->query("SELECT * FROM `bank` WHERE `status`='b' ");
            //$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

		}
		
		//fetch result of bank for pick up 
			public function transBank_p(){
			$this->db->query("SELECT * FROM `bank` WHERE `status`='p' ");
            //$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

		}
		public function search(){
			$this->db->query('SELECT * FROM airport WHERE airport LIKE '%".$searchTerm."%' ORDER BY airport ASC"');
			//$row=$this->db->single();
			$row=$this->db->resultset();
			return $row;

		}
		public function commission($com){
			$this->db->query("SELECT * FROM  `agent_cr` WHERE `to` >='$com' AND  `from` <='$com'");
			$row=$this->db->resultset();
			return $row;
		}
		
		//counting record of transaction for agent
		
		public function agentRCount($user_id){
			
			$this->db->query('SELECT `agid` FROM `agent_cust_transaction` WHERE `agid`=:user_id ');
			$this->db->bind(':user_id', $user_id);
			$this->db->resultset();
			$row=$this->db->rowCount();
			return $row;
			
		}
		
		// Update Transaction table for agent
		public function updateAgentTrans($arrayField,$id){
			
			$this->db->query('UPDATE agent_cust_transaction SET `r_name`=:rName, `r_phone`=:rPhone, `r_transfer`=:transferMode,`r_idtype`=:modeId,
			`r_actno`=:actNo,`r_bank`=:rBank WHERE `id`=:id ');
			
			$this->db->bind(':rName', $arrayField['rName']);
			$this->db->bind(':rPhone', $arrayField['rPhone']);
			$this->db->bind(':transferMode', $arrayField['transferMode']);
			$this->db->bind(':modeId', $arrayField['modeId']);
			$this->db->bind(':actNo', $arrayField['actNo']);
			$this->db->bind(':rBank', $arrayField['rBank']);
			$this->db->bind(':id', $id);
			$this->db->execute();
		
			return true;
			
		}
		//Update Transaction Table for Customer
		public function updateCustTrans($arrayField,$id){
			
			$this->db->query('UPDATE cust_transaction SET `r_name`=:rName, `r_phone`=:rPhone, `r_transfer`=:transferMode,`r_idtype`=:modeId,
			`r_actno`=:actNo,`r_bank`=:rBank WHERE `id`=:id ');
			
			$this->db->bind(':rName', $arrayField['rName']);
			$this->db->bind(':rPhone', $arrayField['rPhone']);
			$this->db->bind(':transferMode', $arrayField['transferMode']);
			$this->db->bind(':modeId', $arrayField['modeId']);
			$this->db->bind(':actNo', $arrayField['actNo']);
			$this->db->bind(':rBank', $arrayField['rBank']);
			$this->db->bind(':id', $id);
			$this->db->execute();
		
			return true;
			
		}
}