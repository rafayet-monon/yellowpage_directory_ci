
<form class="form-horizontal main_form text-left" enctype="multipart/form-data" action="<?php echo base_url() ?>welcome/add_company_photo" method="post"  id="contact_form">

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
					
				 <div class="form-group col-md-12">
  <label class="col-md-10 control-label">Company Description</label>
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
            <input class="form-control" name="company_description" value="" >
  </div>
  </div>
</div>	
					
					
					
					
					
					
				<div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Upload</button>
                            
                        </div>
                    </div>