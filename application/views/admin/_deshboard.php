

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
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd" style="background-color: #f78fb3;">
                            <a href="<?php echo base_url();?>admin/Doctor_controller/doctor_list">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number"><?php echo count(@$doctor)?></span> </h2>
                                            <div class="small"> <?php echo 'Total Employees'?></div>
                                        <div class="sparkline1 text-center"></div>
                                    </div>
                                    <div class="icon"><i class="ti-user"></i></div>
                                </div>
                            </a>    
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd" style="background-color: #f78fb3;">
                            <a href="<?php echo base_url();?>patient_list">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number"><?php echo @$total_patient;?></span> </h2>
                                            <div class="small"> <?php echo display('total_patient')?> </div>
                                        <div class="sparkline1 text-center"></div>
                                    </div>
                                    <div class="icon"><i class="ti-user"></i></div>
                                </div>
                            </a>    
                            </div>
                        </div>

                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd" style="background-color: #f78fb3;">
                            <a href="<?php echo base_url();?>admin/Appointment_controller/appointment_list">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2><span class="count-number"><?php echo count(@$total_appointment);?></span></h2>
                                        <div class="small"><?php echo display('total_appointment')?></div>
                                    </div>
                                    <div class="icon"><i class="ti-notepad"></i></div>
                                </div>
                            </a>
                            </div>
                        </div>

                        <!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3"><br>
                            <div class="panel panel-bd" style="background-color: #78e08f;">
                                <hr>
                            <a href="<?php echo base_url();?>admin/Appointment_controller/today_appointment_list">
                                <div class="panel-body">
                                   <div class="statistic-box">
                                        <h2><span class="count-number"><?php echo count($today_appointment);?></span></h2>
                                        <div class="small">View Appointments</div>
                                    </div>
                                       <div class="icon"><i class="fa fa-codepen"></i></div>
                                </div>
                            </a>    
                            </div>
                        </div> -->

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="panel panel-bd" style="background-color: #eb2f06; border-radius: 25px;">
                             <a href="<?php echo base_url();?>patient_list">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2>View Patient List</h2>
                                    </div>
                                    <div class="icon"><i></i></div>
                                </div>
                            </a>
                            </div>
                            <div class="panel panel-bd" style="background-color: #1e90ff; border-radius: 25px;">
                             <a href="<?php echo base_url();?>admin/Invoice">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2>Add Payment</h2>
                                    </div>
                                    <div class="icon"><i></i></div>
                                </div>
                            </a>
                            </div>
                            <div class="panel panel-bd" style="background-color: #f1c40f; border-radius: 25px;">
                             <a href="<?php echo base_url();?>admin/Service/service_list">
                                <div class="panel-body">
                                    <div class="statistic-box">
                                        <h2>Clinic Services</h2>
                                    </div>
                                    <div class="icon"><i></i></div>
                                </div>
                            </a>
                            </div>
                        </div>

                </section> <!-- /.content -->
            </div> <!-- /.content-wrapper -->