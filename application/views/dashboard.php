<?php include('header.php');?>

<section class="body-content">
  <div class="container">
    <div class="row">
      <div class="col-md-2 panel-box1">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="<?php echo base_url(); ?>index.php/store/Store_dashboard/viewStore">Store</a></div>
          <div class="panel-body"><img src="<?php echo base_url();?>images/sales-tab.png" style="width:110px;height:100px; margin-left: 10px;"></div>
        </div>
      </div>
      <div class="col-md-2 panel-box2">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="<?php echo base_url(); ?>index.php/manufacture/manufacture_dashboard/view">Manufacture</a></div>
          <div class="panel-body"><img src="<?php echo base_url();?>images/bag-icon.png" style="width:110px;height:100px; margin-left: 10px;"></div>
        </div>
      </div>
      <div class="col-md-2 panel-box3">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="<?php echo base_url(); ?>index.php/vendor/Vendor_dashboard/viewVendor">Vendors</a></div>
          <div class="panel-body"><img src="<?php echo base_url();?>images/Icon-23.png" style="width:110px;height:100px; margin-left: 10px;"></div>
        </div>
      </div>
      <div class="col-md-2 panel-box4">
        <div class="panel panel-default">
          <div class="panel-heading">Clients</div>
          <div class="panel-body"><img src="<?php echo base_url();?>images/Icon-23.png" style="width:110px;height:100px; margin-left: 10px;"></div>
        </div>
      </div>
      <div class="col-md-2 panel-box5">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="<?php echo base_url();?>product/Product_dashboard/add_product">Products</a></div>
          <div class="panel-body"><a href="product-view.php"><img src="<?php echo base_url();?>images/packing.png" style="width:110px;height:100px;margin-left: 10px;"></a></div>
        </div>
      </div>
      <div class="col-md-2 panel-box6">
        <div class="panel panel-default">
          <div class="panel-heading">Warehouse</div>
          <div class="panel-body"><img src="<?php echo base_url();?>images/storage.png" style="width:110px;height:100px; margin-left: 10px;"></div>
        </div>
      </div>
    </div>
    <!-- Second Row-->
    <div class="row">
      <div class="col-md-2 panel-box1">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="<?php echo base_url(); ?>index.php/category/Category_dashboard/viewCategory">Category</a></div>
          <div class="panel-body"><img src="<?php echo base_url();?>images/sales-tab.png" style="width:110px;height:100px; margin-left: 10px;"></div>
        </div>
      </div>
      <div class="col-md-2 panel-box2">
        <div class="panel panel-default">
          <div class="panel-heading">Purchase</div>
          <div class="panel-body"><img src="<?php echo base_url();?>images/bag-icon.png" style="width:110px;height:100px; margin-left: 10px;"></div>
        </div>
      </div>
      <div class="col-md-2 panel-box3">
        <div class="panel panel-default">
          <div class="panel-heading">Vendors</div>
          <div class="panel-body"><img src="<?php echo base_url();?>images/Icon-23.png" style="width:110px;height:100px; margin-left: 10px;"></div>
        </div>
      </div>
      <div class="col-md-2 panel-box4">
        <div class="panel panel-default">
          <div class="panel-heading">Clients</div>
          <div class="panel-body"><img src="<?php echo base_url();?>images/Icon-23.png" style="width:110px;height:100px; margin-left: 10px;"></div>
        </div>
      </div>
      <div class="col-md-2 panel-box5">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="<?php echo base_url(); ?>grn/grn_dashboard/viewGrn">GRN PO</a></div>
          <div class="panel-body"><a href="product-view.php"><img src="<?php echo base_url();?>images/packing.png" style="width:110px;height:100px;margin-left: 10px;"></a></div>
        </div>
      </div>
      <div class="col-md-2 panel-box6">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="<?php echo base_url(); ?>sale/sale_dashboard/view">Sales</a></div>
          <div class="panel-body"><img src="<?php echo base_url();?>images/storage.png" style="width:110px;height:100px; margin-left: 10px;"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading"> Area Chart Example </div>
          <div class="panel-body">
            <div id="morris-area-chart"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading"> Area Chart Example </div>
          <div class="panel-body">
            <div id="morris-area-chart1"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('footer.php');?>
