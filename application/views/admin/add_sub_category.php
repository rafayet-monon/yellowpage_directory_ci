<html>
	<head>
	
	<!-- Bootstrap CSS -->    
    <link href="<?php echo base_url()?>admin_asset/form/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url()?>admin_asset/form/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()?>admin_asset/form/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>admin_asset/form/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url()?>admin_asstet/form/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>admin_asstet/form/css/style-responsive.css" rel="stylesheet" />
    
    
        <link rel="stylesheet" href="<?php echo base_url()?>admin_asset/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
        <link rel="stylesheet" href="<?php echo base_url()?>admin_asset/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
        <link rel="stylesheet" href="<?php echo base_url()?>admin_asset/css/font-icons/font-awesome/css/font-awesome.min.css"  id="style-resource-2">
        <link rel="stylesheet" href="<?php echo base_url()?>admin_asset/css/admin.css"  id="style-resource-5">
        <script src="<?php echo base_url()?>admin_asset/js/jquery-1.10.2.min.js"></script>
	
	</head>
	
	<body>

<div class="row">
    <div class="col-md-12">                        
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    <h3>Add Sub Category</h3>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" method="post" action="<?php echo base_url();?>super_admin/save_sub_category" onsubmit="return validateStandard(this)" class="form-horizontal form-groups-bordered">

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
                        
                        <label for="field-1" class="col-sm-3 control-label">Sub Category Name</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="sub_category_name"  placeholder="" size="100">
                        </div>
                    </div>

                    <div class="form-group">
                        
                        <label class="col-sm-3 control-label">Select Category</label>

                        <div class="col-sm-5">
                            <select name="category_id" class="form-control" style="width: 250px;">

                            
                            <option value="" >Select Category.....</option>
                                <?php 
                                    foreach($all_published_category as $v_category)
                                    {
                                ?>
                                <option value="<?php echo $v_category->category_id;?>" ><?php echo $v_category->category_name;?></option>
                                <?php } ?>
                        </select>
                            </div>
                        
                    </div>      
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Publication Status</label>

                        <div class="col-sm-5">
                            <div class="radio ">
                                <input type="radio" id="rd-1" name="publication_status" value="1">
                                <label>Published</label>
                            </div>

                            <div class="radio ">
                                <input type="radio" id="rd-2" name="publication_status" value="0">
                                <label>Unpublished</label>
                            </div>



                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-success">Add Sub Category</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



  
			  
			      <!-- javascripts -->
    <script src="<?php echo base_url()?>admin_asstet/form/js/jquery.js"></script>
    <script src="<?php echo base_url()?>admin_asstet/form/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url()?>admin_asstet/form/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>admin_asstet/form/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="<?php echo base_url()?>admin_asstet/form/js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="<?php echo base_url()?>admin_asstet/form/js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="<?php echo base_url()?>admin_asstet/form/js/scripts.js"></script>
			  

	</body>
</html>
<!--   Customized Form   -->