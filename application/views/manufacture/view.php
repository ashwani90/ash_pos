<script type="text/javascript">
	function deleteManufacture(manufacturer_id){
		console.log("in delete method");
		var response= confirm("Do you want to delete?");
		console.log(response); 
		console.log(manufacturer_id);
		if(response){
			window.location = "<?php echo base_url(); ?>" + 'index.php/manufacture/manufacture_dashboard/delete/'+ manufacturer_id;
		}else{
			window.location = "<?php echo base_url(); ?>" + 'index.php/manufacture/manufacture_dashboard/view';
		}
	}
</script>
<?php //include_once($root.'header.php');?>
	
	<section class="body-content">
		<div class="container">
			<div class="row">
				<div class="col-md-2 panel-box5">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="<?php echo base_url().'index.php/manufacture/manufacture_dashboard/view`';?>">Manufacture</a></div>
					  <div class="panel-body"><a href="<?php echo base_url().'index.php/dashboard/view';?>"><img src="<?php echo base_url().'images/packing.png';?>" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="<?php echo base_url().'index.php/manufacture/manufacture_dashboard/add';?>">Add Manufacture</a></div>
					  <div class="panel-body"><a href="<?php echo base_url().'index.php/manufacture/manufacture_dashboard/add';?>"><img src="<?php echo base_url().'images/bag-icon.png';?>" style="width:110px;height:100px;    margin-left: 10px;"></a></div>
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
                            View Manufacture
                        </div>
                        <div class="panel-body">
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
										//var_dump($manufacture);
										foreach($manufacture as $manufacture)
										{
									?>
											<tr>
												<td><?php echo $manufacture['name'];?></td>
												<td><?php echo $manufacture['email'];?></td>
												<td><?php echo $manufacture['phone'];?></td>
												<td><a href="<?php echo base_url().'index.php/manufacture/manufacture_dashboard/edit/'. $manufacture['manufacturer_id'] ;?>"><i class="fa fa-pencil"></i></a>
												</td>
												<td><a onclick="deleteManufacture(<?php echo $manufacture['manufacturer_id'] ;?>);"
										 			href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
										 		</td>
											</tr>
									<?php

										}
									?>
								</tbody>
							</table>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
	
<?php //include('../footer.php');?>