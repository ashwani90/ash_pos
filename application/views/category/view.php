<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	function deleteMethod(category_id){
		//console.log("in delete method");
		var response= confirm("Do you want to delete?");
		//console.log(response); 
		//console.log(category_id);
		if(response){
			window.location = "<?php echo base_url(); ?>" + 'index.php/category/Category_dashboard/deleteCategory/'+ category_id;
		}else{
			window.location = "<?php echo base_url(); ?>" + 'index.php/category/Category_dashboard/viewCategory';
		}
	}
</script>


<?php //include('header.php');?>
	
	<section class="body-content">
		<div class="container">
			<div class="row">
				<div class="col-md-2 panel-box5">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href=<?php echo base_url().'index.php/category/Category_dashboard/viewCategory'; ?>>Category</a></div>
					  <div class="panel-body"><a href="dashboard.php"><img src="<?php echo base_url() .'images/packing.png'; ?>" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="<?php echo base_url().'index.php/category/Category_dashboard/addCategory'; ?>">Add Category</a></div>
					  <div class="panel-body"><a href="product-form.php"><img src="<?php echo base_url() .'images/bag-icon.png'; ?>" style="width:110px;height:100px;    margin-left: 10px;"></a></div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<?php 
		//print_r($category);
	?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				
					 <div class="panel panel-default">
                        <div class="panel-heading">
                            View Store
                        </div>
                        <div class="panel-body">
                       
                        		<?php// if(empty($store)) { echo "No store is added.";} return;?>
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<h4 style="color: red; font-family: verdana;"><?php if(isset($msg)){echo $msg;} ?></style></h4>
								<thead>
									<tr>
										<th>S.No</th>
										<th>Category Name</th>
										<th>Sub Category</th>
										<th>Brand</th>
										<th>Size</th>
										<th>Color</th>
										<th>Description</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>S.No</th>
										<th>Category Name</th>
										<th>Sub Category</th>
										<th>Brand</th>
										<th>Size</th>
										<th>Color</th>
										<th>Description</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</tfoot>
								<tbody>
								
								<?php
							//print_r($store); 
								//print_r($state);
									$sno=1;
							 		foreach ($category as $category) { ?>	  		
							 	  	<tr>
							 	  		<td><?php echo $sno; ?></td> 
							 	  		<td><?php echo $category['category_name']; ?></td>
										<td><?php echo $category['sub_category']; ?></td>
										<td><?php echo $category['brand']; ?></td>
										<td><?php echo $category['category_size']; ?> </td>
										<td><?php echo $category['category_color']; ?> </td>						
										<td><?php echo $category['category_description']; ?></td>
										
										<td><a href="<?php echo base_url().'index.php/category/Category_dashboard/editCategory/'. $category['category_id'] ;?>"><i class="fa fa-pencil"></i></a></td>
										<td><a 
										onclick="deleteMethod(<?php echo $category['category_id'] ;?>);"
										 href="javascript:void(0);"><i class="fa fa-trash-o"></i></a></td>
									</tr>
									<?php $sno++; }  ?>
									
								</tbody>
							</table>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
	
<?php //include('footer.php');?>