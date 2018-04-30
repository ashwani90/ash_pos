 <?php // $this->load->view('include/header.php'); ?>
 	<section class="body-content">
		<div class="container">
			<div class="row">
				<div class="col-md-2 panel-box5">
					<div class="panel panel-default">
					  <div class="panel-heading"><a  href=<?php echo base_url().'index.php/category/Category_dashboard/viewCategory'; ?>">Category</a></div>
					  <div class="panel-body"><a href="dashboard.php"><img src="<?php echo base_url() .'images/packing.png'; ?>" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a  href=<?php echo base_url().'index.php/category/Category_dashboard/addCategory'; ?>>Add Category</a></div>
					  <div class="panel-body"><a href="product-form.php"><img src="<?php echo base_url() .'images/bag-icon.png'; ?>" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a  href=<?php echo base_url().'index.php/category/Category_dashboard/viewCategory'; ?>>View Category</a></div>
					  <div class="panel-body"><a href="product-view.php"><img src="<?php echo base_url() .'images/bag-icon.png'; ?>" style="width:110px;height:100px; margin-left: 10px;"></a></div>
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
                            Add Category
                        </div>

                        <?php //var_dump($category); ?>
                        <?php if(isset($msg)){echo $msg;} ?>
                        <div class="panel-body">
                            <div class="row">
								<form action="<?php echo base_url(); ?>index.php/category/Category_dashboard/saveCategory" method="post">
								<div class="col-md-4">
									<div class="form-group"> 
									  <div class="col-md-12">
										<label class="control-label" for="fn">Category Name</label> 
										<input id="fn" name="category_name" type="text" 
												placeholder="Enter Category Name" 
												value="<?php echo set_value('category_name'); ?>"
												class="form-control input-md" >
									   <?php echo form_error('category_name','<div class="error text-danger">','</div>','<div class="error text-danger">','</div>','<div class="error text-danger">','</div>'); ?>
									</div>
									  
									</div>
									
									<div class="form-group"> 
									  <div class="col-md-12">
										<label class="control-label" for="ln">Sub Category</label>
										<input id="ln" name="sub_category" type="text"
											value="<?php echo set_value('sub_category'); ?>"
										 	placeholder="Enter Sub Category" class="form-control input-md" >
										  <?php echo form_error('sub_category','<div class="error text-danger">','</div>'); ?>
										</div>
										 
									</div>
									
									<div class="form-group">
									  <div class="col-md-12">
									  <label class="control-label" for="cmpny">Brand</label>
									  <input id="cmpny" name="brand" type="text" placeholder="Brand" 
									  			class="form-control input-md" 
									  			value="<?php echo set_value('brand'); ?>">				
									  <?php echo form_error('brand','<div class="error text-danger">','</div>'); ?>
									</div>
									   
									</div>
									
									
									
									<div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="add2">Category Size</label>
									  
									  <select class="form-control input-md"  name="category_size"
									  		value="<?php echo set_value('category_size'); ?>" >
									  <option value="">Select Size</option>
										  <option value="EXL">EXL</option>
										  <option value="XL">XL</option>
										  <option value="M">M</option>
										  <option value="SM">SM</option>
										  <option value="0-2">0-2</option>
										  <option value="2-8">2-8</option>
										  <option value="8-14">8-14</option>
									  </select>
										
									  </div>
									</div>
									 <?php echo form_error('category_size','<div class="error text-danger">','</div>'); ?>
									
								</div>
								<div class="col-md-4">
									
									<div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="city">Category Color</label><BR>
									  <input id="cmpny" name="category_color" type="text" placeholder="Category Color"
									  value="<?php echo set_value('category_color'); ?>"
									   class="form-control input-md">							
									  <?php echo form_error('category_color','<div class="error text-danger">','</div>'); ?>
									</div>
									   
									</div>
									
									<div class="form-group">
									  <div class="col-md-12">
									  <label class="control-label" for="zip">Category Description</label>
									  <textarea name="category_description" 
									  				value="<?php echo set_value('category_description'); ?>"
									  				class="form-control input-md"></textarea>				  
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
	
 <?php //$this->load->view('include/footer.php'); ?>