<?php include("includes/header.php");?>

<div class="col-md-9">
		<!---pagination header -->
			<?php include("includes/paging_header.php");?>
				
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>List Of Uploaded Identity</h2>			 
		</div>
		<div class="panel-body">
<!---member type navaigation -->	
				<?php include ('includes/navACAC.php'); ?>
			
			<table id="sort-table" class="table table-striped table-bordered tablesorter">
				<thead>
					 <tr>
								<th>No </th>
								<th>Name <i class=""></i></th>
								<th>Proof Of ID Uploaded  </th>
								<th>Proof Of ID Address Uploaded</th>							
						</tr>
				</thead>
				
				<tbody>
					 <?php $x=0;
								 foreach($dataResult as $result): ?>
								 
									<tr>
										<td><?php  echo $x=$x+1;?></td>
										<td><?php  echo ucfirst($result->fname). " " .ucfirst($result->lname);?></td>
										<td><?php  if($result->proofid_size > 0){echo 'YES';} else {echo 'NO';}?></td>
										<td><?php  if($result->proofad_size > 0){echo 'YES';} else {echo 'NO';}?></td>
									 </tr> 
									 
								<?php endforeach; ?>						
				</tbody>
			</table>
				<!---pagination footer -->
				<?php include("includes/paging_footer.php");?>
		</div>
	</div>
	<?php include('includes/footer.php'); ?>
</div>