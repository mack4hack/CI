<?php include'header.php';?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Admin Lottery Chart <small>Where all data goes visual</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Charts</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Lottery Chart</a>
					</li>
				</ul>
<!--
				<div class="page-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						Actions <i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div>
-->
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					
					<!-- BEGIN ROW -->
					
					<!-- END ROW -->
					<!-- BEGIN ROW -->
					
					<!-- END ROW -->
					<!-- BEGIN ROW -->
					
					<!-- END ROW -->
					<!-- BEGIN ROW -->
					
					<!-- END ROW -->
					<!-- BEGIN ROW -->
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
												<a href="javascript:;" class="btn red">
															Time to next draw <i class="fa fa-edit"></i>
															</a>
											</div>
											<div class="col-sm-3">
												<a href="javascript:;" class="btn red">
															Current Result <i class="fa fa-edit"></i>
															</a>
											</div>
										</div>
									</div>
					<div class="row">
						<div class="col-md-6">
							<!-- BEGIN CHART PORTLET-->
							<div class="portlet light bordered">
								<div class="portlet-title">
									<div class="caption">
										<i class="icon-bar-chart font-green-haze"></i>
										<span class="caption-subject bold uppercase font-green-haze"> Admin Terminal Lottory</span>
									</div>
									
								</div>
								<div class="portlet-body">
								<table class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=0 ;$i<=9 ;$i++){ ?>
									
									<th><?php  $i = sprintf("%02d", $i);  echo $i;  ?></th>
									<?php }?>
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=0 ;$i<=9; $i++){ ?>
									
									<td><?php  echo $i+25;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=0 ;$i<=9; $i++){ ?>
									
									<td><?php  echo $i+65;?></td>
									<?php }?>
								</tr>
								</tbody>
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=10 ;$i<=19 ;$i++){ ?>
									
									<th><?php   echo $i;  ?></th>
									<?php }?>
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=10 ;$i<=19; $i++){ ?>
									
									<td><?php  echo $i+25;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=10 ;$i<=19; $i++){ ?>
									
									<td><?php  echo $i+35;?></td>
									<?php }?>
								</tr>
								</tbody>
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=20 ;$i<=29 ;$i++){ ?>
									
									<th><?php   echo $i;  ?></th>
									<?php }?>
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=20 ;$i<=29; $i++){ ?>
									
									<td><?php  echo $i+25;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=20 ;$i<=29; $i++){ ?>
									
									<td><?php  echo $i+35;?></td>
									<?php }?>
								</tr>
								</tbody>
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=30 ;$i<=39 ;$i++){ ?>
									
									<th><?php   echo $i;  ?></th>
									<?php }?>
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=30 ;$i<=39; $i++){ ?>
									
									<td><?php  echo $i+25;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=30 ;$i<=39; $i++){ ?>
									
									<td><?php  echo $i+35;?></td>
									<?php }?>
								</tr>
								</tbody>
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=40 ;$i<=49 ;$i++){ ?>
									
									<th><?php   echo $i;  ?></th>
									<?php }?>
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=40 ;$i<=49; $i++){ ?>
									
									<td><?php  echo $i+25;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=40 ;$i<=49; $i++){ ?>
									
									<td><?php  echo $i+35;?></td>
									<?php }?>
								</tr>
								</tbody>
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=50 ;$i<=59 ;$i++){ ?>
									
									<th><?php   echo $i;  ?></th>
									<?php }?>
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=50 ;$i<=59; $i++){ ?>
									
									<td><?php  echo $i+25;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=50 ;$i<=59; $i++){ ?>
									
									<td><?php  echo $i+35;?></td>
									<?php }?>
								</tr>
								</tbody>
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=60 ;$i<=69 ;$i++){ ?>
									
									<th><?php   echo $i;  ?></th>
									<?php }?>
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=60 ;$i<=69; $i++){ ?>
									
									<td><?php  echo $i+25;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=60 ;$i<=69; $i++){ ?>
									
									<td><?php  echo $i+35;?></td>
									<?php }?>
								</tr>
								</tbody>
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=70 ;$i<=79 ;$i++){ ?>
									
									<th><?php   echo $i;  ?></th>
									<?php }?>
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=70 ;$i<=79; $i++){ ?>
									
									<td><?php  echo $i+25;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=70 ;$i<=79; $i++){ ?>
									
									<td><?php  echo $i+35;?></td>
									<?php }?>
								</tr>
								</tbody>
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=80 ;$i<=89 ;$i++){ ?>
									
									<th><?php   echo $i;  ?></th>
									<?php }?>
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=80 ;$i<=89; $i++){ ?>
									
									<td><?php  echo $i+25;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=80 ;$i<=89; $i++){ ?>
									
									<td><?php  echo $i+35;?></td>
									<?php }?>
								</tr>
								</tbody>
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=90 ;$i<=99 ;$i++){ ?>
									
									<th><?php   echo $i;  ?></th>
									<?php }?>
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=90 ;$i<=99; $i++){ ?>
									
									<td><?php  echo $i+25;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=90 ;$i<=99; $i++){ ?>
									
									<td><?php  echo $i+35;?></td>
									<?php }?>
								</tr>
								</tbody>
								
								
								</table>	
								
								</div>
							</div>
							<!-- END CHART PORTLET-->
						</div>
						<div class="col-md-6">
							<!-- BEGIN CHART PORTLET-->
							<div class="portlet light bordered">
								<div class="portlet-title">
									<div class="caption">
										<i class="icon-bar-chart font-green-haze"></i>
										<span class="caption-subject bold uppercase font-green-haze"> 3D Pie Chart</span>
										<span class="caption-helper">bar and line chart mix</span>
									</div>
									
								</div>
								<div class="portlet-body">
								<h4>Single Digit First</h4>
									<table class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=0 ;$i<=9; $i++){ ?>
									
									<th><?php  echo $i;?></th>
									<?php }?>
									
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=0 ;$i<=9; $i++){ ?>
									
									<td><?php  echo $i+12;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=0 ;$i<=9; $i++){ ?>
									
									<td><?php  echo $i+15;?></td>
									<?php }?>
								</tr>
								</tbody>
								</table>	
								
								<h4>Single Digit Second</h4>
									<table class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>
										 Digit
									</th>
									<?php for($i=0 ;$i<=9; $i++){ ?>
									
									<th><?php  echo $i;?></th>
									<?php }?>
									
								</tr>
								</thead>
								<tbody>
								<tr class="active">
									<td>
										 Total Bets
									</td>
									<?php for($i=0 ;$i<=9; $i++){ ?>
									
									<td><?php  echo $i+12;?></td>
									<?php }?>
								</tr>
								<tr class="success">
									<td>
										 Total Payouts
									</td>
									<?php for($i=0 ;$i<=9; $i++){ ?>
									
									<td><?php  echo $i+15;?></td>
									<?php }?>
								</tr>
								</tbody>
								</table>	
								<div class="row">
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
								</div>
							</div>
							<!-- END CHART PORTLET-->
						</div>
					</div>
					<!-- END ROW -->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	
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
function renderTime() {
	var currentTime = new Date();
	var diem = "AM";
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
    var s = currentTime.getSeconds();
	setTimeout('renderTime()',1000);
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
}
renderTime();
</script>
<!-- CODE END -->
<!-- BEGIN FOOTER -->
<?php include'footer.php';?>
<!-- END FOOTER -->
