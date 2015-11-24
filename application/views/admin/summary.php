
            <div class="row">
				  <div class="col-md-12">
				    <div class="well margin-top-20">
										<div class="row">
											<div class="col-sm-3">
												<select name="time_slot" id="time_slot">
													<?php foreach ($time_slots as $time_slot) { 
														
														$time = explode(' To ',$time_slot);
														
														if($time['1'] < date('Y-m-d H:i')){
														?>
														<option  value="<?php echo $time_slot; ?>"><?php echo $time_slot; ?></option>
													<?php }} ?>
												</select>
											</div>
											<div class="col-sm-2">
												<a href="javascript:;" class="btn red">
														Winning Number	<span id="lucky_number"><?php echo $lucky_number;  ?></span> 	

<!--
															<i class="fa fa-edit"></i>
-->

															</a>
											</div>
											
								
											<div class="col-sm-2">
												<a href="javascript:;" class="btn red">
														Total Bets All:  <span id="bet_amount"><?php if(!empty($total_payout->bet_amount)){
															echo $total_payout->bet_amount;
															}else{
																echo "0";
																}?></span>
<!--
														<i class="fa fa-edit"></i>
-->
															</a>
											</div>
								
											<div class="col-sm-2">
												<a href="javascript:;" class="btn red">
													Total Payout:		<span id="payout"><?php if(!empty($total_payout->payout)){
															echo $total_payout->payout;
															}else{
																echo "0";
																}?></span>
                    							</a>
											</div>
										
								
											
											
										</div>
					</div>
                  </div>
                </div>

            
				<div class="row">
					<div class="col-md-12" >
							<!-- BEGIN CHART PORTLET-->
							    <div class="portlet light bordered">
								
								   <div class="portlet-title">
									<div class="caption">
										<i class="icon-bar-chart font-green-haze"></i>
										<span class="caption-subject bold uppercase font-green-haze"> Combination Chart</span>
									</div>
								  </div>
								
								<div class="portlet-body">
								 <table class="table table-bordered table-hover">
								   <thead>
								     <tr>
									<th>
										 Digit
									</th>
								     <?php for($i=0; $i<=9 ;$i++) { ?>
									  <th><?php echo "0".$i; ?></th>
								     <?php	} ?>	
								    </tr>
								   </thead>
								   <tbody>
								   <tr class="active">
								     	 <td>
										 Total Bets
									     </td>
									<?php for($i = 0 ; $i <= 9 ; $i++){ 
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

												 }	?>
									
								   </tr>
								   <tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i = 0 ; $i <= 9 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
								</tr>
								   </tbody>
								
								
								<thead>
								<tr>
									<th>
										 Digit
									</th>
								<?php for($i=10; $i<=19 ;$i++) { ?>
									  <th><?php echo $i; ?></th>
								<?php	} ?>	
								  	
								</tr>
								</thead>
								<tbody>
								<tr class="active">
								     	 <td>
										 Total Bets
									     </td>
									<?php for($i = 10 ; $i <= 19 ; $i++){ 
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

												 }	?>
									
								   </tr>
								   <tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i = 10 ; $i <= 19 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
								</tr>
								</tbody>
									
								<thead>
								<tr>
									<th>
										 Digit
									</th>
								<?php for($i=20; $i<=29 ;$i++) { ?>
									  <th><?php echo $i; ?></th>
								<?php	} ?>	
								  	
								</tr>
								</thead>
								<tbody>
								<tr class="active">
								     	 <td>
										 Total Bets
									     </td>
									<?php for($i = 20 ; $i <= 29 ; $i++){ 
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

												 }	?>
									
								   </tr>
								   <tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i = 20 ; $i <= 29 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
								</tr>
								</tbody>
								
								
								<thead>
								<tr>
									<th>
										 Digit
									</th>
								<?php for($i=30; $i<=39 ;$i++) { ?>
									  <th><?php echo $i; ?></th>
								<?php	} ?>	
								  	
								</tr>
								</thead>
								<tbody>
								<tr class="active">
								     	 <td>
										 Total Bets
									     </td>
									<?php for($i = 30 ; $i <= 39 ; $i++){ 
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

												 }	?>
									
								   </tr>
								   <tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i = 30 ; $i <= 39 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
								</tr>
								</tbody>
								
								
								<thead>
								<tr>
									<th>
										 Digit
									</th>
								<?php for($i=40; $i<=49 ;$i++) { ?>
									  <th><?php echo $i; ?></th>
								<?php	} ?>	
								  	
								</tr>
								</thead>
								<tbody>
								<tr class="active">
								     	 <td>
										 Total Bets
									     </td>
									<?php for($i = 40 ; $i <= 49 ; $i++){ 
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

												 }	?>
									
								   </tr>
								   <tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i = 40 ; $i <= 49 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
								</tr>
								</tbody>
								
								
								<thead>
								<tr>
									<th>
										 Digit
									</th>
								<?php for($i=50; $i<=59 ;$i++) { ?>
									  <th><?php echo $i; ?></th>
								<?php	} ?>	
								  	
								</tr>
								</thead>
								<tbody>
								<tr class="active">
								     	 <td>
										 Total Bets
									     </td>
									<?php for($i = 50 ; $i <= 59 ; $i++){ 
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

												 }	?>
									
								   </tr>
								   <tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i = 50 ; $i <= 59 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
								</tr>
								</tbody>
								
								
								<thead>
								<tr>
									<th>
										 Digit
									</th>
								<?php for($i=60; $i<=69 ;$i++) { ?>
									  <th><?php echo $i; ?></th>
								<?php	} ?>	
								  	
								</tr>
								</thead>
								<tbody>
								<tr class="active">
								     	 <td>
										 Total Bets
									     </td>
									<?php for($i = 60 ; $i <= 69 ; $i++){ 
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

												 }	?>
									
								   </tr>
								   <tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i = 60 ; $i <= 69 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
								</tr>
								</tbody>
								<thead>
								<tr>
									<th>
										 Digit
									</th>
								<?php for($i=70; $i<=79 ;$i++) { ?>
									  <th><?php echo $i; ?></th>
								<?php	} ?>	
								  	
								</tr>
								</thead>
								<tbody>
								<tr class="active">
								     	 <td>
										 Total Bets
									     </td>
									<?php for($i = 70 ; $i <= 79 ; $i++){ 
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

												 }	?>
									
								   </tr>
								   <tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i = 70 ; $i <= 79 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
								</tr>
								</tbody>
								
								<thead>
								<tr>
									<th>
										 Digit
									</th>
								<?php for($i=80; $i<=89 ;$i++) { ?>
									  <th><?php echo $i; ?></th>
								<?php	} ?>	
								  	
								</tr>
								</thead>
								<tbody>
								<tr class="active">
								     	 <td>
										 Total Bets
									     </td>
									<?php for($i = 80 ; $i <= 89 ; $i++){ 
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

												 }	?>
									
								   </tr>
								   <tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i = 80 ; $i <= 89 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
								</tr>
								</tbody>
								
								
								<thead>
								<tr>
									<th>
										 Digit
									</th>
								<?php for($i=90; $i<=99 ;$i++) { ?>
									  <th><?php echo $i; ?></th>
								<?php	} ?>	
								  	
								</tr>
								</thead>
								<tbody>
								<tr class="active">
								     	 <td>
										 Total Bets
									     </td>
									<?php for($i = 90 ; $i <= 99 ; $i++){ 
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

												 }	?>
									
								   </tr>
								   <tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i = 90 ; $i <= 99 ; $i++){ 
											     $count = false; 
											    foreach ($jodi_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
								</tr>
								</tbody>
								</table>
								</div>
							</div>
							<!-- END CHART PORTLET-->
					</div>
					</div>
						

				 <div class="row">
						    <div class="col-md-12" >
							<!-- BEGIN CHART PORTLET-->
							<div class="portlet light bordered">
								<div class="portlet-title">
									<div class="caption">
										<i class="icon-bar-chart font-green-haze"></i>
										<span class="caption-subject bold uppercase font-green-haze">Single Digit First</span>
										
									</div>
									
								</div>
								
									<table class="table table-bordered table-hover">
										<thead>
										<tr>
											<th>
												 Digit
											</th>
										<?php for($i = 0 ;$i <= 9;$i++){ ?>

											<th><?php echo $i ;?></th>
										<?php	}?>
											
										</tr>
										</thead>
										<tbody>
										<tr class="active">
											<td>
												 Total Bets
											</td>
											<?php for($i = 0 ; $i <= 9 ; $i++){ 
											     $count = false; 
											    foreach ($first_digit_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->bet_amount; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
										   	
										</tr>
										<tr class="success">
											<td>
												 Total Payouts
											</td>
											<?php for($i = 0 ; $i <= 9 ; $i++){ 
											     $count = false; 
											    foreach ($first_digit_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
											
										</tr>
										</tbody>
										</table>	
								</div>
							</div>	
							</div>	
										
						   
                             <div class="row">
								 <div class="col-md-12" >
								   <div class="portlet light bordered">
								     <div class="portlet-title">
									  <div class="caption">
										<i class="icon-bar-chart font-green-haze"></i>
										<span class="caption-subject bold uppercase font-green-haze">Single Digit Second </span>
									  </div>
									 </div>
										<table class="table table-bordered table-hover">
										<thead>
										<tr>
											<th>
												 Digit
											</th>
										<?php for($i = 0 ;$i <= 9;$i++){ ?>

											<th><?php echo $i ;?></th>
										<?php	}?>
											
										</tr>
										</thead>
										<tbody>
										<tr class="active">
											<td>
												 Total Bets
											</td>
											<?php for($i = 0 ; $i <= 9 ; $i++){ 
											     $count = false; 
											    foreach ($second_digit_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->bet_amount; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
										   	
										</tr>
										<tr class="success">
											<td>
												 Total Payouts
											</td>
											<?php for($i = 0 ; $i <= 9 ; $i++){ 
											     $count = false; 
											    foreach ($second_digit_data->result() as $fd ) { 
                                                 if($i == $fd->digit ){ 
                                                 $count = true;	?>
												  <td><?php echo $fd->payout; ?></td>

												<?php } 

												}
												if($count == false){ ?>

													<th></th>
												
												<?php }

												 }	?>
											
										</tr>
										</tbody>
										</table>	
									
								</div>
								</div>
								</div>
			
								
										
					 	<script type="text/javascript" >
		$(document).ready(function() {   
			
			//$('#mack').hide();
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   ///FormValidation.init();
   //TableManaged.init();
});


     $('#time_slot').on('change',function(){
		 
		 	    var time_slot = $(this).val();
		 	    time_slot = encodeURIComponent(time_slot);
		 	    $('#mack').load('<?php echo base_url("/admin/summary?time="); ?>'+time_slot,function () { });
		 	    //~ jQuery.ajax({
				//~ type: "POST",
				//~ url: "<?php echo base_url(); ?>" + "admin/Summary",
				//~ dataType: 'json',
				//~ data: {time: time_slot},
				//~ success: function(res) {
					 //~ 
					  //~ $('#mack').html();
					  //~ 
				  //~ }
				//~ });
	   
	
	});





</script>


