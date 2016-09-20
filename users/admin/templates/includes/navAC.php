			<ol class="breadcrumb">
					<div class="linkhead">
						<div class="row">
							<div class="col-md-10 col-md-offset-2">
							<?php 
							$filem =url();
								$file2 = substr($filem, ($pos = strpos($filem, '?')) !== false ? $pos + 0 : 0);
								$file=str_replace($file2, '', $filem);
								$file = basename($file);
							?>
<!--for customer,agent-customer,full-package------>
							 <?php if((getUser()['level']=='1')|| (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
								<li><a href="<?php echo $file; ?>?type=c" class="btn btn-primary">For <span class="shadow">Customers</span></a></li>
							<?php endif; ?>

							<!--for agent,agent-customer,full-package------>							
							 <?php if((getUser()['level']=='2')|| (getUser()['level']=='3') || (getUser()['level']=='4') ): ?>
								<li><a href="<?php echo $file; ?>?type=a" class="btn btn-primary"> For <span class="shadow">Agents</span></a></li>
							<?php endif; ?>
								
							</div>
						</div>
					</div>
			</ol>