<?php session_start();
//

 include "conn.php";
 include "info.php";
//unset($_SESSION['email']); 
session_destroy(); 
//echo '<meta http-equiv="Refresh" content="1;URL=http://www.kunzleltd.com">';
//exit();
 
 if($_SESSION['is_logged_in']){
	
                     

	echo" <script type='text/javascript'> {location='../login.php'; }</script> ";  

	}
	
	else{
		
		if (!file_exists('agent_login.php')) {   echo" <script type='text/javascript'> {location='../agent_login.php'; }</script> ";	}
                     

	if (file_exists('agent_login.php')) {echo" <script type='text/javascript'> {location='agent_login.php'; }</script> ";  }
	}
 
/*
 ?>
<script>
//window.open("customer_page.php");self.focus();
window.location = "wwww.daphkkoy.biz";
</script>
<?php 

session_unset();  
 
 */

 
 ?> 