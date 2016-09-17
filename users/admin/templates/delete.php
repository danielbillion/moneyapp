<?php include "includes/header.php"; ?>

<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Delete <?php echo ucfirst($deleteOperation); ?></h3>
		</div>
		<div class="panel-body">
		<form name="form1" method="post" action="">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
						<div class="input-group input-group-md">
									<span class="input-group input-group-addon">
									Name
									</span>
									<input name="amountFrom" type="text"  value="<?php echo strtoupper($dataResult->fname). " ". strtoupper ($dataResult->lname) ;?>" class="form-control" readonly >
								</div>
				</div>
			</div>
			<br>
<?php if($agentCust=='ac'):?>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
						<div class="input-group input-group-sm">
									<span class="input-group input-group-addon">
									Agent Name
									</span>
									<input name="amountFrom" type="text" class="form-control" value="<?php echo $name=isset($agent)?strtoupper($agent->fname." ". $agent->lname):""; ?>"  >
								</div>
				</div>
			</div>
			<br>
<?php endif; ?>
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