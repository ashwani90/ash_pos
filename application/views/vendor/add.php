
<?php //include('header.php'); ?>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#state").change(function (){
				console.log("in jquery");
				$("#city").val('');
				var state_id = $("#state").val();

				$.ajax({ 
					type: 'POST',
					dataType: 'json',
					url: "<?php echo base_url(); ?>"+  "index.php/store/Store_dashboard/getcity/"+state_id ,
					
					success: function(data){
						console.log((data));
						console.log(data.city.length);
       					//console.log(data['city']);
       					$("#city").append('<option selected disabled >Select City </option>');
       					for (var i = 0; i < data.city.length; i++) {
                        // console.log(data.city[i]);
                        // console.log(data.city[i].city);
                        // var name = new Option(data.city[i].city);  
                        // $("#city").append(name); value="'+ data.city[i].id +'" 
                        $("#city").append('<option value= '+ data.city[i].id +'>'+ data.city[i].city +'</option>');

                    }
                }


            });
			});	
		});

	</script>
</head>


<section class="body-content">
	<div class="container">
		<div class="row">
			<div class="col-md-2 panel-box5">
				<div class="panel panel-default">
					<div class="panel-heading"><a href="<?php echo base_url().'index.php/vendor/Vendor_dashboard/viewVendor'; ?>">Vendor</a></div>
					<div class="panel-body"><a href="dashboard.php"><img src="<?php echo base_url() .'images/packing.png';?>" style="width:110px;height:100px;margin-left: 10px;"></a></div>
				</div>
			</div>
			<div class="col-md-2 panel-box22">
				<div class="panel panel-default">
					<div class="panel-heading"><a href="product-form.php">Add Vendor</a></div>
					<div class="panel-body"><a href="product-form.php"><img src="<?php echo base_url() .'images/bag-icon.png';?>" style="width:110px;height:100px;margin-left: 10px;"></a></div>
				</div>
			</div>
			<div class="col-md-2 panel-box22">
				<div class="panel panel-default">
					<div class="panel-heading"><a href="<?php echo base_url().'index.php/vendor/Vendor_dashboard/viewVendor'; ?>">View Vendor</a></div>
					<div class="panel-body"><a href="product-form.php"><img src="<?php echo base_url() .'images/bag-icon.png'; ?>" style="width:110px;height:100px;    margin-left: 10px;"></a></div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Add Vendor
					</div>
					<div class="panel-body">
						<h4 style="color: red; font-family: verdana;"><?php if(isset($msg)){echo $msg;} ?></style></h4>
						<div class="row">
							<form id="addStore" action="<?php echo base_url().'index.php/vendor/Vendor_dashboard/saveVendor'; ?>" method="post">
								<div class="col-md-4">
									<div class="form-group"> 
										<div class="col-md-12">
											<label class="control-label" for="fn">Vendor Name</label> 
											<input id="fn" name="vendor_name" type="text" placeholder="Vendor Name" class="form-control input-md" 
											value="<?php echo set_value('vendor_name'); ?>">
											<?php echo form_error('vendor_name'); ?>
										</div>
									</div>
									
									<div class="form-group"> 
										<div class="col-md-12">
											<label class="control-label" for="ln">State</label>
											<select id="state" name="state" class="form-control input-md" required="">
												<option selected disabled  >Select State</option>
												<?php

												foreach ($state as $state) { ?>
												<option value="<?php echo $state['id']; ?>"><?php echo $state['states']; ?></option> 
												<?php }?>

											</select>
											<?php echo form_error('state'); ?>

										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-12">
											<label class="control-label" for="cmpny">Load Size</label>
											<input  name="load_size" type="text" placeholder="Load Size" class="form-control input-md"
											value="<?php echo set_value('load_size'); ?>">
											<?php echo form_error('load_size'); ?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<label class="control-label" for="email">Select Store</label>
											<input id="website" name="store" type="text" placeholder="Store" class="form-control input-md" 
											value="<?php echo set_value('store'); ?>">
										</div>
									</div>
									<br><br>
									<h3>Bank Details</h3>
									<div class="form-group"> 
										<div class="col-md-12">
											<label class="control-label" for="fn">Bank Name</label> 
											<input id="fn" name="bank_name" type="text" placeholder="Bank Name" class="form-control input-md" 
											value="<?php echo set_value('bank_name'); ?>">
											<?php echo form_error('bank_name'); ?>
										</div>
									</div>

									<div class="form-group"> 
										<div class="col-md-12">
											<label class="control-label" for="fn">Account Holder Name</label> 
											<input id="fn" name="account_holder_name" type="text" placeholder="Account Holder Name" class="form-control input-md" 
											value="<?php echo set_value('account_holder_name'); ?>">
											<?php echo form_error('account_holder_name'); ?>
										</div>
									</div>
									
									
									
									
									
								</div>




								<div class="col-md-4">
									
									<div class="form-group">  
										<div class="col-md-12">
											<label class="control-label" for="city">Vendor Email</label><BR>
											<input id="vendor_email" name=vendore_email" type="text" placeholder="Vendor Email" class="form-control input-md"
											value="<?php echo set_value('vendor_email'); ?>" >		
											<?php echo form_error('vendor_email'); ?>					
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-12">
											<label class="control-label" for="zip">City</label>
											<select id="city" name="city" class="form-control input-md" required="">
												<option selected disabled ></option>

											</select>
											<?php echo form_error('city'); ?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<label class="control-label" for="ctry">Manufacture </label>
											<input id="gst_no" name="gst_no" type="text" placeholder="GST-No" class="form-control input-md" 

											value="<?php echo set_value('gst_no'); ?>">
											<?php echo form_error('gst_no'); ?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-12">
											<label class="control-label" for="selectbasic">Aligned</label>
											<input name="aligned" type="text" placeholder="Aligned" class="form-control input-md" required="">
										</div>
									</div>

									<div class="form-group"> 
										<div class="col-md-12">
											<label class="control-label" for="fn">Account Number</label> 
											<input id="fn" name="account_number" type="text" placeholder="Account Number" class="form-control input-md" 
											value="<?php echo set_value('account_number'); ?>">
											<?php echo form_error('account_number'); ?>
										</div>
									</div>

									<div class="form-group"> 
										<div class="col-md-12">
											<label class="control-label" for="fn">IFSC Code</label> 
											<input id="fn" name="ifsc_code" type="text" placeholder="IFSC Code" class="form-control input-md" 
											value="<?php echo set_value('ifsc_code'); ?>">
											<?php echo form_error('ifsc_code'); ?>
										</div>
									</div>
									
								</div>




								<div class="col-md-4">
									<div class="form-group">
										<div class="col-md-12">
											<label class="control-label" for="selectbasic">Vendor Phone-No</label>
											<input id="store_phone" name="vendor_phone" type="numeric"
											placeholder="Phone-No" class="form-control input-md"
											value="<?php echo set_value('vendor_phone'); ?>" >
											<?php echo form_error('vendor_phone'); ?>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-12">
											<label class="control-label" for="selectbasic">Vendor Address</label>
											<input name="vendor_address" type="text" placeholder="Vendor Address" class="form-control input-md" required="">
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-12">
											<label class="control-label" for="selectbasic">PO Day</label>
											<input name="po_day" type="text" placeholder="PO Day" class="form-control input-md" required="">
										</div>
									</div> 

									<div class="form-group"> 
										<div class="col-md-12">
											<label class="control-label" for="fn">RTV Eligible</label> 
											<input id="fn" name="" type="text" placeholder="RTV Eligible" class="form-control input-md" 
											value="<?php echo set_value('rtv_eligible'); ?>">
											<?php echo form_error('rtv_eligible'); ?>
										</div>
									</div>

									<div class="form-group">  
										<div class="col-md-12">
											<label class="control-label" for="add2">Branch Address</label>
											<input id="add2" name="branch_address" type="text" placeholder="Branch Address" class="form-control input-md"
											value="<?php echo set_value('branch_address'); ?>">
											<?php echo form_error('branch_address'); ?>


										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-12">
											<button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
										</div>
									</div>
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

