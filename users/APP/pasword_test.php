
 $check_email = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());
   
   while($info_email = mysql_fetch_array( $check_email )) 	

 
 {			$_POST['pass'] = stripslashes($_POST['pass']);
 
 
			 $info_email['password'] = stripslashes($info_email['password']);
			
			 $_POST['pass'] = md5($_POST['pass']);
				
				if ($_POST['pass'] != $info_email['password']) {{$msg = 'Incorrect password, please try again.';}}

			else {  
			mysql_select_db("daphkkoy_com") or die(mysql_error());



   $email= $_GET['ag_email'];

 mysql_query("DELETE FROM agent WHERE email='$email'  ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");
 
 echo" <script type='text/javascript'>
 
 {
 window.alert('Your Agent has now been Succesfully Deleted')
window.location='admin_del_agent.php';
 }
</script> ";
			}
		
 	}

