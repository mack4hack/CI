<?php  include'header.php'; 
//echo "<pre>";
//print_r($data); die;
foreach ($data as $d){}
?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" >
		<div class="portlet-body">
            <div id="mack">
				<div class="row">
					<div class="col-md-12" >
						<div class="portlet light bordered">
								   <div class="portlet-title">
									<div class="caption">
										<i class="icon-bar-chart font-green-haze"></i>
										<span class="caption-subject bold uppercase font-green-haze">Admin Account</span>
									</div>
									<div class="caption" style="float:right">
										<i class="font-green-haze"></i>
										<span class="caption-subject bold uppercase font-green-haze">Total Balance : 
											<?php echo $d['day_total']; ?>
										</span>
									</div>
								  </div>
								
								<div class="portlet-body">
								 <table class="table table-bordered table-hover">
								   <thead>
								     <tr>
									<th>Date</th>
									<th>Credited</th>
									<th>Debited</th>
									<th>Total</th>
								    </tr>
								   </thead>
								   <tbody>
								   		<?php if(!empty($data)) { ?>
								     	<?php foreach ($data as $d) { ?>
									     	<tr class="active">
									     	 	<td><?php echo $d['timeslot']; ?></td>
									     	 	<td><?php echo $d['credited']; ?></td>
									     	 	<td><?php echo $d['debited']; ?></td>
									     	 	<td><?php echo $d['day_total']; ?></td>
						     	 	 		</tr>
								    	<?php 	} } 
								    	else echo "<tr class='active'><th style='text-align:center'; colspan='4'>No Records Found</th></tr>"; ?>
									</tbody>
								</table>
								</div>
							</div>
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

<script type="text/javascript" >
		$(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
  // FormValidation.init();
   //TableManaged.init();
});
</script>
<style type="text/css">
	@media print {
    #mack {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}
</style>
