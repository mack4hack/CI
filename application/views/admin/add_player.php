<?php include'header.php';?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Player Details
			</h3>
			
			<!-- BEGIN PAGE CONTENT-->
			
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
						<form action="" id="form_sample_1" method="POST"  class="form-horizontal">
						
						<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-red-sunglo"></i>
											<span class="caption-subject font-red-sunglo bold uppercase">Select Player City</span>
										</div>
										<div class="tools">
											<a href="" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="" class="reload">
											</a>
											<a href="" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
											<div class="form-body">
												<div class="row">
													<div class="col-md-3" style="display:none;">
														<div class="form-group">
															
															<div class="col-md-9">
																<select name="country_id" class="form-control" onchange="selectState(this.options[this.selectedIndex].value)">
								<option value="">Select country</option>
													<?php foreach($list->result() as $country)
																	{
																	echo "<option value=".$country->id.">".$country->name."</option>";
																	}																	
																		?>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-3">
														<div class="form-group has-error">
															<div class="col-md-9">
																<select name="state_id" class="form-control required" id="state_dropdown" onchange="selectCity(this.options[this.selectedIndex].value)">
								<option value="">Select state</option>
							</select><span id="state_loader"></span>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group has-error">
															<div class="col-md-9">
																<select name="city_id" onchange="selectDealer(this.options[this.selectedIndex].value)" class="form-control required" id="city_dropdown">
								<option value="">Select city</option>
							</select><span id="city_loader"></span>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group has-error">
															<div class="col-md-9">
																<select name="dealer_id"  class="form-control required" id="dealer_dropdown">
								<option value="">Select Dealer</option>
							</select><span id="dealer_loader"></span>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<h3 class="form-section">Player Info</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">First Name</label>
															<div class="col-md-9">
																<input type="text" name="fname" pattern="[a-zA-Z]+" data-required="1" class="form-control required" placeholder="Enter First Name">
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Last Name</label>
															<div class="col-md-9">
																<input type="text" name="lname" class="form-control required" placeholder="Enter Last Name">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>  
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Contact No</label>
															<div class="col-md-9">
																<input type="number" name="contact_no" minlength="10" maxlength="10" class="form-control text" placeholder="Enter Contact Number">
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Alternate No</label>
															<div class="col-md-9">
																<input type="number" maxlength="11" name="alternate_no" class="form-control" placeholder="Enter Alternate Number">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Email Id</label>
															<div class="col-md-9">
																<input type="email" name="email" onblur="email_check()" id="email" class="form-control" placeholder="Enter Email Id">
																<span id="email_status"></span>
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Gender</label>
															<div class="col-md-9">
																<select name="gender" class="form-control">
																	<option value="Male">Male</option>
																	<option value="Female">Female</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Pin</label>
															<div class="col-md-9">
																<input type="password" onkeyup="return myFunction()" name="password" id="pass1" class="form-control required" placeholder="Enter Password">
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Confirm Pin</label>
															<div class="col-md-9">
																<input type="password" onkeyup="return myFunction()" id="pass2" class="form-control required password valid" placeholder="Enter Confirm Password"> 
																 <p id="passmismatch"></p>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												
												<h3 class="form-section">Address</h3>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address 1</label>
															<div class="col-md-9">
																<input type="text" name="address1" placeholder="House name,street" class="form-control">
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Address 2</label>
															<div class="col-md-9">
																<input type="text" placeholder="Nearby landmark" name="address2"class="form-control">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">City</label>
															<div class="col-md-9">
																<input type="text" name="city_name" placeholder="Ex-Pune" class="form-control">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Pin Code</label>
															<div class="col-md-9">
																<input type="text" name="pincode" maxlength="6" minlength="6" placeholder="Ex-411032" class="form-control">
																<input type="hidden" id="temp" value="">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												
												<h3 class="form-section">Account Deatils</h3>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Initial Amount</label>
															<div class="col-md-9">
																<input type="text" name="deposited_amount" class="form-control">
															</div>
														</div>
													</div>
											
												</div>
												
												
												
												
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" id="submit" class="btn green">Submit</button>
																<button type="button" class="btn default">Cancel</button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										<!-- END FORM-->
									</div>
								</div>
								<div class="alert alert-danger display-hide">
									<button class="close" data-close="alert"></button>
									Oops...You have missed some input values. 
									<span id="alert-danger"></span>
								</div>
								<div class="alert alert-success display-hide">
									<button class="close" data-close="alert"></button>
									<!-- Data saved succesfully. -->
									<span id="alert-success"></span>
								</div>
								</form>
					<!-- END VALIDATION STATES-->
					<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>All Players
							</div>
							
						</div>
						<div class="portlet-body">
							
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th>
								<th>
									 Player Name
								</th>
								<th>
									 User Code
								</th>
								<th>
									 Contact Number
								</th>
								<th>
									 Activated Date
								</th>
								<th>
									 Status
								</th>
								<th>
									 Option
								</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach($this->Admin_model->get_players() as $dealer )
							{
								?>
							<tr class="odd gradeX">
							
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 <?php echo ucwords($dealer->first_name ." ".$dealer->last_name);?>
								</td>
								<td>
									<a href="#">
									<?php echo $dealer->user_code ?> </a>
								</td>
								<td>
									<?php echo $dealer->contact_no;?>
								</td>
								<td class="center">
									 <?php echo date("d-m-Y",strtotime($dealer->activation_date));?>
								</td>
								<td>
								<?php if($dealer->is_blocked =='1'){?>
									<span class="label label-sm label-danger">
									Blocked </span>
								<?php }else {?>
									<span class="label label-sm label-success">
									Active </span>
								<?php }?>
								</td>
								<td class="center">
									 <a class="btn default" data-toggle="modal" href="<?php echo base_url()."admin/edit/".$dealer->id ?>">
									Edit</a>
								</td>
							</tr>
							
							<?php } ?>	
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
				</div>
			</div>
			
			
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	
</div>
<!-- END CONTAINER -->
<!-- CODE FOR COUNTRY, STATE,CITY AUTO POPULATE -->
<script>
function selectState(country_id){
	//alert(country_id);
  if(country_id!="-1"){
    loadData('state',country_id);
    $("#city_dropdown").html("<option value=''>Select city</option>");
  }else{
    $("#state_dropdown").html("<option value=''>Select state</option>");
    $("#city_dropdown").html("<option value=''>Select city</option>");
  }
}
function selectCity(state_id){
	//alert(state_id);
  if(state_id!="-1"){
   loadData('city',state_id);
  }else{
   $("#city_dropdown").html("<option value=''>Select city</option>");
  }
}
function selectDealer(city_id){
	//alert(city_id);
  if(city_id!="-1"){
   loadData('dealer',city_id);
  }else{
   $("#dealer_dropdown").html("<option value=''>Select Dealer</option>");
  }
}
function loadData(loadType,loadId){
  var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
  $("#"+loadType+"_loader").show();
  $("#"+loadType+"_loader").fadeIn(400).html('<img src="<?php echo base_url()?>assets/global/img/loading-spinner-grey.gif" />');
  $.ajax({
    type: "POST",
    url: "<?php echo base_url()?>Admin/loadData",
    data: dataString,
    cache: false,
    success: function(result){
      $("#"+loadType+"_loader").hide();
      $("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");
      $("#"+loadType+"_dropdown").append(result);
    }
 });
}
function myFunction() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
		var msg = 'Password not matched';
        ok = false;
		document.getElementById("passmismatch").style.color = "#E34234";
		document.getElementById("passmismatch").innerHTML = msg;
		document.getElementById("submit").disabled = true;
		
    }
    else {
		var msg='Password match!';
		document.getElementById("passmismatch").style.color = "green";
		document.getElementById("pass1").style.borderColor = "green";
        document.getElementById("pass2").style.borderColor = "green";
        document.getElementById("passmismatch").innerHTML = msg;
		document.getElementById("submit").disabled = false;
		
    }
    return ok;
}
</script>
<!-- CODE END -->




<!-- BEGIN FOOTER -->
<?php include'footer.php';?> 
<!-- END FOOTER -->
<script src="<?php echo base_url()?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/pages/scripts/form-validation.js"></script> 
<script>
$(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   FormValidation.init();
  // TableManaged.init();
  selectState(1);
});
</script>
		 <script>
        $(document).ready(function (){
			//alert("in function");
            $("#form_sample_1").submit(function (e){
             var temp = $("#temp").val();
			   
			   if(temp!='')
			   {
				   
                e.preventDefault();
                var url = '<?php echo base_url()?>admin/ajax_player_data_save';
                var method = $(this).attr('method');
                var data = $(this).serialize();
				   //alert("temp:"+temp);
			   $("#submit").html('Saving Data...');
			    $.ajax({
                   url:url,
                   type:method,
                   data:data,
                   dataType:"JSON",
                   success : function(data){
	                   if(data.success == 'true')
	                    {   //alert(data);
							$("#submit").html('Save');
							$("#alert-success").html(data.msg);
	                        //$("#error").show('fast');
	                        //$('#error').delay(5000).fadeOut('slow');
							//location.reload(true);
	                        $('#form_sample_1')[0].reset();
	                    }
	                    else
	                    {	//alert(data);
	                    	$("#submit").html('Save');
							$("#alert-danger").html(data.msg);
							$('#form_sample_1')[0].reset();
	                    	//throw new Error('go');
	                    } 
                	}
                })
			   }
            });
             
            
             
        });
		//Code to check existing email id//
			function email_check()
			{
             var email = $("#email").val();
			  
				  //alert(email); 
                var url = '<?php echo base_url()?>admin/existing_email';
                var method = 'POST';
                var data = { email : email};
			   $("#email_status").html('Checking for email id...');
			    $.ajax({
                   url:url,
                   type:method,
                   data:data
                }).done(function(data){
				//var returnedData = JSON.parse(data);
				//alert(data);
                   if(data =='0')
                    {   //alert(data);
						$("#email_status").html('<font style="color:green">Accepted</font>');
						$('#submit').prop('disabled', false);
                    }
                    else
                    {	//alert(data);
						$("#email_status").html('<font style="color:red">Email already exist.</font>');
						$('#submit').prop('disabled', true);
                    } 
                });
			}
        </script>
