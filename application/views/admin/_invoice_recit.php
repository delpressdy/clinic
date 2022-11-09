
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
            <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
        <?php
            $msg = $this->session->flashdata('message');
            if($msg){
                echo $msg;
            } 
        ?>

        <?php
           $phone = $this->db->select('*')
                    ->from('web_pages_tbl')
                    ->where('name','phone')
                    ->get()
                    ->row();

            $email = $this->db->select('*')
                    ->from('web_pages_tbl')
                    ->where('name','email')
                    ->get()
                    ->row(); 

            $logo = $this->db->select('*')
                    ->from('web_pages_tbl')
                    ->where('name','logo')
                    ->get()
                    ->row();
            $address = $this->db->select('*')
                    ->from('web_pages_tbl')
                    ->where('name','address')
                    ->get()
                    ->row();        
                  
        ?>


    <div class="row">

        <div class="col-sm-12">
            <div class="panel panel-bd">
                <div id="printableArea">
                    <div class="panel-body">
                        <div class="row">
                                
                            <div class="col-sm-8" style="display: inline-block;width: 64%">
                                <br>
                                    
                                    <span class="label label-success-outline m-r-15 p-10"><?php echo display('billing_from')?></span>
                                    <address style="margin-top:10px">

                                        <h2 class="text-success">Sta. Cecilia MJ OB Midwife Lying in Clinic Corp.</h2>

                                        <strong><?php echo display('address') . ':'?></strong>
                                        <?php echo @$address->details;?><br>

                                        <strong><?php echo display('phone_number')?>:</strong>
                                        <?php echo @$phone->details;?><br>

                                        <strong><?php echo display('email')?>:</strong> 
                                        <?php echo @$email->details;?><br>
                                        
                                    </address>
                                </div>
                                
                                <div class="col-sm-4 text-left" style="display: inline-block;margin-left: 5px;">                                   
                                    <!-- <div><?php echo display('invoice_no')?>: <?php echo @$invo->invoice_id;?></div>
                                    <div class="m-b-15"><?php echo @$invo->date_time;?></div> -->

                                    <br>
                                    <span class="label label-success-outline m-r-15"><?php echo display('billing_to')?></span>

                                    <address style="margin-top:10px">  
                                        <h3 class="text-danger"><?php echo $invo->given_name .' '. $invo->family_name;?></h3>
                                        <strong><?php echo display('address')?>:</strong>
                                        <?php echo $invo->address;?><br>
                                        
                                        <strong><?php echo display('phone_number')?>:</strong>
                                            <?php echo $invo->patient_phone;?>
                                        <br>
                                        <strong><?php echo display('email')?>:</strong> 
                                            <?php echo $invo->patient_email;?>
                                    </address>
                                </div>
                            </div> <hr>

                            <div class="table-responsive m-b-20">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th><?php echo '#'?>.</th>
                                            <th><?php echo display('service_name')?></th>
                                            <th><?php echo display('rate')?></th>
                                            <th><?php echo display('discount')?></th>
                                            <th><?php echo display('amount')?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        <?php 
                                        $i = 1;
                                        foreach($invo_product as $product){
                                        ?>
                                        <tr>
                                            <td><?php echo $i++;?></td>
                                            <td><div><strong><?php echo @$product->service_name.' ('.@$product->model.')';?></strong></div></td>
                                            <td><?php echo '₱ '.@$product->price;?></td>
                                            <td><?php echo @$product->discount;?></td>
                                            <td><?php echo '₱ '.@$product->grand_price;?></td>
                                        </tr>
                                        <?php }?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-8" style="display: inline-block;width: 66%">
                                        <h2 class="text-danger"><?php echo $invo->payment_notes;?></h2>
                                        <p><strong class="text-success">Thank you very much for choosing us.</strong></p>
                                    </div>

                                    <div class="col-sm-4" style="display: inline-block;">

                                        <table class="table">
                                            <tbody>

                                                <tr>
                                                    <th class="grand_total"><?php echo display('grand_total')?> :</th>
                                                    <td class="grand_total"><?php echo '₱ '.$invo->grand_total;?></td>
                                                </tr>
                                                <tr>
                                                    <th style="border-top: 0; border-bottom: 0;"><?php echo 'Paid Amount'?>: </th>
                                                    <td style="border-top: 0; border-bottom: 0;"><?php echo '₱ '.@$invo->paid;?></td>
                                                </tr>                
                                                <tr>
                                                    <th><?php echo 'Change'?> : </th>
                                                    <td><?php $paid=@$invo->paid; $total=@$invo->grand_total; echo '₱ '.$change=$paid-$total;?></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div style="float:left;width:90%;text-align:center;border-top:1px solid #000;margin-top: 100px;font-weight: bold;">
                                       <?php echo display('authorised_by')?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="panel-footer text-left">
                        <a class="btn btn-info" href="#" onclick="printContent('printableArea')"><span class="fa fa-print"></span></a>
                    </div>
                </div>
            </div>
        </div>            
    </section>
</div>


<script type="text/javascript">
    //print a div
    function printContent(el){
        var restorepage  = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
        location.reload();
    }
</script>




