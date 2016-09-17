<?php 
class Update{
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
	 
	

		
		/* *************************************************************************************** */
			// update all record
			public function updateallrecord(){
			$this->db->query("SELECT id,email FROM agent");
			$row=$this->db->resultset();
			
			// do update for agent customer transaction with agent id into transaction
			
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE agent_cust_transaction SET agid=:id WHERE agent_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			}	
				// do update for agent customer transaction with agent 'customer' id into every transaction of that agent customer
			$this->db->query("SELECT id,email FROM  agent_new_customer");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE agent_cust_transaction SET agcid=:id WHERE sender_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
				// Creat/ Update Receiver id on all agent_cust transaction
				
				
				$this->db->query("SELECT id,b_fname,b_lname FROM agent_cust_receiver");
				$row=$this->db->resultset();
				foreach($row as $row){
				$b_fname=$row->b_fname;
				$b_lname=$row->b_lname;
				$name1=$b_fname." ".$b_lname;
				$name2=$b_fname."  ".$b_lname;
				$id=$row->id;
				
				$this->db->query("UPDATE agent_cust_transaction SET agcrid=:id WHERE (r_name like :name1 || r_name like :name2)");
				$this->db->bind(':name1',$name1);
				$this->db->bind(':name2',$name2);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			// Creat/ Update Receiver id on all cust transaction
				
				
				$this->db->query("SELECT id,b_fname,b_lname FROM receiver");
				$row=$this->db->resultset();
				foreach($row as $row){
				$b_fname=$row->b_fname;
				$b_lname=$row->b_lname;
				
				$name1=$b_fname." ".$b_lname;
				$name2=$b_fname."  ".$b_lname;
				$name3=$b_fname."   ".$b_lname;
				$id=$row->id;
				
				$this->db->query("UPDATE cust_transaction SET crid=:id WHERE (r_name like :name1 || r_name like :name2 || r_name like :name3)");
				$this->db->bind(':name1',$name1);
				$this->db->bind(':name2',$name2);
				$this->db->bind(':name3',$name3);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			//for agent_new_customer table
			// do update for agent_new_customer table with agent 'id' into every agent-customer
			$this->db->query("SELECT id,email FROM  agent");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE agent_new_customer SET agid=:id WHERE agent_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			// for agent customer receiver table
			// do update for agent_cust_reciver table with agent 'id' into every agent-customer receiver
			$this->db->query("SELECT id,email FROM  agent");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE agent_cust_receiver SET agid=:id WHERE agent_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			// do update for agent_cust_reciver table with agent 'id' into every agent-customer receiver
			$this->db->query("SELECT id,email FROM  agent_new_customer");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE agent_cust_receiver SET agcid=:id WHERE agent_cust_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			
			
		/* **************for customer***************** */
			//update customer transaction record with id of transaction 
				$this->db->query("SELECT id,email FROM new_customer");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE cust_transaction SET cid=:id WHERE sender_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			//update customer transaction record with id of transaction 
				$this->db->query("SELECT id,email FROM new_customer");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE receiver SET cid=:id WHERE sender_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			
			
			/* ********&*&*&*&*&(*&********for cancel options********* &%&%&%&%&%&%&%&%&%&%&%&%&%&%&%&%&%&%&%&%&******** */
			
			$this->db->query("SELECT id,email FROM agent");
			$row=$this->db->resultset();
			
			// do update for agent customer transaction with agent id into transaction
			
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE agent_cust_transaction_cancel SET agid=:id WHERE agent_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			}	
				// do update for agent customer transaction with agent 'customer' id into every transaction of that agent customer
			$this->db->query("SELECT id,email FROM  agent_new_customer");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE agent_cust_transaction_cancel SET agcid=:id WHERE sender_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			//for agent_new_customer table
			// do update for agent_new_customer table with agent 'id' into every agent-customer
			$this->db->query("SELECT id,email FROM  agent");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE agent_new_customer_cancel SET agid=:id WHERE agent_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			// for agent customer receiver table
			// do update for agent_cust_reciver table with agent 'id' into every agent-customer receiver
			$this->db->query("SELECT id,email FROM  agent");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE agent_cust_receiver_cancel SET agid=:id WHERE agent_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			// do update for agent_cust_reciver table with agent 'id' into every agent-customer receiver
			$this->db->query("SELECT id,email FROM  agent_new_customer");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE agent_cust_receiver_cancel SET agcid=:id WHERE agent_cust_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			
			
		/* **************for customer***************** */
			//update customer transaction record with id of transaction 
				$this->db->query("SELECT id,email FROM new_customer");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$email=$row->email;
				$this->db->query("UPDATE cust_transaction_cancel SET cid=:id WHERE sender_email=:email");
				$this->db->bind(':email',$email);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
				
		/* **************for agent***************** */
			//update faulty phone no record with spaces at the end of each record	
				$this->db->query("SELECT agent_new_customer.id,agent_new_customer.mnumber,agent_cust_transaction.agcid,agent_cust_transaction.s_phone
				FROM agent_new_customer INNER JOIN agent_cust_transaction ON agent_new_customer.id=agent_cust_transaction.agcid ");
				
				$row=$this->db->resultset();
				foreach($row as $row){
				$s_phone=trim($row->mnumber);
				$id=$row->id;
				
				$this->db->query("UPDATE agent_cust_transaction SET s_phone=:s_phone WHERE agcid=:id");
				$this->db->bind(':s_phone',$s_phone);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			
					/* **************for receiver***************** */
			//update agent_cust_receiver record with faulty phone no of transaction  && transfer b_abank,b_pbank to bank field
				$this->db->query("SELECT id,b_phone,b_pbank,b_abank FROM agent_cust_receiver");
			$row=$this->db->resultset();
			foreach($row as $row){
				$b_abank=$row->b_abank;
				$b_pbank=$row->b_pbank;
					if($b_abank==""){
						$bank=$b_pbank;
					}else {$bank=$b_abank;}
				$id=$row->id;
				$b_phone=trim($row->b_phone);
				$this->db->query("UPDATE agent_cust_receiver SET b_phone=:b_phone, bank=:bank WHERE id=:id");
				$this->db->bind(':b_phone',$b_phone);
				$this->db->bind(':bank',$bank);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
				/* **************for receiver***************** */
			//update agent_cust_transaction  record with faulty receiver phone,receiver_name no of agent customer transaction 
				$this->db->query("SELECT id,r_phone,r_name FROM agent_cust_transaction");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$r_phone=trim($row->r_phone);
				$r_name=trim($row->r_name);
				$this->db->query("UPDATE agent_cust_transaction SET r_phone=:r_phone,r_name=:r_name WHERE id=:id");
				$this->db->bind(':r_name',$r_name);
				$this->db->bind(':r_phone',$r_phone);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
					/* **************for receiver***************** */
			//update agent_cust_transaction  record with faulty receiver phone,receiver_name no of  customer transaction 
				$this->db->query("SELECT id,r_phone,r_name FROM cust_transaction");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$r_phone=trim($row->r_phone);
				$r_name=trim($row->r_name);
				$this->db->query("UPDATE cust_transaction SET r_phone=:r_phone,r_name=:r_name WHERE id=:id");
				$this->db->bind(':r_name',$r_name);
				$this->db->bind(':r_phone',$r_phone);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
				/* **************for receiver phone***************** */
			//update customer transaction record with id of transaction 
				$this->db->query("SELECT id,b_phone FROM agent_cust_receiver");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$b_phone=trim($row->b_phone);
				$this->db->query("UPDATE agent_cust_transaction SET r_phone=:b_phone WHERE agcrid=:id");
				$this->db->bind(':b_phone',$b_phone);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
					/* **************for receiver new column bank***************** */
			//copy or transfer new column bank into receiver table
				$this->db->query("SELECT id,b_phone FROM agent_cust_receiver");
			$row=$this->db->resultset();
			foreach($row as $row){
				$id=$row->id;
				$b_phone=trim($row->b_phone);
				$this->db->query("UPDATE agent_cust_transaction SET r_phone=:b_phone WHERE agcrid=:id");
				$this->db->bind(':b_phone',$b_phone);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			
				
				
				/* **************for receiver new column bank***************** */
			//copy or transfer new column bank into receiver table
				/* **************for receiver***************** */
					//&& transfer b_abank,b_pbank into bank field
			//update agent_cust_receiver record with faulty phone no of transaction  
			$this->db->query("SELECT id,b_pbank,b_abank FROM receiver");
			$row=$this->db->resultset();
			foreach($row as $row){
				$b_abank=$row->b_abank;
				$b_pbank=$row->b_pbank;
					if($b_abank==""){
						$bank=$b_pbank;
					}else {$bank=$b_abank;}
				$id=$row->id;
				
				$this->db->query("UPDATE receiver SET bank=:bank WHERE id=:id");
				//$this->db->query("UPDATE agent_cust_receiver SET b_phone=:b_phone, bank=:bank WHERE id=:id");
				$this->db->bind(':bank',$bank);
				$this->db->bind(':id',$id);
				$this->db->execute();
			
			}
			
			
				
				
				$this->db->execute();
			
			
				
					return true;
		}
		
		
		
	/* *************************end here*************************************************** */	
		
		
}