<div class="container">
<div class="row">
    <div class="col-md-12">                        
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Edit Your Product
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>
<?php
        foreach ($all_product as $v_company) {
            ?>
			<?php } ?>
            <div class="panel-body">
               
                <form class="form-horizontal main_form text-left" enctype="multipart/form-data" action="<?php echo base_url() ?>welcome/update_product" method="post"  id="contact_form">

                      
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
                        <label for="field-1" class="col-sm-3 control-label">Product Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="product_name" value="<?php echo $v_company->product_name; ?>">
                            <input type="hidden" name="product_id" value="<?php echo $v_company->product_id; ?>">
                            
                        </div>
                        </div>
                        
                        
                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="product_description" value="<?php echo $v_company->product_description; ?>">                           
                        </div> 
                        </div>
                        
                        <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Price</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="price" value="<?php echo $v_company->price; ?>">  
                        </div>  
                        </div>
						
						<div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Quantity</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="product_quantity" value="<?php echo $v_company->product_quantity; ?>">  
                        </div>  
                        </div>
						
						
						
						
						
						<div class="col-md-12 text-left">

 <div class="form-group">
                        <label class="col-sm-3 control-label">Select Image</label>

                        <div class="col-sm-5">

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <span class="btn btn-info btn-file">
                                    <input type="file" name="product_image">
                                    
                                    
                                </span>
                                <span class="fileinput-filename"></span>
                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                            </div>

                        </div>
                    </div>





</div>
						
						
                        
                    <div class="form-group">
                        
                       

                     
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Update Product</button>
                            
                        </div>
                    </div>
              
            </div>
                </form> 
        </div>
    </div>
</div>
</div>
</div>