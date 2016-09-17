<?php


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
			
		
		//get business information i the database
		function binfo(){
			$buinfo=array();
			$db=new Database;
			$db->query("SELECT * FROM busy  ORDER BY id DESC LIMIT 1");
			$result=$db->resultset();
			foreach($result as $result);{
				
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
		
		
		
	
		