<link href="<?php echo BASE_URI; ?>templates/css/receipt.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo BASE_URI; ?>templates/css/font-awesome.css" rel="stylesheet">
<script src="<?php echo BASE_URI; ?>templates/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<style>

#container{
	text-align:center;
	margin:5px 10%;
}

*{
	
font:normal 11px/1.2em sans-serif;	
}
.newrow{
	width:100%;
	overflow:hidden;
}
.companylogo{
	text-align:center;
	display:block;
	margin:8px 25%;
}
.headerlogo{
	display:inline;
	
	float:left;	
}

.companyname{
	display:inline;
	float:left;
}
</style>
<div class="col-md-9">
	<div id="centerit">
			<div id="container" class="container">
						<div id="header" class="header">
							<div class="newrow">
								<div class="companylogo ">
									<div class="headerlogo">
										<img src="img_logo.php" height="40px" width="40px">
									</div>
									<div class="companyname">
										<h1><?php echo  binfo()['name1']; ?></h1>
									</div>
								</div>
							</div>
							<div class="newrow">
								<div class="address">
									<h4><?php echo  binfo()['address']. " " .binfo()['postcode'] ; ?></h4>
								</div>
							</div>
							<div class="newrow">
								<div class="contact">
									<i class="fa fa-phone-square" aria-hidden="true"></i>
									<span class="tel"><?php echo  binfo()['tel1'].",".binfo()['tel2']; ?></span>,
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<span class="email"><?php echo  binfo()['email']; ?></span>,
										<i class="fa fa-globe" aria-hidden="true"></i>
									<span class="website"><?php echo  binfo()['web1']; ?></span>
								</div>
							</div>
							<div class="newrow">
								<div class="datetime">
									<span class="date"><?php if(isset($dDate)){ echo $dDate; } ?></span>
									<span class="time"><?php if(isset($dTime)){ echo $dTime; } ?></span>
								</div>
							</div>
						</div>
							<div class="container-main">
				
				<!-----------------------------SenderReceiver------------------------------------------------------------->
								<div id="senderReceiver" class="senderReceiver">
			<!-----Sender------------->
									<div class="sender">
										<div class="sheading"><h2>Sender<h2></div>
										<div class="item">
											<div class="col1">
												<h4>Sender Name</h4>
											</div>
											<div class="col2">
												<strong><?php if(isset($senderName)){ echo $senderName; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="item">
											<div class="col1">
												<h4>Residence</h4>
											</div>
											<div class="col2">
												<strong><?php if(isset($address)){ echo $address; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="item">
											<div class="col1">
												<h4>Post Code</h4>
											</div>
											<div class="col2">
												<strong><?php if(isset($postcode)){ echo $postcode; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="item">
											<div class="col1">
												<h4>Phone Number</h4>
											</div>
											<div class="col2">
												<strong><?php if(isset($senderPhone)){ echo $senderPhone; } ?></strong>
											</div>
										</div>
									</div>
									
		<!-----------------Receiver------>
									<div class="receiver">
										<div class="sheading"><h2>Receiver</h2></div>
									<div class="clearfix"></div>
										<div class="item">
											<div class="col1">
												<h4>Receiver Name</h4>
											</div>
											<div class="col2">
												<strong><?php if(isset($rName)){ echo $rName; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
									
										<div class="item">
											<div class="col1">
												<h4>Receiver Phone</h4>
											</div>
											<div class="col2">
												<strong><?php if(isset($rPhone)){ echo $rPhone; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="item">
											<div class="col1">
												<h4>Destination</h4>
											</div>
											<div class="col2">
												<strong>Nigeria</strong>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									
									
								</div>
						<div class="clearfix"></div>
<!----------------TRansaction-------------------------------------------------------------->
								<div id="transPayment" class="transPayment">
								
								<!--Transaction---->
									<div class="trans">
									<div class="sheading">
										<h2>Transaction</h2>
										</div>
										<div class="item">
											<div class="col1">
												<h4>Sending</h4>
											</div>
											<div class="col2">
												<strong> &pound;<?php if(isset($amount)){ echo $amount; } ?> </strong>
											</div>
										</div>
										<div class="clearfix"></div>
										
										<div class="item">
											<div class="col1">
												<h4>Naira Equiv</h4>
											</div>
											<div class="col2">
												<strong><?php if(isset($lAmount)){ echo $lAmount; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										
										<div class="item">
											<div class="col1">
												<h4>Commission</h4>
											</div>
											<div class="col2">
												<strong>&pound;<?php if(isset($commission)){ echo $commission; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										
										<div class="item">
											<div class="col1">
												<h4>Total Amount</h4>
											</div>
											<div class="col2">
												<strong>&pound;<?php if(isset($tAmount)){ echo $tAmount; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										
										<div class="item">
											<div class="col1">
												<h4>Transfer Code</h4>
											</div>
											<div class="col2">
												<strong><?php if(isset($tCode)){ echo $tCode; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										
										<div class="item">
											<div class="col1">
												<h4>Agent Name</h4>
											</div>
											<div class="col2">
												<strong><?php echo binfo()['slogan1'];  ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										
									</div>
									
	<!-----Payment----------------->
									<div class="payment">
										<div class="sheading">
										<h2>Payment</h2>
										</div>
										<div class="item">
											<div class="col1">
												<h4>Exchange Rate</h4>
											</div>
											<div class="col2">
												<strong>&pound;1 = &#8358;<?php if(isset($rate)){ echo $rate; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="item">
											<div class="col1">
												<h4>Bank</h4>
											</div>
											<div class="col2">
												<strong><?php if(($bank !=="")){ echo $bank; } else { echo "NONE";} ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="item">
											<div class="col1">
												<h4>Transfer Mode</h4>
											</div>
											<div class="col2">
												<strong><?php if(isset($tOption)){ echo $tOption; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										
										<div class="item">
											<div class="col1">
												<h4>Identity</h4>
											</div>
											<div class="col2">
												<strong><?php if(($identity!=="")){ echo $identity; } else { echo "NONE";} ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										<div class="item">
											<div class="col1">
												<h4>Account No</h4>
											</div>
											<div class="col2">
												<strong><?php if(isset($rActno)){ echo $rActno; } ?></strong>
											</div>
										</div>
										<div class="clearfix"></div>
										
										<div class="item">
											<div class="col1">
												<h4>--</h4>
											</div>
											<div class="col2">
												<strong>--</strong>
											</div>
										</div>
										<div class="clearfix"></div>
										
									</div>
								</div>
									<div class="clearfix"></div>
							</div>
			</div>
			<hr>
						
						
		</div>
		
		<div id="dup"></div>
		<div class="print"><button onclick="window.print();">PRINT</button></div>
</div>
<script>

$("#centerit").clone().insertAfter("#dup:last");

</script>