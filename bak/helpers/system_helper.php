<?php
/*
 * Redirect To Page
*/
function redirect($page = FALSE, $message = NULL, $message_type = NULL) {
	if (is_string ($page)) {
		$location = $page;
	} else {
		$location = $_SERVER ['SCRIPT_NAME'];
	}

	//Check For Message
	if($message != NULL){
		//Set Message
		$_SESSION['message'] = $message;
	}
	//Check For Type
	if($message_type != NULL){
		//Set Message Type
		$_SESSION['message_type'] = $message_type;
	}

	//Redirect
	
	echo "<script type='text/javascript'> window.location='$location';</script>";
	//header ('Location: '.$location);
	exit;
}

function redirectValue($page = FALSE, $message = NULL, $message_type = NULL, $getValue = NULL) {
	if (is_string ($page)) {
		$location = $page;
	} else {
		$location = $_SERVER ['SCRIPT_NAME'];
	}

	//Check For Message
	if($message != NULL){
		//Set Message
		$_SESSION['message'] = $message;
	}
	//Check For Type
	if($message_type != NULL){
		//Set Message Type
		$_SESSION['message_type'] = $message_type;
	}

	//Redirect
	
	echo "<script type='text/javascript'> window.location='$location?$getValue';</script>";
	//header ('Location: '.$location);
	exit;
}

/*
 * Display Message
 */
function displayMessage(){
	if(!empty($_SESSION['message'])) {
		
		//Assign Message Var
		$message = $_SESSION['message'];
			
		if(!empty($_SESSION['message_type'])) {
			//Assign Type Var
			$message_type = $_SESSION['message_type'];
			//Create Output
			if ($message_type == 'error') {
				echo '<div class="alert alert-danger" style="text-align:center;">' . $message . '</div>';
			} else {
				echo '<div class="alert alert-success" style="text-align:center;">' . $message . '</div>';
			}
		}
		//Unset Message
		unset($_SESSION['message'] );
		unset($_SESSION['message_type'] );
	} else {
		echo '';
	}
}

/*
 * Check If User Is Logged In
 */
function isLoggedIn(){
	if(isset($_SESSION['is_logged_in'])){
		return true;
	} else {
		return false;
	}
}

/*
 * Get Logged In User Info
*/
function getUser(){
	$userArray = array();
	$userArray['user_id'] = $_SESSION['user_id'];
	$userArray['fname'] = $_SESSION['fname'];
	$userArray['lname'] = $_SESSION['lname'];
	$userArray['mname'] = $_SESSION['mname'];
	$userArray['type'] = $_SESSION['type'];
	$userArray['level'] = $_SESSION['level'];
	$userArray['email'] = $_SESSION['email'];
	$userArray['photo'] = $_SESSION['photo'];
	$userArray['credit'] = $_SESSION['credit'];
	return $userArray;
}

function dateTime(){
	//$dtime = date("Y-m-d H:i:s a", time() + 18000);
//$date=date("Y-m-d H:i:s a", time() + 18000);
// 1hr= 36000, 6hr=18000
			$tch=0;
			$tdate = date("Ymd");
			$dtime = date("Y-m-d H:i:s a", time() + $tch);
			return $dtime;
}

function dDate(){

			$tch=0;
			$tdate = date("Ymd");
			return $tdate;
}

function dTime(){
	
	 $ytime=date("h:i:s a");
	 $newtime2 = date("h:i:s A", strtotime($ytime));
	 return  $newtime2;

	
	
}

function firstCap($str){
	
	$str=ucfirst(strtolower($str));
	return $str;
}
function systemCheck(){
	$idletime=440;//after 60 seconds the user gets logged out
	
	if((time()-$_SESSION['timestamp']>$idletime) ||( getUser()['user_id']!==$_SESSION['user_id'])
				|| (binfo()['web1']!==$_SESSION['web']) ){
		redirect("logout.php","You have been logged out","error");	
		}
		
	if(getUser()['type']=='agent'){
	
		if((time()-$_SESSION['timestamp']>$idletime) ||( getUser()['type']!=='agent') || ( getUser()['user_id']!==$_SESSION['user_id'])
				|| (binfo()['web1']!==$_SESSION['web']) ){
		redirect("logout.php","You have been logged out","error");	
		}
	}
	
	
	
	if(getUser()['type']=='customer'){
	
		if((time()-$_SESSION['timestamp']>$idletime) ||( getUser()['type']!=='customer') || ( getUser()['user_id']!==$_SESSION['user_id'])
				|| (binfo()['web1']!==$_SESSION['web']) ){
		redirect("logout.php","You have been logged","error");	
		}
	}
}