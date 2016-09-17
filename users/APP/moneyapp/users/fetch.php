<?php
   
           
   if(isset($_GET['recValue'])){
		$rValue=array('rFName'=>'jamma','rLName'=>'mata','rPhone'=>'09876789','tOption'=>'act','rBank'=>'zenith','rActno'=>'09876578');
		header('Content-Type:application/json');
		return json_encode($rValue);
	}

?>