

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