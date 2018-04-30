<?php error_reporting(0); ?>
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">-->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<style>
    #autoSuggestionsList > li {
        background: none repeat scroll 0 0 #F3F3F3;
        border-bottom: 1px solid #E3E3E3;
        list-style: none outside none;
        padding: 3px 15px 3px 15px;
        text-align: left;
    }
    #autoSuggestionsList > li a {
        color: #800000;
    }
    .auto_list {
        border: 1px solid #E3E3E3;
        border-radius: 5px 5px 5px 5px;
        position: absolute;
    }
</style>
<script type="text/javascript">
    function redeem_amount() {
        var amount = $("#reed_amount").val();

        getProduct(amount);
    }
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    function update_total() {

        var qyt = $("#qyt").val();
        var variant_mrp = $("#variant_mrp").val();
        var total = variant_mrp * qyt;
        var all_tax = $("#all_tax").val();
        var gst_amt = ((total * all_tax) / 100);
        $("#sum_of_tax").html(gst_amt.toFixed(2));
        var redeem_amt = $("#redeem_amt").val();
        var total_amt_with_tax = parseInt(total) + parseInt(gst_amt);
        $("#f_amt").html(total_amt_with_tax.toFixed(2));
        if (redeem_amt == '') {
            $('#total_pay_amt').val('');
            $('#final_amt').val('');
            var total_amt_with_tax = parseInt(total) + parseInt(gst_amt);
            $("#pay_amt").html(total_amt_with_tax.toFixed(2));
            var input = $("#total_pay_amt");
            input.val(input.val() + total_amt_with_tax);
            var input = $("#final_amt");
            input.val(input.val() + total_amt_with_tax);

        } else {
            var pay_amt = parseInt(total_amt_with_tax) - parseInt(redeem_amt);
            $('#total_pay_amt').val('');
            $("#pay_amt").html(pay_amt.toFixed(2));
            var input = $("#total_pay_amt");
            input.val(input.val() + pay_amt);
        }
        var value = total;
        $("#grand_total").val(function() {
            return value;
        });
        $("#sum").html(value.toFixed(2));
    }
    var i = 1;
    var sum = 0;
    var sum_tax = 0;

    function getProduct(amount) {
        if (!isNaN(amount)) {
            var amount = $("#reed_amount").val();
            var pay_amt = $("#final_amt").val();
            $("#redeem_amounts").html(amount);
            var input = $("#redeem_amt");
            input.val(input.val() + amount);
            $("#discount_amt").html(amount);
            $('#total_pay_amt').val('');
            if (parseInt(amount) > parseInt(pay_amt)) {
                var pay_amount = parseInt(amount) - parseInt(pay_amt);
            } else {
                var pay_amount = parseInt(pay_amt) - parseInt(amount);
            }
            var input = $("#total_pay_amt");
            input.val(input.val() + pay_amount);
            $("#pay_amt").html(pay_amt.toFixed(2));

        } else {
            var amount = 0;
        }
        var po_id = $("#product_id").val();
        var upc_code = $("#scanInput").val();
        var grn_date = $("#grn_date").val();
        var invoice_no = $("#invoice_no").val();
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: "<?php echo base_url();?>" + "index.php/sale/sale_dashboard/addSales/" + upc_code + '/' + grn_date + '/' + po_id + '/' + invoice_no,
            success: function(response) {
                var item_id = response[0].item_id;
                var upc_code = response[0].upc_code;
                var product_name = response[0].product_name;
                var description = response[0].description;
                var variant_mrp = response[0].mrp;
                var cgst = response[0].cgst;
                var sgst = response[0].sgst;
                var qyt = response[0].quantity;
                var all_tax = parseInt(cgst) + parseInt(sgst);
                var input = $("#all_tax");
                input.val(input.val() + all_tax);
                var amt_mrp = parseInt(variant_mrp) * parseInt(qyt);
                var amount_with_tax = ((amt_mrp * all_tax) / 100);
                var grand_total = parseInt(amt_mrp);
                sum = sum + parseFloat(grand_total);
                $("#sum").html(sum.toFixed(2));
                sum_tax = sum_tax + parseFloat(all_tax);
                with_tax_amt = (sum * sum_tax) / 100;
                final_amount_with_tax = sum + with_tax_amt;
                var input = $("#final_amt");
                input.val(input.val() + final_amount_with_tax);
                $("#all_gst").html(all_tax.toFixed(2));
                $("#sum_of_tax").html(with_tax_amt.toFixed(2));
                $("#f_amt").html(final_amount_with_tax.toFixed(2));
                var amount_value = amount;
                var pay_amount = final_amount_with_tax - amount_value;
                $("#pay_amt").html(pay_amount.toFixed(2));

                var input = $("#gst_amt");
                input.val(input.val() + with_tax_amt);

                var content_1 = "<tr class='item-row'><td><div class='delete-wpr'>" + i + "<input type='hidden' name='id[]' value='" + i + "'><a class='delme' href='javascript:;' title='Remove row'>X</a></div></td>";
                var content_2 = "<td>" + upc_code + "</td>";
                var content_3 = "<td>" + product_name + "</td>";
                var content_4 = "<td>" + description + "</td>";
                var content_5 = "<td>" + variant_mrp + "</td>";
                var content_6 = "<td>" + cgst + "</td>";
                var content_7 = "<td>" + sgst + "</td>";
                var content_8 = "<td><input type='text' id='qyt' name='qyt[]' value='" + qyt + "' onkeyup= update_total(this.val);></td>";
                var content_9 = "<td><input type='text' readonly='readonly' id='grand_total' class='grand_total' name='grand_total[]' value='" + grand_total + "'></td></tr>";
                var content_10 = "<input type='hidden' class='upc_code[]' name='upc_code[]' value='" + upc_code + "'>";
                var content_11 = "<input type='hidden' class='product_name[]' name='product_name[]' value='" + product_name + "'>";
                var content_12 = "<input type='hidden'  class='description[]' name='description[]' value='" + description + "'>";
                var content_13 = "<input type='hidden' id='variant_mrp' name='variant_mrp[]' value='" + variant_mrp + "'>";
                var content_14 = "<input type='hidden' class='all_tax' name='all_tax[]' value='" + all_tax + "'>";
                var content_15 = "<input type='hidden' class='' name='cgst[]' value='" + cgst + "'>";
                var content_16 = "<input type='hidden' class='' name='sgst[]' value='" + sgst + "'>";
                var content_17 = "<input type='hidden' class='grand_total' name='qyt[]' value='" + qyt + "'>";
                var content_18 = "<input type='hidden' class='' name='grand_total[]' value='" + grand_total + "'>";
                var content_19 = "<input type='text' class='' name='pay_amount[]' value='" + pay_amount + "'>";
                $(".item-row:first").before(content_1 + content_2 + content_3 + content_4 + content_5 + content_6 + content_7 + content_8 + content_9 + content_10 + content_11 + content_12 + content_13 + content_14 + content_15 + content_16 + content_17 + content_18 + content_19);
                i++;
                $("#product_id").select2("val", null);
                $("#scanInput").val('');
            }
        });

    }
    $(document).ready(function(e) {

        $("#add_product").click(function() {
            $('#reed_amount').prop('enabled', true);
            $('#reed_amount').prop('disabled', false);
            var upc_code = $("#scanInput").val();
            if (upc_code == '') {
                return false;
            } else {
                getProduct();
            }
        });
        //delete Row.
        $('#items').on('click', '.delme', function() {
            $(this).parents('.item-row').remove();
            update_total();
        });
    });
</script>

<section class="body-content">
    <div class="container" style="margin-top:5%;">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3">
                        <span style="font-size: 20px;">Select User</span>
                    </div>
                    <div class="col-md-5 searching">
                        <!--<input list="autoSuggestionsList" name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();" style="width:100%;height:30px;">-->
                        <form action="<?php echo base_url(). 'index.php/sale/sale_dashboard/getcard';?>" method="post">
                            <select name="user_id" class="selectpicker" data-show-subtext="true" data-live-search="true" value="<?php echo set_value('user_id'); ?>">
                                <option value=''>Select User</option>
                                <?php foreach($details as $dtls){ ?>
                                <option value='<?php echo $dtls->c_id; ?>'>
                                    <?php echo $dtls->name; ?></option>
                                <?php } ?>
                            </select>
                            <button name="add_sale" class="btn btn-success" style="font-size: 16px;">User</button>
                        </form>
                    </div>
                    <div class="col-md-1">
                        <img src="<?php echo base_url();?>images/Ampeross-Qetto-2-Add-contact.ico" style="width: 44px;height: 43px;margin-top:-5px;" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
                <div class="row" style="margin-top:20%;">
                    <div class="col-md-3">
                        <span style="font-size: 20px;">UPC Code</span>
                    </div>
                    <div class="col-md-5 searching">
                        <input name="upc_code" id="scanInput" type="text" style="width:100%;height:30px;">
                    </div>
                    <div class="col-md-2">

                        <button id="add_product" name="add_sale" class="btn btn-success" style="font-size: 16px;">Add for Sale</button>
                    </div>
                </div>
            </div>
            <form action="<?php echo base_url(). 'index.php/sale/sale_dashboard/addStockout';?>" method="post">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($result[0]->card_number)) { foreach($result as $res){ ?>
                            <div class="card_details">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center" style="color:#000;margin-top:10px;">Sudhamrit Pvt Ltd </p>
                                        <hr style="margin-top:10px;border: 2px solid #000;margin-bottom: 10px;">
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="client_id" value="<?=$res->c_id;?>" />
                                    <div class="col-md-12" style="padding-left: 30px;">
                                        <p style="font-size:15px;"><strong style="font-weight: 900;">Name :</strong> <span style="font-weight: 600;"><?=$res->name;?></span>
                                        </p>
                                    </div>
                                    <div class="col-md-12" style="padding-left: 30px;">
                                        <p style="font-size:15px;"><strong style="font-weight: 900;">Card Number :</strong> <span style="font-weight: 600;"><?=$res->card_number;?></span>
                                        </p>
                                    </div>
                                    <div class="col-md-12" style="padding-left: 30px;">
                                        <p style="font-size:15px;"><strong style="font-weight: 900;">Issue Date :</strong> <span style="font-weight: 600;"><?=$res->issue_date;?></span>
                                        </p>
                                    </div>
                                    <div class="col-md-12" style="padding-left: 30px;">
                                        <p style="font-size:15px;"><strong style="font-weight: 900;">Amount :</strong> <span style="font-weight: 600;" id="amt"><?=$res->amount;?></span>
                                        </p>
                                    </div>
                                    <div class="col-md-12" style="padding-left: 30px;">
                                        <p style="font-size:15px;"><strong style="font-weight: 900;">Points :</strong> <span style="font-weight: 600;"><?=$res->points;?></span>
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php } } else if(isset($records[0]->card_number)) { foreach($records as $recrds){ ?>
                <div class="card_details">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center" style="color:#000;margin-top:10px;">Sudhamrit Pvt Ltd</p>
                            <hr style="margin-top:10px;border: 2px solid #000;margin-bottom: 10px;">
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="client_id" value="<?=$recrds->c_id;?>" />
                        <div class="col-md-12" style="padding-left: 30px;">
                            <p style="font-size:15px;"><strong style="font-weight: 900;">Name :</strong> <span style="font-weight: 600;"><?=$recrds->name;?></span>
                            </p>
                        </div>
                        <div class="col-md-12" style="padding-left: 30px;">
                            <p style="font-size:15px;"><strong style="font-weight: 900;">Card Number :</strong> <span style="font-weight: 600;"><?=$recrds->card_number;?></span>
                            </p>
                        </div>
                        <div class="col-md-12" style="padding-left: 30px;">
                            <p style="font-size:15px;"><strong style="font-weight: 900;">Issue Date :</strong> <span style="font-weight: 600;"><?=$recrds->issue_date;?></span>
                            </p>
                        </div>
                        <div class="col-md-12" style="padding-left: 30px;">
                            <p style="font-size:15px;"><strong style="font-weight: 900;">Amount :</strong> <span style="font-weight: 600;"><?=$recrds->amount;?></span>
                            </p>
                        </div>
                        <div class="col-md-12" style="padding-left: 30px;">
                            <p style="font-size:15px;"><strong style="font-weight: 900;">Points :</strong> <span style="font-weight: 600;"><?=$recrds->points;?></span>
                            </p>
                        </div>

                    </div>
                </div>
        </div>
        <?php } } else { ?>
        <div class="card_details">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center" style="color:#000;margin-top:10px;">Sudhamrit Pvt Ltd</p>
                    <hr style="margin-top:10px;border: 2px solid #000;margin-bottom: 10px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding-left: 150px;">
                    <p style="font-size:15px;"><strong style="font-weight: 1200;"></strong> <span style="font-weight: 600;">Not Available</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    </div>
    </div>
    <div class="row" style="margin-top:40px;">
        <div class="col-md-12">

            <table id="items" class="table table-condensed table-hover table-bordered">
                <tr>
                    <th>Sr.No</th>
                    <th>UPC</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>MRP</th>
                    <th>Cgst %</th>
                    <th>Sgst %</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tbody>
                    <tr class='item-row'>
                        <td colspan="7">Invoice items</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-7" style="border:1px solid #000;padding-top:10px;">
            <div class="row">
                <div class="col-md-6">
                    <span><strong>Redeem amount </strong></span>
                    <input type="checkbox" id="reed_amount" name="r_amt" value="<?php if(isset($records[0]->amount)){echo $records[0]->amount; } elseif(isset($result[0]->amount)) { echo $result[0]->amount;} else { }?>" style="width:40px;border: 1px solid #000;" class="group1" onclick="redeem_amount()" disabled>
                </div>
                <div class="col-md-6">
                    <span><strong>Redeem Points </strong></span>
                    <input type="checkbox" id="reed_points" name="p_points" style="width:40px;border: 1px solid #000;" value="" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr style="margin-top:10px;border: 2px solid #000;margin-bottom: 10px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Sub Total:</strong>
                    </p>
                    <p><strong>GST Amt:</strong>
                    </p>
                    <p><strong>Redeem Amt:</strong>
                    </p>

                </div>
                <div class="col-md-6">
                    <p><strong>Rs. </strong><span id="sum">.00</span>
                    </p>
                    <p><strong>Rs. </strong><span id="sum_of_tax">.00</span>
                    </p>
                    <p><strong>Rs. </strong><span id="redeem_amounts">.00</span>
                        <input type="hidden" name="all_tax" id="all_tax" value="" />
                        <input type="hidden" name="redeem_amt" id="redeem_amt" value="" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr style="margin-top:10px;border: 2px solid #000;margin-bottom: 10px;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Discount Amt:</strong>
                    </p>
                    <p><strong>Sub Amt:</strong>
                    </p>
                    <p><strong>Pay Amt:</strong>
                    </p>
                </div>
                <div class="col-md-6">
                    <p><strong>Rs. </strong><span id="discount_amt"></span>
                    </p>
                    <p><strong>Rs. </strong><span id="f_amt"></span>
                    </p>
                    <p><strong>Rs. </strong><span id="pay_amt"></span>
                    </p>
                    <input type="hidden" name="card_amt" id="total_pay_amt" value="" />
                    <input type="hidden" name="final_amt" id="final_amt" value="" />
                    <input type="hidden" name="user_id" value="<?php if(isset($records)){ echo $records[0]->user_id; } else{ echo " Not Available "; } ?>" />

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-7 text-center">
            <input type="submit" name="submit" class="btn btn-success" value="Stockout" style="width:200px;height:40px;margin-top:30px;font-weight: 700;font-size: 21px;">
        </div>
    </div>
    </form>
</section>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add User</h4>
            </div>

            <form action="<?php echo base_url(). 'index.php/sale/sale_dashboard/addUser';?>" method="post">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="city">Name</label>
                                    </BR>
                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="city">Email Id</label>
                                    </BR>
                                    <input id="email_id" name="email" type="text" placeholder="Email Id" class="form-control input-md" required>
                                    <?php echo form_error( 'email', '<div class="error text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="city">Phone</label>
                                    </BR>
                                    <input id="phone_no" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                    <?php echo form_error( 'phone', '<div class="error text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="city">Address</label>
                                    </BR>
                                    <input id="address" name="address" type="text" placeholder="Address" class="form-control input-md" required>
                                    <?php echo form_error( 'address', '<div class="error text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" for="city">Card Number</label>
                                    </BR>
                                    <input id="card_no" name="card_number" type="text" placeholder="XXX-XXX-XXX-XXX" class="form-control input-md" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <input value="Create User" name="add_user" type="submit" class="btn btn-primary">
                                <!--<button   name="create_user" class="btn btn-success" style="font-size: 16px;">Create User</button>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>