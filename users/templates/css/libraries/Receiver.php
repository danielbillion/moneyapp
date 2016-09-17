

<?php
 class Receiver{
	
	private $db;
	
	
	public function  __construct(){
		
		$this->db=new Database;
		
	}
	
	public function insert($listArray){
		
		if($listArray['type']=='agent'){
		
		$this->db->query('INSERT INTO agent_cust_receiver(b_fname,b_lname,b_phone,bank,b_actno,b_idtype,b_transfer,agcid,agid,date) 
		VALUES(:fName,:lName,:rPhone,:bank,:actNo,:modeId,:tMode,:agcid,:agid,:dtime)');
		}
		
		if($listArray['type']=='customer'){
		
		$this->db->query('INSERT INTO receiver(b_fname,b_lname,b_phone,bank,b_actno,b_idtype,b_transfer,cid,date) 
		VALUES(:fName,:lName,:rPhone,:bank,:actNo,:modeId,:tMode,:cid,:dtime)');
		}
		
		$this->db->bind(':fName',$listArray['fName']);
		$this->db->bind(':lName',$listArray['lName']);
		$this->db->bind(':rPhone',$listArray['rPhone']);
		$this->db->bind(':bank',$listArray['bank']);
		$this->db->bind(':actNo',$listArray['actNo']);
		$this->db->bind(':modeId',$listArray['modeId']);
		$this->db->bind(':tMode',$listArray['tMode']);
		$this->db->bind(':dtime',$listArray['dtime']);
		
		if($listArray['type']=='agent'){
		$this->db->bind(':agcid',$listArray['agcid']);
		$this->db->bind(':agid',$listArray['agid']);
		}
		
		if($listArray['type']=='customer'){
		$this->db->bind(':cid',$listArray['cid']);
		}
		
		$this->db->execute();
		
		return true;
		
		
	}
	
	public function relist($b_fname,$b_lname){
		if(getuser()['type']=='agent'){
		$this->db->query('SELECT * FROM agent_cust_receiver WHERE b_fname=:b_fname && b_lname=:b_lname');
		}
		else {
		$this->db->query('SELECT * FROM receiver WHERE b_fname=:b_fname && b_lname=:b_lname');	
		}
		$this->db->bind(':b_fname',$b_fname);
		$this->db->bind(':b_lname',$b_lname);
		$row=$this->db->resultset();
		return $row;
		
	}
	
	public function receiversAgentList($fName,$mName,$lName,$agid){
		
		$table="SELECT agent_new_customer.fname,agent_new_customer.mname,agent_new_customer.lname,agent_new_customer.id,agent_new_customer.id,agent_cust_receiver.agcid,agent_cust_receiver.b_fname,agent_cust_receiver.b_lname FROM agent_new_customer INNER JOIN agent_cust_receiver ON agent_new_customer.id=agent_cust_receiver.agcid WHERE agent_new_customer.fname LIKE '$fName' && agent_new_customer.lname LIKE '$lName'  && agent_new_customer.agid='$agid' ORDER BY agent_cust_receiver.b_fname DESC ";
		
		
		$this->db->query($table);
		$row=$this->db->resultset();
		return $row;
	}
	
		public function receiversCustList($fName,$mName,$lName,$agid){
		
		$table="SELECT new_customer.fname,new_customer.mname,new_customer.lname,new_customer.id,new_customer.id,receiver.cid,receiver.b_fname,receiver.b_lname FROM new_customer INNER JOIN receiver ON new_customer.id=receiver.cid WHERE new_customer.fname LIKE '$fName' && new_customer.lname LIKE '$lName'  && new_customer.cid='$agid' ORDER BY receiver.b_fname DESC ";
		
		
		$this->db->query($table);
		$row=$this->db->resultset();
		return $row;
	}
	
		public function receiversList($cid){
		
		$table="SELECT new_customer.fname,new_customer.mname,new_customer.lname,new_customer.id,new_customer.id,receiver.cid,receiver.b_fname,receiver.b_lname FROM new_customer INNER JOIN receiver ON new_customer.id=receiver.cid WHERE new_customer.id='$cid' ORDER BY receiver.b_fname DESC ";
		
		
		$this->db->query($table);
		$row=$this->db->resultset();
		return $row;
	}
	
	public function update($listArray,$agrid){
		
		if($listArray['type']=='agent'){
		
		$this->db->query("UPDATE agent_cust_receiver SET b_fname=:fName,b_lname=:lName,b_phone=:rPhone,bank=:bank,b_actno=:actNo,b_idtype=:modeId,b_transfer=:tMode,date=:dtime
		WHERE id='$agrid'");
		
		}
		
		if($listArray['type']=='customer'){
		
		$this->db->query("UPDATE receiver SET b_fname=:fName,b_lname=:lName,b_phone=:rPhone,bank=:bank,b_actno=:actNo,b_idtype=:modeId,b_transfer=:tMode,date=:dtime WHERE id='$agrid'"); 
		
		}
		
		$this->db->bind(':fName',$listArray['fName']);
		$this->db->bind(':lName',$listArray['lName']);
		$this->db->bind(':rPhone',$listArray['rPhone']);
		$this->db->bind(':bank',$listArray['bank']);
		$this->db->bind(':actNo',$listArray['actNo']);
		$this->db->bind(':modeId',$listArray['modeId']);
		$this->db->bind(':tMode',$listArray['tMode']);
		$this->db->bind(':dtime',$listArray['dtime']);
		
		
		
		$this->db->execute();
		
		return true;
		
		
	}
	
	public function agent_cust_receiver($agrid){
		$this->db->query("SELECT * FROM agent_cust_receiver WHERE id='$agrid'");
		$row=$this->db->resultset();
		return $row;
		
	}
	
	public function receiver($rid){
		$this->db->query("SELECT * FROM receiver WHERE id='$rid'");
		$row=$this->db->resultset();
		return $row;
		
	}
	
	
	
}


?>