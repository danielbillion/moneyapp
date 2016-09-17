<?php include('includes/header.php'); ?>
<!----New Layout Starts here---col-md-9------------------------------------------------------------------>		
			<div class="col-md-9">
				<div class="row">
				<?php foreach($trans_rate as $result): ?>
					<div class="col-md-6 col-md-offset-2">
						<h3> Modify Rate  Today's Rate</h3>
							<div class="panel-border">
									<form name="form1" method="POST" >
										<div class="input-group input-group-md">
											<span class="input-group-addon">Todays Rate (Main) &#8358;</span>
											<input type="text" name="rate" id="rate" class="form-control" value="<?php echo ($result->rate); ?>">	
										</div><br>
										<div class="input-group input-group-md">
											<span class="input-group-addon">Special Rate 1  &#8358;</span>
											<input type="text" name="rate1" id="rate" class="form-control" value="<?php echo ($result->rate1); ?>">	
										</div>
										<div class="input-group input-group-md">
											<span class="input-group-addon">Special Rate 2  &#8358;</span>
											<input type="text" name="rate2" id="rate" class="form-control" value="<?php echo ($result->rate2); ?>">	
										</div>
										<div class="input-group input-group-md">
											<span class="input-group-addon">Special Rate 3  &#8358;</span>
											<input type="text" name="rate3" id="rate" class="form-control" value="<?php echo ($result->rate3); ?>">	
										</div>
										<div class="input-group input-group-md">
											<span class="input-group-addon">Special Rate 4  &#8358;</span>
											<input type="text" name="rate4" id="rate" class="form-control" value="<?php  echo ($result->rate4); ?>">	
										</div>
										<div class="input-group input-group-md">
											<span class="input-group-addon">Special Rate 5  &#8358;</span>
											<input type="text" name="rate5" id="rate" class="form-control" value="<?php echo ($result->rate5); ?>">	
										</div>
										<br></br>
										<div class="input-group input-group-md">
											<span class="input-group-addon">Nigeria To UK</span>
											<input type="text" name="ratenu" id="rate" class="form-control" value="<?php echo ($result->nu); ?>">	
										</div><br>
										<div class="form-group form-group-lg text-center">
											<input name="submit" id="submit" type="submit" class="btn btn-primary ">
										</div>
										<?php endforeach; ?>
									</form>
						</div>
					</div>
				</div>
			</div>
			<?php include('includes/footer.php'); ?>