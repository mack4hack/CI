<?php  include'header.php'; 
//echo "<pre>";
//print_r($data); die;
?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" >
				<div class="row">
				  <div class="col-md-12">
				    <div class="well margin-top-20">
						<div class="row">
							<div class="col-sm-3">
								<strong>Select Dealer Account : </strong>
								<select name="dealer" id="dealer">
								<option value="">--Select Dealer--</option>
								<?php foreach ($dealers as $dealer) { ?>
									<option value="<?php echo $dealer->id;?>"><?php echo $dealer->first_name.' '.$dealer->last_name;?></option>
								<?php } ?>
								</select>
							</div>
						</div>
					</div>
                  </div>
                </div>
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
<script type="text/javascript" >
		$(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
  // FormValidation.init();
   //TableManaged.init();

   $('#dealer').on('change',function(){
 	    var dealer = $(this).val();
 	    $('#mack').load('<?php echo base_url("/admin/dealerAccountChart?dealer="); ?>'+dealer,function () { });
	});

});
</script>