
  <!-- CONTENT -->
  <div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="<?php echo base_url();?>">Home</a> » <a href="<?php echo base_url();?>welcome/show_cart">Cart</a></div>
      <!-- <h2 class="heading-title"><span>Checkout</span></h2> -->
      <div id="content"> 
        
        <!-- ACCORDION -->
        <div id="accordion" class="checkout">
          <h2><a href="#">shipping Details</a></h2>
          <div>
              <form action="<?php echo base_url();?>welcome/save_shipping_address" method="post">
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> Full Name:</td>
                  <td><input type="text" class="large-field" value="" name="full_name"/></td>
                </tr>
              
                <tr>
                  <td><span class="required">*</span> Mobile number:</td>
                  <td><input type="text" class="large-field" value="" name="mobile_no"/></td>
                </tr>
             
                <tr>
                  <td><span class="required">*</span> email address:</td>
                  <td><input type="email" class="large-field" value="" name="email_address"/></td>
                </tr>
                
                <tr>
                  <td>Company:</td>
                  <td><input type="text" class="large-field" value="" name="company_name"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Address :</td>
                  <td><input type="text" class="large-field" value="" name="address"/></td>
                </tr>
              
                <tr>
                  <td><span class="required">*</span> City:</td>
                  <td><input type="text" class="large-field" value="" name="city"/></td>
                </tr>
                  
                <tr>
                  <td><span class="required">*</span> ZIP Code:</td>
                  <td><input type="text" class="large-field" value="" name="zip_code"/></td>
                </tr>
                  <tr>
                  <td></td>
                  <td><input type="submit" class="large-field" value="Save Shipping Address" name="btn"/></td>
                </tr>
                </form>
              </tbody>
            </table>
          </div>
         
          
      
      
        
      </div>
    </div>
  </div>
  <!-- END OF CONTENT --> 
  
 