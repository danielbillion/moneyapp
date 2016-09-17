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
			$db->query("SELECT coma,comb,id FROM agent WHERE id='$user_id'");
			$result=$db->resultset();
			$agentc=array();
			foreach($result as $result){
				//set values into array
				$agentc['coma']=$result->coma;
				$agentc['comb']=$result->comb;
				}
			return $agentc;
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
		
			//get commission value based on value sent 
		function comValue($val){
				$user_id=getUser()['user_id'];;
				$user_type=getUser()['type'];
				$cRate=array();
				$db = new Database;
				
				if($user_type=='customer'){$table='cust_cr';}
				else
					{$table='agent_cr';	// Agent:extract commission for agent & business on the database from agentcom function
					$cRate['coma']=agentcom()['coma'];$cRate['comb']=agentcom()['comb'];
					}
				//test if agent/customer hold special commission setting
				if(crAgent($val,$table)){
				$db->query("SELECT * FROM  $table WHERE (`to` >='$val'	 AND  `from` <='$val') AND status='$user_id' ");}
				else{
				$db->query("SELECT * FROM  $table WHERE (`to` >='$val'	 AND  `from` <='$val') AND status='' ");}
				
						$result2=$db->resultset();
						foreach($result2 as $result2){
						$cRate['pa']=$result2->pa;
						$cRate['val']=$result2->value;
						}
						return $cRate;
					 
		}
		
		
		function binfo(){
			$buinfo=array();
			$db=new Database;
			$db->query("SELECT * FROM busy");
			$result=$db->resultset();
			foreach($result as $result);{
				
				$buinfo['name1']=$result->name1;
				$buinfo['name2']=$result->name2;
				$buinfo['slogan1']=$result->slogan1;
				$buinfo['email']=$result->email;
				$buinfo['email2']=$result->email2;
				$buinfo['address']=$result->address;
				$buinfo['postcode']=$result->postcode;
				$buinfo['tel']=$result->tel;
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
		
			
		