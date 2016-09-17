<?php     ?>

 <?php 
include "customer_p.php";
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
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
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
.style19 {	font-size: 24;
	color: #333300;
}
.style19 {
	color: #FFFFFF;
}
.actcl {
	color: #FC0;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp;</p>
<table width="851" height="545" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <th height="52" colspan="3" scope="row"><p>SENDING MONEY TO NIGERIA/UK</p>
    <p class="style31">FOLLOW THE STEPS BELOW </p></th>
  </tr>
  <tr>
    <th width="200" height="136" scope="row"><table width="200" height="129" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th scope="row"><a href="cust_receiver.php"><img src="img_cust1.php" width="112" height="90" /></a></th>
      </tr>
    </table></th>
    <th width="345" scope="row"><table width="200" height="129" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th scope="row"><?php    $email= ($_SESSION['email']); echo " <a href='receivers_list.php?email=$email' >"; ?><img src="img_cust2.php" width="72" height="69" /></a></th>
      </tr>
    </table></th>
    <th width="298" scope="row"><table width="200" height="129" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <th scope="row"><?php    $email= ($_SESSION['email']); echo " <a href='receivers_list.php?email=$email' >"; ?><img src="img_cust3.php" alt="img_cust3.php" width="84" height="96" /></a></th>
      </tr>
    </table></th>
  </tr>
  <tr>
    <th height="355" scope="row"><table width="200" height="117" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#666666">
      <tr>
        <th height="314" valign="top" scope="row"><p class="style30">&nbsp;</p>
          <p class="style30"><a href="cust_receiver.php">1ST STEP  </a></p>
<p class="style30"><a href="cust_receiver.php">Start Creating Receivers</a></p>
          <p class="style30"><a href="cust_receiver.php" target="mainframe>RECEIVERS</a></p>
            <p class="style30">&nbsp;</p></th>
      </tr>
    </table></th>
    <th scope="row"><table width="200" height="117" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#666666">
      <tr>
        <th height="314" valign="top" scope="row"><p class="style30">&nbsp;</p>
          <p class="style30"><a href="receivers_list.php" >
            <?php    $email= ($_SESSION['email']); echo " <a href='receivers_list.php?email=$email' >2ND STEP <p> Send Money with receiver list</p>
          <p class='style30'></a> " ?> 
          </p>
<p class="style30">&nbsp;</p>          </th>
      </tr>
    </table></th>
    <th scope="row"><table width="200" height="117" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#666666">
      <tr>
        <th height="314" scope="row"><p class="style30"><a href="receivers_list.php"> </a></p>
          <p>
            
			
			<?php    $email= ($_SESSION['email']); echo " <a href='companys details_c.php?email=$email' >FINAL STEP  <p> Transfer to our bank account here after your transaction</p>
          <p class='style30'></a> " ?>
          </p>
          <p class="style19">
          <span class="actcl"><span style="font-size: 22px">
         
          
		  <?php 		
 include "conn.php";	 

		$result = mysql_query('SELECT id,bank1,bank2 FROM office ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['bank1'];} 
  ?>
  
          </span><p class="style19">
            
            
            <span class="actcl" style="font-size: 36px">
              <?php 	
 include "conn.php";

		$result = mysql_query('SELECT id,bank2,bank1 FROM office ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['bank2'];} 
  ?>
              
              
            </span></p>
          <p>&nbsp; </p>
          <p class="style30"><a href="rece"> </a></p>
          <p class="style30">&nbsp;</p></th>
      </tr>
    </table></th>
  </tr>
</table>
</body>
</html>
