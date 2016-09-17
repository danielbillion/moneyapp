<html >
<head>
	<title><?php include "info.php"; echo $name1;?>  Sign up</title> 
	<link href="acti.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<!-- start header div -->
	<div id="header">
		<h3><?php include "info.php"; echo $name1;  ?> > Password Reset<strong></strong></h3>
	
	
</div>
	<!-- end header div -->	

	<!-- start wrap div -->
	<div id="wrap"><table width="611" height="249" border="0" align="center">
        <tr>
          <td width="462" height="50"><table width="200" border="0" align="center" bgcolor="#3333CC">
            <tr>
              <td><div align="center" class="style1">Password Modification </div></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="168"><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div align="center"></div>
            </label>
            <div align="center">
              <table width="200" border="1" cellpadding="0" cellspacing="0" bordercolor="#F0F0F0">
                <tr>
                  <th scope="row"><table width="319" height="314" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="36" valign="top"><div align="center"></div></td>
                    </tr>
                    <tr>
                      <td><div align="center"><span class="style2">New Password</span></div></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                        <input name="pass1" type="password" id="pass1" />
                      </div>
                        <div align="center"></div></td>
                    </tr>
                    <tr>
                      <td height="28"><div align="center"><span class="style3">Confirm Password</span><br />
                        <br />
                      </div>
                        <div align="left"></div></td>
                    </tr>
                    <tr>
                      <td height="25"><div align="center"><span class="style3">
                        <input name="pass2" type="password" id="pass2" />
                      </span></div></td>
                    </tr>
                    <tr>
                      <td><div align="center"></div></td>
                    </tr>
                    <tr>
                      <td><div align="center">
                        <input name="submit" type="submit" id="submit" value="submit" />
                      </div></td>
                    </tr>
                  </table></th>
                </tr>
              </table>
            </div>
          </form></td>
        </tr>
      </table></div>
	<!-- end wrap div -->
</body>
</html>
<?php session_start();

$_SESSION['email']=$_GET['email'];

?>

<?php 

$email=$_SESSION['email'];
 
 // Connects to your Database
 
  //mysql_connect("daphkkoybiz.ipagemysql.com", "dan", "bless") or die(mysql_error());  

 include "conn.php";  


 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) { 
 
 //This makes sure they did not leave any fields blank

 if ( !$_POST['pass1'] | !$_POST['pass2'])  {
  	echo "<script>alert(\"You did not complete all of the required fields. \");</script>";}
 	
	
 
 //$check = mysql_query("SELECT * FROM agent WHERE email = '".$_SESSION['email']."'")or die(mysql_error());



 //Gives error if user dosen't exist


 
	
	// checks if the username is in use

 	
				
				
			// this makes sure both passwords entered match

 	if ($_POST['pass1'] != $_POST['pass2']) {
	
	echo "<script>alert(\"The two password did not match.\");</script>";

 		die(" <font color='red'>Your passwords did not match</font>");

 	}
	
	
	//mysql_query("UPDATE users SET username ='$usercheck'
//WHERE username ='$usercheck'");


// The Login Page 2

 else 

 { 

$_POST['pass1'] = md5($_POST['pass2']);

 	if (!get_magic_quotes_gpc()) {

 		$pass1 = addslashes($_POST['pass1']);

	
 
 //$pass=$_POST['pass2'];
 //$use=$_POST['username'];

 
 mysql_query("UPDATE new_customer SET password = '$pass1' WHERE email = '$email' ");
 }






 //if the name exists it gives an error


		
echo "<script>alert(\"Thank you,your new password has been updated.\");

window.location='index.php';
</script>";



 

 } 
}


?>