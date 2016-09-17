
<?php include('includes/header.php'); ?>
			
				
					 
			

          <div class="col-md-9">
		  
            <span style="float:right;"><?php echo $pages; ?>
					 <?php echo $items; ?></span>
					
					<nav style="float:right;">
					 <ul class="pagination">
					<?php echo $pagin;?>
					</ul>
					</nav>
		
		
			
			
           <ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <?php if( (getUser()['type']=='agent')&& !isset($_GET['agr']) ): ?>
					  <li class="active"><a href="sendersReceivers.php">Senders</a></li>
					  <?php endif; ?>
					  
					   <?php if(( getUser()['type']=='customer')&& !isset($_GET['agr']) ): ?>
					  <li class="active">Receiver</li>
					  <?php endif; ?>
					  
					  <?php if(( getUser()['type']=='agent')&& isset($_GET['agr']) ): ?>
					  <li class=""><a href="sendersReceivers.php">Senders</a></li>
					   <li class="active">Receiver</li>
					  <?php endif; ?>
					</ol>
			
           <table id="sort-table" class="table table-striped tablesorter">
              <thead>
              <tr>
			<th>No </th>
			<th>Sender <i class="caret"></i></th>
			<th>Mobile <i class="caret"></i></th>
			<th>Activity </th>
			
			<!--- senderList -->
			<?php if((getUser()['type']=='agent')&& !isset($_GET['agr']) ): ?>
			<th>Set-Up Receiver</th>
			<th>Modify</th>			
			<th>View</th>		
			<?php endif; ?>
			
			<!--- customer receiver &&  agent customer receiver column fields **************-->
			
			<?php if((getUser()['type']=='customer') || isset($_GET['agr']) ): ?>
			<th>Bank</th>
			<th>Transfer</th>
			<th>Acct No</th>
			<th>identity</th>
			<th>Modify</th>
			<?php endif; ?>
			
			<!--- ends here ***************** -->
			
			<th>Send</th>
			</tr>
			<thead>
			<tbody>
             <?php $x=0; foreach($trans_result as $result): ?>
			<tr>
                <td><?php  echo $x=$x+1;?></td>
				<?php if((getUser()['type']=='agent')&& !isset($_GET['agr']) ): ?>   <!-- Senders List--(Name)-->
				<td><?php  echo firstCap($result->title)." ".firstCap($result->fname)." ". firstCap($result->lname);?></td>
				<?php endif; ?>
					
				<?php if((getUser()['type']=='customer') || isset($_GET['agr']) ): ?>	<!-- Customers Receiver / Sender Receivers List-(Name)-->
				<td><?php  echo  firstCap($result->b_fname)." ". firstCap($result->b_lname);?></td>
				<?php endif; ?>
				
				<?php if((getUser()['type']=='agent')&& !isset($_GET['agr']) ): ?> <!-- Senders List--(Mobile)-->
				<td><?php  echo $result->mnumber;?></td>
				<?php endif; ?>
				
				<!--- Customer receiver / Sender  Receiver list >
				<?php if((getUser()['type']=='customer') ||isset($_GET['agr']) ): ?> <!--- Customer receiver / Sender  Receiver list(Mobile)-->
				<td><?php  echo $result->b_phone;?></td>
				<?php endif; ?>
				
				<!--Activity(Previous Transaction)-->
				<td><a href="prevTrans.php?receivertId=<?php echo urlFormat($result->id) ?>" class="btn btn-primary"> <?php echo $result->countTrans; ?></a></td>
				
				<!---- Agent Customer List / SenderList(New Receiver) ***************************************---->
				<?php if((getUser()['type']=='agent')&& !isset($_GET['agr']) ): ?>
				<td>
				<a class="btn btn-primary btn-lg" href="cReceiver.php?agcid=<?php echo urlFormat($result->id);?> & name=<?php echo urlFormat(($result->fname).'-'. ($result->lname));?>" >New Receiver  <i class="fa fa-users fa-lg"></i> </a>		
				</td>
				<?php endif; ?>
				
				
			
				<?php // customer receiver and agent receiver column list fields **************************************** ?>
				<?php if((getUser()['type']=='customer') || isset($_GET['agr']) ): ?> 
				<td><?php  echo $result->bank;?></td>									<!---bank--->
				<td><?php  echo $result->b_transfer;?></td>								<!---Transfer Type--->
				<td><?php  echo $result->b_actno;?></td>								<!---Account No--->
				<td><?php  echo $result->b_idtype;?></td>								<!---Id--->
				<?php endif; ?>
				<?php //  ********************ends here******************** ?>
				
				<?php //  ******************** agent & customer 'modify'******************** ?>
				<?php if( ((getUser()['type']=='agent') && !isset($_GET['agr']) )  ):  ?>
				<td> <a href="acModify.php?agcid=<?php echo urlFormat($result->id); ?>" class="btn btn-info">Modify</a></td>	<!---Agent Sender / Customer(modify)--->
				<?php endif; ?>
				
				<?php //  *********customer receiver  'modify'******************** ?>
				<?php if(getUser()['type']=='customer'  ):  ?>
				<td> <a href="cReceiver.php?rid=<?php echo urlFormat($result->id); ?> & name=" class="btn btn-info">Modify</a></td> <!--- Customer Receiver(modify)--->
				<?php endif; ?>
				
				<?php //  **********or agent customer receiver 'modify'******************** ?>
				<?php if( isset($_GET['agr'])) :  ?>
				<td> <a href="cReceiver.php?rid=<?php echo urlFormat($result->id); ?> & name=<?php echo urlFormat($result->b_fname.'-'.$result->b_lname); ?>" class="btn btn-info">Modify</a></td>
				<?php endif; ?>
				
				<!---- Agent Customer List (view) ***************************************---->
				<?php if((getUser()['type']=='agent')&& !isset($_GET['agr']) ): ?>
				<td> <a href="sendersReceivers.php?agcid=<?php echo urlFormat($result->id) ; ?> & agr=<?php echo urlFormat('agr'); ?>" class="btn btn-success"><i class="fa fa-user fa-sm">View</a></td>
				<?php endif; ?>
				<!---- ends here ****************************************-->
				
				<?php //for customer send money ?>
				<?php if((getUser()['type']=='customer')): ?>
				<td> <a href="sendMoney.php?rid=<?php echo urlFormat($result->id); ?>" class="btn btn-danger"><i class="fa fa-money fa-lg"> Send Money</a></td>
					<?php endif; ?>
				
				<?php //for Agent send money ?>
				<?php if((getUser()['type']=='agent')): ?>
						
						<?php	if(isset($_GET['agr'])): ?>
							<td><a href="sendMoney.php?rid=<?php echo urlFormat($result->id); ?>& agcid=<?php echo $agcid;?>"  class="btn btn-danger"><i class="fa fa-money fa-lg">  Send Money</a></td>
						<?php  endif; ?>
						
						<?php if(!isset($_GET['agr'])): ?>
							<td> <a href="sendMoney.php?agcid=<?php echo urlFormat($result->id); ?>"  class="btn btn-danger"><i class="fa fa-money fa-lg"> Send Money</a></td>
						<?php endif; ?>
					
					<?php endif; ?>
					
						
				
              </tr>
			  <?php endforeach; ?>
			  </tbody>
            </table>
			
			
			
		<?php // Pagination start here ********************************************************* ?>
			 <div style="text-align:center;"><?php echo $pages; ?>
			 <?php echo $items; ?></div>
			
			<nav style="text-align:center;">
			 <ul class="pagination">
			<?php echo $pagin;?>
			</ul>
			</nav>
		
			






            <hr>

          
          </div>
        </div>
      </div>

    </section>

    <?php include('includes/footer.php'); ?>
  </body>
</html>
