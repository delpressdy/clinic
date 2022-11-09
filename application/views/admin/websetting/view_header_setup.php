
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('web_setting');?></h1>
            <small><?php echo display('web_setting');?></small>
           <ol class="breadcrumb">
                <li class="active"><a href="<?php echo base_url();?>admin/Dashboard"><?php echo display('deashbord');?></a></li>
            </ol>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
              <div class="row">
        <!--  form area-->
        <div class="col-sm-12">
          <?php
          $msg = $this->session->flashdata('message');
              if($msg !=''){
                  echo $msg;
              }
              if($this->session->flashdata('exception')!=""){
                 echo $this->session->flashdata('exception');
            }
          ?>
            <div class="panel panel-bd panel-form">
                <div class="panel-body">
                    <div class="portlet-body form">
                        <?php 
                             
                            $attributes = array('class' => 'form-horizontal','method'=>'post','role'=>'form');
                            echo form_open_multipart('admin/Web_setup_controller/save_header', $attributes);                
                         ?>
                         
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('phone_number');?></label>
                                    <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->phone->details)?$info->phone->details:null); ?>" name="phone" class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"> <?php echo display('email');?></label>
                                    <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->email->details)?$info->email->details:null); ?>" name="email" class="form-control"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('address');?> </label>
                                   <div class="col-md-8">
                                   <textarea class="form-control" name="address" rows="3" cols="4">
                                       <?php echo (!empty($info->address->details)?$info->address->details:null); ?>
                                   </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('time_zone_setup');?> :</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="timezone">
                                            <option value="">--<?php echo display('time_setup');?>--</option>
                                            <?php 
                                                $zones = timezone_identifiers_list();
                                                $i = 0;
                                                foreach($zones as $name){
                                                    echo'<option '.($name==$info->timezone->details?'selected':'').' value="'.$name.'">'.$name.'</option>'; 
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label class="col-md-3 control-label"><?php echo display('facebook_link');?></label>
                                   <div class="col-md-8">
                                        <input type="text" value="<?php echo (!empty($info->facebook->details)?$info->facebook->details:null); ?>" name="facebook"  class="form-control"> 
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('logo');?> </label>
                                    <div class="col-md-8">
                                        <img src="<?php echo (!empty($info->logo->picture)?$info->logo->picture:null); ?>">
                                        <input type="file" name="picture">       
                                        <input type="hidden" name="pic" value="<?php echo (!empty($info->logo->picture)?$info->logo->picture:null); ?>">      
                                    </div>
                                </div>
                                

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('website_title');?> </label>
                                    <div class="col-md-8">
                                            
                                        <input type="text" class="form-control" name="website_title" value="<?php echo (!empty($info->website->details)?$info->website->details:null); ?>">      
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo display('google_map');?></label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="google_map" rows="3" cols="4">
                                           <?php echo (!empty($info->google_map->details)?$info->google_map->details:null); ?>
                                       </textarea>     
                                    </div>
                                </div>
                            </div>

                              <div class="form-group row">
                                  <div class="col-sm-offset-3 col-sm-6">
                                          <button type="reset" class="btn btn-danger"><?php echo display('reset');?></button>
                                          
                                          <button type="submit" class="btn btn-success"><?php echo display('submit');?></button>
                                   
                                  </div>
                              </div>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    </section>
</div>



