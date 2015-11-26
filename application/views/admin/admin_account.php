<?php include'header.php'; ?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" >
            <div id="mack">
				<div class="row">
					<div class="col-md-12" >
							<!-- BEGIN CHART PORTLET-->
							    <div class="portlet light bordered">
								
								   <div class="portlet-title">
									<div class="caption">
										<i class="icon-bar-chart font-green-haze"></i>
										<span class="caption-subject bold uppercase font-green-haze">Admin Account</span>
									</div>
								  </div>
								
								<div class="portlet-body">
								 <table class="table table-bordered table-hover">
								   <thead>
								     <tr>
									<th>
										 ID
									</th>
									<th>
										 Date
									</th>
									<th>
										 Credited
									</th>
									<th>
										 Debited
									</th>
									<th>
										 Remaining
									</th>
								<!--      <?php for($i=0; $i<=9 ;$i++) { ?>
									  <th><?php echo "0".$i; ?></th>
								     <?php	} ?>	 -->
								    </tr>
								   </thead>
								   <tbody>
								   <tr class="active">
								     	<?php foreach ($data as $d) { ?>
								     	 	<tr><td><?php echo $d->id ?><td></tr>
								     	 	<tr><td><?php echo $d->game_type ?><td></tr>
								    <?php 	} ?>
								   </tr>
								   
								</tbody>
								</table>
								</div>
							</div>
							<!-- END CHART PORTLET-->
					</div>
					</div>
						

				 
											
								</div>			
					 




			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			
	<!-- END CONTENT -->
	
</div>
</div>
<!-- END CONTAINER -->
<!-- CODE FOR DIGITAL CLOCK -->

<!-- CODE END -->
<!-- BEGIN FOOTER -->
<?php include'footer.php';?>

<!-- END FOOTER -->
