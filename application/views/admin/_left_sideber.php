           
<script type="text/javascript">
    $(document).ready(function () {

        var segment_1 = '<?php echo $this->uri->segment(1); ?>';
        var segment_2 = '<?php echo $this->uri->segment(2); ?>';
        var segment_3 = '<?php echo $this->uri->segment(3); ?>';

        if (segment_3 === 'prescription_list' || segment_3 === 'create_new_generic'|| segment_3 === 'create_new_prescription') {
            $('.pres').addClass('active');
        }
       
        else if (segment_3 === 'Payment' || segment_3 === 'Payment_manage') {
            $('.payment').addClass('active');
        }
        else if (segment_2 === 'Appointment_controller' || segment_3 === 'appointment_list') {
            $('.appointment').addClass('active');
        }

        else if (segment_1 === 'create_new_patient' || segment_1 === 'patient_list') {
            $('.patient').addClass('active');
        }
        else if (segment_3 === 'add_schedule' || segment_3 === 'schedule_list' || segment_3 ==='schedul_edit') {
            $('.schedule').addClass('active');
        }
        else if (segment_2 === 'Emergency_stop_controller') {
            $('.emergency_stop').addClass('active');
        }
        else if (segment_2 === 'Venue_controller') {
            $('.venue').addClass('active');
        }
        else if (segment_2 === 'Disease_test_controller' || segment_2 === 'Setup_controller') {
            $('.setup_data').addClass('active');
        }
        else if (segment_2 === 'Users_controller' || segment_2 === 'Users_controller') {
            $('.users').addClass('active');
        }
        else if (segment_2 === 'Web_setup_controller' || segment_1 === 'profile') {
            $('.web_setting').addClass('active');
        }
        else if (segment_2 === 'Blog_controller' || segment_2 === 'Blog_controller') {
            $('.blog').addClass('active');
        }
        else if (segment_2 === 'Sms_setup_controller' || segment_2 === 'Sms_report_controller') {
            $('.sms_setup').addClass('active');
        }

        else if (segment_3 === 'Email') {
            $('.email').addClass('active');
        }
        else if (segment_2 === 'Doctor_controller') {
            $('.Doctor').addClass('active');
        }
        else if (segment_3 === 'Print_pattern_controller') {
            $('.print_pattern').addClass('active');
        } 
        else if (segment_2 === 'Invoice' || segment_2 === 'Service') {
            $('.Invoice').addClass('active');
        } 

    });

</script>



            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel text-center">
                        <div class="info">
                            <p style="background-color: #eb2f06; padding: 5px; border-radius: 16px; font-family: cursive;"><?php echo 'Ma. Cecilia Beto' ?></p>
                            <a id="tots" href="#" class="text-success"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url();?>admin/Dashboard"><i class="ti-home"></i> <span><?php echo display('deashbord');?></span>
                            </a>
                        </li>

                        <li class="treeview Doctor">
                            <a href="#">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i><span><?php echo 'Employees'?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Doctor_controller/add_new_doctor"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo 'Add'?> </a></li>
                                <li><a href="<?php echo base_url();?>admin/Doctor_controller/doctor_list"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo'List'?> </a></li>
                            </ul>
                        </li>

                        
                        <li class="treeview patient">
                            <a href="#">
                                <i class="fa fa-child" aria-hidden="true"></i><span><?php echo display('patient')?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>create_new_patient"> <i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('add_new_patient')?></a></li>
                                <li><a href="<?php echo base_url();?>patient_list"> <i class="fa fa-list" aria-hidden="true"></i> <?php echo display('patient_list')?></a></li>
                            </ul>
                        </li> 


                        <li class="treeview appointment">
                            <a href="#">
                                <i class="fa fa-codepen" aria-hidden="true"></i><span><?php echo display('appointment')?></span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url()?>admin/Appointment_controller"> <i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('create_appointment')?></a></li>
                                <li><a href="<?php echo base_url()?>admin/Appointment_controller/appointment_list"> <i class="fa fa-list" aria-hidden="true"></i> <?php echo display('appointment_list')?></a></li>
                            </ul>
                        </li>
                    

                        <li class="treeview Invoice">

                            <a href="#">
                                <i class="ti-notepad"></i><span>Payment</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Invoice"><i class="fa fa-plus" aria-hidden="true"></i> Add Payment</a></li>
                                <li><a href="<?php echo base_url();?>admin/Invoice/invoice_list"><i class="fa fa-plus" aria-hidden="true"></i> Payment records</a></li>
                                <li><a href="<?php echo base_url();?>admin/Service"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('add_service')?> </a></li>
                            </ul>
                        </li>


                        <li class="treeview schedule">
                            <a href="#">
                               <i class="fa fa-weixin" aria-hidden="true"></i><span><?php echo display('schedule')?> </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Schedule_controller/add_schedule"> <i class="fa fa-plus" aria-hidden="true"></i> <?php echo display('add_schedule')?></a></li>
                                <li><a href="<?php echo base_url();?>admin/Schedule_controller/schedule_list"> <i class="fa fa-list" aria-hidden="true"></i> <?php echo display('schedule_list')?></a></li>
                            </ul>
                        </li>



                        <!-- <li class="treeview users">
                            <a href="#">
                                <i class="fa fa-cogs" aria-hidden="true"></i><span> <?php echo display('users')?> </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Users_controller/create_new_user" class="nav-link"><?php echo display('add_new_user')?></a></li>  
                                <li><a href="<?php echo base_url();?>admin/Users_controller/user_list" class="nav-link"><?php echo display('user_list')?></a></li>  
                            </ul>
                        </li> -->                        

                   </ul>
                </div>
            </aside>
<script>
    $(document).ready(function(){

        function blink(){

            $('#tots').fadeOut(500);
            $('#tots').fadeIn(500); 

        };

        setInterval (blink, 1000);
    });

</script>