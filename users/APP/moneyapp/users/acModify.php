<?php

require "config/init.php";
$template=new Template('templates/acModify.php');
$trans= new Transaction;
$template->rate=$trans->todaysrate();
$sender=new Senders;
$validator=new Validator;

if(getUser()['type']=='agent'){
	
	$agcid=$_GET['agcid'];
	$table="SELECT * FROM agent_new_customer WHERE id='$agcid'";
	$template->result=$sender->custList($table);
	$result2=$sender->custList($table);
}

if(isset($_POST['submit']) && isset($_GET['agcid']) ){
	$contact=($_POST['contact']);
	$mobile=($_POST['mobile']);
	$email=($_POST['email']);
	
	
	$listArray=array();
	$listArray['contact']=$contact;
	$listArray['mobile']=$mobile;
	$listArray['email']=$email;
	
	$requiredArray=array('contact','mobile');
	$getValue='agcid='.$agcid;			// Get value to be carry along on submit
	
foreach($result2 as $result2){
	if($validator->isRequired($requiredArray)){
		
			
				// process file to be uploaded
			if( ($_FILES["imageId"]["size"]> 0) || ($_FILES["imageAdd"]["size"]>0) ){
				
					if($_FILES["imageAdd"]["size"]>0){
							if( $sender->addressUploaded($getValue)  ){
								
								// for addres  upload
								
								$listArray['proofad_name']=$_FILES["imageAdd"]["name"];
								$listArray['proofad_size']=$_FILES["imageAdd"]["size"];
								$listArray['proofad_type']=$_FILES["imageAdd"]["type"];
							}
							
							else{
								
								$listArray['proofad_name']=$result2->proofad_name;
								$listArray['proofad_size']=$result2->proofad_size;
								$listArray['proofad_type']=$result2->proofad_type;
							}
					}
					
					else{
								
								$listArray['proofad_name']=$result2->proofad_name;
								$listArray['proofad_size']=$result2->proofad_size;
								$listArray['proofad_type']=$result2->proofad_type;
							}
					
					// for id upload
					if($_FILES["imageId"]["size"]>0){
				
							if($sender->idUploaded($getValue)){
								//proof of Id
								$listArray['proofId_name']=$_FILES["imageId"]["name"];
								$listArray['proofId_size']=$_FILES["imageId"]["size"];
								$listArray['proofId_type']=$_FILES["imageId"]["type"];
								
								}
							
						
							else{
								
								$listArray['proofId_name']=$result2->proofid_name;
								$listArray['proofId_size']=$result2->proofid_size;
								$listArray['proofId_type']=$result2->proofid_type;
								
							}
					}
					
					else{
								
								$listArray['proofId_name']=$result2->proofid_name;
								$listArray['proofId_size']=$result2->proofid_size;
								$listArray['proofId_type']=$result2->proofid_type;
								
							}
				

		}
		
			//if nothing is uploaded
		else{
			
						$listArray['proofId_name']=$result2->proofid_name;
						$listArray['proofId_size']=$result2->proofid_size;
						$listArray['proofId_type']=$result2->proofid_type;
						
						$listArray['proofad_name']=$result2->proofad_name;
						$listArray['proofad_size']=$result2->proofad_size;
						$listArray['proofad_type']=$result2->proofad_type;
		}
		if($sender->update($listArray,$agcid)){
					redirectValue('acModify.php','Successfully Updated','success',$getValue);
				}
				else{
				redirectValue('acModify.php','Something Went Wrong','error',$getValue);
				}

		
	}
	else{
		
		redirectValue('acModify.php','Email,Contact or Mobile number need to be filled','error',$getValue);
	}
}
}


echo $template;


?>