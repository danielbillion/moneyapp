
<?php session_start(); ?>

<html >
<head>
	<title><?php  include "info.php"; echo $name1;?>  Sign up</title> 
	<link href="acti.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<!-- start header div -->
	<div id="header">
		<h3><?php include "info.php"; echo $name1;  ?> > Password Rest<strong></strong></h3>
	
	
</div>
	<!-- end header div -->	

	<!-- start wrap div -->
	<div id="wrap"><a href="agent_change_password_reset.php?email_f=<?php  echo $_GET['email_f']; ?>&id=<?php  echo $_GET['id']; ?>">CLICK HERE TO RESET TO A NEW PASSWORD For <?php  echo $_GET['email_f'];  ?></a></div>
	<!-- end wrap div -->
</body>
</html>
<?php 

$_SESSION['email']=$_GET['email_f'];

?>