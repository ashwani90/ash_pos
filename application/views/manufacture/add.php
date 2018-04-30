<?php //include('header.php');?>
	
	<section class="body-content">
		<div class="container">
			<div class="row">
				<div class="col-md-2 panel-box5">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="<?php echo base_url().'index.php/manufacture/manufacture_dashboard/view';?>">Manufacture</a></div>
					  <div class="panel-body"><a href="<?php echo base_url().'index.php/dashboard/view';?>"><img src="<?php echo base_url().'images/packing.png';?>" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="<?php echo base_url().'index.php/manufacture/manufacture_dashboard/add';?>">Add Manufacture</a></div>
					  <div class="panel-body"><a href="<?php echo base_url().'index.php/manufacture_dashboard/add';?>"><img src="<?php echo base_url().'images/bag-icon.png';?>" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="<?php echo base_url().'index.php/manufacture/manufacture_dashboard/view';?>">View Manufacture</a></div>
					  <div class="panel-body"><a href="<?php echo base_url().'index.php/manufacture_dashboard/view';?>"><img src="<?php echo base_url().'images/bag-icon.png';?>" style="width:110px;height:100px; margin-left: 10px;"></a></div>
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
                            Add Manufacture
                        </div>
                        <div class="panel-body">
                        	<form name="addForm" action="<?php echo base_url(). 'index.php/manufacture/manufacture_dashboard/save';?>" method="post">
                            <div class="row">
								<div class="col-md-4">
									<div class="form-group"> 
									  <div class="col-md-12">
										<label class="control-label" for="fn">Name</label> 
										<input id="fn" name="name" type="text" placeholder="Name" class="form-control input-md">
										<?php echo form_error('name', '<div class="error text-danger">', '</div>'); ?>
									  </div>
									</div>
									
								</div>
								<div class="col-md-4">
									
									<div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="city">Email Id</label><BR>
									  <input id="fn" name="email" type="text" placeholder="Email Id" class="form-control input-md">	
										<?php echo form_error('email', '<div class="error text-danger">', '</div>'); ?>
									  </div>
									</div>
								</div>
								<div class="col-md-4">
									
									<div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="city">Phone Number</label><BR>
									  <input id="fn" name="phone" type="text" placeholder="Phone Number" class="form-control input-md">
									  <?php echo form_error('phone', '<div class="error text-danger">', '</div>'); ?>
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<div class="form-group">
									  <div class="col-md-12">
										<button type="submit" name="submit" class="btn btn-primary">Submit </button>
									  </div>
									</div>
								</div>							
							</div>
							</form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
	
<?php //include('footer.php');?>