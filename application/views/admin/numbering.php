<?php include'header.php';?>
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
								   <?php foreach($data as $key =>$value ) { 
                                                                                                                                                        if($key == 0) {  ?> 
                                                                                                                                                         <thead>   <tr>
                                                                                                                                                          <?php  foreach($value as $a =>$b) {?>
                                                                                                                                                         
								                 <th><?php echo $b['digit']; ?></th>
							                          
                                                                                                                                                   <?php } ?>  
                                                                                                                                                    </tr></thead>
                                                                                                                                                   <?php }else{ ?>
                                                                                                                                                       
                                                                                                                                                       <tbody>   <tr>
                                                                                                                                                          <?php  foreach($value as $a =>$b) {?>
                                                                                                                                                            <?php if($a == 0){  ?>
                                                                                                                                                               <th><?php echo $b['digit']; ?></th>
                                                                                                                                                          <?php } else { ?>
                                                                                                                                                            <td><?php echo $b['digit']; ?></td>
                                                                                                                                                              <?php }  ?>
                                                                                                                                                   <?php } ?>  
                                                                                                                                                    </tr></tbody>
                                                                                                                                                       
                                                                                                                                                       
                                                                                                                                                  <?php } ?>  
                                                                                                                                                   <?php } ?>  
                                                                    
                                                                                                                                                
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
