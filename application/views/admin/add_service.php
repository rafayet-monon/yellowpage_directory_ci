<!DOCTYPE html>
<html>
<head>
	<title>Dependent Dropdowns in Ajax </title>
</head>
<script src="<?php echo base_url();?>admin_asset/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>admin_asset/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">


<body>


<br>
<br>
  <form role="form" method="post" action="<?php echo base_url();?>super_admin/save_service" onsubmit="return validateStandard(this)" class="form-horizontal form-groups-bordered">
 
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
                        <label for="field-1" class="col-sm-3 control-label">Company Name</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="company_name"  placeholder="Company Name">
                        </div>
                    </div>
                         <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">Service or specialization</label>

                        <div class="col-sm-5">
                            <textarea class="form-control autogrow" id="field-ta" name="service"  placeholder="Service or specialization"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label">Service Description</label>

                        <div class="col-sm-8">
                            <textarea class="form-control autogrow" id="field-ta"  name="service_description"></textarea>
                        </div>
                    </div><br></br>
  <div class="form-group">
   <label for="field-ta" class="col-sm-3 control-label">Select Category</label>
    <div class="col-sm-4">
      <select name="category_id" class="form-control countries">
       <option value="">--Select--</option>
     </select>
   </div>
 </div>
 <div class="form-group">
<label for="field-ta" class="col-sm-3 control-label">Select Sub Category</label>
<div class="col-sm-4">
   <select name="sub_category_id" class="form-control states">
     <option value="">--Select--</option>
   </select>
 </div>
 </div><br> </br>
    <label for="field-ta" class="col-sm-3 control-label">Select Division</label>
      <div class="col-sm-5">
                            <select name="division_id" class="form-control" style="width: 250px;">

                            
                            <option value="" >Select Division.....</option>
                                <?php 
                                    foreach($all_published_division as $v_division)
                                    {
                                ?>
                                <option value="<?php echo $v_division->division_id;?>" ><?php echo $v_division->division_name;?></option>
                                <?php } ?>
                        </select>
                            </div>
     <div class="form-group"><br></br>
                        <label for="field-ta" class="col-sm-3 control-label">Address</label>

                        <div class="col-sm-8">
                            <textarea class="form-control autogrow" id="field-ta" name="address"></textarea>
                        </div>
                    </div>
     <div class="form-group">
                     
                        <label for="field-1" class="col-sm-3 control-label" err="Enter Valide number." required regexp="JSVAL_RX_TEL">Mobile Number</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="field-1" name="mobile">
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
                            <button type="submit" class="btn btn-success">Add Service</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
     
    

</form>








</p>



</body>
</html>

<div class="div">
  
</div>

<script type="text/javascript">
	
  $(document).ready(function(){

    /*Get the country list */

      $.ajax({
        type: "GET",
        url: "<?php echo base_url();?>super_admin/get_countries",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $('.countries').find("option:eq(0)").html("Please wait..");
        },                         
        success: function (data) {
          /*get response as json */
           $('.countries').find("option:eq(0)").html("Select Category");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.countries').append(option);
         });  

          /*ends */
          
        }
      });



    /*Get the state list */


    $('.countries').change(function(){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>super_admin/get_states",
        data:{sub_category_id:$(this).val()}, 
        beforeSend :function(){
      $(".states option:gt(0)").remove(); 
      $(".cities option:gt(0)").remove(); 
      $('.states').find("option:eq(0)").html("Please wait..");

        },                         
        success: function (data) {
          /*get response as json */
           $('.states').find("option:eq(0)").html("Select Sub Category");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.states').append(option);
         });  

          /*ends */
          
        }
      });
    });


    /*Get the state list */




  });





</script>
<style type="text/css">
  
</style>
</body>