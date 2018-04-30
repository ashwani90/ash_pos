<?php include('header.php');?>
	
	<section class="body-content">
		<div class="container">
			<div class="row">
				<div class="col-md-2 panel-box5">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="dashboard.php">Products</a></div>
					  <div class="panel-body"><a href="dashboard.php"><img src="images/packing.png" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="product-form.php">Add Products</a></div>
					  <div class="panel-body"><a href="product-form.php"><img src="images/bag-icon.png" style="width:110px;height:100px;margin-left: 10px;"></a></div>
					</div>
				</div>
				<div class="col-md-2 panel-box22">
					<div class="panel panel-default">
					  <div class="panel-heading"><a href="product-view.php">View Products</a></div>
					  <div class="panel-body"><a href="product-view.php"><img src="images/bag-icon.png" style="width:110px;height:100px; margin-left: 10px;"></a></div>
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
                            <div class="row">
								<form action="" method="post">
								<div class="col-md-4">
									<div class="form-group"> 
									  <div class="col-md-12">
										<label class="control-label" for="fn">UPC Code</label> 
										<input id="fn" name="fn" type="text" placeholder="UPC Code" class="form-control input-md" required="">
									  </div>
									</div>
									
									<div class="form-group"> 
									  <div class="col-md-12">
										<label class="control-label" for="ln">Product Name</label>
										<input id="ln" name="ln" type="text" placeholder="Product Name" class="form-control input-md" required="">
										
									  </div>
									</div>
									
									<div class="form-group">
									  <div class="col-md-12">
									  <label class="control-label" for="cmpny">Brand</label>
									  <input id="cmpny" name="cmpny" type="text" placeholder="Brand" class="form-control input-md" required="">
										
									  </div>
									</div>
									
									<div class="form-group">
									  <div class="col-md-12">
									  <label class="control-label" for="email">Category</label>
									  <select id="selectbasic" name="selectbasic" class="form-control input-md">
										  <option>Option one</option>
										  <option>Option two</option>
										</select>
										
									  </div>
									</div>
									
									<div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="add2">MRP</label>
									  <input id="add2" name="add2" type="text" placeholder="MRP" class="form-control input-md">
										
									  </div>
									</div>
									
								</div>
								<div class="col-md-4">
									
									<div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="city">Description</label><BR>
									  <textarea name="desc"></textarea>									
									  </div>
									</div>
									
									<div class="form-group">
									  <div class="col-md-12">
									  <label class="control-label" for="zip">Product Image</label>
									  <input id="zip" name="zip" type="file" class="form-control input-md">
										
									  </div>
									</div>

									<div class="form-group">
									  <div class="col-md-12">
									  <label class="control-label" for="ctry">HSN Code</label>
									  <input id="ctry" name="ctry" type="text" placeholder="HSN Code" class="form-control input-md" required="">
										
									  </div>
									</div>
								
									<div class="form-group">
									  <div class="col-md-12">
										<label class="control-label" for="selectbasic">Tax Id</label>
										<input id="ctry" name="ctry" type="text" placeholder="Tax Id" class="form-control input-md" required="">
									  </div>
									</div>
									
								</div>
								<div class="col-md-4">
									<div class="form-group">
									  <div class="col-md-12">
										<label class="control-label" for="selectbasic">Self Lif Day</label>
										<input id="ctry" name="ctry" type="text" placeholder="Self Lif Day" class="form-control input-md" required="">
									  </div>
									</div>
									
									<div class="form-group">
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
	
<?php include('footer.php');?>