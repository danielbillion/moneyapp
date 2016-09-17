<?php include "customer_p.php";    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {
	font-size: 12px;
	font-weight: bold;
}
.style3 {font-size: 12px}
-->
</style></head>

<body>
<table width="611" height="249" border="0" align="center">
  <tr>
    <td width="462" height="50"><table width="200" border="0" align="center" bgcolor="#990099">
      <tr>
        <td><div align="center" class="style1">Password Modification </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="168"> <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

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
                  <td height="36" valign="top"><div align="center"><span class="style3">Old Password</span></div></td>
                </tr>
                <tr>
                  <td height="36" valign="top"><div align="center" class="style3"></div>                    
                      <div align="center">
                        <input name="pass" type="password" id="pass" />
                    </div></td>
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
                  </div>                    <div align="left"></div></td>
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
    </form>
    </td>
  </tr>
</table>
</body>
</html>


<?php  

$email=$_SESSION['email'];
 
 // Connects to your Database
 
  //mysql_connect("daphkkoybiz.ipagemysql.com", "dan", "bless") or die(mysql_error());  

 include "conn.php";  


 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) { 
 
 //This makes sure they did not leave any fields blank

 if (!$_POST['pass'] | !$_POST['pass1'] | !$_POST['pass2'])  {
  	echo "<script>alert(\"You did not complete all of the required fields. \");</script>";}
 	
	
 
 $check = mysql_query("SELECT * FROM new_customer WHERE email = '".$_SESSION['email']."'")or die(mysql_error());



 //Gives error if user dosen't exist


 
	
	// checks if the username is in use

 	
				
				
			// this makes sure both passwords entered match

 	if ($_POST['pass1'] != $_POST['pass2']) {
	
	echo "<script>alert(\"The two password did not match.\");</script>";

 		die(" <font color='red'>Your passwords did not match</font>");

 	}
	
	
	//mysql_query("UPDATE users SET username ='$usercheck'
//WHERE username ='$usercheck'");

while($info = mysql_fetch_array( $check )) 	

 {

 $_POST['pass'] = stripslashes($_POST['pass']);

 	$info['password'] = stripslashes($info['password']);

 	$_POST['pass'] = md5($_POST['pass']);



 //gives error if the password is wrong

 	if ($_POST['pass'] != $info['password']) {
		echo "<script>alert(\"Incorrect password, please try again.\");</script>";

	echo "<script>alert(\"Incorrect password, please try again.\");</script>";

 		die('Incorrect password, please try again.');

 	}

// The Login Page 2

 else 

 { 

$_POST['pass'] = md5($_POST['pass2']);

 	if (!get_magic_quotes_gpc()) {

 		$pass = addslashes($_POST['pass']);

	
 
 //$pass=$_POST['pass2'];
 //$use=$_POST['username'];
 }
 
 mysql_query("UPDATE new_customer SET password = '$pass'
WHERE email = '$email' ");







 //if the name exists it gives an error


		
echo "<script>alert(\"Thank you,your new password has been updated.\");</script>";



 

 } 
}

}
?>
