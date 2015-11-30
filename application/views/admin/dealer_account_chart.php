				<div class="row">
					<div class="col-md-12" >
							<!-- BEGIN CHART PORTLET-->
							    <div class="portlet light bordered">
								   <div class="portlet-title">
									<div class="caption">
										<i class="icon-bar-chart font-green-haze"></i>
										<span class="caption-subject bold uppercase font-green-haze">Dealer Account</span>
									</div>
									<div class="caption" style="float:right;">
										<span class="caption-subject bold uppercase font-green-haze">Dealer : </span>
										<span class="caption-subject bold uppercase font-green-haze" id="dealername"></span>
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
										 Commission
									</th>
									<th>
										 Total
									</th>
								    </tr>
								   </thead>
								   <tbody>
								   <?php if(!empty($data)) { ?>
									   <tr class="active">
									     	<?php foreach ($data as $d) { ?>
									     	 	<td><?php echo $d['timeslot']; ?></td>
									     	 	<td><?php echo $d['credited']; ?></td>
									     	 	<td><?php echo $d['debited']; ?></td>
									     	 	<td><?php echo $d['commission']; ?></td>
									     	 	<td><?php echo $d['day_total']; ?></td>
						     	 	 	</tr>
								    <?php 	} }
								    else echo "<tr class='active'><th style='text-align:center'; colspan='5'>No Records Found</th></tr>"; ?>
								</tbody>
								</table>
								</div>
							</div>
							<!-- END CHART PORTLET-->
					</div>
					</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#dealername').text($('#dealer option:selected').text());
	})

</script>
