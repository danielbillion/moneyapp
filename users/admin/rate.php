<?php require('/../config/init.php'); ?>
<?php

//Get Template & Assign Vars
$template = new Template('templates/rate.php');
$trans=new Setup;
$validator=new Validator;

//get rate,rate1,rate2 ...from database

$template->trans_rate=$trans->get_rate();



if(isset($_POST['submit'])){
	$field=array('rate','rate1','rate2','rate3','rate4','rate5','ratenu');
	$require= array();
	
	$require['rate']=trim($_POST['rate']);
	$require['rate1']=trim($_POST['rate1']);
	$require['rate2']=trim($_POST['rate2']);
	$require['rate3']=trim($_POST['rate3']);
	$require['rate4']=trim($_POST['rate4']);
	$require['rate5']=trim($_POST['rate5']);
	$require['ratenu']=trim($_POST['ratenu']);
		
		if($validator->digit($field)){
	
			if($trans->submitRate($require)){
						redirect('rate.php',"New Rate Sucessfully Updated",'success');
					}
					else
						
					{
						redirect('rate.php',"Something Went Wrong",'error');
					}
		}
		
		else{
			
			redirect('rate.php',"One of Your Entry Is Not A Number",'error');
		}
	
}


echo $template;
?>
