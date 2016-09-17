
<?php include('includes/header.php'); ?>
			
				
					 
			

 <div class="col-md-9">
 <div class="panel panel-default">
	
	
		<div class="panel-heading">
				<h4>Edit Profile</h4>
		</div>
	<form name=form1  enctype="multipart/form-data" method="POST" action="#">
		<div class="panel-body">
			<div class="container">
				<?php foreach($result as $result):?>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group form-group-sm">
							<Label>First Name</label>
							<input class="form-control" type="text" name="fName" readonly value="<?php  echo ucfirst($result->fname);?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group form-group-sm">
							<Label>Last  Name</label>
							<input class="form-control" type="text" name="lName" readonly value="<?php  echo ucfirst($result->lname);?>">
						</div>
					</div>
				</div>
				
					<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<div class="form-group form-group-sm">
								<Label>Address</label>
								<input class="form-control" type="text" name="address" readonly value="<?php  echo ucfirst($result->address);?>">
							</div>
						</div>

				</div>
				
					<div class="row">
						<div class="col-md-4">
							<div class="form-group form-group-sm">
								<Label>Street</label>
								<input class="form-control" type="text" name="street" readonly value="">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group form-group-sm">
								<Label>Town</label>
								<input class="form-control" type="text" name="town" readonly value="<?php  echo ucfirst($result->town);?>">
							</div>
						</div>
				</div>
				
					<div class="row">
						<div class="col-md-4">
							<div class="form-group form-group-sm">
								<Label>Country</label>
								<input class="form-control" type="text" name="country" readonly value="<?php  echo ucfirst($result->country);?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group form-group-sm">
								<Label>PostCode</label>
								<input class="form-control" type="text" name="postcode" readonly value="<?php  echo ucfirst($result->postcode);?>">
							</div>
						</div>
				</div>
				
					<div class="row">
						<div class="col-md-4">
							<div class="form-group form-group-sm">
								<Label>Contact No</label>
								<input class="form-control" type="text" name="contact"  value="<?php  echo ucfirst($result->pnumber);?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group form-group-sm">
								<Label>Mobile No</label>
								<input class="form-control" type="text" name="mobile"  value="<?php  echo ucfirst($result->mnumber);?>">
							</div>
						</div>
				</div>
				
				<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<div class="form-group form-group-sm">
								<Label>Email</label>
								<input class="form-control" type="text" name="email"  value="<?php  echo ucfirst($result->email);?>">
							</div>
						</div>

				</div>
				<?php endforeach; ?>
				
								<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<div class="form-group form-group-sm">
								<Label>My Photo</label>
								<input  type="file" class="btn btn-default" name="myPhoto">
							</div>
						</div>
						
						<div class="col-md-2 col-md-offset-1">
							<img src="<?php echo BASE_URI; ?>img/<?php  echo getUser()['type'];?>/photo/<?php  echo $result->myPhoto_name;?>" width="50" height="50" alt="..." class="img-thumbnail">
						</div>

				</div>
				
				<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<div class="form-group form-group-sm">
								<Label>Upload ID</label>
								<input  type="file" class="btn btn-default" name="imageId">
							</div>
						</div>
						<div class="col-md-2 col-md-offset-1">
							<img src="<?php echo BASE_URI; ?>img/<?php  echo getUser()['type'];?>/id/<?php  echo $result->proofid_name;?>" width="50" height="50" alt="..." class="img-thumbnail">
						</div>

				</div>
				
				<div class="row">
						<div class="col-md-5 col-md-offset-1">
							<div class="form-group form-group-sm">
								<Label>Proof Of Address</label>
								<input  type="file" class="btn btn-default" name="imageAdd">
							</div>
						</div>
						
						<div class="col-md-2 col-md-offset-1">
							<img src="<?php echo BASE_URI; ?>img/<?php  echo getUser()['type'];?>/address/<?php  echo $result->proofad_name;?>" width="50" height="50" alt="..." class="img-thumbnail">
						</div>

				</div>
				
				<div class="row">
						<div class="col-md-3 col-md-offset-4">
							<div class="form-group form-group-sm">
								
								<input class="btn btn-primary" type="submit" name="submit">
							</div>
						</div>
	</form>
				</div>
		</div>
	</div>
	</div>
		  
		  
 </div>