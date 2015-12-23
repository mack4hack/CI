
			<div class="portlet-body">
						<div class="nav-justified">
							<div class="tab-content">
								<table class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>
										 Sr No
									</th>
									<th>
										 Draw Time
									</th>
									<th>
										 Credit
									</th>
									<th>
										 Debit
									</th>
									<th>
										 Commission
									</th>
									<th>
										 Balance
									</th>
<!--									<th>
										 Profit Percentage
									</th>-->
									
								</tr>
								</thead>
								<tbody>
                    <?php if(!empty($data_daily)  ) {
                                          $i =1;      
                              foreach($data_daily as $dd){ $time = $dd['day'].$dd['timeslot_range']; ?>
                                  
                                <tr class="success">
									<td><?php echo $i; ?></td>
									<td><a href="<?php echo base_url("/admin/summary?time=$time"); ?>" ><?php echo $dd['draw_time']; ?></a></td>
									<td><?php echo $dd['credited']; ?></td>
									<td><?php echo $dd['debited']; ?></td>
									<td><?php echo $dd['commission']; ?></td>
									<td><?php echo $dd['profit']; ?></td>
<!--									<td><?php //echo $draw['profit']; ?></td>-->
								</tr> 
                                          
                                    <?php  $i++;  }                                                                                                                                       


                            }else{ ?>
                                
                                <tr class='active'><th style='text-align:center'; colspan='7'>No Records Found</th></tr>
                                
                                                                                           <?php  } ?>
								</tbody>
								</table>	
								
								</div>
							</div>
							
					</div>