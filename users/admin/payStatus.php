<?php 
require_once('../config/init.php');
$template=new Template('templates/payStatus.php');
$user=new User;
$validator=new Validator;

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