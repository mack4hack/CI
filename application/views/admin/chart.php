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
								
								<div class="portlet-body" id="mack">
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


			