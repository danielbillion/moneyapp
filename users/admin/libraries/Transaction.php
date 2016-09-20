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
	 

	public function turnoverAgentTrans($table,$nmonth){
		$query="SELECT
    YEAR(date) as year,
    MONTH(date) AS month,
    SUM(total) AS total_amount,
	SUM(amt_send) AS amtsend,
	SUM(com_a) AS comd,
	SUM(com_d) AS coma,
	COUNT(amt_send) AS counted
	
	FROM $table WHERE  (status = ' Pending' || status = 'Pending' || status='PAID')&& date
    BETWEEN DATE(NOW()) - INTERVAL (DAY(NOW()) - 1) DAY - INTERVAL $nmonth MONTH
    AND NOW()GROUP BY YEAR(date), MONTH(date)ORDER BY YEAR(date), MONTH(date)";

		$this->db->query($query);
		$row=$this->db->resultset();
		return $row;
		
		
	}
		
	public function transBank(){
		$this->db->query('SELECT * FROM bank ORDER BY bank');
		$row=$this->db->resultset();
		return $row;
	}	
	public function submitBank($array){
		$this->db->query("INSERT INTO bank(bank,status) VALUE(:newBank,:option)");
		$this->db->bind(':newBank',$array['newBank']);
		$this->db->bind(':option',$array['option']);
		$this->db->execute();
		return true;
		
	}
	public function deleteBank($delArray){
		$this->db->query('DELETE FROM bank WHERE id=:id');
		$this->db->bind(':id',$delArray['id']);
		$this->db->execute();
		return true;
	}
	
	public function transaction($table){
		$this->db->query($table);
		$row=$this->db->resultset();
		return $row;
		
	}
	
	public function searchOption($required){
		$query=array();
		if($required['option']=='phone'){
				$query=" (date BETWEEN ".$date1." AND ".$date2.") " ;
			}
			
		
//pending		
			if($required['option']=='pending'){
				$query['field']="status" ;
				$query['value']="'"."Pending"."'";
				$query['relation']="=";
			}

//paid		
			if($required['option']=='PAID'){
					$query['field']="status" ;
				$query['value']="'"."PAID"."'";
				$query['relation']="=";
			}
//today		
			if($required['option']=='today'){			
				$query['field']="date" ;
				$query['value']=dDate();
				$query['relation']="=";
			}	
//transfer code		
			if($required['option']=='transferCode'){
					$query['field']="receiptno" ;
				$query['value']="'".trim($required['entry']). "'";
				$query['relation']="=";
			}
//sender First Name Last	
			if($required['option']=='cFirstLastName'){
					$query['field']="sender_name" ;
				$query['value']="'".trim($required['entry'])."'";
				$query['relation']="=";
			}			
//sender Phone	
			if($required['option']=='phoneNo'){
					$query['field']="s_phone" ;
				$query['value']="'".trim($required['entry'])."'";
				$query['relation']="=";
			}
//sender Date	
			if($required['option']=='date'){
					$query['relation']=" BETWEEN ";
					$query['field']="date" ;
				$query['value']="'".($required['date1'])."'". " AND "."'".($required['date2'])."'" ;
			}			
	
			return $query;
	}
	
		
}