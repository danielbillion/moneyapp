<?php


require "config/init.php";
$template=new Template('templates/mPassword.php');
$trans= new Transaction;
$template->rate=$trans->todaysrate();
$validate=new Validator;
$user=new User;

if(isset($_POST['submit'])){
	$xPassword=md5($_POST['xPassword']);
	$nPassword=md5($_POST['nPassword']);
	$n1Password=md5($_POST['n1Password']);
	$id=getUser()['user_id'];
	
	
	//check All fields are complete
	$isRequired=array('xPassword','nPassword','n1Password');
	
	if($validate->isRequired($isRequired)){
		if($nPassword == $n1Password){
			if($user->checkPass($xPassword,$id)){
				if( $user->update($nPassword,$id)){
					redirect('mPassword.php','Password Succesfuly Updated','success');
				}
				else{
			redirect('mPassword.php','Error Updating Your Pasword','error');
			}
			}
			else{
				redirect('mPassword.php','Password Entered is Incorrect','error');
			}
		}
	else{
			redirect('mPassword.php','Password Didnt Match','error');
	}
	}
	else{
		redirect('mPassword.php','Please You need to Fill all Fields','error');
	}
}

echo $template;
?>