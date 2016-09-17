<?php include 'includes/header.php'; ?>

<div class="col-md-9">

	<div class=" panel panel-default">
		<div class="panel-heading">
			<h3>Members View</h3>
		</div>
		
		<div class="panel-body">
			<table id="sort-table" class="table table-striped table-bordered tablesorter">
				<thead>
					<tr>
								<th>No </th>
								<th>Name <i class=""></i></th>
								<th colspan="4">General Quick View</th>
									
					</tr>
				</thead>
				
				
					<tbody>
										<?php $avater="noavatar.jpg";$x=0; foreach($dataResult as $result): ?>
										<tr>
										<td>
											<input type="checkbox" >
											<img src="<?php echo BASE_URI; ?>img/agent/photo/<?php  echo $result->myPhoto_name!==NULL?$result->myPhoto_name:$avater;?>" width="25" height="25" alt="..." class="img-thumbnail">
											<?php echo $x=$x+1; ?>
										</td>
										
										<td> <?php echo ucfirst($result->fname). " " . ucfirst($result->mname)." ".ucfirst($result->lname);   ?></td>
										<td>
												<i class="fa fa-user" aria-hidden="true">  <a href="memberPage.php?id=<?php echo $result->id; ?>"><a href="memberPage.php?id=<?php echo $result->id; ?>">View Profile </a> </i>																							
										</td>
										
										<td>
												<i class="fa fa-users" aria-hidden="true"> Customers:<?php echo  $result->countId; ?> </i>																							
										</td>
										
										<td>
												<i class="fa fa-shopping-cart" aria-hidden="true"> Pending:<?php echo  $result->transPending; ?> /  &#8358;<?php echo number_format($result->localPending,2); ?>	</i>																							
										</td>
										<td>
												<i class="fa fa-envelope" aria-hidden="true"></i> Email										
										</td>
										<?php endforeach; ?>
										
			</table>
		</div>
	</div>
</div>

<?php include 'includes/footer.php'; ?>