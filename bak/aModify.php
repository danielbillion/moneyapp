<?php

require "config/init.php";
$template=new Template('templates/aModify.php');
$trans= new Transaction;
$template->rate=$trans->todaysrate();
$user=new User;
$validator=new Validator;


//  echo for modification agent info
if(getUser()['type']=='agent'){
	
	$id=getUser()['user_id'];
	
	
	$template->result=$user->agentInfo($id);
	$result2=$user->agentInfo($id);
}
//  echo for modification customer info

if(getUser()['type']=='customer'){
	$id=getUser()['user_id'];
	
	$template->result=$user->custInfo($id);
	$result2=$user->custInfo($id);
}

if(isset($_POST['submit'])  ){
	$contact=($_POST['contact']);
	$mobile=($_POST['mobile']);
	$email=($_POST['email']);
	
	
	$listArray=array();
	$listArray['contact']=$contact;
	$listArray['mobile']=$mobile;
	$listArray['email']=$email;
	$listArray['type']=getUser()['type'];
	
	
	$requiredArray=array('contact','mobile');
	$getValue='id='.$id;			// Get value to be carry along on submit

	foreach($result2 as $result2){
	if($validator->isRequired($requiredArray)){
		
			
				// process file to be uploaded
			if( ($_FILES["imageId"]["size"]> 0) || ($_FILES["imageAdd"]["size"]>0) || ($_FILES["myPhoto"]["size"]>0) ){
			
				if( ($_FILES["imageAdd"]["size"]> 0)){				//for image address
							if( $user->addressUploaded($getValue,$listArray)  ){   
								
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
								$listArray['proofad_type']=$result2->proofad_type;	//for image address ends here
							}
				if( ($_FILES["imageId"]["size"]> 0)){							//for image id
					
							// for id upload
							if($user->idUploaded($getValue, $listArray)){
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
								$listArray['proofId_type']=$result2->proofid_type; //for image id ends here
								
							}
				if( ($_FILES["myPhoto"]["size"]> 0)){				//for image photo
							// for My Photo upload
							if($user->myphotoUploaded($getValue, $listArray)){
								//proof of Id
								$listArray['myPhoto_name']=$_FILES["myPhoto"]["name"];
								$listArray['myPhoto_size']=$_FILES["myPhoto"]["size"];
								$listArray['myPhoto_type']=$_FILES["myPhoto"]["type"];
								
								}
							
						
							else{
								
								$listArray['myPhoto_name']=$result2->myPhoto_name;
								$listArray['myPhoto_size']=$result2->myPhoto_size;
								$listArray['myPhoto_type']=$result2->myPhoto_type;
								
							}
				}
				
				
							else{
								
								$listArray['myPhoto_name']=$result2->myPhoto_name;
								$listArray['myPhoto_size']=$result2->myPhoto_size;
								$listArray['myPhoto_type']=$result2->myPhoto_type;		//for image photo ends here
								
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
						
						$listArray['myPhoto_name']=$result2->myPhoto_name;
						$listArray['myPhoto_size']=$result2->myPhoto_size;
						$listArray['myPhoto_type']=$result2->proofad_type;
		}
		if($user->updateAgent($listArray,$id)){
					redirectValue('aModify.php','Successfully Updated','success',$getValue);
				}
				else{
				redirectValue('aModify.php','Something Went Wrong','error',$getValue);
				}

			}	
	
	else{
		
		redirectValue('aModify.php','Email,Contact or Mobile number need to be filled','error',$getValue);
	}
	
}
}


echo $template;


?>