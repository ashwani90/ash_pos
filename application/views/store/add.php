
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
					  <div class="panel-heading"><a href="<?php echo base_url().'index.php/store/Store_dashboard/viewstore'; ?>">Store</a></div>
					  <div class="panel-body"><a href="dashboard.php"><img src="<?php echo base_url() .'images/packing.png';?>" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="product-form.php">Add Store</a></div>
					  <div class="panel-body"><a href="product-form.php"><img src="<?php echo base_url() .'images/bag-icon.png';?>" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="<?php echo base_url().'index.php/store/Store_dashboard/viewstore'; ?>">View Store</a></div>
					  <div class="panel-body"><a href="product-form.php"><img src="<?php echo base_url() .'images/bag-icon.png'; ?>" style="width:110px;height:100px;    margin-left: 10px;"></a></div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		 <?php //if(isset($store)){
		 	//var_dump($store);
		 	//}  ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					 <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Store
                        </div>
                        <div class="panel-body">
                        <h4 style="color: red; font-family: verdana;"><?php if(isset($msg)){echo $msg;} ?></style></h4>
                            <div class="row">
								<form id="addStore" action="<?php echo base_url().'index.php/store/Store_dashboard/saveStore'; ?>" method="post">
								<div class="col-md-4">
									<div class="form-group"> 
									  <div class="col-md-12">
										<label class="control-label" for="fn">Store Name</label> 
										<input id="fn" name="store_name" type="text" placeholder="Store Name" class="form-control input-md" 
										value="<?php if(isset($store['store_name'])){
											echo $store['store_name'];
											}  ?>">
										 <?php echo form_error('store_name'); ?>
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
									  <label class="control-label" for="cmpny">PAN-No</label>
									  <input id="pan_no" name="pan_no" type="text" placeholder="PAN-No" class="form-control input-md" value="<?php if(isset($store['pan_no'])){
											echo $store['pan_no'];
											}  ?>">
										<?php echo form_error('pan_no'); ?>
									  </div>
									</div>
									
									<div class="form-group">
									  <div class="col-md-12">
									  <label class="control-label" for="email">Website</label>
									  <input id="website" name="website" type="text" placeholder="Website" class="form-control input-md" 
									  value="<?php if(isset($store['website'])){
											echo $store['website'];
											}  ?>">
									  </div>
									</div>
									
									<!-- <div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="add2">City</label>
									  <input id="add2" name="add2" type="text" placeholder="MRP" class="form-control input-md">
										
									  </div>
									</div> -->
									
								</div>
								<div class="col-md-4">
									
									<div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="city">Store Email</label><BR>
									  <input id="store_email" name="store_email" type="text" placeholder="Store Email" class="form-control input-md" 
									  value="<?php if(isset($store['store_email'])){
											echo $store['store_email'];
											}  ?>">		
									  <?php echo form_error('store_email'); ?>					
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
									  <label class="control-label" for="ctry">GST-No</label>
									  <input id="gst_no" name="gst_no" type="text" placeholder="GST-No" class="form-control input-md" 
									  value="<?php if(isset($store['gst_no'])){
											echo $store['gst_no'];
											}  ?>">
										<?php echo form_error('gst_no'); ?>
									  </div>
									</div>
								
									<!-- <div class="form-group">
									  <div class="col-md-12">
										<label class="control-label" for="selectbasic">Tax Id</label>
										<input id="ctry" name="ctry" type="text" placeholder="Tax Id" class="form-control input-md" required="">
									  </div>
									</div>
									 -->
								</div>
								<div class="col-md-4">
									<div class="form-group">
									  <div class="col-md-12">
										<label class="control-label" for="selectbasic">Store Phone-No</label>
										<input id="store_phone" name="store_phone" type="numeric"
										placeholder="Phone-No" class="form-control input-md" 
										value="<?php if(isset($store['store_phone'])){
											echo $store['store_phone'];
											}  ?>">
										<?php echo form_error('store_phone'); ?>
									  </div>
									</div>
									
									<!-- <div class="form-group">
									  <div class="col-md-12">
										<label class="control-label" for="selectbasic">Alert Unit</label>
										<input id="ctry" name="ctry" type="text" placeholder="Alert Unit" class="form-control input-md" required="">
									  </div>
									</div>
									
									<div class="form-group">
									  <div class="col-md-12">
										<label class="control-label" for="selectbasic">Created Date</label>
										<input id="ctry" name="ctry" type="text" placeholder="Created Date" class="form-control input-md" required="">
									  </div>
									</div> -->
									
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
	
