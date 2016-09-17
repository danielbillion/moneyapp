<?php systemCheck(); ?>
<!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo binfo()['name1']; ?></title>
    <!-- Bootstrap core CSS -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="js/bootstrap.js"></script>
    
	<link href=" <?php echo BASE_URI; ?>templates/css/bootstrap.css" rel="stylesheet">
	 <link href=" <?php echo BASE_URI2; ?>img/fvr.png" rel="shortcut icon" type="images/jpeg">
    <!-- Custom styles for this template -->
	 <link href="<?php echo BASE_URI; ?>templates/css/style.css" rel="stylesheet">
    <link href="<?php echo BASE_URI; ?>admin/templates/css/style.css" rel="stylesheet">
	<link href="<?php echo BASE_URI; ?>templates/css/receipt.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans|Lato|Merriweather|Nunito|Open+Sans|Source+Sans+Pro|Ubuntu" rel="stylesheet">
	<link href="<?php echo BASE_URI; ?>templates/css/jquery-ui.min.css" rel="stylesheet">
	<script type="text/javascript" src ="js/jquery-ui.min.js" > </script>
	
	<link href="<?php echo BASE_URI; ?>templates/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASE_URI; ?>templates/css/datepicker.css">
	<script src="<?php echo BASE_URI; ?>templates/js/jquery-1.9.1.min.js"></script>
	 <script src="<?php echo BASE_URI; ?>templates/js/bootstrap-datepicker.js"></script>
	 <script type="text/javascript" src="SPL_AJAX_Full.js"></script>
	 <script type="text/javascript" src="js/script.js"></script>
	 
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  </head>

  <body>
  
   <body>
		
			<div class="navbar navbar-default navbar-fixed-top">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
						<div id="logo_head">
						<img src="<?php echo BASE_URI;  ?>	img_logo.php" width="40px" height="40px">
						<a class="navbar-brand" href="#"><?php echo binfo()['name1']; ?></a>
		</div>
				  </div>
		  
		  
				  <div class="navbar-collapse collapse navbar-responsive-collapse">
					<ul class="nav navbar-nav">
					  <li><a href="index.php">Home</a></li>
					  
						<li class="dropdown">
							<?php if((getUser()['level']=='1')|| (getUser()['level']=='2') || (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Customers <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Menu</a></li>
										<li><a href="newSender.php">Transactions</a></li>
										<li><a href="newSender.php">Recycle</a></li>
									</ul>
							`</li>
					<?php endif; ?>
					
					<li class="dropdown">
							<?php if((getUser()['level']=='2')|| (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Staff <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="members">Agent Menu</a></li>
										<li><a href="newSender.php">Transactions</a></li>
										<li><a href="newSender.php">Managers</a></li>
										<li><a href="newSender.php">Recycle</a></li>
									</ul>
						</li>
							<?php endif; ?>
					
					  
						<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Transactions <b class="caret"></b></a>
							<ul class="dropdown-menu">
						
						<?php if((getUser()['level']=='1')||(getUser()['level']=='2')|| (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
							<li><a href="prevTrans.php">Previous Transaction</a></li>
						<?php endif; ?>
						
						<?php if((getUser()['level']=='2')|| (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
							<li><a href="prevTrans.php">Previous Transaction</a></li>
						<?php endif; ?>
						
						  <li><a href="search.php">Search</a></li>
						  <li><a href="commission.php">Commission</a></li>
						   <li><a href="cancelTrans.php">Cancelled Transactions</a></li>
							<li><a href="turnOver.php">Turnover</a></li>
						</ul>
					`</li>
					</ul>
					
					<form class="navbar-form navbar-left">
					  <input type="text" class="form-control col-lg-8 search-form" placeholder="Search">
					</form>
					
					<ul class="nav navbar-nav navbar-right">
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">General <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  
						  <li><a href="rate.php">Todays Rate</a></li>
						  <li><a href="setCommission.php">Set Commission</a></li>
						  <li><a href="verifiedUser.php">View Uploaded Id</a></li>
						  <li><a href="transBank.php">Bank Setup-Transaction</a></li>
						   <li><a href="bsetup.php">Business Setup</a></li>
						  <li><a href="aModify.php">Modify Password</a></li>
						  <li><a href="aModify.php">Business Setup</a></li>
						  <li><a href="aModify.php">Task Info</a></li>
						</ul>
					  </li>
					  
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Bal <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  
						  <li><a href="mPassword.php">Balance Remittance</a></li>
						  
						</ul>
					  </li>
					  
					  
					  
					  
					   <li><a href="#">Help</a></li>
					  <li><a href="logout.php">Logout</a></li>
					</ul>
				  </div>
				
			</div>	  
		
 <!-------------------------------------------------------navbar ends here---------------------------------------------------------> 

    <section id="main">
	<section><?php echo displayMessage(); ?></section>
      <div class="container">
        <div class="row">
		
<!------col-md-3----->
		 <div class="col-md-3">
				<?php if(isLoggedIn()) : ?>	  
				  <div class="panel panel 
				  <?php if(getUser()['level']=='1'){ echo "bak1";} 
						if(getUser()['level']=='2'){ echo "bak2";}
						if(getUser()['level']=='3'){ echo "bak3";}
						if(getUser()['level']=='4'){ echo "bak4";}
				  
				  ?>">
					  <div class="pheading">

						<p class="text-center text-uppercase "><strong>Account:<?php echo getUser()['type']; ?></strong></p>
					  </div>
					<div class="panel-body">
							<div class="pull-left image">
							  <img src="<?php echo BASE_URI; ?>img/<?php echo getUser()['type']; ?>/photo/<?php echo getUser()['photo']; ?>" width="50" height="50" alt="..." class="img-thumbnail">
							</div>
							<div  class="user" ">
							  <h3> Welcome  <?php echo getUser()['fname']; ?>!</h3>
							</div >
							</br>
							
							<div class="well well-md">
								<h4 class="text-center"> &pound; 1= &#8358 <?php echo todaysrate(); ?></h4>
				
							</div>
					</div>
				   
				<?php endif; ?>
				  </div>
					<div class="list-group">
					  <a href="index.php" class="list-group-item active"  >
						<span style="color:white;"><i class="glyphicon glyphicon-home"></i> Home</span>
					  </a>
					<div class="list-item">
						<a href="rate.php" class="list-group-item"><i class="glyphicon glyphicon-send"></i> Modify Rate </a>
						<a href="setCommission.php" class="list-group-item"><i class="glyphicon glyphicon-record"></i> Modify Commission</a>
						<a href="turnOver.php" class="list-group-item"><i class="glyphicon glyphicon-search"></i> View Turn Over</a>
						<a href="verifiedUser.php" class="list-group-item"><i class="glyphicon glyphicon-search"></i> View Uploaded Id</a>
						<a href="transBank.php" class="list-group-item"><i class="glyphicon glyphicon-search"></i> Bank Setup-Transaction</a>
						<a href="bsetup.php" class="list-group-item"><i class="glyphicon glyphicon-search"></i> Busines Setup</a>						
						
					 					  
					  
					   <?php if((getUser()['level']=='2')|| (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
						<a href="members.php" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Agent</a>
					  <?php endif; ?>
					  
					   <?php if((getUser()['level']=='1')|| (getUser()['level']=='2') || (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
						<a href="sendersReceivers.php" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Customers</a>
					  <?php endif; ?>
					  
					  <a href="search.php" class="list-group-item"><i class="glyphicon glyphicon-search"></i> Modify Our Office Bank  </a>
					  
					   <?php if( (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
						<a href="sendersReceivers.php" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Outstanding Balance</a>
					  <?php endif; ?>
					  
					  
					   <?php if( (getUser()['level']=='4') ): ?>
						<a href="sendersReceivers.php" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Nigeria To UK App</a>
					  <?php endif; ?>
					</div>  
				  </div>
			</div>
<!----New Layout Starts here---col-md-9------------------------------------------------------------------>		
			