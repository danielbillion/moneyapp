
<?php include('includes/header.php'); ?>
			
				
					 
		
		
          <div class="col-md-9 ">
		 
				  <div class="row">
						<div class="col-md-4">
							<small class="essential">Areas Marked with * are important</small>
						</div>
						<div class="col-md-4">	
							<ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							  <li><a href="senders.php">Senders</a></li>
							  <li class="active">New Senders</li>
							</ol>
						</div>
					</div><h3>Register New Sender</h3>
		 <div class="panel panel-default">
						<div class="panel-heading">
							
						</div>
					<div class="panel-body">
						<div class="row">
								<div class="col-md-3 col-md-offset-1">
										<form name="newSenderForm" method="post" action="#" >
										<div class="form-group form-group-sm">
											<span class="essential">*</span><label>Title</label>
											<select name="title" class="form-control" >
												<option>Mr</option>
												<option>Mrs</option>
												<option>Miss</option>
											</select>
										</div>
								</div>														
						</div>
						
							<div class="row">																					
										<div class="col-md-5 col-md-offset-1 ">
												<div class="form-group">
													<span class="essential">*</span><label>First Name</label>
													<input name="fName" class="form-control" type="text" value="<?php 
													if(isset($_POST['fName'])){ echo ucfirst($fName);} else {echo ""; }?>">
												</div>
										</div>
										
										<div class="col-md-5">
												<div class="form-group form-group-sm">
													<label>Middle Name</label>
													<input name="mName" class="form-control" type="text" value="<?php if(isset($_POST['mName'])){ echo ucfirst($mName);} else {echo "";} ?>" >
												</div>
										</div>
							</div>
							
							<div class="row">																				
										<div class="col-md-5 col-md-offset-1">
												<div class="form-group form-group-sm">
													<span class="essential">*</span><label>Last Name</label>
													<input name="lName" class="form-control" type="text" value="<?php if(isset($_POST['lName'])){ echo ucfirst($lName);} else {echo "";} ?>" >
												</div>
										</div>
										
										<div class="col-md-5">
										<span class="essential"></span><label>Date Of Birth</label>
												<div class="form-group input-group form-group-sm">
													 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
													<input name="dob" type="text" placeholder="Date Of Birth" class="form-control"  id="date1" 
													value="<?php echo isset($_POST['dob']) ? ucfirst($_POST['dob']): '' ?>" >
												</div>
										</div>
							</div>
							<div class="row">
							
									<div class="title_header">Contact Information</div>
									
							</div>
							<div class="row">
											
										
										<div class="col-md-5 col-md-offset-1">
												<div class="form-group form-group-sm">
													<label>Phone Number</label>
													<input name="pNumber" class="form-control" type="text" 
													value="<?php echo isset($_POST['pNumber']) ? ucfirst($_POST['pNumber']): '' ?>">
												</div>
											</div>
										
										<div class="col-md-5">
												<div class="form-group form-group-sm">
													<span class="essential">*</span><label>Mobile Number</label>
													<input name="mNumber" class="form-control" type="text" value="<?php echo isset($_POST['mNumber']) ? ucfirst($_POST['mNumber']): '' ?>" >
												</div>
											</div>
							</div>
							
							<div class="row">																					
										<div class="col-md-5 col-md-offset-1">
												<div class="form-group form-group-sm">
													<label>Email</label>
													<input name="email" class="form-control" type="text" value="<?php echo isset($_POST['email']) ? ucfirst($_POST['email']): '' ?>" >
												</div>
											</div>
										
										<div class="col-md-5">
												<div class="form-group form-group-sm">
													<label>Confirm Email</label>
													<input name="cEmail" class="form-control" type="text" value="<?php echo isset($_POST['cEmail']) ? ucfirst($_POST['cEmail']): '' ?>">
												</div>
											</div>
							</div>
							
							<div class="row">
											<div class="title_header">Residence</div>
										
										<div class="col-md-5 right">
												<div class="form-group form-group-sm">
													<span class="essential">*</span><label>Post Code</label>
													<input type=text name=postcode id=postcode class="form-control" value="<?php echo isset($_POST['postcode']) ? ucfirst($_POST['postcode']): '' ?>" >
												</div>
											</div>
											<div class="col-md-3 right">
												<div class="form-group form-group-sm">
												
													</br><input  class="btn btn-primary" type=button value="Postcode Search"
													onClick="Javascript:SPLGetAddressData(document.getElementById('postcode').value)" >
												</div>
											</div>
							<div class="row">
											<div class="col-md-9">
											
											<div align="center"><div id="SPLSearchArea" /></div>
											
											</div>
							</div>				
										
										
							</div>
							
							
							
							<div class="row">
										<div class="col-md-7 col-md-offset-2">
												<div class="form-group form-group-sm">
													<label>Company</label>
													<input name=company id=company class="form-control"
													type="text" value="<?php echo isset($_POST['company']) ? ucfirst($_POST['company']): '' ?>" readonly >
												</div>
										</div>
										
										
							</div>
							<div class="row">
										<div class="col-md-5 col-md-offset-1 ">
												<div class="form-group form-group-sm">
													<label>Address1</label>
													<input name=line1 id=line1 class="form-control" type=text 
													value="<?php echo isset($_POST['line1']) ? ucfirst($_POST['line1']): '' ?>" readonly>
												</div>
										</div>
										
										<div class="col-md-5">
												<div class="form-group form-group-sm">
													<label>Address2</label>
													<input type=text name=line2 id=line2 class="form-control" type="text"
														value="<?php echo isset($_POST['line2']) ? ucfirst($_POST['line2']): '' ?>" readonly>
												</div>
										</div>
							</div>																		
							<div class="row">
										<div class="col-md-5 col-md-offset-1 ">
												<div class="form-group form-group-sm">
													<label>Address3</label>
													<input name=line3 id=line3 class="form-control" type="text"
													value="<?php echo isset($_POST['line3']) ? ucfirst($_POST['line3']): '' ?>" readonly>
												</div>
										</div>
										
										<div class="col-md-5">
												<div class="form-group form-group-sm">
													<label>Town</label>
													<input name=town id=town  class="form-control" type="text" 
													value="<?php echo isset($_POST['town']) ? ucfirst($_POST['town']): '' ?>" readonly>
												</div>
										</div>
							</div>
							
							<div class="row">
										<div class="col-md-5 col-md-offset-1">
												<div class="form-group form-group-sm">
													<label>County</label>
													<input name=county id=county class="form-control" type="text" 
													value="<?php echo isset($_POST['county']) ? ucfirst($_POST['county']): '' ?>" readonly>
												</div>
										</div>
										
											<div class="col-md-5">
												<div class="form-group form-group-sm">
													<label>Country</label>
													<input  name=country id=country class="form-control" type="text" 
													value="<?php echo isset($_POST['country']) ? ucfirst($_POST['country']): '' ?>" readonly>
												</div>
											</div>
							</div>
							
										<div class="row">
											<div class="col-md-5 col-md-offset-1">
												<div class="title_header"><span class="essential">*</span>Terms And Conditions</div>
											</div>
										</div>
										<div class="row">	
												<div class="col-md-1 col-md-offset-1">
													<div class="form-group form-group-sm">													
														<input   type="checkbox" name="checkTerms" >
													</div>
												</div>
												<div class="col-md-8">
														<p><strong>Have you read and accepted the <a href="terms.php">TERMS AND CONDITIONS</a> and Your information will be held securely 
														with our data protection and management policy?</strong><p>
												</div>																																
										
										</div>
									
										<div class="row">
												<div class="col-md-5 col-md-offset-5 ">
													<input name="submit" class="btn btn-primary btn-lg" type="submit" >						
												</div>			
										</div>																														
							
									</form>
					
							
					
							<hr>

				</div>
			</div>
		 </div>
        

    </section>

    <?php include('includes/footer.php'); ?>
  </body>
</html>
