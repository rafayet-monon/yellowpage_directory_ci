<div class="row">
    <div class="col-md-12">                        
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title" >
                 Company Content
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body" style="background-color: wheat;">

                <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url()?>welcome/save_company_profile" class="form-horizontal form-groups-bordered">

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
                        <label for="field-1" class="col-sm-3 control-label">Company name</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="company_name" placeholder="Company Name">
                        </div>
                    </div>

                  <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">Company Type</label>

                        <div class="col-sm-5">
                            <textarea class="form-control" name="service" placeholder="Company Type"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">Company Description</label>

                        <div class="col-sm-5">
                            <textarea class="form-control" name="company_description" placeholder="Company Description"></textarea>
                        </div>
                    </div>


                    

                  <div class="form-group">
                        <label class="col-sm-3 control-label">Select Image</label>

                        <div class="col-sm-5">

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <span class="btn btn-info btn-file">
                                    <input type="file" name="company_image">
                                    
                                    
                                </span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                            </div>

                        </div>
                    </div>

                     <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Address</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="address" placeholder="Address">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Contact Number</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="contact_number" placeholder="Contact Number">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Company Email</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="company_email" placeholder="Company Email">
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Publish Company</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>