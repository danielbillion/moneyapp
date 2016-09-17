 <?php 

if (isset($_POST['email'])){
$email2= mysql_escape_string($_POST['email']);
echo $email2;}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
a:link {
	text-decoration: none;
	color: #00F;
}
a:visited {
	text-decoration: none;
	color: #9CF;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #CCCCCC;
}
.style30 {color: #F0F0F0}
.style30 {color: #FFFFFF}
.style31 {
	font-size: 10px;
	font-weight: bold;
	color: #666666;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="700" height="309" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th height="52" colspan="3" scope="row"><p>SENDING MONEY TO NIGERIA/UK</p>
    <p class="style31">FOLLOW THE STEPS BELOW </p></th>
  </tr>
  <tr>
    <th width="200" height="136" scope="row"><table width="200" height="129" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th scope="row"><a href="cust_receiver.php"><img src="people.jpg" width="112" height="90" /></a></th>
      </tr>
    </table></th>
    <th width="256" scope="row"><table width="200" height="129" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th scope="row"><img src="link.jpg" width="72" height="69" /></th>
      </tr>
    </table></th>
    <th width="236" scope="row"><table width="200" height="129" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th scope="row"><img src="tap.jpg" width="84" height="96" /></th>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th scope="row"><table width="200" height="117" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#9933FF">
      <tr>
        <th height="114" scope="row"><p class="style30"><a href="agent_new_customer_reg.php" target="mainframe">START CREATING  </a></p>
          <p class="style30"><a href="agent_new_customer_reg.php">CUSTOMERS</a></p>
          <p class="style30"><a href="cust_receiver.php" target="mainframe>RECEIVERS</a></p>
            <p class="style30">&nbsp;</p></th>
      </tr>
    </table></th>
    <th scope="row"><table width="200" height="117" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#9933FF">
      <tr>
        <th height="114" scope="row"><p class="style30"><a href="agent_cust_list.php" target="_parent" >CUSTOMERS BENEFICIARIES </a></p>
          <p class="style30">&nbsp;</p>          </th>
      </tr>
    </table></th>
    <th scope="row"><table width="200" height="117" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#9933FF">
      <tr>
        <th height="114" scope="row"><p class="style30">SEND MONEY  WITH </p>
          <p class="style30">'SEND' BUTTON </p>
          <p class="style30">&nbsp;</p></th>
      </tr>
    </table></th>
  </tr>
</table>
</body>
</html>
