
<!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlphaCMS</title>
    <!-- Bootstrap core CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href=" <?php echo BASE_URI; ?>templates/css/bootstrap.css" rel="stylesheet">
	 <link href=" <?php echo BASE_URI; ?>templates/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URI; ?>templates/css/style.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
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
    <div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">AlphaCMS</a>
  </div>
  
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Dashboard</a></li>
      <li class="dropdown">
	  <?php if(getUser()['type']=='agent'): ?>
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Senders <b class="caret"></b></a>
					<ul class="dropdown-menu">
					<li><a href="sendersReceivers.php">Sender</a></li>
				  <li><a href="newSender.php">New Senders</a></li>
				</ul>
			`</li>
	<?php endif; ?>
	
	 <?php if(getUser()['type']=='customer'): ?>
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Receivers <b class="caret"></b></a>
					<ul class="dropdown-menu">
				  <li><a href="sendersReceivers.php">Receivers</a></li>
				  <li><a href="cReceiver.php">New Receivers</a></li>
				</ul>
			`</li>
	<?php endif; ?>
	
      <li><a href="sendMoney.php">Send Money</a></li>
	    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transactions <b class="caret"></b></a>
	        <ul class="dropdown-menu">
          <li><a href="prevTrans.php">Previous Transaction</a></li>
		  <li><a href="search.php">Search</a></li>
		  <li><a href="commission.php">Commission</a></li>
		   <li><a href="#">Cancelled Transactions</a></li>
		    <li><a href="#">Turnover</a></li>
        </ul>
	`</li>
    </ul>
	
    <form class="navbar-form navbar-left">
      <input type="text" class="form-control col-lg-8 search-form" placeholder="Search">
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
        <ul class="dropdown-menu">
          
		  <li><a href="mPassword.php">Modify Password</a></li>
		  <li><a href="aModify.php">Modify Profile</a></li>
        </ul>
      </li>
	   <li><a href="#">Help</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</div>
<section><?php echo displayMessage(); ?></section>
    <section>
      <div class="container">
        <div class="row">
		
          <div class="col-md-3">
	<?php if(isLoggedIn()) : ?>	  
		  <div class="panel panel-<?php if(getUser()['type']=='agent'){ echo "success";} else { echo "yellow";}?>">
			  <div class="panel-heading">

				<p class="text-center text-uppercase "><strong>Account:<?php echo getUser()['type']; ?></strong></p>
			  </div>
			<div class="panel-body">
					<div class="pull-left image">
					  <img src="<?php echo BASE_URI; ?>img/<?php echo getUser()['type']; ?>/photo/<?php echo getUser()['photo']; ?>" width="50" height="50" alt="..." class="img-thumbnail">
					</div>
					<section id="user" ">
					  <p class="text-Capitalize text-center"> Welcome  <?php echo getUser()['fname']; ?>!</p>
					</section>
					</br>
					<section id="quickinfo" class="well well-lg>
			<span class="<?php if(getUser()['type']=='customer'){ echo "text-center";} else {echo "pull-left";} ?>">&#163;1= &#8358 
			<?php echo todaysrate(); ?></span>
			<?php if(getUser()['type']=='agent'): ?><span class="pull-right"> <?php if(binfo()['ecredit']==0){
			echo "BAL: £".number_format((agentBal()),2);} 
			
			else{
				
				echo "Credit: £".number_format((getUser()['credit']),2);
			}
			
			?> 
			
			</span>
			<?php  endif;?>
					</section>
			</div>
		   
		<?php endif; ?>
		  </div>
            <div class="list-group">
              <a href="index.php" class="list-group-item active">
                <i class="glyphicon glyphicon-home"></i> Dashboard
              </a>
              <a href="sendMoney.php" class="list-group-item"><i class="glyphicon glyphicon-send"></i> Send Money </a>
              <a href="prevTrans.php" class="list-group-item"><i class="glyphicon glyphicon-record"></i> Previous Transaction</a>
              <a href="search.php" class="list-group-item"><i class="glyphicon glyphicon-search"></i> Search</a>
			  
			   <?php if(getUser()['type']=='customer'): ?>
			  <a href="sendersReceivers.php" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Receivers</a>
			  <?php endif; ?>
			  <?php if(getUser()['type']=='agent'): ?>
			  <a href="sendersReceivers.php" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Senders</a>
			  <?php endif; ?>
			  <?php if(getUser()['type']=='agent'): ?>
			  <a href="commission.php" class="list-group-item"><i class="glyphicon glyphicon-gbp"></i> My Commission</a>
			  <?php endif; ?>
			 <?php if(getUser()['type']=='agent'): ?>
			  <a href="newSender.php" class="list-group-item"><i class="glyphicon glyphicon-plus"></i> New Sender</a>
			  <?php endif; ?>
			  <?php if(getUser()['type']=='customer'): ?>
			  <a href="cReceiver.php" class="list-group-item"><i class="glyphicon glyphicon-plus"></i> New Receiver</a>
			  <?php endif; ?>
            </div>
          </div>