<div class="container">
<div class="row">
    <div class="col-md-12">                        
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Edit Service
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">
               
                <form role="form" action="<?php echo base_url() ?>super_admin/update_service" method="post" class="form-horizontal form-groups-bordered">

                      
                    <div class="form-group">
                        <?php
                        $message = $this->session->userdata('message');
                        if ($message) {
                            ?> 
                            <div class="alert alert-success">
                                <?php echo $message; ?>
                            </div>

                            <?php
                            $this->session->unset_userdata('message');
                        }
                        ?>
                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Company Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="company_name" value="<?php echo $service_info->company_name; ?>">
                            <input type="hidden" name="service_id" value="<?php echo $service_info->service_id; ?>">
                            
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">Service</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="service" value="<?php echo $service_info->service; ?>">   
                        </div>  
                        </div>
                        
                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="service_description" value="<?php echo $service_info->service_description; ?>">                           
                        </div> 
                        </div>
                        
                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="address" value="<?php echo $service_info->address; ?>">  
                        </div>  
                        </div>
                        <div class="form-group">
                        
                        <label for="field-1" class="col-sm-3 control-label">Contact Number</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="mobile" value="<?php echo $service_info->mobile; ?>">                           
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <label class="col-sm-3 control-label">Service Status</label>

                        <div class="col-sm-5">
                            <div class="radio ">
                                <?php 
                                    if($service_info->publication_status==1)
                                    {
                                ?>
                                <input type="radio" id="rd-1" name="publication_status" value="1" checked>
                                <?php
                                    }
                                    else{
                                ?>
                                <input type="radio" id="rd-1" name="publication_status" value="1">
                                    <?php } ?>
                                <label>Publish</label>
                            </div>

                            <div class="radio ">
                                <?php
                                    if($service_info->publication_status==0)
                                    {
                                ?>
                                <input type="radio" id="rd-2" name="publication_status" value="0" checked>
                                <?php
                                    }
                                    else{
                                ?>
                                <input type="radio" id="rd-2" name="publication_status" value="0">
                                    <?php } ?>
                                <label>Un Publish</label>
                            </div>



                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Update Service</button>
                            
                        </div>
                    </div>
                
            </div>
               </form>
        </div>
    </div>
</div>
</div>