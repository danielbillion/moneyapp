<?php
//Start Session
session_start();

//Include Configuration
require_once('config.php');

//Helper Function Files
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');

//Autoload Classes
function __autoload($class_name){
	require_once('libraries/'.$class_name . '.php');
	
}

/*

include_once('libraries/senders.php');
include_once('libraries/receiver.php');
include_once('libraries/Money.php');
include_once('libraries/Transaction.php');
include_once('libraries/Template.php');
include_once('libraries/Paginator.php');
include_once('libraries/Message.php');
include_once('libraries/Validator.php');
include_once('libraries/Database.php');
include_once('libraries/User.php');
include_once('libraries/Database.php');
include_once('libraries/Update.php');
include_once('libraries/SetupFields.php');
include_once('libraries/sendMoney.php');

*/

?>