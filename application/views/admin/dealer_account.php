<?php  include'header.php'; 
//echo "<pre>";
//print_r($data); die;
?>
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
										<span class="caption-subject bold uppercase font-green-haze">Dealer Account</span>
									</div>
								  </div>
								
								<div class="portlet-body">
								 <table class="table table-bordered table-hover">
								   <thead>
								     <tr>
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
										 Total
									</th>
								    </tr>
								   </thead>
								   <tbody>
								   <tr class="active">
								     	<?php foreach ($data as $d) { ?>
								     	 	<td><?php echo $d['timeslot']; ?></td>
								     	 	<td><?php echo $d['credited']; ?></td>
								     	 	<td><?php echo $d['debited']; ?></td>
								     	 	<td><?php echo $d['day_total']; ?></td>
								     	 	
					     	 	 	</tr>
								    <?php 	} ?>
								   <!-- </tr> -->
								  
								   
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
