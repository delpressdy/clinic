
<!-- Invoice js -->
<script src="<?php echo base_url()?>assets/my-assets/service.js.php" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/my-assets/invoice.js" type="text/javascript"></script>
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
        <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
    </section>


    <!-- Main content -->
    <section class="content">
        

	    <div class="row">
	    	<div class="row">
            <div class="col-sm-12">

        <?php
            $msg = $this->session->flashdata('message');
            if($msg){
                echo $msg;
            } 
        ?>
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('new_invoice')?></h4>
                        </div>
                    </div>

                    <?php 
                    $att = array('name'=>'insert_invoice','class'=>'form-vertical','id'=>'insert_invoice');
                    echo form_open('admin/Invoice/save_invoice',$att);
                    ?>

                    <div class="panel-body">

                        <div class="row">
                        	<div class="col-sm-6" >
                                <div class="form-group row">
                                    <label for="customer_name" class="col-sm-5"><?php echo display('phone_number')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                        <input required="" autocomplete="off" name="phone" id="phone" class="form-control" type="text" autofocus>
                                        <span id="csc" class="text-center invlid_patient_id"><?php echo display('phone_number')?></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="customer_name" class="col-sm-5"><?php echo display('patient_name')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                        <input required="" name="patient_name" id="patient_name" class="form-control" type="text" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="customer_name" class="col-sm-5"><?php echo display('address')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                        <input required="" name="address" id="address" class="form-control" type="text" readonly>
                                    </div>
                                </div>
                                <input type="hidden" name="patient_id" id="patient_id">

                            </div>
                          
                        	<div class="col-md-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('date')?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                           <input class="form-control" size="50" name="date" id="date" required="" value="<?php echo date('Y-m-d')?>" type="text" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo 'Reciever/Midwife'?><i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="doctor_id" class=" form-control" required="">
                                        <option value="" ><?php echo 'Select Midwife'?></option>
                                        <?php foreach($doctor as $value){?>
                                        <option value="<?php echo $value->doctor_id?>"><?php echo @$value->doctor_name?></option>
                                        <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="normalinvoice">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('service_info')?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('price')?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo 'Discount(₱)'?> </th>
                                        <th class="text-center"><?php echo display('total')?> <i class="text-danger">*</i></th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">

                                    <tr>

                                        <td>
                                            <input name="product_name" onkeypress="invoice_productList(1);" class="form-control productSelection" placeholder="Service Name" required="" id="product_name" type="text">
                                            <input class="autocomplete_hidden_value product_id_1" name="product_id[]" id="SchoolHiddenId" type="hidden">
                                            <input class="baseUrl" value="<?php echo base_url();?>" type="hidden">
                                        </td>

                                       

                                        
                                            <input name="product_quantity[]" onkeyup="quantity_calculate(1);" id="total_qntt_1" class="form-control text-right" value="1" min="1" type="hidden">
                                       

                                        <td>
                                            <input name="product_rate[]" readonly="" placeholder="0.00" id="price_item_1" class="price_item1 form-control text-right" type="text">
                                        </td>

                                        <!-- Discount -->
                                        <td>
                                            <input name="discount[]" onkeyup="quantity_calculate(1);" id="discount_1" class="form-control text-right" placeholder="Discount" placeholder="0.00" min="0" type="number">
                                        </td>
                                       
                                        <td>
                                            <input class="total_price form-control text-right" name="total_price[]" id="total_price_1" placeholder="0.00" tabindex="-1" readonly="readonly" type="text">
                                        </td>

                                            <!-- Tax calculate start-->
                                            <input id="total_tax_1" class="total_tax_1" type="hidden">
                                            <input id="all_tax_1" class=" total_tax" value="0" type="hidden">


                                    </tr>

                                <tfoot>

                                    
                                    <input id="total_tax_ammount" tabindex="-1" class="form-control text-right" name="total_tax" value="0.00" readonly="readonly" type="hidden">
                                     

                                    <tr>
                                        <td colspan="3" style="text-align:right;"><b><?php echo 'Grand Total w/ Tax'?>:</b></td>
                                        <td class="text-right">
                                            <input id="grandTotal" tabindex="-1" class="form-control text-right" name="grand_total_price" value="0.00" readonly="readonly" type="text">
                                        </td>
                                    </tr>

                                    <tr>
                                        
                                        <td style="text-align:right;" colspan="3"><b><?php echo 'Paid Amount'?>:</b></td>
                                        <td class="text-right">
                                            <input id="paidAmount" onkeyup="invoice_paidamount();" tabindex="-1" class="form-control text-right" name="paid_amount" placeholder="0.00" type="text">
                                        </td>
                                    </tr>

                                    <tr>
                                      
                                            
                                        <input name="baseUrl" class="baseUrl" value="<?php echo base_url();?>" type="hidden">
                                       
                                        
                                        <input id="dueAmmount" class="form-control text-right" name="due_amount" value="0.00" readonly="readonly" type="hidden">
                                       
                                    </tr>

                                </tfoot>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-8">

                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('payment_notes')?><i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <textarea name="payment_notes" class="form-control" placeholder="Payment Notes"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Select payment method <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="payment_method" class=" form-control" required="">
                                        <option value="" >- Select Payment-</option>
                                        <option value="master_card" >Cash Payment</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-offset-4 col-sm-4">
                                <input id="add-invoice" class="btn btn-success" name="add-invoice" value="<?php echo display('save_and_paid')?>" type="submit">
                            </div>
                        </div>


                    </div>
                   <?php echo form_close();?>
                    </div>
            </div>
        </div>

	    </div>  

    </section>
</div>


<script type="text/javascript">

    $(document).ready(function() {  
        
        $('.add-invoice').prop('disabled', true);

        $('body').on('keyup change', '#phone', function() {
            var phone = $(this).val();
            if(phone.length > 0)
            $.ajax({

                'url': '<?php echo base_url();?>' + 'admin/Ajax_controller/load_patient_info/'+phone,
                'type': 'GET',
                'dataType': 'JSON',
                'success': function(data){ 

                    if (data.patient_id) {

                        $('#patient_name').val(data.family_name);
                        $('#address').val(data.address);
                        $('#patient_id').val(data.patient_id);
                        $('#csc').removeClass('text-danger');
                        $(".invlid_patient_id").text('Patient Found!').addClass("text-success");
                       
                    } else {
                        $('#csc').removeClass('text-success');
                        $(".invlid_patient_id").text('No patient record!').addClass("text-danger");
                    }
                }, error   : function() {
                    alert('failed!');
                } 
               
            });
        });

    });

</script>




