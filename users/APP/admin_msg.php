
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Message / Email</title>

   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="custom.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/ckeditor/ckeditor.js"></script>


<?php  //include "admin_p.php";include
include "info.php";include "conn.php";
 session_start();?>
   <body>
 
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin_page.php">Home</a></li>
            <li><a href="admin_customer.php">Customer</a></li>
			  <li><a href="admin_agent.php">Agent</a></li>
            <li><a href="todays_rate.php">Todays rate</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">
	  <div class="row">
			<div class="col-md-8">
				<div class="main-col">
					<div class="block">
					  <h4 class="pull-right">A simple Messaging engine</h4>
						<div class="clearfix"></div>
						<hr>
                        
                        
                      
<form role="form" method="post" action="">

							<div class="form-group">
								<label>SMS</label>
								<input type="radio"  name="option" value="sms">
                                <label>EMAIL</label>
                                <input type="radio"  name="option" value="email" checked>
							</div>
							<div class="form-group">
								<label>Topic Title</label>
								<input type="text" class="form-control" name="subject" placeholder="Enter Message Title">
							</div>
							<div class="form-group">
								<label>Sender</label>
								<input type="text" class="form-control" name="title" placeholder="Enter Post Title"
                                value="<?php
						if( isset($_GET['paytm3']) ){$paytm=$_SESSION['paytm3'];
							
							foreach($paytm as $val){
								$s_email_=mysql_query("SELECT email,id,mnumber from agent_new_customer WHERE id='$val'");
								while($re=mysql_fetch_array($s_email_)){									   
								$email=$re['email'];$num=$re['mnumber'];
								echo $email,"(".$num.")",","; }} }
								
						if( isset($_GET['paytm2'])){$paytm=$_SESSION['paytm2'];
							
							foreach($paytm as $val){
								$s_email_=mysql_query("SELECT email,id,mnumber from new_customer WHERE id='$val'");
								while($re=mysql_fetch_array($s_email_)){									   
								$email=$re['email'];$num=$re['mnumber'];
								 echo $email,"(".$num.")",","; }} } 
								
						if( isset($_GET['paytm'])){$paytm=$_SESSION['paytm'];
							
							foreach($paytm as $val){
								$s_email_=mysql_query("SELECT email,id,mnumber from agent WHERE id='$val'");
								while($re=mysql_fetch_array($s_email_)){									   
								$email=$re['email'];$num=$re['mnumber'];
								 echo $email,"(".$num.")",","; }}}  ?>"
                               readonly="readonly" >
                              
							</div>
								<div class="form-group">
									<label>Topic Body</label>
									<textarea id="message" rows="10" cols="80" class="form-control" name="message"></textarea>
									<script>CKEDITOR.replace('body');</script>
								</div>
							<input name="confirm" type="submit" class="btn btn-default value="Submit">
                            
					  </form>
				  </div>
				</div>
			</div>
		<div class="col-md-4">
				<div id="sidebar"></div>
		  </div>
		</div>
   </div>
    </div><!-- /.container -->
</body>
</html>	
						
<?php
		if(isset($_POST['confirm'])){
									
				// For Agent
				
				
				
						if( isset($_GET['paytm'])){$paytm=$_SESSION['paytm']; 
						
						$_SESSION['body']=$_POST['message'];
						$_SESSION['subject']=$_POST['subject'];
						
						foreach($paytm as $val)
						{
								$email = array(); $name = array();$num = array();
								$findemail=mysql_query("SELECT * from agent WHERE id='$val'");
								while($result=mysql_fetch_array($findemail))
							{									   
								$email[]=$result['email']; $name[]=$result['fname']." ".$result['lname'] ;
								$num[]=$result['mnumber'];
							
								
								
						
						$_SESSION['body']=$_POST['message'];
						$_SESSION['subject']=$_POST['subject'];
						$_SESSION['name']=$name;
						$_SESSION['email']=$email;
						$_SESSION['emailbs']=$emailbs;
						//$_SESSION['email']= var_dump($email);
						
				//echo $email;
						
						if($_POST['option']=='email'){	
						 echo" <script type='text/javascript'>
						 { 
										window.location='admin_msg_proc.php';
										 	}
										</script> ";
						
						}
					// sms
		
		
						if($_POST['option']=='sms'){	
						// Authorisation details.
						foreach($num as $num){
				//$username = "danielbillion@yahoo.com";
				//$hash = "324510a2e38ac9b9a8fbe9362135601a2ce1192a";
				
				$username = $sms_email;
				$hash = $sms_hash;
				
				// Config variables. Consult http://api.txtlocal.com/docs for more info.
				$test = "0";

				// Data for text message. This is the text message data.
				$sender = $slogan1; // This is who the message appears to be from.
				$numbers = $num; // A single number or a comma-seperated list of numbers
				$message = $_POST['message'];
				// 612 chars or less
				// A single number or a comma-seperated list of numbers
				$message = urlencode($message);
				$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
				$ch = curl_init('http://api.txtlocal.com/send/?');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($ch); // This is the result from the API
				curl_close($ch);
				
					echo" <script type='text/javascript'>
									 { window.alert('! Your message has now beeen sent ')
													window.location='admin_agent.php';
														}
													</script> ";
			
			}
			}
		}}
					
		}
		
		
		// for customer
		
		
		
		if( isset($_GET['paytm2'])){$paytm=$_SESSION['paytm2']; 
						
						$_SESSION['body']=$_POST['message'];
						$_SESSION['subject']=$_POST['subject'];
						
						foreach($paytm as $val){
								$email = array(); $name = array();$num = array();
								$findemail=mysql_query("SELECT * from new_customer WHERE id='$val'");
								while($result=mysql_fetch_array($findemail)){									   
								$email[]=$result['email']; $name[]=$result['fname']." ".$result['lname'] ;
								$num[]=$result['mnumber'];
							
								
								
						
						$_SESSION['body']=$_POST['message'];
						$_SESSION['subject']=$_POST['subject'];
						$_SESSION['name']=$name;
						$_SESSION['email']=$email;
						$_SESSION['emailbs']=$emailbs;
						//$_SESSION['email']= var_dump($email);
						
				//echo $email;
						
						if($_POST['option']=='email'){	
						 echo" <script type='text/javascript'>
						 { 
										window.location='admin_msg_proc.php';
										 	}
										</script> ";
						
						}
					// sms
		
		
						if($_POST['option']=='sms'){	
						// Authorisation details.
						foreach($num as $num){
				//$username = "danielbillion@yahoo.com";
				//$hash = "324510a2e38ac9b9a8fbe9362135601a2ce1192a";
				
				$username = $sms_email;
				$hash = $sms_hash;

				// Config variables. Consult http://api.txtlocal.com/docs for more info.
				$test = "0";

				// Data for text message. This is the text message data.
				$sender = $slogan1; // This is who the message appears to be from.
				$numbers = $num; // A single number or a comma-seperated list of numbers
				$message = $_POST['message'];
				// 612 chars or less
				// A single number or a comma-seperated list of numbers
				$message = urlencode($message);
				$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
				$ch = curl_init('http://api.txtlocal.com/send/?');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($ch); // This is the result from the API
				curl_close($ch);
				
					echo" <script type='text/javascript'>
									 { window.alert('! Your message has now beeen sent ')
													window.location='admin_agent.php';
														}
													</script> ";
			
			}
			}
		}}
					
		}
		
		
		
		
		
		
		// For Agent Customer
		
		if( isset($_GET['paytm3'])){$paytm=$_SESSION['paytm3']; 
						
						$_SESSION['body']=$_POST['message'];
						$_SESSION['subject']=$_POST['subject'];
						
						foreach($paytm as $val){
								$email = array(); $name = array();$num = array();
								$findemail=mysql_query("SELECT * from agent_new_customer WHERE id='$val'");
								while($result=mysql_fetch_array($findemail)){									   
								$email[]=$result['email']; $name[]=$result['fname']." ".$result['lname'] ;
								$num[]=$result['mnumber'];
							
								
								
						
						$_SESSION['body']=$_POST['message'];
						$_SESSION['subject']=$_POST['subject'];
						$_SESSION['name']=$name;
						$_SESSION['email']=$email;
						$_SESSION['emailbs']=$emailbs;
						//$_SESSION['email']= var_dump($email);
						
				//echo $email;
						
						if($_POST['option']=='email'){	
						 echo" <script type='text/javascript'>
						 { 
										window.location='admin_msg_proc.php';
										 	}
										</script> ";
						
						}
					// sms
		
		
						if($_POST['option']=='sms'){	
						// Authorisation details.
						foreach($num as $num){
				//$username = "danielbillion@yahoo.com";
				//$hash = "324510a2e38ac9b9a8fbe9362135601a2ce1192a";
				
				$username = $sms_email;
				$hash = $sms_hash;

				// Config variables. Consult http://api.txtlocal.com/docs for more info.
				$test = "0";

				// Data for text message. This is the text message data.
				$sender = $slogan1; // This is who the message appears to be from.
				$numbers = $num; // A single number or a comma-seperated list of numbers
				$message = $_POST['message'];
				// 612 chars or less
				// A single number or a comma-seperated list of numbers
				$message = urlencode($message);
				$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
				$ch = curl_init('http://api.txtlocal.com/send/?');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$result = curl_exec($ch); // This is the result from the API
				curl_close($ch);
				
					echo" <script type='text/javascript'>
									 { window.alert('! Your message has now beeen sent ')
													window.location='admin_agent.php';
														}
													</script> ";
			
			}
			}				
			}}		
		}
		
		
	}

?>