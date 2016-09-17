<?php include "includes/header.php" ?>

<div class="col-md-9">

	<div class="row">
		<div class="col-md-6 col-md-offset-3>">
			<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active"> Turnover</li>
						</ol>
		</div>
		
		<div class="row">
					<div class="col-md-12">
							   <table id="sort-table" class="table table-striped tablesorter">
								  <thead>
								  <tr>
								<th>Year </th>
								<th>Month <i class=""></i></th>
								<th>No Trans</th>
								<th>Total Sent &pound; <i class=""></i></th>
								<th>C_B</th>
								<th>C-ag</th>
								<th>Total Col</th>
								
								</tr>
								<thead>
								<tbody>
										<?php foreach($result as $result): ?>
									<tr>
										<td> <?php echo $result->year ; ?></td>
										<td> <?php echo $result->month ; ?></td>
										<td> <?php echo $result->counted ; ?></td>
										<td> <?php echo number_format(($result->amtsend),2) ; ?></td>
										<td> <?php echo number_format(( $result->coma),2) ; ?></td>
										<td> <?php echo number_format(( $result->comd),2) ; ?></td>
										<td> <?php echo number_format(($result->total_amount),2) ; ?></td>
									</tr>
								</tbody>
									<?php endforeach; ?>
	</div>



</div>