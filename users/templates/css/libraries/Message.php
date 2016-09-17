<?php

class Message{
	
	
	private $db;
	
	// setting new constructor for message class
	
	public function __construct(){
		
		
		$this->db= new Database;
	}
	// fetch message to display from the database
	
	public function message_display(){
		
		$this->db->query('SELECT * FROM message');
		
		$row=$this->db->resultset($query);
		return $row;
	}
	//delete message with an id sent
	public function Delete_msg($id){
		
		$this->db->query("DELETE FROM message WHERE id='$id' ");
		$this->db->execute();
		return true;
	}
		
		public function web_message($data){
		$this->db->query('INSERT INTO message(name,email,subject,body) VALUES(:name,:email,:subject,:comments)');
	
		$this->db->bind(':name', $data['name']);
		$this->db->bind(':email', $data['email']);
		$this->db->bind(':subject', $data['subject']);
		$this->db->bind(':comments', $data['comments']);
			if($this->db->execute()){
						return true;
					} else {
						return false;
					}
		
	}
	
	
	public function booking($data){
		$this->db->query('INSERT INTO message(name,email,subject,body) VALUES(:name,:email,:subject,:comments)');
	
		$this->db->bind(':name', $data['name']);
		$this->db->bind(':email', $data['email']);
		$this->db->bind(':subject', $data['subject']);
		$this->db->bind(':comments', $data['comments']);
			if($this->db->execute()){
						return true;
					} else {
						return false;
					}
		
	}
	
	
	public function flight($data){
		$this->db->query('INSERT INTO message(from,to,datefrom,dateto,name,email,contact) VALUES(:city1,:city2,:date1,:date2,:name,:email2,:contact)');
	
		$this->db->bind(':city1', $data['city1']);
		$this->db->bind(':city2', $data['city2']);
		$this->db->bind(':date1', $data['date1']);
		$this->db->bind(':date2', $data['date2']);
		$this->db->bind(':name', $data['name']);
		$this->db->bind(':email', $data['email2']);
		$this->db->bind(':contact', $data['contact']);
			if($this->db->execute()){
						return true;
					} else {
						return false;
					}
		
	}
	
	
}


?>