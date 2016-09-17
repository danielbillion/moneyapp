<?php  include "admin_p.php";?>

 <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />
<link href="pay.css" rel="stylesheet" type="text/css" />

<title>Status Modifcation for Agent</title>
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
.style15 {
	font-size: 15px;
	color: #330000;
}
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
      <table width="200" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <th scope="row"><table width="476" height="348" border="0" cellpadding="0" cellspacing="0">
            <tr bgcolor="#999999">
              <th height="19" colspan="4" bgcolor="#CCCCCC" scope="row">Agent Today's Rate Status </th>
            </tr>
            <tr>
              <th colspan="4" scope="row"><hr></th>
            </tr>
            <tr>
              <th colspan="4" scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th height="31" scope="row"><div align="center"></div></th>
              <td colspan="2" class="style10"><div align="center"><span style="font-size: 14px">(Agent:
                <?php if (isset($_GET['fname'])) { echo $_GET['fname']; } ?>
              )</span></div></td>
              <td class="style10">&nbsp;</td>
            </tr>
            <tr>
              <th width="107" height="31" scope="row">&nbsp;</th>
              <td width="137" class="style10"><label class="style7 style15">
                <div align="center" style="font-size: 14px">Today's Rate Status </div>
              </label></td>
              <td width="185" class="style10"><select name="tsk" id="tsk">
                <option selected>Normal</option>
                <option>Special Rate 1</option>
                <option>Special Rate 2</option>
                <option>Special Rate 3</option>
                <option>Special Rate 4</option>
                <option>Special Rate 5</option>
              </select></td>
              <td width="47" class="style10">&nbsp;</td>
            </tr>
            <tr>
              <th colspan="4" scope="row">&nbsp;</th>
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
              <th height="37" scope="row">&nbsp;</th>
              <th height="37" colspan="3" scope="row"><div align="right"><span class="style14"><a href="admin_page.php" class="style1 style3">Return to administration home page</a></span></div></th>
            </tr>
          </table></th>
        </tr>
      </table>
      </label>
      <?PHP

 if (isset($_POST['Confirm'])) { 
 
$ag_email= $_GET['ag_email'];
 
 $tsk=($_POST['tsk']);
 

if ($tsk=="Special Rate 1" ){

$status= "R1";}

else {	

if ($tsk=="Special Rate 2" ){

$status= "R2";}
		 	
if ($tsk=="Special Rate 3" ){

$status= "R3";}

if ($tsk=="Special Rate 4" ){

$status= "R4";}

if ($tsk=="Special Rate 5" ){

$status= "R5";}



if ($tsk=="Normal" ){

$status= "N";}}

$link = include "conn.php";
 include "conn.php";  
	


 mysql_query("UPDATE agent SET agrs = '$status' WHERE email = '$ag_email' ") or die( "<b>Error:</b> Something went wrong, could not edit link status.");

echo" <script type='text/javascript'>
 
 {
 window.alert('Your Agent status now been Successful Modiified')
window.location='admin_page.php';
 }
</script> ";	
	  }
?>
    </div>
	</form>
<div align="center"></div>
<p>&nbsp; </p>
</body>


</html>



