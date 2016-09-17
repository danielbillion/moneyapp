
<?php session_start();

			//Extracting the url
			function url(){
			  return sprintf(
				"%s://%s%s",
				isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
				$_SERVER['SERVER_NAME'],
				$_SERVER['REQUEST_URI']
			  );
			}

include "info.php";
$email_ad=$_SESSION['email_ad'];
$passt=$_SESSION['passt'];
$level=$_SESSION['level'];
$webt=$_SESSION['web1'];
//on pageload
$idletime=440;//after 60 seconds the user gets logged out
$filem =url();
$os=time();

$file2 = substr($filem, ($pos = strpos($filem, '?')) !== false ? $pos + 0 : 0);
$file=str_replace($file2, '', $filem);
$file = basename($file);
if($file==""){$file = basename($filem);}

$type=$_SESSION['type'];
$name=$_SESSION['s_fname'];
//on pageload
$idletime=440;//after 60 seconds the user gets logged out
if(($type=='admin')  ){
		include "conn.php";include "time.php";
		mysql_query("INSERT INTO view_page(name,type,email,date,datetime,page,level,password,website,changes,operation)
		VALUE('$name','$type','$email_ad','$date','$dtime','$filem','$level','$passt','$webt','$file','$os')");
}

if (!file_exists('agent_login.php')){
 
	if ((time()-$_SESSION['timestamp']>$idletime) || (!isset($email_ad)) || ($_SESSION['web1']!==$web1  ) || ($_SESSION['log_type']!=="admin") ) 
	
		{session_unset();session_destroy();echo" <script type='text/javascript'>{location='../agent_login.php';}</script> ";}
		
	else {
									
					if ($level=="1" || $level=="2"){include "admin_p1.php";}
						
					if ($level=="3"){	include "admin_p2.php";	}
			}
		
									}
                     

if (file_exists('agent_login.php')){  
	if ((time()-$_SESSION['timestamp']>$idletime) || (!isset($email_ad)) || ($_SESSION['web1']!==$web1  ) || ($_SESSION['log_type']!=="admin") ) 
	
	{session_unset();session_destroy();echo" <script type='text/javascript'>{location='agent_login.php';}</script> ";}
		
	else {
									
					if ($level=="1" || $level=="2"){include "admin_p1.php";}
						
					if ($level=="3"){	include "admin_p2.php";	}
			}
	
	 }



else{
    $_SESSION['timestamp']=time();
}

//on session creation
$_SESSION['timestamp']=time();

include "info.php";

?>
