

<?php include "admin_p.php";
 include "conn.php";  include "time.php"; 
 if (isset($_POST['submit']) && !empty($_POST['message']) && !empty($_POST['topic'])) { 

$message=mysql_real_escape_string($_POST['message']);
$topic=$_POST['topic'];


	if( ($_FILES['ag1']['size'] > 0) ){
				$fileName_ag1 = $_FILES['ag1']['name'];
				$tmpName_ag1  = $_FILES['ag1']['tmp_name'];
				$fileSize_ag1 = $_FILES['ag1']['size'];
				$fileType_ag1 = $_FILES['ag1']['type'];
				
				$fp_ag1 = fopen($tmpName_ag1, 'r');
				$content_ag1 = fread($fp_ag1, filesize($tmpName_ag1));
				$content_ag1 = addslashes($content_ag1);
				fclose($fp_ag1);}



$email=$_SESSION['email_ad'];
$name=$_SESSION['sfname_ad'];
$type=$_SESSION['log_type'];
$topic=mysql_real_escape_string($_POST['topic']);


	
	
mysql_query("INSERT INTO blog (name,topic,message,email,type,datetime,time,img)VALUES('$name','$topic','$message','$email','$type','$dtime', '$time','$content_ag1')") or die(mysql_error());
		
																							 
															
echo"<script type='text/javascript'>
 
 {
 window.alert('Successful been Updated')
 window.location='admin_blog_post.php';

 }
</script>";
	

	}
	

	
	
	
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>itSimple | Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
<div class="header"></div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2 align="center">Administrator post</h2>
          <div class="clr"></div>
          <form action="#" method="post" id="leavereply">
            <div align="center">Heading </div>
            <div align="center">
              <textarea name="topic" cols="50" rows="3" class="text" id="topic"></textarea>
                </div>
            <label for="message">
              <div align="center">Your Message</div>
            </label>
            <div align="center">
              <textarea id="message" name="message" rows="8" cols="50"></textarea>
            </div>
            <ol>
              <td width="60" height="36" style="font-size: 12px; color: #000; font-weight: bold;">&nbsp;</td>
              <td width="4">&nbsp;</td>
              <td width="236"> <div align="center">
                <input type="file" name="ag1" id="ag1" />
                <input type="hidden" name="MAX_FILE_SIZE" value="350000000">
              </div></td>
              </li>
              <li>
                <div align="center"><br />
                  <input type="submit" name="submit" id="submit"  class="button" />
                </div>
                <div class="clr"></div>
              </li>
            </ol>
          
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer"></div>
</div>

<div align="center">
  <?php 
				  
			   echo  "<table border=1 style='background-color:#FFFFFF;' align='center' cellpadding='0' cellspacing='0' >
<caption><EM>blog Achives</EM></caption>
<tr >
<th>No</th>
<th>image</th>
<th>Date</th>
<th>Blogger</th>
<th>email</th>
<th>Topic</th>
<th>Message</th>
<th>Delete  </th>
</tr>";	  
				  
				  
				  
				  include "conn.php";
 $check = mysql_query("SELECT * FROM blog ") or die('Query failed: ' . mysql_error());$n=1;
while ($ts=mysql_fetch_array($check))

{ $message=$ts['message']; $name=$ts['name']; $email=$ts['email']; $dtime=$ts['datetime'];  $topic=$ts['topic'];$val=$ts['id'];$cv=$ts['id'];

echo "</td><td align='left'>";echo $n;
$n=$n+1;
echo "</td><td align='left'>";echo"<img src='sm.php?val=$val' width='60' height='60' align='center' border='0' />";
echo "</td><td align='left'>";echo $dtime;

echo "</td><td align='left'>";echo $name;
echo "</td><td align='left'>";echo $email;
echo "</td><td align='left' width='200'>";echo $topic;
echo "</td><td align='left' width='300'>";echo $message;
echo "</td><td align='left'>";echo "<a href='pro.php?val=$val'> <input name=ck[] type='checkbox' id=ck[] value='$val' />Del</a>";
echo "</td></tr>";

}
		  
			  echo " </table>";
			  ?>
			  
              
              
              
              <?php 
//$email= $_SESSION['email'];
if(isset($_POST['delete'])){
																		
	if(isset($_POST['ck'])){
	$del_id =$_POST['ck']; 
	

foreach($del_id as $value){
   $sql = "DELETE FROM blog WHERE id='".$value."'";
   $result = mysql_query($sql);
}			  
	

	
	echo "<script>alert(\"Successfully Deleted.\");</script>";
	mysql_close();
	
	}
	
}
	
	
	
?>
            </div>
              
            <div  align="center"><input type="submit" name="delete" value="Delete" class="button"/></div>
</form>
</body>
</html>