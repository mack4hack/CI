<?php  include'header.php'; 
//echo "<pre>";
//print_r($data); die;
foreach ($data as $d){}
?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" >
		<table class="print">
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
	    </table>




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
    .print {
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
