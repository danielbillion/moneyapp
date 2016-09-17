
<?php include "admin_p.php"; ?>
<?php 
//$email= $_SESSION['email'];

 include "conn.php"; 
  $check = mysql_query("SELECT * FROM agent") or die('Query failed: ' . mysql_error());


if(isset($_POST['submit'])){
	{
	

	if( ($_FILES['ag1']['size'] > 0) ){
				$fileName_ag1 = $_FILES['ag1']['name'];
				$tmpName_ag1  = $_FILES['ag1']['tmp_name'];
				$fileSize_ag1 = $_FILES['ag1']['size'];
				$fileType_ag1 = $_FILES['ag1']['type'];
				
				$fp_ag1 = fopen($tmpName_ag1, 'r');
				$content_ag1 = fread($fp_ag1, filesize($tmpName_ag1));
				$content_ag1 = addslashes($content_ag1);
				fclose($fp_ag1);// for proof of ad
	 mysql_query("UPDATE busyimg SET ag_img1='$content_ag1'");
													}
																		
	
	if( ($_FILES['ag2']['size'] > 0) ){
				$fileName_ag2 = $_FILES['ag2']['name'];
				$tmpName_ag2  = $_FILES['ag2']['tmp_name'];
				$fileSize_ag2 = $_FILES['ag2']['size'];
				$fileType_ag2 = $_FILES['ag2']['type'];
				
				$fp_ag2 = fopen($tmpName_ag2, 'r');
				$content_ag2 = fread($fp_ag2, filesize($tmpName_ag2));
				$content_ag2 = addslashes($content_ag2);
				fclose($fp_ag2);// for proof of ad
	 mysql_query("UPDATE busyimg SET ag_img2='$content_ag2'");
													}
													
															

	if( ($_FILES['ag3']['size'] > 0) ){
				$fileName_ag3 = $_FILES['ag3']['name'];
				$tmpName_ag3  = $_FILES['ag3']['tmp_name'];
				$fileSize_ag3 = $_FILES['ag3']['size'];
				$fileType_ag3 = $_FILES['ag3']['type'];
				
				$fp_ag3 = fopen($tmpName_ag3, 'r');
				$content_ag3 = fread($fp_ag3, filesize($tmpName_ag3));
				$content_ag3 = addslashes($content_ag3);
				fclose($fp_ag3);// for proof of ad
	 mysql_query("UPDATE busyimg SET ag_img3='$content_ag3'");
													}




if( ($_FILES['cust1']['size'] > 0) ){
				$fileName_cust1 = $_FILES['cust1']['name'];
				$tmpName_cust1  = $_FILES['cust1']['tmp_name'];
				$fileSize_cust1 = $_FILES['cust1']['size'];
				$fileType_cust1 = $_FILES['cust1']['type'];
				
				$fp_cust1 = fopen($tmpName_cust1, 'r');
				$content_cust1 = fread($fp_cust1, filesize($tmpName_cust1));
				$content_cust1 = addslashes($content_cust1);
				fclose($fp_cust1);// for proof of ad
	 mysql_query("UPDATE busyimg SET cust_img1='$content_cust1'");
													}
																		
	
	if( ($_FILES['cust2']['size'] > 0) ){
				$fileName_cust2 = $_FILES['cust2']['name'];
				$tmpName_cust2  = $_FILES['cust2']['tmp_name'];
				$fileSize_cust2 = $_FILES['cust2']['size'];
				$fileType_cust2 = $_FILES['cust2']['type'];
				
				$fp_cust2 = fopen($tmpName_cust2, 'r');
				$content_cust2 = fread($fp_cust2, filesize($tmpName_cust2));
				$content_cust2 = addslashes($content_cust2);
				fclose($fp_cust2);// for proof of ad
	 mysql_query("UPDATE busyimg SET cust_img2='$content_cust2'");
													}
													
															

	if( ($_FILES['cust3']['size'] > 0) ){
				$fileName_cust3 = $_FILES['cust3']['name'];
				$tmpName_cust3  = $_FILES['cust3']['tmp_name'];
				$fileSize_cust3 = $_FILES['cust3']['size'];
				$fileType_cust3 = $_FILES['cust3']['type'];
				
				$fp_cust3 = fopen($tmpName_cust3, 'r');
				$content_cust3 = fread($fp_cust3, filesize($tmpName_cust3));
				$content_cust3 = addslashes($content_cust3);
				fclose($fp_cust3);// for proof of ad
	 mysql_query("UPDATE busyimg SET cust_img3='$content_cust3'");
													}



	if( ($_FILES['adm1']['size'] > 0) ){
				$fileName_adm1 = $_FILES['adm1']['name'];
				$tmpName_adm1  = $_FILES['adm1']['tmp_name'];
				$fileSize_adm1 = $_FILES['adm1']['size'];
				$fileType_adm1 = $_FILES['adm1']['type'];
				
				$fp_adm1 = fopen($tmpName_adm1, 'r');
				$content_adm1 = fread($fp_adm1, filesize($tmpName_adm1));
				$content_adm1 = addslashes($content_adm1);
				fclose($fp_adm1);// for proof of ad
	 mysql_query("UPDATE busyimg SET logo='$content_adm1'");
													}
													
													
													
							if( ($_FILES['adm2']['size'] > 0) ){
				$fileName_adm2 = $_FILES['adm2']['name'];
				$tmpName_adm2  = $_FILES['adm2']['tmp_name'];
				$fileSize_adm2 = $_FILES['adm2']['size'];
				$fileType_adm2 = $_FILES['adm2']['type'];
				
				$fp_adm2 = fopen($tmpName_adm2, 'r');
				$content_adm2 = fread($fp_adm2, filesize($tmpName_adm2));
				$content_adm2 = addslashes($content_adm2);
				fclose($fp_adm2);// for proof of ad
	 mysql_query("UPDATE busyimg SET fvr='$content_adm2'");
													}
													
					if( ($_FILES['adm3']['size'] > 0) ){
				$fileName_adm3 = $_FILES['adm3']['name'];
				$tmpName_adm3  = $_FILES['adm3']['tmp_name'];
				$fileSize_adm3 = $_FILES['adm3']['size'];
				$fileType_adm3 = $_FILES['adm3']['type'];
				
				$fp_adm3 = fopen($tmpName_adm3, 'r');
				$content_adm3 = fread($fp_adm3, filesize($tmpName_adm3));
				$content_adm3 = addslashes($content_adm3);
				fclose($fp_adm3);// for proof of ad
	 mysql_query("UPDATE busyimg SET admin_img1='$content_adm3'");
													}

	
	echo "<script>alert(\"Thank you,your new email and Contact no has been updated.\");</script>";}
	mysql_close();
	
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
	color: #F0F0F0;
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
<table width="909" height="442" border="0" align="center" cellpadding="0" cellspacing="0" ">
  <tr>
    <th width="909" height="395" scope="row"><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <p>&nbsp;</p>
      <table width="900" height="138" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr bgcolor="#FFFFFF">
          <th height="19" colspan="5" scope="row"><span class="style18">Image Setup</span></th>
        </tr>

        <tr>
          <th height="19" scope="row">&nbsp;</th>
          <th colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th height="19" scope="row">&nbsp;</th>
          <th colspan="4" scope="row"><table width="811" border="0" cellspacing="0" cellpadding="0">
            <tr bgcolor="#FFFFFF">
              <td width="65">Agent</td>
              <td width="4">&nbsp;</td>
              <td width="239"><div align="center"><img src="img_ag1.php" width="62 height="62" /></div></td>
              <td width="239"><div align="center"><img src="img_ag2.php" width="62" height="62" /></div></td>
              <td width="264"><div align="center"><img src="img_ag3	.php" width="62" height="62" /></div></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><div align="center">ag-image 1</div></td>
              <td><div align="center">ag-image 2</div></td>
              <td><div align="center">ag-image 3</div></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td style="font-size: 12px; color: #000; font-weight: bold;">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="36" style="font-size: 12px; color: #000; font-weight: bold;">&nbsp;</td>
              <td>&nbsp;</td>
              <td> <input type="file" name="ag1" id="ag1" /><input type="hidden" name="MAX_FILE_SIZE" value="350000000"></td>
              <td> <input type="file" name="ag2" id="ag2" /><input type="hidden" name="MAX_FILE_SIZE2" value="350000000"></td>
              <td> <input type="file" name="ag3" id="ag3" /><input type="hidden" name="MAX_FILE_SIZE3" value="350000000"></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="3"><hr /></td>
              </tr>
            <tr bgcolor="#FFFFFF">
              <td>Customer</td>
              <td>&nbsp;</td>
              <td><div align="center"><img src="img_cust1.php" width="62" height="62" /></div></td>
              <td><div align="center"><img src="img_cust2.php" width="62" height="62" /></div></td>
              <td><div align="center"><img src="img_cust3.php" width="62" height="62" /></div></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><div align="center">cust-image 1</div></td>
              <td><div align="center">cust-image 2</div></td>
              <td><div align="center">cus3-image 1</div></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="36" style="font-size: 12px; color: #000; font-weight: bold;">&nbsp;</td>
              <td>&nbsp;</td>
              <td><input type="file" name="cust1" id="cust1" />
                <input type="hidden" name="MAX_FILE_SIZE4" value="350000000" /></td>
              <td><input type="file" name="cust2" id="cust2" />
                <input type="hidden" name="MAX_FILE_SIZE4" value="350000000" /></td>
              <td><input type="file" name="cust3" id="cust3" />
                <input type="hidden" name="MAX_FILE_SIZE4" value="350000000" /></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="3"><hr /></td>
              </tr>
            <tr bgcolor="#FFFFFF">
              <td>Admin</td>
              <td>&nbsp;</td>
              <td><div align="center"><img src="img_logo.php" width="62" height="62" /></div></td>
              <td><div align="center"><img src="img_fvr.php" width="16" height="16" /></div></td>
              <td><div align="center"><img src="img_adm1.php" width="62" height="62" /></div></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><div align="center">admin-image 1</div></td>
              <td><div align="center">favi icon- web</div></td>
              <td><div align="center">ad-image 3</div></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td height="36" style="font-size: 12px; color: #000; font-weight: bold;">&nbsp;</td>
              <td>&nbsp;</td>
              <td><input type="file" name="adm1" id="adm1" />
                <input type="hidden" name="MAX_FILE_SIZE4" value="350000000" /></td>
              <td><input type="file" name="adm2" id="adm2" />
                <input type="hidden" name="MAX_FILE_SIZE4" value="350000000" /></td>
              <td><input type="file" name="adm3" id="adm3" />
                <input type="hidden" name="MAX_FILE_SIZE4" value="350000000" /></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="5">&nbsp;</td>
            </tr>
          </table></th>
        </tr>
        <tr>
          <th width="74" height="19" scope="row"><span class="style24"></span></th>
          <th width="826" colspan="4" scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th height="62" colspan="5" scope="row"><label>
            <div align="center">
              <input name="submit" type="submit" id="submit" value="Modify" />
              </div>
            </label></th>
        </tr>
      </table>
        </form>
    </th>
  </tr>
</table>
</body>
</html>
