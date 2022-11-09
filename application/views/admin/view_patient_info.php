
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
        <?php 
            echo @$msg = $this->session->flashdata('message'); 
         ?>

        <div class="row">
            <div class="col-sm-12 col-md-12">
                            
                <div class="review-block">
                    <div class="row">
                        <div class="col-sm-3" style="text-align: center;">
                            <div style="border: 1px solid #ddd;padding: 2px;">
                                 <?php 
                                   if($patient_info->picture){
                                    echo '<img  src="'.$patient_info->picture.'" class="img-responsive">';
                                   }else{
                                    echo '<img  src="'.base_url().'assets/images/user.png" class="img-responsive" >';
                                   }
                                ?>
                            </div>
                            <div class="review-block-name"><a href="#"><?php echo $patient_info->given_name .' '. $patient_info->family_name;?></a></div>
                        </div>

                        <div class="col-sm-9">
                            <div class="review-block-title"><h2><?php echo $patient_info->given_name .' '. $patient_info->family_name;?></h2></div>
                            <p><strong><?php echo display('patient_id');?> : </strong><?php echo $patient_info->patient_id;?></p>
                            <p><strong><?php echo display('phone_number');?> : </strong><?php echo $patient_info->patient_phone;?></p>
                            <p><strong><?php echo display('blood_group');?> : </strong><?php echo $patient_info->blood_group;?></p>
                            <p><strong><?php echo display('birth_date');?> : </strong>
                                <?php
                                    $date1 = date_create(@$patient_info->birth_date);
                                    echo date_format($date1,"d-M-Y");
                                ?>
                            </p>
                            <p><strong><?php echo display('address');?> : </strong><?php echo $patient_info->address .', '. $patient_info->suburb;?></p>
                           <div ><a href="<?php echo base_url()?>History_controller/patient_medical_info/<?php echo @$patient_info->patient_id;?>" class="btn btn-danger" target="_blank"><i class="ti-alert m-r-5"></i>Click to see medical information</a></div><br>

                        <!-- <div ><a href="<?php echo base_url()?>History_controller/patient_history/<?php echo @$patient_info->patient_id;?>" class="btn btn-success" target="_blank"><i class="ti-alert m-r-5"></i>Click to see records</a></div>
                        
                        </div> -->

                    </div>
                    <hr>

                    <!-- <div class="row">
                        <div class="col-sm-12">
                            <div  class="panel panel-default">
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" >
                                        
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Diagnositic</th>
                                                <th>Treatment</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php foreach($prescription as $value){
                                            @$js_data = json_decode($value->data);
      


                                            ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $value->create_date_time; ?></td>
                                                <td><?php echo $js_data->treatment;?></td>
                                                <td><?php echo $js_data->diagnostics;?></td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table> 
                                </div>
                            </div>
                        </div>
                    </div>            
                </div> -->
            </div>
        </div>            
    </section>
</div>

<?php
     $printTitle = "Patient List";
     $this->session->set_flashdata(array('pTitle' => $printTitle));    
?>  



