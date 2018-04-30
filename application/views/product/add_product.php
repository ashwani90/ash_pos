<script>
    function getstatedetails(id)
    {
        //alert('this id value :'+id);
        $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>product/product_dashboard/ajax_state_list/'+id,
            data: id='cat_id',
            success: function(data){
                //alert(data);
                $('#old_state').html(data);
        },
         });
    }
</script>


<script>
    function getcitydetails(id)
    {
        //alert('this id value :'+id);
        $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>product/product_dashboard/ajax_brand_list/'+id,
            data: id='cat_id',
            success: function(data){
              //  alert(data);
                $('#brand').html(data);
        },
         });
    }
</script>
<script>
    function catsize(id)
    {
        //alert('this id value :'+id);
        $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>product/product_dashboard/ajax_cat_size/'+id,
            data: id='cat_id',
            success: function(data){
               // alert(data);
                $('#size').html(data);
        },
         });
    }
</script>

<script>
    function catcolor(id)
    {
        alert('this id value :'+id);
        $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>product/product_dashboard/ajax_cat_color/'+id,
            data: id='cat_id',
            success: function(data){
                alert(data);
                $('#color').html(data);
        },
         });
    }
</script>




	<section class="body-content">
		<div class="container">
			<div class="row">
				<div class="col-md-2 panel-box5">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="dashboard.php">Products</a></div>
					  <div class="panel-body"><a href="dashboard.php"><img src="<?php echo base_url(); ?>images/packing.png" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="product-form.php">Add Products</a></div>
					  <div class="panel-body"><a href="product-form.php"><img src="<?php echo base_url(); ?>images/bag-icon.png" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="product-view.php">View Products</a></div>
					  <div class="panel-body"><a href="product-view.php"><img src="<?php echo base_url(); ?>images/bag-icon.png" style="width:110px;height:100px; margin-left: 10px;"></a></div>
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
                            Add Products
                        </div>
                        <div class="panel-body">
                        	<form action="<?php echo base_url();?>index.php/product/product_dashboard/add_product" method="post">
                            <div class="row">
								<div class="col-md-12">
									<div class="form-group"> 
									  	<div class="col-md-4">
											<label class="control-label" for="fn">UPC Code</label> 
											<input id="fn" name="upc_code" type="text" placeholder="UPC Code" class="form-control input-md">
											<span class="text-danger"><?php echo form_error('upc_code'); ?></span>
									  	</div>
									</div>
									
									<div class="form-group"> 
									  	<div class="col-md-4">
											<label class="control-label" for="ln">Product Name</label>
											<input id="ln" name="product_name" type="text" placeholder="Product Name" class="form-control input-md">
											<span class="text-danger"><?php echo form_error('product_name'); ?></span>
									  	</div>
									</div>
									
									<div class="form-group">
									  	<div class="col-md-4">
									  		<label class="control-label" for="cmpny">Tax</label>
									  		<select name="tax_id" class="form-control input-md">
											  	<option value="">Select Tax</option>
											  	<option value="">Select Tax</option>
									  		</select>
									  		<span class="text-danger"><?php echo form_error('tax_id'); ?></span>
									  	</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">	
									<div class="form-group">  
									  	<div class="col-md-4">
									  		<label class="control-label" for="city" >Category Name</label>
									 <select name="category_name" class="form-control input-md" id="country_details" onChange="getstatedetails(this.value)">
											  	<option value="">Select Category</option>
											  	

											  	<?php foreach($result as $res): ?>
											  												  	
											  	<option value="<?=$res->category_name?>"><?=$res->category_name?></option>
											  	<?php endforeach; ?>
									  		</select>
									  			<span class="text-danger"><?php echo form_error('category_name'); ?></span>
									  	</div>
									</div>
									
									<div class="form-group">
									  	<div class="col-md-4">
									  		<label class="control-label" for="zip">Sub Category</label>
									  		<select name="sub_category" class="form-control input-md" id="old_state" onChange="getcitydetails(this.value)">
											  	<option value="">Select Sub Category</option>
											 
									  		</select>
									  		<span class="text-danger"><?php echo form_error('sub_category'); ?></span>
									  	</div>
									</div>

									<div class="form-group">
									  	<div class="col-md-4">
									  		<label class="control-label" for="ctry">Brand</label>
									  		<select name="brand" class="form-control input-md" id="brand" onChange="catsize(this.value)">
											  	<option value="">Select Brand</option>
									  		</select>
									  		<span class="text-danger"><?php echo form_error('brand'); ?></span>
									  	</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Category Size</label>
											<select name="category_size" class="form-control input-md" id="size" onChange="catcolor(this.value)">
											  	<option value="">Select Category Size</option>
											  	
									  		</select>
									  		<span class="text-danger"><?php echo form_error('category_size'); ?></span>
									  	</div>
									</div>
									
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Category Color</label>
										<select name="category_color" class="form-control input-md" id="color">
											  	<option value="">Select Category Color</option>
									  		</select>
									  		<span class="text-danger"><?php echo form_error('category_color'); ?></span>
									  	</div>
									</div>
									
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">MRP</label>
											<input id="text" name="mrp" type="text" placeholder="Product MRP" class="form-control input-md" >
											<span class="text-danger"><?php echo form_error('mrp'); ?></span>
									  	</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Purchase Margin</label>
											<input id="text" name="purchase_margin" type="text" placeholder="Purchase Margin" class="form-control input-md" >
											<span class="text-danger"><?php echo form_error('purchase_margin'); ?>
									  	</div>
									</div>
									
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Sale Margin</label>
											<input id="text" name="sale_margin" type="text" placeholder="Alert Unit" class="form-control input-md" >
											<span class="text-danger"><?php echo form_error('sale_margin'); ?>
									  	</div>

									</div>
									
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Self Life Day</label>
											<input id="text" name="self_life_day" type="text" placeholder="Self Life Day" class="form-control input-md">
									  	</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Inner Case Size</label>
											<input id="text" name="inner_case_size" type="text" placeholder="Inner Case Size" class="form-control input-md" >
									  	</div>
									</div>
									
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Outer Case Size</label>
											<input id="ctry" name="outer_case__size" type="text" placeholder="Outer Case Size" class="form-control input-md" >
									  	</div>
									</div>
									
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">HSN Code</label>
											<input id="ctry" name="hsn_code" type="text" placeholder="HSN Code" class="form-control input-md">
									  	</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Storage Type</label>
											<input id="ctry" name="storage_type" type="text" placeholder="Storage Type" class="form-control input-md" >
									  	</div>
									</div>
									
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Alert Unit</label>
											<input id="ctry" name="alert_unit" type="text" placeholder="Alert Unit" class="form-control input-md">
											<span class="text-danger"><?php echo form_error('alert_unit'); ?>
									  	</div>
									</div>
									
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Product Image</label>
											<input id="zip" name="product_image" type="file" class="form-control input-md">
									  	</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									  	<div class="col-md-4">
											<label class="control-label" for="selectbasic">Description</label>
											<textarea name="desc" class="form-control input-md"></textarea>	
									  	</div>
									</div>
									
									<div class="form-group">
									  	<div class="col-md-2">
											<input type="submit" name="submit" value="Add Product" class="form-control btn btn-primary">
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
