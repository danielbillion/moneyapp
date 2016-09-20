<?php include('includes/header.php');?>
<div class="col-md-9">
	<div class="panel panel-default">
		<div class=" panel-headingt">
			<h3>Transaction Status</h3>
		</div>
		<div class=" panel-body">
			<form name="form1" action ="" method="post">
<!--No of transaction--->
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
						<div class="input-group input-group-md"">
							<span class="input-group input-group-addon">No of Transaction</span>
							<input type="text" name="no" value="<?php echo $_SESSION['pay']; ?>" class="form-control" readonly>
						</div>
					</div>
				</div>
<!--Type transaction--->				
				<div class="row">
					<br>
				<div class="col-md-6 col-md-offset-3">
						<div class="input-group input-group-md"">
							<span class="input-group input-group-addon">Type</span>
							<select class="form-control" name="choice">
								<option>PAID</option>
								<option>PENDING</option>
								<option>SUSPENDED</option>
								<option>Delete</option>
							</select>
						</div>
					</div>
				</div>
				<br>
<!--Administrative Confirmation--->
			<div class="row">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3>Administrative Confirmation</h3>
					</div>
					<div class="panel-body">
						<div class="col-md-6 col-md-offset-3">
								<div class="input-group input-group-md">
											<span class="input-group input-group-addon">
											Password
											</span>
											<input name="password" 	 class="form-control" type="password"	 >
										</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-5">
					<input type="submit" name="submit" class="btn btn-primary btn-lg">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>


<?php include('includes/footer.php');?>
