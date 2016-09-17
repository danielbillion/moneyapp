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
	 
	 //List All Agent info
		public function agentInfo($id){
			$table="SELECT * FROM agent WHERE id='$id'";
			$this->db->query($table);
			$row=$this->db->resultset();
			
			return $row;
			
		}
		
		 //List All customer info
		public function custInfo($id){
			$table="SELECT * FROM new_customer WHERE id='$id'";
			$this->db->query($table);
			$row=$this->db->resultset();
			
			return $row;
			
		}
	 public function password_match($password,$password1,$id){
		 
				 if($password != $password1)
				 { return false;
				 }
				 
				 else{
					 
					
					$this->db->query("UPDATE users SET password = '$password' WHERE id ='$id'");
					
					/* $this->db->bind(':password', $password);
						$this->db->bind(':id', $id);
							if($this->db->execute()){
								$_SESSION['is_updated'] = true;
									return true;
							} else {
								return false;
									 }*/
					
					$this->update($password,$id);
						return true; 
				 }
		 
		 
		 
		}
		
		public function checkPass($xpassword,$id){
			if(getUser()['type']=='customer'){$table='new_customer';} else { $table='agent';}
			$this->db->query("SELECT id,password FROM $table WHERE id='$id' && password = '$xpassword'");
			$this->db->resultset();
			$val=$this->db->rowCount();
			if($val>0){
				return true;
			}
			else{
				return false;
			}
		}
		
	public function update($password, $id){
		if(getUser()['type']=='customer'){$table='new_customer';} else { $table='agent';}
		$this->db->bind(':password', $password);
		$this->db->bind(':id', $id);
		
		$this->db->query("UPDATE $table SET password = '$password' WHERE id ='$id'");
		$this->db->execute();
			if($this->db->execute()){return true;} 
			else {return false; }
				
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
	public function register($data){
			//Insert Query
			$this->db->query('INSERT INTO users (name, email, avatar, username, password, about, last_activity) 
											VALUES (:name, :email, :avatar, :username, :password, :about, :last_activity)');
			//Bind Values
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':avatar', $data['avatar']);
			$this->db->bind(':username', $data['username']);
			$this->db->bind(':password', $data['password']);
			$this->db->bind(':about', $data['about']);
			$this->db->bind(':last_activity', $data['last_activity']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
			//echo $this->db->lastInsertId();
	}
	
	/*
	 * Upload User Avatar
	 */
	public function uploadAvatar(){
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["avatar"]["name"]);
		$extension = end($temp);
		if ((($_FILES["avatar"]["type"] == "image/gif")
				|| ($_FILES["avatar"]["type"] == "image/jpeg")
				|| ($_FILES["avatar"]["type"] == "image/jpg")
				|| ($_FILES["avatar"]["type"] == "image/pjpeg")
				|| ($_FILES["avatar"]["type"] == "image/x-png")
				|| ($_FILES["avatar"]["type"] == "image/png"))
				&& ($_FILES["avatar"]["size"] < 100000)
				&& in_array($extension, $allowedExts)) {
			if ($_FILES["avatar"]["error"] > 0) {
				redirect('register.php', $_FILES["avatar"]["error"], 'error');
			} else {
				if (file_exists("images/avatars/" . $_FILES["avatar"]["name"])) {
					redirect('register.php', 'File already exists', 'error');
				} else {
					move_uploaded_file($_FILES["avatar"]["tmp_name"],
					"images/avatars/" . $_FILES["avatar"]["name"]);
					
					return true;
				}
			}
		} else {
			redirect('register.php', 'Invalid File Type!', 'error');
		}
	}
	
	
	public function checkBothAccount($email){ // test if email supplied exist in both tables
		
		// for agent
		$this->db->query("SELECT * FROM agent WHERE email = :email ");
							//Bind Values
		$this->db->bind(':email', $email);		
		 $this->db->single();						
		$rowa=$this->db->rowCount();
		
		
		// for customer
		$this->db->query("SELECT * FROM new_customer WHERE email = :email");
							//Bind Values
		$this->db->bind(':email', $email);		
		 $this->db->single();						
		$rowc=$this->db->rowCount();
		
		if( $rowa > 0 && $rowc > 0){
			return true;
		}
		else{
			return false;
		}
		
		

		
	}
	
	
	/*
	 * Check login in as agent
	 */
	public function loginAsAgent($email){
		
		// for customer
		$this->db->query("SELECT * FROM agent
									WHERE email = :email AND type='agent'
											
		");
		
		//Bind Values
		$this->db->bind(':email', $email);
		
		
		$row = $this->db->single();

		//Check Rows
		if($this->db->rowCount() > 0){
			$this->setUserDataAgent($row);
			return true;
		} else {
			return false;
		}
	}
	
	
	public function loginAsCustomer($email){
		
		// for customer
		$this->db->query("SELECT * FROM new_customer
									WHERE email = :email
											
		");
		
		//Bind Values
		$this->db->bind(':email', $email);
		
		
		$row = $this->db->single();

		//Check Rows
		if($this->db->rowCount() > 0){
			$this->setUserDataCustomer($row);
			return true;
		} else {
			return false;
		}
	}
	/*
	 * Set User Data for Agent
	 */
	private function setUserDataAgent($rowaa){
		
		$_SESSION['is_logged_in'] = true;
		$_SESSION['type'] =  $rowaa->type;;
		$_SESSION['user_id'] = $rowaa->id;
		$_SESSION['level'] = $rowaa->level;
		$_SESSION['fname'] = $rowaa->fname;
		$_SESSION['lname'] = $rowaa->lname;
		$_SESSION['email'] = $rowaa->email;
		$_SESSION['photo'] = $rowaa->myPhoto_name;
		$_SESSION['credit'] = $rowaa->credit;
	
	}
	
	/*
	 * Set User Data for Customer
	 */
	private function setUserDataCustomer($rowcc){
		
		$_SESSION['is_logged_in'] = true;
		$_SESSION['type'] = "customer";
		$_SESSION['user_id'] = $rowcc->id;
		$_SESSION['level'] = "0c";
		$_SESSION['fname'] = $rowcc->fname;
		$_SESSION['lname'] = $rowcc->lname;
		$_SESSION['email'] = $rowcc->email;
		$_SESSION['photo'] = $rowcc->myPhoto_name;
		$_SESSION['credit'] = $rowcc->credit;
	}
	
	/*
	 * User Logout
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
	
	/*
	 * Check if user exisit in the database Users
	 */
	public function checkEmail($row){
		// check available agent email
		$this->db->query('SELECT * FROM agent WHERE email = :email');
		$this->db->bind(':email', $row);
		$check = $this->db->single();
		$rowa=$this->db->rowCount();
		
		// check available customer email
		$this->db->query('SELECT * FROM new_customer WHERE email = :email');
		$this->db->bind(':email', $row);
		$checkc = $this->db->single();
		$rowc=$this->db->rowCount();
		
		
		//Check Rows for agent & customer
		if($rowa  >0 || $rowc  >0){
			
			return true;
		} else {
		return false;
			
		
		}
	
		
	}
	
	
	 // Check if user is active or not
	
	public function userActive($row){
		// check available agent email
		$this->db->query('SELECT * FROM agent WHERE email = :email && active=1');
		$this->db->bind(':email', $row);
		$check = $this->db->single();
		$rowa=$this->db->rowCount();
		
		// check available customer email
		$this->db->query('SELECT * FROM new_customer WHERE email = :email  && active=1 ');
		$this->db->bind(':email', $row);
		$checkc = $this->db->single();
		$rowc=$this->db->rowCount();
		
		
		//Check Rows for agent & customer
		if($rowa  >0 || $rowc  >0){
			
			return true;
		} else {
		return false;
			
		
		}
	
		
	}
	
	public function checkPassword($email, $password){
		//for agent

		$this->db->query("SELECT * FROM agent
									WHERE email = :email
									AND password = :password			
		");
		
		//Bind Values for agent
		$this->db->bind(':email', $email);
		$this->db->bind(':password', $password);
		$row = $this->db->single();
		$rowa=$this->db->rowCount();
		
		
		
		// for Customer
		
		$this->db->query("SELECT * FROM new_customer
									WHERE email = :email
									AND password = :password			
		");
		
		//Bind Values for customer
		$this->db->bind(':email', $email);
		$this->db->bind(':password', $password);
		$row = $this->db->single();
		$rowc=$this->db->rowCount();

		//Check Rows
		if($rowa > 0 || $rowc > 0 ){
			
			return true;
		} else {
			return false;
		}
	}
	
	public function getAgentCustomer($user_id){
		
		$this->db->query("SELECT * FROM `agent_new_customer` WHERE agid=:user_id ORDER BY id DESC LIMIT 3");
		$this->db->bind(':user_id', $user_id);
		$row=$this->db->resultset();
		return $row;
		
	}
	public function getCustomer($user_id){
		
		$this->db->query("SELECT * FROM `receiver` WHERE cid=:user_id ORDER BY id DESC LIMIT 3");
		$this->db->bind(':user_id', $user_id);
		$row=$this->db->resultset();
		return $row;
		
	}
	
	
		//checking validity of id to be uploaded and uploaded address
		public function addressUploaded($getValue,$listArray){
			
			$allowedExts=array('gif','jpg','jpeg', 'png','pdf');
			$temp=explode('.',$_FILES["imageAdd"]["name"]);
			$extension=end($temp);
			
			if(($_FILES["imageAdd"]["type"]=="image/jpeg") || ($_FILES["imageAdd"]["type"]=="image/png") ||
			($_FILES["imageAdd"]["type"]=="image/gif") || ($_FILES["imageAdd"]["type"]=="image/jpg") &&
			in-array('$extension','$allowedExts') && ($_FILES["imageAdd"]["size"]<100000)
			){
				if($_FILES["imageAdd"]["error"]>0){
					
					redirectValue('aModify.php',$_FILES["imageAdd"]["error"],'error',$getValue);
				}
				
				else{
					if(file_exists("img/".$listArray['type']."/address/".$_FILES["imageAdd"]["name"])){
						redirectValue('aModify.php','File Already Exist,if different Please rename it ','error',$getValue);
						
					}
					else{
						move_uploaded_file($_FILES["imageAdd"]["tmp_name"],"img/".$listArray['type']."/address/".$_FILES["imageAdd"]["name"]);
						return true;
					}
				}
				
				
			}
			else{
				redirectValue('aModify.php','image not in the right format or too lage','error',$getValue);
			}
		}
		
		//checking validity of id to be uploaded for agent photo and uploaded agent Photo
		public function myphotoUploaded($getValue,$listArray){
			
			$allowedExts=array('gif','jpg','jpeg', 'png','pdf');
			$temp=explode('.',$_FILES["myPhoto"]["name"]);
			$extension=end($temp);
			
			if(($_FILES["myPhoto"]["type"]=="image/jpeg") || ($_FILES["myPhoto"]["type"]=="image/png") ||
			($_FILES["myPhoto"]["type"]=="image/gif") || ($_FILES["myPhoto"]["type"]=="image/jpg") &&
			in-array('$extension','$allowedExts') && ($_FILES["myPhoto"]["size"]<100000)
			){
				if($_FILES["myPhoto"]["error"]>0){
					
					redirectValue('aModify.php',$_FILES["myPhoto"]["error"],'error',$getValue);
				}
				
				else{
					if(file_exists("img/".$listArray['type']."/photo/".$_FILES["myPhoto"]["name"])){
						redirectValue('aModify.php','File Already Exist,if different Please rename it ','error',$getValue);
						
					}
					else{
						move_uploaded_file($_FILES["myPhoto"]["tmp_name"],"img/".$listArray['type']."/photo/".$_FILES["myPhoto"]["name"]);
						return true;
					}
				}
				
				
			}
			else{
				redirectValue('aModify.php','image not in the right format or too lage','error',$getValue);
			}
		}
		public function idUploaded($getValue,$listArray){
			
			$allowedExts=array('gif','jpg','jpeg', 'png','pdf');
			$temp=explode('.',$_FILES["imageId"]["name"]);
			$extension=end($temp);
			
			if(($_FILES["imageId"]["type"]=="image/jpeg") || ($_FILES["imageId"]["type"]=="image/png") ||
			($_FILES["imageId"]["type"]=="image/gif") || ($_FILES["imageId"]["type"]=="image/jpg") &&
			in-array('$extension','$allowedExts') && ($_FILES["imageId"]["size"]<100000)
			){
				if($_FILES["imageId"]["error"]>0){
					
					redirectValue('aModify.php',$_FILES["imageId"]["error"],'error',$getValue);
				}
				
				else{
					if(file_exists("img/".$listArray['type']."/id/".$_FILES["imageId"]["name"])){
						redirectValue('aModify.php','File Already Exist,if different Please rename it ','error',$getValue);
						
					}
					else{
						move_uploaded_file($_FILES["imageId"]["tmp_name"],"img/".$listArray['type']."/id/".$_FILES["imageId"]["name"]);
						return true;
					}
				}
				
				
			}
			else{
				redirectValue('aModify.php','image not in the right format or too lage','error',$getValue);
			}
		}
		
		//List All Agent Senders
		public function updateAgent($listArray,$id){
			
			if(getUser()['type']=='customer'){ $type='new_customer';}
			else{ $type='agent';}
			
			$table="UPDATE $type SET email=:email,pnumber=:contact, mnumber=:mobile ,proofid_name=:proofId_name , proofid_size=:proofId_size,proofid_type=:proofId_type,proofad_name=:proofad_name,proofad_size=:proofad_size,proofad_type=:proofad_type ,myPhoto_name=:myPhoto_name,myPhoto_size=:myPhoto_size,myPhoto_type=:myPhoto_type WHERE id='$id'";
			
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
			
			$this->db->bind(':myPhoto_name',$listArray['myPhoto_name']);
			$this->db->bind(':myPhoto_size',$listArray['myPhoto_size']);
			$this->db->bind(':myPhoto_type',$listArray['myPhoto_type']);
			$row=$this->db->execute();
			
			return true;
			
		}
	
	
}