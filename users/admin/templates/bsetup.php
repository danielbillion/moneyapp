<?php include('includes/header.php'); ?>

<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Business Setup</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<div class="panel-border">
	<form name="form1" method="POST" >
		<?php  foreach($dataResult as $result): ?>
		<!--Business Info---->	
						<fieldset class="well the-fieldset">
							<legend class="the-legend"><button  class="btn btn-primary" >Business Info</button></legend>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Business Name1</span>
													<input type="text" name="name1" id="name1" class="form-control" value="<?php echo strtoupper($result->name1); ?>">	
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Business Name2</span>
													<input type="text" name="name2" id="name2" class="form-control" value="<?php echo strtoupper($result->name2); ?>">	
									</div>
								</div>
							</div>
							
							<br>
						<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Slogan 1</span>
													<input type="text" name="slogan1" id="slogan1" class="form-control" value="<?php echo strtoupper($result->slogan1); ?>">	
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Slogan 2</span>
													<input type="text" name="slogan2" id="slogan2" class="form-control" value="<?php echo strtoupper($result->slogan2); ?>">	
									</div>
								</div>
						</div>
						
						<br/>
						<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Email 1</span>
													<input type="text" name="email" id="email" class="form-control" value="<?php echo strtoupper($result->email); ?>">	
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Email 2</span>
													<input type="text" name="email2" id="email2" class="form-control" value="<?php echo strtoupper($result->email2); ?>">	
									</div>
								</div>
						</div>
						
						<br/>
						<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Website 1</span>
													<input type="text" name="web1" id="web1" class="form-control" value="<?php echo strtoupper($result->web1); ?>">	
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Website 2</span>
													<input type="text" name="web2" id="web2" class="form-control" value="<?php echo strtoupper($result->web2); ?>">	
									</div>
								</div>
						</div>
						<br/>
						<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Tel 1</span>
													<input type="text" name="tel1" id="tel1" class="form-control" value="<?php echo ($result->tel1); ?>">	
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Tel 2</span>
													<input type="text" name="tel2" id="tel2" class="form-control" value="<?php echo ($result->tel2); ?>">	
									</div>
								</div>
						</div>
						
						<br/>
						<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Tel 3</span>
													<input type="text" name="tel3" id="tel3" class="form-control" value="<?php echo ($result->tel3); ?>">	
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Fax</span>
													<input type="text" name="fax" id="fax" class="form-control" value="<?php echo ($result->fax); ?>">	
									</div>
								</div>
						</div>
						
						<br/>
						<div class="row">
								<div class="col-md-12">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Address</span>
													<input type="text" name="address" id="address" class="form-control" value="<?php echo strtoupper($result->address); ?>">	
									</div>
								</div>
								
						</div>
						
						<br/>
						<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Country</span>
													<input type="text" name="country" id="country" class="form-control" value="<?php echo strtoupper($result->country); ?>">	
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">PostCode</span>
													<input type="text" name="postcode" id="postcode" class="form-control" value="<?php echo strtoupper($result->postcode); ?>">	
									</div>
								</div>
						</div>
						
				</fieldset>	<br/>
		<!----Transaction------->	
				<fieldset class="well the-fieldset">
					<legend class="the-legend"><button  class="btn btn-primary" >Transactions</button></legend>
						<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Enable Credit</span>
													<select name="eCredit" id="rate" class="form-control" value="<?php echo (""); ?>">
														<option><?php echo $result->ecredit=='1'?'Enable':'Disable'; ?></option>
														<option>Enable</option>
														<option>Disable</option>
														
													</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Business Name-Receipt</span>
													<select name="businessNameOnReceipt" id="rate" class="form-control" value="<?php echo (""); ?>">
														<option><?php echo $result->br=='1'?'Enable':'Disable'; ?></option>
														<option>Enable</option>
														<option>Disable</option>
														
													</select>	
									</div>
								</div>
						</div>
						
						<br/>
						<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
	<!---Business type/size-->			<span class="input-group-addon">Type</span>
													<select name="businessType" id="rate" class="form-control" value="<?php echo (""); ?>">
														<option selected><?php echo $result->size==1?'Customer Only':($result->size==2?'Agent Only':($result->size==3?'Agent-Customer':'Full Package')) ; ?></option>
														<option>Customer Only</option>
														<option>Agent Only</option>
														<option>Agent-Customer</option>
														<option>Full Package</option>
														
														
													</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Busines Key</span>
													<input type="text" name="businessCode" id="businessCode" class="form-control" value="<?php echo ("$result->code"); ?>">	
									</div>
								</div>
						</div>
						<br/>
						<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
<!-- Transaction Limit---->			<span class="input-group-addon">Transaction Limit</span>
													<select name="dailyLimit" id="dailyLimit" class="form-control" value="<?php echo (""); ?>">
														<option><?php echo $result->dtls=='1'?'Enable':'Disable'; ?></option>
														<option>Enable</option>
														<option>Disable</option>														
													</select>		
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group input-group-md">
<!--Maximum Transaction View---->	<span class="input-group-addon">The Max</span>
													<select name="maxTransaction" id="maxTransaction" class="form-control" value="<?php echo (""); ?>">
														<option><?php echo $result->mtls=='1'?'Enable':'Disable'; ?></option>
														<option>Enable</option>
														<option>Disable</option>													
													</select>		
									</div>
								</div>
								
						</div>
						<div class="row">
						<div class="col-md-6">
									<div id="limitMain" class="input-group input-group-md">
	<!--Value Daily Limit Transaction ---->		<span class="input-group-addon">Limit Value</span>
													<input type="text" name="limitValue" id="limitValue" placeholder=" ENTER TRANSACTION LIMIT" class="form-control" value="<?php echo ($result->dtl); ?>">	
									</div>
						</div>
						<div class="col-md-6">
									<div id="maxLimit" class="input-group input-group-md">
	<!--Value Max Transaction ---->			<span class="input-group-addon">Max Value</span>
													<input type="text" name="maxValue" id="maxValue" placeholder="ENTER MAX VALUE" class="form-control" value="<?php echo ($result->mtl); ?>">	
									</div>
						</div>
						
						</div>
						<br/>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
																
									<div class="input-group input-group-md">
	<!--Enable if Id is needed---->		<span class="input-group-addon">Activate ID</span>
													<select name="activateId" id="activateId" class="form-control" value="<?php echo (""); ?>">
														<option><?php echo $result->vdtl=='1'?'Enable':'Disable'; ?></option>
														<option>Enable</option>
														<option>Disable</option>													
													</select>										
								</div>
							</div>
						</div>
						
						<br/><br/>
						</fieldset>
		<!-----SMS---->		
						<fieldset class="well the-fieldset">
							<legend class="the-legend"><button  class="btn btn-primary" > SMS</button></legend>
								<br/>
						<div class="row">
								<div class="col-md-5">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Activate SMS</span>
													<select name="smsStatus" id="smsStatus" class="form-control" value="">
														<option selected><?php echo ($result->sms_status=='ON'? 'Enable':'Disable'); ?></option>
														<option>Enable</option>
														<option>Disable</option>
														
													</select>
									</div>
								</div>
								<div class="col-md-7">
									<div class="input-group input-group-md">
													<span class="input-group-addon">SMS Email</span>
													<input type="text" name="smsEmail" id="smsEmail" class="form-control" value="<?php echo ucfirst($result->sms_email); ?>">	
									</div>
								</div>
								
						</div><br/>
						<div class="row">
							<div class="col-md-12">
									<div class="input-group input-group-md">
													<span class="input-group-addon">SMS Hash Code</span>
													<input type="text" name="smsHash" id="smsHash" class="form-control" value="<?php echo ($result->sms_hash); ?>">	
									</div>
								</div>
						</div>
						
						<br/>
						</fieldset>
		<!---Paypal----->
						<fieldset class="well the-fieldset">
							<legend class="the-legend"><button  class="btn btn-primary" >Paypal</button></legend>
						<div class="row">
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Activate Paypal </span>
													<select name="paypalStatus" id="paypalStatus" class="form-control" value="">
														<option selected><?php echo ($result->paypal_status=='ON'? 'Enable':'Disable'); ?></option>
														<option>Enable</option>
														<option>Disable</option>
														
													</select>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Paypal Limit</span>
													<input type="text" name="paypalLimit" id="paypalLimit" class="form-control" value="<?php echo ($result->paypal_ipn); ?>">	
									</div>
								</div>
						</div><br/>
						<div class="row">
							<div class="col-md-12">
									<div class="input-group input-group-md">
													<span class="input-group-addon">Paypal Email</span>
													<input type="text" name="paypalEmail" id="paypalEmail" class="form-control" value="<?php echo ucfirst($result->paypal_email); ?>">	
									</div>
								</div>
						</div>
						
						
						
						<?php endforeach; ?>
						
							</fieldset>
							<div class="row">
								<div class="col-md-7 col-md-offset-5">
									<input name="submit" type="submit" value="submit" class="btn btn-info btn-lg">
								</div>
							</div>
						</form>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
<!--For Max value and Limit Value show or id-->
<script>
$(function(){
	//on load
	$('#limitMain').hide();
	$('#maxLimit').hide();
	
	//onclick
	$('#maxTransaction').change(function(){
		
		if($(this).find(':selected').val()==='Enable'){
			$('#maxLimit').show();
		}
		else{
			$('#maxLimit').hide();
		}
	})
	
	$('#dailyLimit').change(function(){
		
		if($(this).find(':selected').val()==='Enable'){
			$('#limitMain').show();
		}
		else{
			$('#limitMain').hide();
		}
	})
		
	
	
	
})
</script>