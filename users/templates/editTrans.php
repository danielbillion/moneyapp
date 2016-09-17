
<?php include('includes/header.php'); ?>
			
				
					 
			

          <div class="col-md-9">
		  <h3>Edit  Transactions</h3>
			<hr>
			<form name="editTrans" method="POST" action="">		  
		  
            <?php $x=0; foreach($trans_result as $result): ?>
			<div class="container">
			
				<div class="row">
					<div class="col-md-4">
						<div class="form-group form-group-sm">
						<label>Sender Name</label>
							<input class="form-control" type="text" name="sName" value="<?php echo firstCap($result->sender_name); ?>" readonly>
						</div>
						<div class="form-group form-group-sm">
						<label>Address</label>
							<input class="form-control" type="text" name="address" value="<?php echo strtoupper($result->address); ?>" readonly>
						</div>
						<div class="form-group col-xs-6">
						<label>Post Code</label>
							<input class="form-control" type="text" name="postcode" value="<?php echo strtoupper($result->postcode); ?>" readonly>
						</div>
						<div class="form-group col-xs-6">
						<label>Country</label>
							<input class="form-control" type="text" name="country" value="<?php echo strtoupper($result->country); ?>" readonly>
						</div>
						<div class="form-group form-group-sm">
						<label>Phone No</label>
							<input class="form-control" type="text" name="phone" value="<?php echo ($result->s_phone); ?>" readonly>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group form-group-sm">
						<label>Rceiver Name</label>
							<input class="form-control" type="text" name="rName" value="<?php echo strtoupper($result->r_name); ?>" >
						</div>
						<div class="form-group form-group-sm">
						<label>Phone No</label>
							<input class="form-control" type="text" name="rPhone" value="<?php echo ($result->r_phone); ?>" >
						</div>
						<div class="form-group form-group-sm">
						<label>Destination</label>
							<input class="form-control" type="text" name="sName" value="Nigeria" readonly>
						</div>
					</div>
				</div>
				
				<h3>Transactions</h3>
				<div class="row">
					<div class="col-md-4">
							
							<div class="form-group form-group-sm">
								<label>Amount Sending</label>
									<input class="form-control" type="text" name="rate" value=" <?php echo number_format($result->amt_send); ?>" readonly>
							</div>
							
							<div class="form-group form-group-sm">
								<label>Naira Equivalence</label>
									<input class="form-control" type="text" name="nE" value="<?php echo number_format($result->amt_local); ?>" readonly>
							</div>
							<div class="form-group form-group-sm">
								<label>Commission</label>
									<input class="form-control" type="text" name="sName" value="<?php echo number_format($result->commission); ?>" readonly>
							</div>
							<div class="form-group form-group-sm">
								<label>Total Payment</label>
									<input class="form-control" type="text" name="sName" value="<?php echo number_format($result->total); ?>" readonly>
							</div>
							<div class="form-group form-group-sm">
								<label>Transfer Code</label>
									<input class="form-control" type="text" name="sName" value="<?php echo ($result->receiptno); ?>" readonly>
							</div>
							
							
					</div>
					
					<div class="col-md-4">
							
							<div class="form-group form-group-sm">
								<label>Todays Rate</label>
									<input class="form-control" type="text" name="rate" value="£1 = &#8358;<?php echo number_format($result->exchange_rate); ?>" readonly>
							</div>
							
							<div class="form-group form-group-sm">
								<label>Transfer Mode</label>
									<select class="form-control"   name="transferMode" id="transferMode" >
										<option  <?php if (trim($result->r_transfer)== 'Pick Up'){ echo 'selected';}?> >Pick Up</option> 
										<option  <?php if (trim($result->r_transfer)== 'Bank Account'){ echo 'selected';}?> >Bank Account</option>
									</select>
							</div>
							
							<div class="form-group form-group-sm">
								<label>Bank Paying</label>
									<select class="form-control"  name="rBank">
									<?php foreach($banks as $bank): ?>
									<?php if (firstCap(trim($bank->bank))== firstCap(trim($result->r_bank))){ $selected='selected';} else {$selected='';} ?>
									<option <?php echo $selected; ?> > <?php echo $bank->bank; ?> </option>
									
										<?php endforeach; ?>
									</select>	
								
							</div>
							<div class="form-group form-group-sm" id="modeId">
								<label>Mode Of Identity</label>
								<input class="form-control" name="modeId" type="text" value="<?php echo ($result->r_idtype); ?>" >	
							</div>
							<div class="form-group form-group-sm" id="actno">
								<label>Account Number</label>
									<input class="form-control" type="text" name="actNo" value=" <?php echo ($result->r_actno); ?>" >
							</div>
							<input type="submit" class="btn btn-primary" name="submit" value="Submit">
							</div>
							
					</div>
				</div>
			
			</div>
			
			
			
		
			</form>
			
			
            
           
			  <?php endforeach; ?>
		

          
          </div>
        </div>
      </div>

    </section>

    <?php include('includes/footer.php'); ?>
  </body>
</html>
