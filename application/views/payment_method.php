
  <!-- CONTENT -->
  <div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="<?php echo base_url();?>">Home</a> » <a href="<?php echo base_url();?>welcome/show_cart">Cart</a> » Checkout </div>
      <h2 class="heading-title"><span>Checkout</span></h2>
      <div id="content"> 
        
        <!-- ACCORDION -->
        <div id="accordion" class="checkout">
          <form action="<?php echo base_url();?>welcome/confirm_order" method="post">
         <table class="form">
              <tbody>
                
                
                <tr>
                  <td style="width: 1px;"><input type="radio" id="tod"  value="cash_on_delivery" name="payment_type"/></td>
                  <td><label for="tod">Cash On Delivery</label></td>
                </tr>
              </tbody>
            </table>
		 
		 
		 
            <div class="buttons">
              <div class="right">
			     <input type="checkbox" value="1" name="agree"/>
                 <input type="submit" class="button" name="btn" value="Confirm Order">
            </div>
          </div>
      
      
        
      </div>
    </div>
  </div>
  <!-- END OF CONTENT --> 
  
 