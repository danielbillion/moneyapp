<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" <?php include "customer_p.php";  ?>"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
body {
	background-color:#CCCCCC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

a:link {
	text-decoration: none;
	color: #FFFFFF;
}
a:visited {
	text-decoration: none;
	color: #CCCCCC;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #F0F0F0;
}
.style18 {
	color: #0000FF;
	font-size: 20px;
}
.style19 {
	font-size: 36px;
	color: #333300;
}
.style20 {font-size: 12px; color: #990000; font-style: italic; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="882" height="302" border="0" cellpadding="0" cellspacing="0">
    
    <tr>
      <th width="882" height="31" scope="row"><table width="741" height="192" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <th colspan="2" scope="row"><span class="style18">Our Bank Details </span>
            <hr /></th>
          </tr>
        <tr>
          <th width="538" height="38" scope="row"><p class="style19">&nbsp;</p>
            <p align="center" class="style19"><?php 		
 include "conn.php";	include  

		$result = mysql_query('SELECT id,bank1,bank2 FROM office ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['bank1'];} 
  ?></p>
            <p align="center" class="style19">
              
              
              <?php 	
 include "conn.php";

		$result = mysql_query('SELECT id,bank2,bank1 FROM office ORDER BY id DESC
                      
                        LIMIT 1') or die('Invalid query: ' . mysql_error());

while ($row = mysql_fetch_assoc($result)) { echo $row['bank2'];} 
  ?>
              
              
              &nbsp;</p>
            <p class="style19">&nbsp;</p></th>
          <th width="203" rowspan="2" scope="row"><span class="style19"><img src="mny.jpg" width="106" height="100" /></span></th>
        </tr>
        <tr>
          <th height="76" scope="row"><p class="style20">OR Call our office to get  Bank Account details</p>
            <p class="style20"> on your high street </p>
            <p class="style20">Reference Number : your customer id</p></th>
        </tr>
      </table></th>
    </tr>
    
    <tr>
      <th scope="row"> <p class="style19">&nbsp;</p>      </th>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
    </tr>
  </table>
</div>
</body>
</html>
