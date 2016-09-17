
<?php include "admin_p.php"; include "conn2.php";?>
<?php 


if (isset($_POST['submit'])){
	
	$from=($_POST['from']);
	$to=($_POST['to']);
	$value=($_POST['value']);
	$pa=($_POST['pa']);
	
	$fromVal=mysqli_real_escape_string($db,$_POST['from']);
	$toVal=mysqli_real_escape_string($db,$_POST['to']);
	$valueVal=mysqli_real_escape_string($db,$_POST['value']);
	$paVal=mysqli_real_escape_string($db,$_POST['pa']);
	
	date_default_timezone_set("Europe/London");
	$time=date('Y-m-d h:i:s');
	{
	
		if($fromVal==""   || $toVal=="" || $paVal==""|| $valueVal==""){
		$error="Please fill in your Range and Value";
	
		
				}
		else {
			
					if(isset($_GET['id'])){
						$id=trim($_GET['id']);
							$query="INSERT INTO `agent_cr`(`from`,`to`,`pa`,`value`,`date`,`status`) VALUES('$from','$to','$pa','$value', '$time','$id')";	
							//$query= "INSERT INTO `agent_cr`(`from`, `to`, `value`, `date`) VALUES('$from','$to','$value', '$time','$id')";
							mysqli_query($db,$query);
						}
					else{
							$query="INSERT INTO `agent_cr`(`from`,`to`,`pa`,`value`,`date`) VALUES('$from','$to','$pa','$value', '$time')";	
							//$query= "INSERT INTO `agent_cr`(`from`, `to`, `value`, `date`) VALUES('$from','$to','$value', '$time')";
							mysqli_query($db,$query);
					}
			
			}
			
	
	
}

}

?>







<?php 
	if(isset($_GET['id'])){
		$id=trim($_GET['id']);
		$query="SELECT * FROM agent_cr  WHERE status='$id' ORDER BY id DESC";
		}
		
		else{
		$query="SELECT * FROM agent_cr ORDER BY id DESC";	
		}
$querys=mysqli_query($db,$query);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<title> Range- Commission</title>
<link rel="shortcut icon" href="img_fvr.php" type="image/jpeg" />

<link rel="stylesheet" href="css/style.css" type="text/css"/> 

</head><body>

<div id="container">
<header> <h1> SET RANGE & COMMISSION--->COM=COMMISSION; AG/B%=AGENT / BUSINESS %</h1></header>
<div id="shout">
<ul>
<table><tr><h3>
<td><li class="shouts"><h4>FROM</h4></td>
<td><h4><span style="margin-left:3em">TO</h4></span></td>
<td><h4><h4><span style="margin-left:1.5em"> =</h4> </span></td>
<td><h4><span style="margin-left:1em">COM</h4></span></td>
<td><h4><span style="margin-left:1em">AG/B%</h4></span> </td>
<td><span style="margin-left:1.5em">--</span></li></td></td></h3>
  </tr>


<?php

$n1=0;
while($row=mysqli_fetch_assoc($querys)) : ?>

<tr>
<td><li class="shouts"><?php echo $row['from'];?></td>
<td><span style= "margin-left: 3em"><?php echo $row['to']; ?></span></td>
<td><span style= "margin-left: 1.5em"> = </span></td>
<td><span style="margin-left:1em"><?php echo $row['value']; ?></span></td>
<td><span style="margin-left:1em"><?php echo $row['pa']."/".(100-$row['pa']); ?></td></span> <td>
<td><span style="margin-left:1.5em"><?php $id=$row['id'];echo "<a href='admin_com_range.php?bchm=bchm &id=$id'>Delete </a>"; ?></span></li></td>
  </tr>

<?php endwhile ?>
<?php 
include "conn.php";

 				 if (isset($_GET['bchm'] )) {  
							$id=$_GET['id'];
							date_default_timezone_set("Europe/London");
							$time=date('Y-m-d h:i:s');
		
							$id2=""; $name="";
								
								$id=$_GET['id'];
										 
							 mysql_query("DELETE  FROM agent_cr WHERE id='$id'")or die(mysql_error());
							 echo" <script type='text/javascript'>
							 
							 {
						
							window.location='admin_com_range.php';
							 }
							</script> ";
										
							 
							 
							 } 



?>
</table>
</ul>
</div>
<div id="input">


<div class="error"> <?php   if(isset($error)){ echo $error;} if(isset($_GET['error'])){echo $_GET['error'];}?> </div>



<form method="post" action="" >

<span style= margin-left:3em;>
<input type="text" name="from" placeholder=" `FROM" /></span><span class="tab">
<input type="text" name="to" placeholder="TO" /></span><br/>
<span style="margin-left:3em"><input type="text" name="value" placeholder="COMMISSION VALUE" /></span>
<span style="margin-left:5em"><input type="text" name="pa" placeholder="AGENT COMMISSION IN %" maxlength="2" /><span style="color:white">%</span><br/>
<input class="shout-btn"  type="submit" name="submit" value="ENTER" />


</form>
</div>
</div>
</body>
</html>
