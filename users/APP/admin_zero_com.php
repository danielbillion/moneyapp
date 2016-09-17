 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<title>Modify Commission</title>
<style type='text/css'>
<!--
.style7 {color: #0000FF}
.style10 {font-size: 10px; color: #000000; }
.style12 {font-size: 12px; }
.style13 {font-size: 12px; color: #000000; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style14 {font-size: 10px}
.style16 {color: #000033}
-->
</style>
</head>

<body>
<p align='left'></p>
	<form id='form1' name='form1' method='post' action=''>
	
  
  <label>
  
    <label></label>
    <div align="center">
      <label></label>
      <table width="200" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <th scope="row"><table width="476" height="184" border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#999999">
              <th height="19" colspan="4" bgcolor="#CCCCCC" scope="row"><span class="style16">MODIFY AGENT COMMISSION </span></th>
            </tr>
            <tr>
              <th colspan="4" scope="row"><hr></th>
            </tr>
            <tr>
              <th height="23" colspan="3" scope="row">New Commission </th>
              <th width="298" scope="row"><label>
                <div align="left">
                  <input name="com" type="text" id="com">
                  </div>
              </label></th>
            </tr>


            
            <tr>
              <th height="37" colspan="4" scope="row"><label>
                <input name="Confirm" type="submit" id="Confirm" value="Confirm">
              </label></th>
            </tr>
            <tr>
              <th height="37" colspan="4" scope="row"><div align="center"> </div>
                  <div align="center"></div></th>
            </tr>
            <tr>
              <th width="170" height="37" scope="row">&nbsp;</th>
              <th height="37" colspan="3" scope="row"><div align="right"><span class="style14"><a href="admin_page.php" class="style1 style3">Return to administration home page</a></span></div></th>
            </tr>
          </table></th>
        </tr>
      </table>
      </label>
      <?PHP

 if (isset($_POST['Confirm'])) { 
 
$receipt= $_GET['receiptno'];
$ag_email= $_GET['ag_email'];
 
 $com=mysql_escape_string($_POST['com']);
 

$link = include "conn.php";
 include "conn.php";  
	


 mysql_query("UPDATE agent_cust_transaction SET com_a = '$com' WHERE receiptno = '$receipt' && agent_email='$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");

	 echo "<script>alert(\"Commission Value for Agent changed\");</script>";	  
	
	  }
?>
    </div>
	</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



