<?php include "admin_p.php";?>

<?php 

  
$email= $_SESSION['email'];

//echo $email;

// $c_name = ($_GET['c_name']); // Set email variable
$email= ($_SESSION['email']);
$c_email = trim($_GET['ag_email']); // Set email variable
$custId = trim($_GET['id']); // Set email variable
 
 include "conn.php"; 
 
   $check = mysql_query("SELECT * FROM new_customer") or die('Query failed: ' . mysql_error());
 $check0 = mysql_query("SELECT * FROM new_customer WHERE email ='".$c_email."'")or die(mysql_error());

$table_array = mysql_fetch_array($check);



  if(isset($table_array) && $table_array[0] != "") {
  //echo $email;
while($row=mysql_fetch_array($check0)){

$fname=$row['fname'];
$lname=$row['lname'];
$mname=$row['mname'];
$address=$row['address'];
$email=$row['email'];
$pnumber=$row['pnumber'];
$mnumber=$row['mnumber'];
$postcode=$row['postcode'];
//
$dob=$row['dob'];
 }}

 
 
 if(isset($_POST['submit'])){



$n_email = trim($_POST['n_email']);
$n_pnumber = ($_POST['n_pnumber']);
$n_mnumber = ($_POST['n_mnumber']);
$fname2 = ($_POST['fname']);
$lname2 = ($_POST['lname']);
$mname2 = ($_POST['mname']);
$dob = ($_POST['dob']);

$add = ($_POST['add']);
$postcode = ($_POST['postcode']);	
	{
	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",
	$n_email)){echo "<script>alert(\"Invalid email entry\");</script>";}
	
	else{
	
	if( ($_FILES['proofid']['size'] > 0) | ($_FILES['proofad']['size'] > 0) ){
				$fileName_pad = $_FILES['proofad']['name'];
				$tmpName_pad  = $_FILES['proofad']['tmp_name'];
				$fileSize_pad = $_FILES['proofad']['size'];
				$fileType_pad = $_FILES['proofad']['type'];
				
				$fp_pad = fopen($tmpName_pad, 'r');
				$content_pad = fread($fp_pad, filesize($tmpName_pad));
				$content_pad = addslashes($content_pad);
				fclose($fp_pad);// for proof of ad
				
				
				$fileName_pid = $_FILES['proofid']['name'];
				$tmpName_pid  = $_FILES['proofid']['tmp_name'];
				$fileSize_pid = $_FILES['proofid']['size'];
				$fileType_pid = $_FILES['proofid']['type'];
				
				$fp_pid      = fopen($tmpName_pid, 'r');
				$content_pid = fread($fp_pid, filesize($tmpName_pid));
				$content_pid = addslashes($content_pid);
				fclose($fp_pid);//for proof of add
				
				if(!get_magic_quotes_gpc())
				{
				   $fileName_pid = addslashes($fileName_pid);
					//$fileName_pad = addslashes($fileName_pad);			
				}												
																		
					mysql_query("UPDATE new_customer SET 
	proofid_name= '$fileName_pid', proofid_size='$fileSize_pid', proofid_type='$fileType_pid', proofid_content='$content_pid',
	proofad_name= '$fileName_pad', proofad_size='$fileSize_pad', proofad_type='$fileType_pad', proofad_content='$content_pad'
	
	 WHERE  id='$custId' ");													
																		}
	
	
	
	
	
	mysql_query("UPDATE new_customer SET pnumber = '$n_pnumber', mnumber = '$n_mnumber', fname = '$fname2', lname = '$lname2', mname = '$mname2', dob = '$dob',address = '$add',postcode = '$postcode', email='$n_email' 
	
	
	 WHERE id='$custId' ");
	 
	 
	 
	 //mysql_query("UPDATE cust_transaction SET  sender_email='$n_email' WHERE sender_email = '$c_email' ");
	 // mysql_query("UPDATE receiver SET  sender_email='$n_email' WHERE sender_email = '$c_email' ");
	 // mysql_query("UPDATE last_login SET  email='$n_email' WHERE email = '$c_email' ");
	

	echo "<script>alert(\"Thank you,your new email and Contact no has been updated.\");</script>";}
	mysql_close();
	
	}
	
	
	
	}
	
?>
 	


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style type="text/css">
<!--
body {
	background-color: #cccccc;
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
	color: #F00;
}
.style18 {color: #3333FF}
.style23 {font-size: 12px; color: #330000; }
.style24 {color: #330000}
.style20 {	font-size: 9px;
	font-style: italic;
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <table width="200" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="558" height="407" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
          <tr bgcolor="#FFFFFF">
            <th height="50" colspan="5" scope="row"><div align="right"><span class="style18">Basic Account Modification </span></div></th>
            <th height="50" style="font-size: 10px; font-style: italic; font-weight: bold;" scope="row"><a href="admin_page.php" style="color: #F00">Admin page</a></th>
          </tr>
          <tr>
            <th scope="row"><span class="style23">First Name</span></th>
            <th scope="row"><input type="text" name="fname"  value="<?php if (isset($fname)) { echo strtoupper($fname);} ?>" "/></th>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
            <th scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th width="138" scope="row"><span class="style23">Mid Name</span></th>
            <th width="210" scope="row"><input type="text" name="mname" value="<?php if (isset($mname)) { echo strtoupper($mname);} ?>" "/></th>
            <th scope="row">&nbsp;</th>
            <th width="210" scope="row">&nbsp;</th>
            <th width="210" scope="row"><span class="style23">Last Name</span></th>
            <th width="420" scope="row"><input type="text" name="lname" value="<?php if (isset($lname)) { echo strtoupper($lname);} ?>" "/></th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row"><span class="style23">Address</span></th>
            <th colspan="5" scope="row"><label>
              <input type="textarea" name="add"  size="50" value="<?php if (isset($address)) { echo strtoupper($address);} ?>" />
            </label></th>
          </tr>
          <tr>
            <th scope="row"><span class="style24"></span></th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row"><span class="style23">Street Name</span></th>
            <th scope="row"><label><span class="style20">
              <input name="textfield7" type="text" value="<?php  ?>" readonly="readonly" />
            </span></label></th>
            <th scope="row">&nbsp;</th>
            <th colspan="2" scope="row"><span class="style23">Town</span></th>
            <th scope="row"><input type="text" name="textfield8" readonly="readonly" /></th>
          </tr>
          <tr>
            <th scope="row"><span class="style24"></span></th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row"><span class="style23">Country</span></th>
            <th scope="row"><label>
              <input type="text" name="textfield10" readonly="readonly"/>
            </label></th>
            <th scope="row">&nbsp;</th>
            <th colspan="2" scope="row"><span class="style23">Postcode/Zip code </span></th>
            <th scope="row"><input type="text" name="postcode" value="<?php if (isset($postcode)) { echo strtoupper($postcode);} ?>" "/></th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="5" scope="row"><label></label></th>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row"><span class="style23">Contact No</span></th>
            <th scope="row"><label>
              <input type="text" name="n_pnumber"  maxlength="11"  value="<?php if (isset($pnumber)) { echo strtoupper($pnumber);} ?>"/>
            </label></th>
            <th scope="row">&nbsp;</th>
            <th colspan="2" scope="row"><span class="style23">Mobile Number </span></th>
            <th scope="row"><input type="text" name="n_mnumber"  maxlength="11"  value="<?php if (isset($mnumber)) { echo strtoupper($mnumber);} ?>"/></th>
          </tr>
          <tr>
            <th scope="row"><span class="style24"></span></th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row"><span class="style24"><span class="style23">Email Addres</span></span></th>
            <th scope="row"><input type="text" name="n_email" value="<?php if (isset($email)) { echo ($email);} ?>" size="0" readonly /></th>
            <th scope="row">&nbsp;</th>
            <th colspan="2" scope="row"><span class="style23">Date of Birth</span></th>
            <th scope="row"><input type="text" name="dob" value="<?php if (isset($dob)) { echo strtoupper($dob);} ?>"/></th>
          </tr>
          <tr>
            <th scope="row"><span class="style24"></span></th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row"><span class="style23">Proof of Identification </span></th>
            <th colspan="5" scope="row"><label>
              <input type="file" name="proofid" />
              <input type="hidden" name="MAX_FILE_SIZE" value="350000000" />
            </label></th>
          </tr>
          <tr>
            <th scope="row"><span class="style24"></span></th>
            <th colspan="5" scope="row">&nbsp;</th>
          </tr>
          <tr>
            <th scope="row"><span class="style23">Proof of Address </span></th>
            <th colspan="5" scope="row"><label>
              <input type="file" name="proofad" />
              <input type="hidden" name="hiddenField" name="MAX_FILE_SIZE" value="350000000" />
            </label></th>
          </tr>
          <tr>
            <th height="62" colspan="6" scope="row"><label>
              <div align="center">
                <input name="submit" type="submit" id="submit" value="Modify" />
              </div>
              </label></th>
          </tr>
        </table></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>
