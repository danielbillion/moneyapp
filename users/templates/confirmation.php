<?php include 'includes/header.php'; ?>
<div class="col-md-9">
	<form name="form" action="" method="post">
	<div id="confirmation" class="confirmation">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Transaction Confirmation</h4>
				</div>
					
							<div class="panel-body">
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2">
												<strong>Sender Name</strong>:
										</div>
										<div class="col-md-4 ">
											 <span class="info"><?php if(isset($_GET['senders'])){ echo $_GET['senders'];}?>
												
											 </span>
										</div>
									</div>	
								</div>
								
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2">
												<strong>Receivers Name</strong>:
										</div>
										<div class="col-md-4 ">
											 <span class="info"><?php if(isset($_GET['receivers'])){ echo $_GET['receivers'];}?></span>
										</div>
									</div>	
								</div>
								
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2">
												<strong>Receivers Phone</strong>:
										</div>
										<div class="col-md-4 ">
											 <span class="info"><?php if(isset($_GET['rPhone'])){ echo $_GET['rPhone'];}?></span>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2">
												<strong>Transfer Option</strong>:
										</div>
										<div class="col-md-4 ">
											 <span class="info"><?php if(isset($_GET['tOption'])){ echo $_GET['tOption'];}?></span>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2 ">
												<strong >Bank</strong>:
										</div>
										<div class="col-md-4 ">
											 <span class="info"><?php if(isset($_GET['rBank'])){ echo $_GET['rBank'];}?></span>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2 pull-left">
												<strong>Account No</strong>:
										</div>
										<div class="col-md-4 ">
											 <span class="info"><?php if(isset($_GET['rActno'])){ echo $_GET['rActno'];}?></span>
										</div>
									</div>
								</div>
					
							</div>
					<div class="panel-heading">
					<h4>Transactions</h4>
				</div>
				<div class="panel-body">
					<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2 pull-left">
												<strong>Amount To Send</strong>:
										</div>
										<div class="col-md-3 ">
											 <span class="info"><?php if(isset($_GET['amount'])){ echo number_format(($_GET['amount']),2);}?></span>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2 pull-left">
												<strong>Commision</strong>:
										</div>
										<div class="col-md-3 ">
											 <span class="info">£<?php if(isset($_GET['commission'])){ echo $_GET['commission'];}?></span>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2 pull-left">
												<strong>Total Amount</strong>:
										</div>
										<div class="col-md-3 ">
											 <span class="info">£<?php if(isset($_GET['tAmount'])){ echo $_GET['tAmount'];}?></span>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2 pull-left">
												<strong>Amount To Collect</strong>:
										</div>
										<div class="col-md-3 ">
											 <span class="info"><?php if(isset($_GET['lAmount'])){ echo "&#8358;".$_GET['lAmount'];}?></span>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2 pull-left">
												<strong>Exchange Rate</strong>:
										</div>
										<div class="col-md-3 ">
											 <span class="info">£1 = <?php if(isset($_GET['eRate'])){ echo $_GET['eRate'];}?></span>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="body-item">
										<div class="col-md-4 col-md-offset-2 pull-left">
												<strong>Transfer Code</strong>:
										</div>
										<div class="col-md-3 ">
											 <span class="info"><?php if(isset($tcode)){ echo $tcode;}?></span>
										</div>
									</div>
								</div>
								
								
					
				</div>
		</div>
		
						<div class="row">
									<div class="body-item">
										<div class="col-md-6 col-md-offset-5">
												<input name="Confirm" value="Confirm" type="submit" class="btn btn-primary">
										</div>

									</div>
								</div>
	<div>
	</form>
</div>
	
	  