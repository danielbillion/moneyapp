<?php

// This work s for delete of agent customer, agent, customer
require_once('../config/init.php');
$template=new Template('templates/delete.php');
$user=new User;
$validator=new Validator;
//for name for agent customer
	$template->agentCust=isset($_GET['type'])?$_GET['type']: "";
	$id=isset($_GET['id'])?$_GET['id']:"";
	
	$type=$_GET['type'];			//type as agent,customer,agent-customer
//source for table delete &  task record info
	$table=$type=='ac'?'agent_new_customer':($type=='a'?'agent':'new_customer');
	$deleteOperation="Delete ".$table	;		//task record info
	
	
//for view	
	$myresult=$user->findTheMember($id,$table);
	$template->dataResult=$myresult;
	$template->deleteOperation=$table;
	
$type=$_GET['type'];			//type as agent,customer,agent-customer
//source for table delete &  task record info
	$table=$type=='ac'?'agent_new_customer':($type=='a'?'agent':'new_customer');
	$deleteOperation="Delete ".$table	;		//task record info
		
	
//find name for agent(agent_customer_delete)
		if($_GET['type']=='ac'){
			$agentId=$myresult->agid;	
			$template->agent=$user->agent_details($agentId);		
		}
		
//post,check id with passsword for agent customer
	$postValue="type=".$type."&id=".$id;
if(isset($_POST['submit'])){
	$password=md5(trim($_POST['password']));
	$required=array('password');
											//validate Empty password	
	if($validator->isRequired($required)){
																		//validate valid password
														//table to use for administrator deleting
			$user_id=getUser()['user_id'];								//user_id from array
		if($user->checkPass($password,$user_id)){
																		//perfrom Delete
					$postValue="Id=".$agentId;
										
				if($user->deleteMember($id,$table,$deleteOperation)){
					redirectValue('memberCustomer.php','Successfully Deleted','success',$postValue);
				}
				
				else{
					redirectValue('delete.php','Something Went Wrong','error',$postValue);
				}
		}
		
		else{
			redirectValue('delete.php','Password is not Valid','error',$postValue);
		}
	}
	else{
		
		redirectValue('delete.php','Please Fill in Your Password','error',$postValue);
	}
	
}

echo $template;

?>