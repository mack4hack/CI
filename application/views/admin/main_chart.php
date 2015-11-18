<?php include'header.php';
date_default_timezone_set('Asia/Calcutta');
$date = new DateTime();
$current_timestamp = $date->getTimestamp();
?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			
			


                <div class="row">
				  <div class="col-md-12">
				    <div class="well margin-top-20">
										<div class="row">
											<div class="col-sm-3">
												<a href="<?php echo base_url()?>admin/info" class="btn red">
															Info <i class="fa fa-edit"></i>
															</a>
											</div>
											<div class="col-sm-3">
												<div id="clockDisplay" class="clockStyle"></div>
											</div>
											<div class="col-sm-3">
												<div id="countdownDisplay" class="clockStyle"></div>
											</div>
											<div class="col-sm-3">
												<a href="javascript:;" class="btn red">
															Current Result <i class="fa fa-edit"></i>
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


								
				           <div class="row" class="col-sm-12">
											<div class="col-sm-3">
												<b>Total Bets All</b>
											</div>
											<div class="col-sm-3">
												<a href="javascript:;" class="btn red">
														XX <i class="fa fa-edit"></i>
															</a>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control" placeholder="Enter Result">
											</div>
											<div class="col-sm-3">
												<button type="button" class="btn btn-primary">Execute</button>
											</div>
								</div>	
								<BR>
								<div class="row">
											<div class="col-sm-3">
												<b>Winning Number</b>
											</div>
											<div class="col-sm-3">
												<a href="javascript:;" class="btn red">
														XX <i class="fa fa-edit"></i>
															</a>
											</div>
											<div class="col-sm-3">
												
											</div>
											<div class="col-sm-3">
												
											</div>
								</div>
								<BR>
								<div class="row">
											<div class="col-sm-3">
												<b>Total Payouts</b>
											</div>
											<div class="col-sm-3">
												<a href="javascript:;" class="btn red">
														XX <i class="fa fa-edit"></i>
															</a>
											</div>
											<!--<div class="col-sm-4">
												<button type="button" class="btn btn-primary">Primary</button>
											</div>-->
											
								</div>			
					 




			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			
	<!-- END CONTENT -->
	
</div>
</div>
<!-- END CONTAINER -->
<!-- CODE FOR DIGITAL CLOCK -->
<style>
.clockStyle {
	background-color:#cb5a5e;
	padding:6px;
	color:#fff;
	font-family:"Arial Black", Gadget, sans-serif;
    font-size:16px;
    font-weight:bold;
	letter-spacing: 2px;
	display:inline;
}
</style>
<script>
	flag = true;
	timer = '';
	var diem = "AM";
	setInterval(function(){renderTime();},1000);
	function renderTime() {
		if ( flag ) {
			timer = <?php echo $current_timestamp;?>*1000;
		}
		var d = new Date(timer);

		var h = d.getHours();
		var m = d.getMinutes();
		var s = d.getSeconds();

	    if (h == 0) {
			h = 12;
		} else if (h > 12) { 
			h = h - 12;
			diem="PM";
		}
		if (h < 10) {
			h = "0" + h;
		}
		if (m < 10) {
			m = "0" + m;
		}
		if (s < 10) {
			s = "0" + s;
		}
	    var myClock = document.getElementById('clockDisplay');
		myClock.textContent = h + ":" + m + ":" + s + " " + diem;
		myClock.innerText = h + ":" + m + ":" + s + " " + diem;

		flag = false;
		timer = timer + 1000;
	}
	renderTime();

	flag1 = true;
	timer1 = '';
	setInterval(function(){countdown();},1000);
	function countdown() {
		if ( flag1 ) {
				timer1 = <?php echo $current_timestamp;?>*1000;
			}
		var d = new Date(timer);
		
		var h1 = d.getHours();
		var m1 = d.getMinutes();
		var s1 = d.getSeconds();

	    if (h1 == 0) {
			h1 = 12;
		} else if (h1 > 12) { 
			h1 = h1 - 12;
			diem="PM";
		}
		if (h1 < 10) {
			h1 = "0" + h1;
		}
		/*if (m < 10) {
			m = "0" + m;
		}*/
		if (m1 >= 45) {
			m1 = 59-m1;
		}
		else if (m1 >= 30) {
			m1 = 44-m1;
		}
		else if (m1 >= 15) {
			m1 = 29-m1;
		}
		else if (m1 < 15) {
			m1 = 14-m1;
		}if(m1 < 10){
			m1 = "0" + m1;
		}
		
		if(s1 == 60)
		{
		   s1 = "00";
		}
		else if(s1 == 0)
		{
		   s1 = "0";
		}
		else if(s1 > 0 && s1 < 60)
		{
		   s1 = 60 - s1;
		}
		 if(s1 < 10)
		{
		   s1 = "0" + s1;
		}

	    var myClock = document.getElementById('countdownDisplay');
		myClock.textContent = m1 + ":" + s1 + " Sec";
		myClock.innerText = m1 + ":" + s1 + " Sec";

		flag1 = false;
		timer1 = timer1 + 1000;
	}
	countdown();
</script>
<!-- CODE END -->
<!-- BEGIN FOOTER -->
<?php include'footer.php';?>
<!-- END FOOTER -->
