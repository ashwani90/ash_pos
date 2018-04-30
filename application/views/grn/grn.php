<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  var i =1;
function getProduct() {
 var po_id = $("#product_id").val();
 var  upc_code = $("#scanInput").val();

  $.ajax({
	 type: 'POST',
	 dataType: 'json',
	 url: "<?php echo base_url();?>"+"index.php/grn/grn_dashboard/addGrn/"+upc_code+'/'+po_id,
    success: function(response){
	   var item_id =response[0].item_id;
	   var upc_code = response[0].upc_code;
	   var product_name = response[0].product_name;
       var variant_mrp = response[0].variant_mrp;
	   var cost_price = response[0].variant_mrp;
	   var variant_id = response[0].variant_id;
	   //var cgst = response[0].cgst;
	   //var sgst = response[0].sgst;
	  // var landing_price = response[0].landing_price;
	   var qyt = response[0].qty;
	   //var grand_total = landing_price*qyt;
	   //var variant_id = response.variant_id;
	   //var product_id = $("#product_id").val();
	   var cost = $("#scanInput").val();
	   var content_1 = "<tr class='item-row'><td><div class='delete-wpr'>"+i+"<input type='hidden' name='id[]' value='"+i+"'><a class='delme' href='javascript:;' title='Remove row'>X</a></div></td>";
	   var content_2 = "<td>"+upc_code+"</td>";
	   var content_3 = "<td>"+product_name+"</td>";
	   var content_4 = "<td>"+variant_mrp+"</td>";
	    //var content_5 = "<td><input type='text' readonly='readonly'  class='expiry_date' name='expiry_date[]' value='"+expiry_date+"'></td>";
	   var content_5 = "<td>"+cost_price+"</td>";
		  //var content_7 = "<td><input type='text' class='cgst' name='cgst[]' value='"+cgst+"'></td>";
		   //var content_8 = "<td><input type='text' class='sgst' name='sgst[]' value='"+sgst+"'></td>";
		    //var content_9 = "<td><input type='text'  class='landing_price[]' name='landing_price[]' value='"+landing_price+"'></td>";
	  var content_6 = "<td>"+qyt+"</td>";
	  var content_7 = 	"<td class='total'>"+qyt+"</td></tr>";
	   $(".item-row:first").before(content_1+content_2+content_3+content_4+content_5+content_6+content_7);
	   i++;
	   $("#product_id").select2("val", null);
	   	   $("#scanInput").val(''); 
    }
  });
}
	$(document).ready(function(e) {
    	$("#add_product").click(function() {
			getProduct();
		});    
	//delete Row.
	$('#items').on('click', '.delme', function() {
		   $(this).parents('.item-row').remove();
		   update_total();
		});
    });
</script>
<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					 <div class="panel panel-default">
					 <div class="col-md-9"><a href="<?php echo base_url(). 'index.php/grn/grn_dashboard/grnWithoutpo';?>" class="btn btn-primary">Without PO</a></div>
                        <div class="panel-heading">
                             GRN
                        </div>
						
                        <div class="panel-body">
                        	 
                            <div class="row">
								<div class="col-md-6">
									<div class="form-group"> 
									  <div class="col-md-12">
										<label class="control-label" for="fn">Date</label> 
										<input id="textbox" name="date" type="text" placeholder="Date" class="form-control input-md">
										<?php echo form_error('date', '<div class="error text-danger">', '</div>'); ?>
									  </div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="city">PO No</label><BR>
									  <input id="product_id" name="po_no" type="text" placeholder="PO No" class="form-control input-md">	
										<?php echo form_error('po_no', '<div class="error text-danger">', '</div>'); ?>
									  </div>
									</div>
								</div>
								<div class="col-md-6">
									
									<div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="city">Invoice Number</label><BR>
									  <input id="fn" name="Invoice_no" type="text" placeholder="Invoice Number" class="form-control input-md">
									  <?php echo form_error('Invoice_no', '<div class="error text-danger">', '</div>'); ?>
									  </div>
									</div>
								</div>
								<div class="col-md-6">
									
									<div class="form-group">  
									  <div class="col-md-12">
									  <label class="control-label" for="city">UPC Code</label><BR>
									  <input id="scanInput" name="upc_code" type="text" placeholder="UPC code" class="form-control input-md">
									  <?php echo form_error('upc_code', '<div class="error text-danger">', '</div>'); ?>
									  </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<div class="form-group">
									  <div class="col-md-12">
									  
    <button id="add_product"  name="send" class="btn btn-primary">Add GRN</button>
										<!--<button type="submit" name="submit" id ="register" class="btn btn-primary">Add </button>-->
									  </div>
									</div>
								</div>							
							</div>
							
                        </div>
                    </div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
    	<div class="col-sm-12">
        	<table id="items" class="table table-condensed table-hover table-bordered">
            	<tr>
                   <th>Sr.No</th>
				   <th>UPC</th>
					<th>Item</th>
					<th>MRP</th>
					<th>Cost Price</th>
					<th>Quantity</th>
					<th>Total</th>
                </tr>
				<tbody>
              <tr class='item-row' >
                    <td colspan="7">Invoice items</td>
                </tr>
				</tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <input type="submit" class="btn btn-primary" name="submit" value="Stock in" /> &nbsp;<input type="submit" class="btn btn-primary" name="print" value="Print" />
        	</div>
        </div>
    </div>
</section>
