
<?php include('includes/header.php'); ?>
			
				
				 
			

        <div class="col-md-9" >
			<div class="panel panel-default">
				<div class="panel-heading">
				<h4 style="display:inline-block;text-transform:uppercase;">
				<?php if(isset($_GET['agcid']) || (getUser()['type']=='customer')): ?>Sender:<?php endif; // header showing > creating new sender receiver ?>
				<?php if(isset($_GET['rid'])): ?>Receiver:<?php endif; // header showing > modifiying receiver ?>
				<?php if(isset($_GET['agcid']) || isset($_GET['rid']) ){ echo ($_GET['name']);} ?>
				<?php if(getUser()['type']=='customer'){ echo  getUser()['fname'];} ?>
				</h4>
				</div>
			<div class="panel-body">
				<div class="panel-resize">
			  <div class="row">
				<div class="col-md-7 col-md-offset-3">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<?php // ********** Agent Customer 'create new receiver' > breadcrum  ******* ?>
						<?php if(isset($_GET['agcid']) || isset($_GET['cid']) ): ?>
						<li><a href="sendersReceivers.php">Sender</a></li>
						<li class="active">Create New Receiver</li>
						<?php endif; ?>
						
						<?php // ********** Agent Customer modifying Receiver > breadcrum ******* ?>
						<?php if(isset($_GET['rid'])): ?>
						<li><a href="sendersReceivers.php">Sender</a></li>
						<li class="active"><a href="#">Modify Receiver</a></li>
						<?php endif; ?>
						
						</ol>
					</div>
					
				</div>
				
						
						<?php if(isset($result)){
							foreach($result as $result){
								$b_fname=strtoupper($result-> b_fname);
								$b_lname=strtoupper($result-> b_lname);
								$b_actno=($result-> b_actno);
								$b_phone=($result-> b_phone);
							} 
						}
						?>
				<form name="receiverForm" enctype="multipart/form-data"  method="POST" action="">
				<div class="row">
							<div class="col-md-5 ">
								<div class="form-group form-group-sm">
									<span class="essential">*</span><label>First Name</label>
									<input name="fName" class="form-control" value="<?php if(isset($b_fname)){ echo $b_fname;} if(isset($_GET['fName'])){echo $_GET['fName']; }?>" 
									type="text">
								</div>
							</div>
							
							<div class="col-md-5 ">
								<div class="form-group form-group-sm">
									<span class="essential">*</span><label>Last Name</label>
									<input name="lName" value="<?php if(isset($b_lname)){ echo $b_lname;} if(isset($_GET['lName'])){echo $_GET['lName']; } ?>" class="form-control"  type="text">
								</div>
							</div>
				</div>		
						<div class="row">
				
							
							<div class="col-md-5">
								<div class="form-group form-group-sm">
									<span class="essential">*</span><label>Transfer Mode</label>
									<select name="tMode" id="transferMode" class="form-control"  type="text">
									<option>Pick Up</option>
									<option selected>Bank Account</option>
									</select>
								</div>
							</div>

						
							<div class="col-md-5">
								<div class="form-group form-group-sm">
									<label>Reciever Phone</label>
									<input name="rPhone"  value="<?php if(isset($b_phone)){ echo $b_phone;} 
									if(isset($_GET['rPhone'])){echo $_GET['rPhone']; }?>" class="form-control"  type="text">
								</div>
							</div>
						</div>
						
						
						
						
						<div class="row">
							
							<div class="col-md-5 col-md-offset-3">
								<div class="form-group form-group-sm">
									<span class="essential">*</span><label>Bank</label>
									<select name="abank" id="abank" class="form-control"  type="text">
									<?php foreach($bank_a as $banka):?><option><?php echo $banka->bank;  ?></option><?php endforeach; ?>
									</select>
									
									<select name="pbank" id="pbank" class="form-control"  type="text">
									<?php foreach($bank_p as $bankp):?><option><?php echo $bankp->bank;  ?></option><?php endforeach; ?>
									</select>
									
									
								</div>
							</div>

						</div>
						
						<div class="row"  id="actno">
							
							<div class="col-md-5 col-md-offset-3" >
								<div class="form-group form-group-sm">
									<span class="essential">*</span><label>Account NO</label>
									<input name="actNo" value="<?php if(isset($b_actno)){ echo $b_actno;} if(isset($_GET['actNo'])){echo $_GET['actNo']; } ?>"  id="actno" class="form-control"  type="text">
									
								</div>
							</div>

						</div>
						<div class="row" id="modeId" >
							
							<div class="col-md-5 col-md-offset-3">
								<div class="form-group form-group-sm">
									<span class="essential">*</span><label>Type Of Id</label>
									<select name="modeId" id="modeId" class="form-control"  type="text">
									<option selected></option>
										  <option>National ID</option>
										  <option >Intl Passport</option>
										  <option>Drivers Lincence</option>
										  <option>Any type of ID</option>
									</select>
									
								</div>
							</div>

						</div>
						
						<div class="row">
							
							<div class="col-md-5 col-md-offset-4">
								<div class="form-group form-group-sm">
									
									<input name="submit" class="btn btn-primary"  type="submit">
									
								</div>
							</div>

						</div>
				</div>
			</div>
		</div>
	</div>
			  
				
					
	</form>
    </section>

    <?php include('includes/footer.php'); ?>
  </body>
</html>
