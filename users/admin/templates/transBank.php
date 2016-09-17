<?php include('includes/header.php'); ?>


<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">
			<header>
				<h2>Banks For Transaction</h2>
			</header>
		</div>
		<div class="panel-body">
			<form name="form1" method="post" action="#">
				<div class="row">
					<div class="col-md-5 col-md-offset-4">
						 <div class="topheading">
							<h3>Select Bank Type </h3>
						</div>
					</div>
				</div><p>
				<div class="row">
			<!---button options--->
					<div class="col-md-2 col-md-offset-2">
							<div class="input-group input-group-sm">
											<span class="input-group-addon">For Bank</span>
											<input type="radio" name="option" id="option" class="form-control" value="bank" checked>	
							</div>											
					</div>
					<div class="col-md-2 col-md-offset-2">					 
							<div class="input-group input-group-sm">
											<span class="input-group-addon">For PickUp</span>
											<input type="radio" name="option" id="option" class="form-control" value="pickup">
							</div>					
					</div>
				</div>
			<!--buttons ends here-->
			
			<!---textboxand submit-------->
				<div class="row">
					<br/>
					<div class="col-md-6 col-md-offset-1">
							<div class="input-group input-group-md">
											<span class="input-group-addon">New  Bank</span>
											<input type="text" name="newBank" id="option" class="form-control" placeholder="Enter New Bank">
							</div>																		
					</div>
					<div class="col-md-4">
								<input type="submit" name="submit" class="btn btn-primary " value="submit">
								
					</div>
					
				</div>
				<br>
				<!--Result of Stored Banks-->
					<div class="row">
						<div class="col-md-9 col-md-offset-1">
							<table  id="sort-table" class="table table-striped table-bordered tablesorter">
								<thead>
									<tr>
										<th>NO</th>
										<th>BANKS</th>
										<th>Type</th>	
										<th>Delete</th>
									</tr>
								<thead>
								<tbody>
									 <?php $x=0;
								 foreach($dataResult as $result): ?>
								 
									<tr>
										<td><?php  echo $x=$x+1;?></td>
										<td><?php  echo ucfirst($result->bank);?></td>
										<td><?php echo $status=$result->status =='p' ? 'Pick Up': 'Bank Account';?> </td>
										<td><a class="btn btn-primary" href="transBank.php?id=<?php echo $result->id; ?>">Delete</a></td>
									 </tr> 
									 
								<?php endforeach; ?>						
				</tbody>
								</tbody>
							</table>
						</div>
					</div>
			</form>
			</div>
		</div>
	</div>
</div>
<?php include('includes/footer.php'); ?>