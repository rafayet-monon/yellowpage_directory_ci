<?php
$cart_contents=$this->cart->contents();

/* echo '<pre>';
print_r($cart_contents);
exit(); */
?>
<!-- CONTENT -->
<div class="container">
  <div id="content_holder" class="fixed">
    <div class="inner">
      <h2 class="heading-title"><span>Shopping Cart</span></h2>
      <div id="content">
        <div class="cart-info">
          <table>
            <thead>
              <tr>
                <td class="remove">Remove</td>
                <td class="image">Image</td>
                <td class="name">Product Name</td>   
                <td class="quantity">Quantity</td>
                <td class="price">Unit Price</td>
                <td class="total">Total</td>
              </tr>
            </thead>
            <tbody>
                <?php
                foreach($cart_contents as $v_contents )
                {
                ?>
              <tr>
                  <td class="btn btn-danger"><a href="<?php echo base_url();?>welcome/delete_to_cart/<?php echo $v_contents['rowid']?>">Delete</a></td>
                  <td class="image"><a><img src="<?php echo base_url().$v_contents['image']?>" width="100" height="100" alt="Spicylicious store" /></a></td>
                <td class="name"><a><?php echo $v_contents['name']?></a> <span class="stock">***</span>
                  <div> </div></td>
                
                <td class="quantity">
                    <form action="<?php echo base_url();?>welcome/update_cart" method="post">
                    <input type="text" size="3" value="<?php echo $v_contents['qty']?>" name="qty"/>
                    <input type="hidden" size="3" value="<?php echo $v_contents['rowid']?>" name="rowid"/>
                    <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                </td>
                <td class="price">BDT <?php echo $v_contents['price']?></td>
                <td class="total">BDT <?php echo $v_contents['subtotal']?></td>
              </tr>
                <?php } ?>
              
            </tbody>
          </table>
        </div>
        
        <div class="cart-total">
          <table>
            <tbody>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>Sub-Total:</b></td>
                <td class="right numbers">BDT <?php echo $this->cart->total();?></td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>VAT 15%:</b></td>
                <td class="right numbers">
                    <?php
                    $vat=15*$this->cart->total()/100;
                    echo 'BDT '.$vat;
                    
                    ?>
                </td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right numbers_total"><b>Grand Total:</b></td>
                <td class="right numbers_total">BDT 
				<?php
				$sdata=array();
                $sdata['grand_total']=$this->cart->total()+$vat;
                $this->session->set_userdata($sdata);
                echo $this->cart->total()+$vat?>
				</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="buttons">
         <?php
        $user_id=$this->session->userdata('user_id');
        $shipping_id=$this->session->userdata('shipping_id');
         if($user_id !=NULL && $shipping_id !=NULL)
            {
        ?>
          <div class="right"><a class="btn btn-primary" href="<?php echo base_url();?>welcome/payment_method"><span>Checkout</span></a></div>
         
            <?php 
            }
            if($user_id !=NULL && $shipping_id ==NULL)
            {
            
            ?>
           <div class="right"><a class="btn btn-primary" href="<?php echo base_url();?>welcome/shipping_address"><span>Checkout</span></a></div>
          
            <?php } 
            if($user_id ==NULL && $shipping_id ==NULL)
            {
            ?>
           <div class="right"><a class="btn btn-primary" href="<?php echo base_url();?>welcome/user_login"><span>Checkout</span></a></div>
            <?php } ?>
         
        </div>
      </div>
    </div>
  </div>
<!-- END OF CONTENT -->