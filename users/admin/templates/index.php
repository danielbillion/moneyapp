<?php include('includes/header.php'); ?>
<!----New Layout Starts here---col-md-9------------------------------------------------------------------>		
			<div class="col-md-9">
<!--customer--------->
<?php if( (getUser()['level']=='1')||(getUser()['level']=='2')|| (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
				<div class="row">
					<div class="col-md-12">
						<div class="user_section">
							<span class="img_header"><img src="<?php echo BASE_URI; ?>/admin/templates/images/customer.png"></span><h4 class="text-center">Customer</h4><br>
							<div class="row">
									<div class="col-md-6">
										<h5 class="total"><strong>Total</strong>:200</h5>
										<h5 class="active"><strong>Active</strong>:200</h5>
										<h5 class="suspended"><strong>Suspended</strong>:200</h5>
									</div>
									
									
									<div class="col-md-6">
										<h5 class="total"><strong>Pending Transaction</strong>:200 / &#8358;5000.00</h5>
										
										<h5 class="suspended"><strong>Suspended Transaction</strong>:3 / &#8358;2000.00</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
	<?php endif; ?>
<!--Agent--------->
	<?php if( (getUser()['level']=='2')|| (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
				<div class="row">
					<div class="col-md-12">
						<div class="user_section">
							<span class="img_header"><img src="<?php echo BASE_URI; ?>/admin/templates/images/agent.png"></span><h4 class="text-center">Agent</h4><br>
							<div class="row">
									<div class="col-md-6">
										<h5 class="total"><strong>Total</strong>:200</h5>
										<h5 class="active"><strong>Active</strong>:200</h5>
										<h5 class="suspended"><strong>Suspended</strong>:200</h5>
									</div>
									
									
									<div class="col-md-6">
										<h5 class="total"><strong>Pending Transaction</strong>:200 / &#8358;5000.00</h5>
										
										<h5 class="suspended"><strong>Suspended Transaction</strong>:3 / &#8358;2000.00</h5>
									</div>
								</div>
							</div>
						</div>
					</div>	
		<?php endif; ?>
<!--Manager--------->
<?php if(  (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
				<div class="row">
					<div class="col-md-12">
						<div class="user_section">
							<span class="img_header"><img src="<?php echo BASE_URI; ?>/admin/templates/images/debt.png"></span><h4 class="text-center">Manager</h4><br>
							<div class="row">
									<div class="col-md-6">
										<h5 class="total"><strong>Active</strong>:200</h5>
										<h5 class="active"><strong>Active</strong>:200</h5>
										<h5 class="suspended"><strong>Suspended</strong>:200</h5>
									</div>
									
									
									<div class="col-md-6">
										<h5 class="total"><strong>Pending Transaction</strong>:200 / &#8358;5000.00</h5>
										
										<h5 class="suspended"><strong>Suspended Transaction</strong>:3 / &#8358;2000.00</h5>
									</div>
								</div>
							</div>
						</div>
					</div>					
					
			<?php endif; ?>	
				</div>
				
	<?php include('includes/footer.php'); ?>