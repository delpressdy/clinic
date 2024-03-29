
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        
    </section>

    <!-- Main content -->
    <section class="content">
    
        <?php
            $msg = $this->session->flashdata('message');
            if($msg){
                echo $msg;
            } 
        ?>

        <div class="row">

            <div class="col-sm-12">
                    <div class="panel panel-bd">
             
                        <div class="panel-heading no-print">
                            <div class="btn-group"> 
                                <a class="btn btn-success" href="<?php echo base_url();?>admin/Invoice"> <i class="fa fa-plus"></i> <?php echo display('add_new_invoice')?> </a>  
                            </div>
                        </div>  
                        <div class="panel-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-4"><div class="dataTables_length" id="DataTables_Table_0_length"></div></div><div class="col-sm-4 text-center"><div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="DataTables_Table_0"><span>Copy</span></a><a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="DataTables_Table_0"><span>CSV</span></a><a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0" aria-controls="DataTables_Table_0"><span>Excel</span></a><a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0" aria-controls="DataTables_Table_0"><span>PDF</span></a><a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="DataTables_Table_0"><span>Print</span></a></div></div><div class="col-sm-4"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0" type="search"></label></div></div></div><table class="datatable table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" style="width: 100%;" width="100%">
                                <thead>
                                    <tr role="row">
                                        <th><?php echo '#'?></th>
                                        <th><?php echo display('patient_name')?></th>
                                        <th><?php echo display('grand_total')?></th>
                                        <th><?php echo 'Paid Amount'?></th>
                                        <th><?php echo display('date')?> </th>
                                        <th><?php echo display('action')?></th>
                                    </tr>
                                </thead>

                                <tbody> 
                                    <?php $i=1; foreach($invo as $value){?> 
                                        <tr >
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $value->family_name.' '.$value->given_name;?></td>
                                            <td><?php echo '₱ '.$value->grand_total;?></td>
                                            <td><?php echo '₱ '.$value->paid;?></td>
                                            <td><?php echo $value->date_time;?></td>
                                            <td class="center">
                                                <a href="<?php echo base_url();?>admin/Invoice/invoice_view/<?php echo $value->invoice_id;?>" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a> 
                                                <a href="<?php echo base_url();?>admin/Invoice/edit_invoice/<?php echo $value->invoice_id;?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a> 
                                                <a href="<?php echo base_url();?>admin/Invoice/delete/<?php echo $value->invoice_id;?>" onclick="return confirm('Are You Sure ? ')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a> 
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div>  <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
        </div>            
    </section>
</div>





