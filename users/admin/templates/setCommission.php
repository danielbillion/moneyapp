<?php include('includes/header.php'); ?>

<!----New Layout Starts here---col-md-9------------------------------------------------------------------>		
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
					<br>
						<ol class="breadcrumb">
							
								<li><a class="btn btn-primary" href="setCommission.php?type=a">Agent Commission</a></li>
								<li class=class="btn btn-primary "><a class="btn btn-primary" href="setCommission.php?type=c">Customer Commission</a></li>
							
						</ol>
					</div>
					
					
				</div>
			<div id="mytab">
				<div id="agent">
						<div class="row">
							<div class="col-md-12">
						
								 <table id="sort-table" class="table table-striped tablesorter">
									<thead>
										<tr>
											<th>No</th>
											<th>Amount From</th>
											<th>Amount Ending</th>
											<th>Value</th>
											<th>B% & S%</th>
											
										</tr>
									</thead>
									<tbody
									
									<?php //set table type for commission range btw agent & cust
									if(isset($_GET['type'])){$type=$_GET['type'];  } else { $type='a'; } ?>
									
					<?php $x=0; foreach($result as $result): ?>
										<tr>
											<td><?php echo $x=$x+1; ?></td>
											<td><?php echo $result->from; ?></td>
											<td><?php echo $result->to; ?></td>
											<td><?php echo $result->value; ?></td>
											<td><?php echo (100-$result->pa)."%"."  ".$result->pa."%"; ?></td>
											<td><a href="setCommission.php?
											rangeId=<?php echo urlformat($result->id) ?> & type=<?php echo ($type); ?>" 
											class="btn btn-primary" >Delete</a></td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								 </table>
							</div>
						</div>
				
						<div class="row">
							<div class="col-md-7 col-md-offset-2">
								<h3>New Commission Range , Value And %  Split</h3><br></br>
							</div>
						</div>
					<div class="panel-border">	
				
						<form name="form1" method="post" action="">
	<!--- iNPUT section -->		<div class="row">
							<div class="col-md-6">
								<div class="input-group input-group-md">
									<span class="input-group input-group-addon">
									Amount From
									</span>
									<input name="amountFrom" type="text" class="form-control" >
								</div>
								
								
							
							</div>
							
							<div class="col-md-6">
								<div class="input-group input-group-md">
									<span class="input-group input-group-addon">
									Amount To
									</span>
									<input name="amountTo" type="text" class="form-control" >
								</div>
							</div>
						</div>
						
							<br><br>
					<div class="row">
							<div class="col-md-6">
								<div class="input-group input-group-md">
									<span class="input-group input-group-addon">
									Value
									</span>
									<input name="value" type="text" class="form-control" >
								</div>
								
								
							
							</div>
							
							<div class="col-md-6">
								<div class="input-group input-group-md">
									<span class="input-group input-group-addon">
									% For Agent
									</span>
									<input name="rate" type="text" class="form-control" >
								</div>
							</div>
					</div>
									<br></br>
					<div class="row">
						<div class="col-md-4 col-md-offset-5">
							<input name="submit" type="submit" class="btn btn-primary">
						</div>
					</div>
				</div>
			</div>
						
		</div>	

			</form>
	</div>		

	
				<?php include('includes/footer.php'); ?>
				
		