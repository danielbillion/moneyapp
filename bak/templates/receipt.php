<link href="<?php echo BASE_URI; ?>templates/css/receipt.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo BASE_URI; ?>templates/css/font-awesome.css" rel="stylesheet">

<div class="col-md-9">
	<div id="container" class="container">
				<div id="header" class="header">
					<div class="newrow">
						<div class="headerlogo">
							<img src="">
						</div>
						<div class="companyname">
							<h1><?php echo  binfo()['name1']; ?></h1>
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
							<span class="tel"><?php echo  binfo()['tel1']; ?></span>,
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
							<div class="sender">
								<div class="sheading">Sender</div>
								<div class="item">
									<div class="col1">
										<strong>Sender Name</strong>
									</div>
									<div class="col2">
										<?php if(isset($senderName)){ echo $senderName; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Residence</strong>
									</div>
									<div class="col2">
										<?php if(isset($address)){ echo $address; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Post Code</strong>
									</div>
									<div class="col2">
										<?php if(isset($postcode)){ echo $postcode; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Phone Number</strong>
									</div>
									<div class="col2">
										<?php if(isset($senderPhone)){ echo $senderPhone; } ?>
									</div>
								</div>
							</div>
							<div class="receiver">
								<div class="sheading">Receiver</div>
								
								<div class="item">
									<div class="col1">
										<strong>Receiver Name</strong>
									</div>
									<div class="col2">
										<?php if(isset($rName)){ echo $rName; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Receiver Phone</strong>
									</div>
									<div class="col2">
										<?php if(isset($rPhone)){ echo $rPhone; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong><p>Destination</p></strong>
									</div>
									<div class="col2">
										<p>Nigeria</p>
									</div>
								</div>
							</div>
							
						</div>
				
				<!----------------TRansaction-------------------------------------------------------------->
						<div id="transPayment" class="transPayment">
						
							<div class="trans">
							<div class="sheading">
								<strong>Transaction</strong>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Sending</strong>
									</div>
									<div class="col2">
										&pound;<?php if(isset($amount)){ echo $amount; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Naira Equiv</strong>
									</div>
									<div class="col2">
										<?php if(isset($lAmount)){ echo $lAmount; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Commission</strong>
									</div>
									<div class="col2">
										&pound;<?php if(isset($commission)){ echo $commission; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Total Amount</strong>
									</div>
									<div class="col2">
										&pound;<?php if(isset($tAmount)){ echo $tAmount; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Transfer Code</strong>
									</div>
									<div class="col2">
										<?php if(isset($tCode)){ echo $tCode; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Agent Name</strong>
									</div>
									<div class="col2">
										<?php echo binfo()['slogan1'];  ?>
									</div>
								</div>
							</div>
							<div class="payment">
								<div class="sheading">
								<strong>Payment</strong>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Exchange Rate</strong>
									</div>
									<div class="col2">
										<?php if(isset($rate)){ echo $rate; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Bank</strong>
									</div>
									<div class="col2">
										<?php if(($bank !=="")){ echo $bank; } else { echo "NONE";} ?>
									</div>
								</div>
								
								<div class="item">
									<div class="col1">
										<strong>Transfer Mode</strong>
									</div>
									<div class="col2">
										<?php if(isset($tOption)){ echo $tOption; } ?>
									</div>
								</div>
								<div class="item">
									<div class="col1">
										<strong>Identity</strong>
									</div>
									<div class="col2">
										<?php if(($identity!=="")){ echo $identity; } else { echo "NONE";} ?>
									</div>
								</div>
								
								<div class="item">
									<div class="col1">
										<strong>Account No</strong>
									</div>
									<div class="col2">
										<?php if(isset($rActno)){ echo $rActno; } ?>
									</div>
								</div>
								
							</div>
						</div>
					</div>
	</div>

		<div class="print"><button onclick="window.print();">PRINT</button></div>
</div>