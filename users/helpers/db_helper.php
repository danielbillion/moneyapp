<?php
/*
 *	Get # of replies per topic
 */
 
function replyCount($topic_id){
	$db = new Database;
	$db->query('SELECT * FROM replies WHERE topic_id = :topic_id');
	$db->bind(':topic_id', $topic_id);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	return $db->rowCount();
}

/*
 *	Get Categories
 */
function getCategories(){
	$db = new Database;
	$db->query('SELECT * FROM categories');
	
	//Assign Result Set
	$results = $db->resultset();

	return $results;
}

/*
 * User Posts
 */
function userPostCount($user_id){
	$db = new Database;
	$db->query('SELECT * FROM topics 
				WHERE user_id = :user_id
				');
	$db->bind(':user_id', $user_id);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	$topic_count = $db->rowCount();
	
	$db->query('SELECT * FROM replies
				WHERE user_id = :user_id
				');
	$db->bind(':user_id', $user_id);
	//Assign Rows
	$rows = $db->resultset();
	//Get Count
	$reply_count = $db->rowCount();
	return $topic_count + $reply_count;
}

 function todaysrate(){
	 //get category of todays rate from agent database 
			$db = new Database;
			$user_id=getUser()['user_id'];
			$user_type=getUser()['type'];
			if($user_type=='customer'){$field_type='new_customer';} else{$field_type='agent'; }
			$db->query("SELECT agrs, id FROM $field_type WHERE id='$user_id' ORDER BY id DESC  ");
			$myr=$db->resultset();
			foreach($myr as $myr){
				$rate=$myr->agrs;
			}
			
			if($rate=='R5'){ $field='rate5';}
			if($rate=='R4'){ $field='rate4';}
			if($rate=='R2'){ $field='rate2';}
			if($rate=='R1'){ $field='rate1';}
			if($rate=='N'){ $field='rate';}
         //category retrieved is now used to extract value from todays rate table        
			$db->query("SELECT $field, id FROM todays_rate  ORDER BY id DESC 
                        LIMIT 1 ");
			//$row=$this->db->single();
			$row=$db->resultset();
			foreach($row as $row){
				$rate=$row->$field;
			}
				return $rate;

		}
			//Get commission for agent & commission for business % 
		function agentcom(){
			$db = new Database;
			$user_id=getUser()['user_id'];
			$db->query("SELECT id,coma,comb FROM agent WHERE id='$user_id'");
			$result=$db->resultset();
			$agentc=array();
				foreach($result as $result){
					//set values into array
					$agentc['coma']=$result->coma;
					$agentc['comb']=$result->comb;
					}
			return $agentc;
		}
		//find agent outstanding balance
		function agentBal(){
			$db = new Database;
			$user_id=getUser()['user_id'];
			$db->query("SELECT a.id,(SELECT SUM(total) FROM agent_cust_transaction T1 WHERE T1.agid=a.id) as total FROM agent a WHERE a.id='$user_id' ");
			$result=$db->resultset();
			foreach($result as $result){
				$total=$result->total;
			}
			return $total;
			
		}
		//find agent credit level
		function agentCredit(){
			$db = new Database;
			$user_id=getUser()['user_id'];
			$db->query("SELECT id,credit FROM agent WHERE id=:user_id");
			$db->bind(":user_id",$user_id);
			$result=$db->resultset();
			foreach($result as $result){
				$credit=$result->credit;
			}
			return $credit;
			
		}
		//check if agent hold special commission status
		function crAgent($val,$table){
			$db = new Database;
			$user_id=getUser()['user_id'];
			$db->query("SELECT * FROM  $table WHERE (`to` >='$val'	 AND  `from` <='$val') AND status='$user_id' ");
				$result=$db->resultset();
				if($db->rowCount()>0){
					return true;
				}
				else {return false;}
					
		}
		
			//get commission value based on value sent;uses agentcom(),crAgent($val,$table) functions
		function comValue($val){
				$db = new Database;
				
				$user_id=getUser()['user_id'];;
				$user_type=getUser()['type'];
				$cRate=array();
				
				if($user_type=='customer'){$table='cust_cr';
					$cRate['coma']=""; //not set for customer account
					$cRate['comb']=""; //not set for customer account
				}
				else
					{$table='agent_cr';	// Agent:extract commission% for agent & business on the database from agentcom function
					$cRate['coma']=agentcom()['coma'];
					$cRate['comb']=agentcom()['comb'];
				}
				//test if agent/customer hold special commission range
				if(crAgent($val,$table)){
				$db->query("SELECT * FROM  $table WHERE (`to` >='$val'	 AND  `from` <='$val') AND status='$user_id' ");}
				else{
				$db->query("SELECT * FROM  $table WHERE (`to` >='$val'	 AND  `from` <='$val') AND status='' ");}
				
						$result2=$db->resultset();
						foreach($result2 as $result2){
						$cRate['pa']=$result2->pa;
						$cRate['val']=$result2->value;
						
					}
					//if $cRate['coma'] or if $cRate['comb'] is empty
						if(($cRate['coma']=="") || ($cRate['comb']=="") ){
							$cRate['coma']=$cRate['pa']; 		//  % of agent commission
							$cRate['comb']=100-$cRate['pa']; 	//% of Business commission
						}
					
						return $cRate;
					 
		}
		
		function calculator_rate(){
			
			 //get category of todays rate from agent database 
			$db = new Database;
			
         //category retrieved is now used to extract value from todays rate table        
			$db->query("SELECT rate, id FROM todays_rate  ORDER BY id DESC 
                        LIMIT 1 ");
			//$row=$this->db->single();
			$row=$db->resultset();
			foreach($row as $row){
				$rate=$row->rate;
			}
			
				return $rate;
		}
		
			function calculator_com($val){
			
			 //get category of todays rate from agent database 
			$db = new Database;
			$db->query("SELECT * FROM  cust_cr WHERE (`to` >='$val'	 AND  `from` <='$val')  ");
					$result2=$db->resultset();
						foreach($result2 as $result2){
						
						$com=$result2->value;
						}
				return $com;
		}
		
		//get business information i the database
		function binfo(){
			$buinfo=array();
			$db=new Database;
			$db->query("SELECT * FROM busy  ORDER BY id DESC LIMIT 1");
			$result=$db->resultset();
			foreach($result as $result){
				
				$buinfo['name1']=$result->name1;
				$buinfo['name2']=$result->name2;
				$buinfo['slogan1']=$result->slogan1;
				$buinfo['email']=$result->email;
				$buinfo['email2']=$result->email2;
				$buinfo['address']=$result->address;
				$buinfo['postcode']=$result->postcode;
				$buinfo['tel1']=$result->tel1;
				$buinfo['tel2']=$result->tel2;
				$buinfo['web1']=$result->web1;
				$buinfo['ecredit']=$result->ecredit;
				$buinfo['ecal']=$result->ecal;
				$buinfo['br']=$result->br;
				$buinfo['brc']=$result->brc;
				$buinfo['dtl']=$result->dtl;
				$buinfo['dtls']=$result->dtls;
				$buinfo['mtls']=$result->mtls;
				$buinfo['vdtl']=$result->vdtl;
				$buinfo['etp']=$result->etp;
				$buinfo['rp']=$result->rp;
				$buinfo['so']=$result->so;
				$buinfo['rt']=$result->rt;
					
			}
			return $buinfo;
			
		}
		//logo
		function findLogo(){
			$db=new Database;
			$db->query("SELECT logo FROM busyimg ORDER BY id DESC LIMIT 1");
			$row=$db->resultset();
			foreach($row as $row){
				return $row->logo;
			}
			
		}
		
		function findSenderinfo($sFName,$sLName,$sMName,$user_id){
			
			$db=new Database;
			$details=array();
			if(getUser()['type']=='agent'){
			$table="SELECT * FROM agent_new_customer WHERE fname=:sFName && mname=:sMName && lname=:sLName && agid=:user_id";
				} 
			
			else {
			$table="SELECT * FROM new_customer WHERE fname=:sFName && mname=:sMName && lname=:sLName && id=:user_id";
			}
			
			$db->query($table);
			
			$db->bind(":sFName",$sFName);
			$db->bind(":sMName",$sMName);
			$db->bind(":sLName",$sLName);
			$db->bind(":user_id",$user_id);
			
			$result=$db->resultset();
				foreach($result as $result){
					
					$details['senderId']=$result->id;
					$details['phone']=$result->mnumber;
					$details['email']=$result->email;
					$details['address']=$result->line1." ".$result->line2;
					$details['postcode']=$result->postcode;
					$details['town']=$result->town;
					$details['county']=$result->county;
					$details['country']=$result->country;
				}
				return $details;
			
			
		}
		
		function findReceiverid($rFName,$rLName,$senderId){
			$db=new Database;
			if(getUser()['type']=='agent'){
				$table="SELECT b_fname,b_lname,agcid,id FROM agent_cust_receiver WHERE b_fname=:rFName && b_lname=:rLName && agcid=:senderId";
			}
			else{
			$table="SELECT b_fname,b_lname,cid,id FROM receiver WHERE b_fname=:rFName && b_lname=:rLName && cid=:senderId";	
			}
			$db->query($table);
			$db->bind(":rFName",$rFName);
			$db->bind(":rLName",$rLName);
			$db->bind(":senderId",$senderId);
			$result=$db->resultset();
			
			foreach($result as $result){
					
					$rId=$result->id;
				}
				return $rId;
		}
			
		