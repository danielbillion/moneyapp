<?php require('config/init.php'); ?>

<?php



if(isset($_POST['Login']))
{
	
	$validate=new Validator;
	$user=new User;
	
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
	$data=array();
	$data['email']=$_POST['email'];
	$data['password']=md5($_POST['password']);
	
	$field_array=array('email','password');
	
	if($validate->isRequired($field_array)){ //test for two textboxes are filled
		
		//if($validate->isValidEmail($data['email'])){	//test for valid email
			
			if($user->checkEmail($data['email'])){		//check if the email exist in the database
				
				if($user->userActive($data['email'])){		//test if user is activeor sususpended
					if($user->checkPassword($data['email'],$data['password'])){ 	//test if password is in range
					
					
						if($user->checkBothAccount($data['email'])){ //test if email exist in both agent& customer table
						
						redirect('selector.php', ' Successfully logged in as customer ', 'success');
						
					}
						else{
							
							if($user->loginAsCustomer($data['email'])){		// select directory to go to
							redirect('index.php', ' Successfully logged in as customer ', 'success');	

							}
						
							else {
									if($user->loginAsAgent($data['email'])){		// select directory to go to
									redirect('index.php', ' Successfully logged in as agent ', 'error');	
									}
								
									else {
										if($user->loginAsAdmin($data))		// login as admin
										{		// select directory to go to
										redirect('admin/index.php', ' Successfully logged in as Administrator ', 'error');
										}
									}	
							}
					}
					}	
					else{
					redirect('login.php', ' Password Is Invalid', 'error');	
					}
					
				
				}	
				else {
					
					redirect('login.php', 'You Account is currently Suspended', 'error');
					
				}
				
			}
			
			else{
					redirect('login.php', 'Your email is not existing in our database', 'error');	
				}
		/*}
		
		else{
			redirect('login.php', 'Please use a valid email address', 'error');
			
		} */
		
	}
	
	else{
		
		redirect('login.php', 'Please fill in all required fields', 'error');
	}
	
	
	
	
}

//Get Template & Assign Vars
$template = new Template('templates/login.php');

echo $template;