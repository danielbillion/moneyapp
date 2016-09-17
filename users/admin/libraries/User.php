<?php 
class User{
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
	 

	public function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_id']);
		unset($_SESSION['fname']);
		unset($_SESSION['lname']);
		unset($_SESSION['type']);
		unset($_SESSION['level']);
		
		return true;
	}
	public function agent($id){
	//$tableWhere is used if id is set for WHERE clause	
		$tableWhere=$id==""?"":"WHERE id=".$id;
		
		$table="SELECT a.*,(SELECT COUNT(id) FROM agent_new_customer I1 WHERE I1.agid=a.id) as countId,(SELECT COUNT(id) FROM agent_cust_transaction I2 WHERE I2.agid=a.id && I2.status='Pending') as transPending,(SELECT SUM(total) FROM agent_cust_transaction I3 WHERE I3.agid=a.id && I3.status='Pending') as sumPending,(SELECT SUM(amt_local) FROM agent_cust_transaction I4 WHERE I4.agid=a.id && I4.status='Pending') as localPending, (SELECT COUNT(id) FROM agent_cust_transaction I5 WHERE I5.agid=a.id) as totalTrans,(SELECT SUM(com_a) FROM agent_cust_transaction I6 WHERE I6.agid=a.id && I6.agent_ps='np' && I6.status='PAID') as payCom FROM agent a ".$tableWhere;
		//countId for no of agent customer,no pending transaction from agent,sumPending as total pending transaction
		$this->db->query($table);
		$row= $this->db->resultset();
		return $row;
	}
	
	public function agent_details($id){
		$this->db->query("SELECT * FROM agent WHERE id=$id");
		$row=$this->db->single();
		return $row;
		
	}
	
	public function findIdStatus($table_query){
		$this->db->query($table_query);
		$row=$this->db->resultset();
		return $row;
	}
//member Customer results
public function memberCustomer($table){
	$this->db->query($table);
	$row=$this->db->resultset();
	return $row;
}
public function findTheMember($id,$table){
$this->db->query("SELECT * FROM $table WHERE id=$id");
$row=$this->db->single();
return $row;
		
}

public function checkPass($xpassword,$id){
			
			$this->db->query("SELECT id,password FROM agent WHERE id='$id' && password = '$xpassword'");
			$this->db->resultset();
			$val=$this->db->rowCount();
			if($val>0){
				return true;
			}
			else{
				return false;
			}
		}
//delete 
public function deleteMember($id,$table,$opType){
	$this->db->query("DELETE FROM $table WHERE id=$id");
	$this->db->execute();
	$delteFor=$id;
	$this->recordTask($opType,$delteFor);
	return true;
	
}	

public function recordTask($opType,$delteFor)	{
	$this->db->query("INSERT INTO dellog(name,email,datetime,type,nametype,level)VALUE(:name,:user_id,:datetime,:type,:nametype,:level)");
	
	$this->db->bind(':name',getUser()['fname']."".getUser()['lname']);
	$this->db->bind(':user_id',getUser()['user_id']);
	$this->db->bind(':datetime',dateTime());
	$this->db->bind(':nametype',$delteFor);
	$this->db->bind(':type',$opType);
	$this->db->bind(':level',getUser()['level']);
	$this->db->execute();
	
}
	
}