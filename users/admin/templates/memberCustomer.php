<?php include "includes/header.php";?>

<div class="col-md-9">
	<!---pagination header -->
			<?php include("includes/paging_header.php");?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Customer List For </h3>
		</div>
		<div class="panel-body">
			<table id="sort-table" class="table table-striped table-bordered tablesorter">
				<thead>
					<tr>
						<strong>
							<th>id</th>
							<th>Customer</th>
							<th>Phones</th>
							<th>Registed</th>
							<th>Address</th>
							<th>Delete</th>
							<th>Modify</th>
						</strong>
					<tr>					
				</thead>
				<tbody>
				 <?php $x=0;
								 foreach($dataResult as $result): ?>
								 
									<tr>
										<td><?php  echo $x=$x+1;?></td>
										<td><?php  echo ucfirst($result->fname). " " .ucfirst($result->lname);?></td>
										<td><?php   echo ucfirst($result->pnumber). " / " .ucfirst($result->mnumber);?></td>
										<td><?php   echo ucfirst($result->date_reg);?></td>
										<td><?php   echo ucfirst($result->address);?></td>
										<td><a href="delete.php?id=<?php echo $result->id; ?>&type=ac"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></td>
										<td><a href=""><i class="fa fa-pencil" aria-hidden="true"></i>Modify</a></td>
									 </tr> 
									 
								<?php endforeach; ?>		
				</tbody>
			
			</table>
		</div>
	</div>
		<!---pagination header -->
			<?php include("includes/paging_footer.php");?>

</div>

<?php include "includes/footer.php";?>