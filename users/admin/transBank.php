<?php 
require_once('/../config/init.php');
$user=new User;
$trans=new Transaction;
$validator=new Validator;
$template=new Template('templates/transBank.php');
$template->dataResult=$trans->transBank();

/* submit new entry */
if(isset($_POST['submit'])){
	$newBank=trim($_POST['newBank']);
	
	$option=trim($_POST['option']);
		
	//for validation
	$required=array('newBank');
	
	$array=array();
	$array['newBank']=$newBank;
	$array['option']=$option;
	if($validator->isRequired($required)){
		if($trans->submitBank($array)){
			redirect('transBank.php','Succesfully submitted','success');
		}
		else{
			redirect('transBank.php','Something Went Wrong','error');
		}
		
	}
	else
	{
		redirect('transBank.php','Please Fill Entry For Bank','error');
	}
	
}

//dlete bank entry
if(isset($_GET['id'])){
	$delArray=array();
	$delArray['id']=trim($_GET['id']);
	
	if($trans->deleteBank($delArray)){
		redirect('transBank.php','Successfully Deleted Bank','success');
	}
	else 
	{
		redirect('transBank.php','Somethig Went','error');
	}
}
echo $template

?>