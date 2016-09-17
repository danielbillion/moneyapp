<?php  session_start();


include "cust_log_proc.php";

 ?>


<?php include "index_H.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>  <?php include "info.php"; if(isset($name1)){ echo $name1;} ?></title>
  <link rel="stylesheet" href="admin_menu_files/css3menu1/style.css" type="text/css" />

<link rel="shortcut icon" href="fv.jpg" type="image/jpeg" />
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style5 {font-size: 13px}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}
a:link {
	text-decoration: none;
	color: #000000;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	font-style: italic;
}
.style9 {color: #000000}
.style25 {font-size: 12px;
	font-weight: bold;
}
.style30 {color: #F0F0F0}
.style30 {color: #FFFFFF}
.style32 {color: #333366;
	font-size: 10.5px;
}
.style33 {color: #333366;
	font-size: 11px;
	font-weight: bold;
}
-->
</style></head>

<body>
<p>&nbsp;</p>
<div align="center">
  <table width="479" border="2" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><div align="center"><span style="font-weight: bold; font-size: 18px; color: #030;">Customer Login</span></div></td>
    </tr>
    <tr>
      <td width="473"><form id="form1" name="form1" method="post" action="">
        <table width="474" height="367" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#003300" bgcolor="#FFFFFF">
          <tr>
            <td colspan="3"><div align="center" style="font-weight: bold; font-size: 18px; color: #00F;"></div></td>
            </tr>
          <tr>
            <td colspan="3">&nbsp;
              
              
              </td>
            </tr>
          <tr>
            <td colspan="3"><div align="center">
              <?php  
    if(isset($msg)){  // Check if $msg is not empty  
       
		//echo '<div class="statusmsg">'.$mne.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
		echo '<table width="200" border="0" bgcolor="#FF0033"><tr><th class="style1" scope="row">'.$msg.'</th> </tr></table>';} ?>
              </div></td>
            </tr>
          <tr>
            <td height="77" colspan="3"><div align="center" class="style9">Email</div>
              <label>
              <div align="center">
                <input name="email" type="text" id="email" />
                </div>
              </label></td>
            </tr>
          <tr>
            <td height="56" colspan="3">&nbsp;</td>
            </tr>
          <tr>
            <td height="56" colspan="3"><div align="center">Password</div>
              <label>
              <div align="center">
                <input name="password" type="password" id="password" />
                </div>
              </label></td>
            </tr>
          <tr>
            <td height="44" colspan="3"><div align="center">
              <label>
                <input name="Login" type="submit" id="Login" value="Login" />
                </label>
              </div></td>
            </tr>
          <tr>
            <td height="22">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td height="22">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td height="22">&nbsp;</td>
            <td colspan="2"><span class="style5">
              <input type="checkbox" name="checkbox" value="checkbox" />
              Keep me sign in (uncheck if on a shared compute</span>r)</td>
            </tr>
          <tr>
            <td height="22">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td width="161" height="22"><label>
              <div align="center"></div>
              </label></td>
            <td width="157"><span class="style5"><a href="forgot_password.php" style="font-style: italic">Forgot Password</a></span></td>
            <td width="156"><span class="style5"><a href="new_customer_reg.php" style="font-style: italic">Register as new Customer </a></span></td>
            </tr>
          <tr>
            <td height="19" colspan="3">&nbsp;</td>
            </tr>
          </table>
      </form></td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
