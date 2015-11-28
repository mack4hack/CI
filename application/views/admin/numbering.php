<?php include'header.php';
foreach ($lucky_numbers as $number) {
	//echo $number->lucky_number;
}
?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" >
		
		<div class="row">
		  <div class="col-md-12">
		    <div class="well margin-top-20">
				<div class="row">
					<div class="col-sm-3">
						<strong>Select Month : </strong>
						<select name="dealer" id="dealer">
						<option value="">--Select Month--</option>
						<?php foreach ($months as $month) { ?>
							<option value="<?php echo $month['no'];?>"><?php echo $month['name'];?></option>
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
										<span class="caption-subject bold uppercase font-green-haze">Monthly Numbering Chart</span>
									</div>
								  </div>
								
								<div class="portlet-body">
								 <table class="table table-bordered table-hover">
								   <thead>
								     <tr>
										<th>
											 Times Slots\Dates
										</th>
									     <?php for($i=01; $i<=31 ;$i++) { ?>
										  <th><?php echo $i; ?></th>
									     <?php	} ?>

								    </tr>
								   </thead>
								   <tbody>
								   <tr class="active">
								     	 <!-- <td> -->
									<!-- 	 <?php foreach ($time_slots as $time_slot) { ?>
										<tr><td><?php //echo $time_slot; ?></td> -->
										
 									<!-- 	<?php foreach ($lucky_numbers as $key => $number): ?>
											<?php if(!empty($number)){
												foreach ($number as $num) 
												{
													echo $num->digit;
												}
											} ?>
										<?php endforeach ?> -->
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<tr>
										<?php } ?>

									     <!-- </td> -->
								<!-- 	<?php for($i = 0 ; $i <= 9 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->bet_amount; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?> -->
									
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
<!-- BEGIN FOOTER -->
<?php include'footer.php';?>
<!-- END FOOTER -->
