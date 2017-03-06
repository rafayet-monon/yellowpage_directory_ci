	<div class="container">
<?php
        foreach ($all_published_product_by_company_id as $v_product) {
            ?>
			
			<div class="about-grids" >
<div class="col-md-4 about-grid" >
				
					<img src="<?php echo base_url() . $v_product->product_image; ?>"" alt=" " class="img-responsive" style="padding-top: 50px;height: 300px;width: 400px;"   />
					
					<div class="about-grid-john" style="background-color: wheat;">
						<div class="john">
							<h4> <?php echo $v_product->product_name;;?></h4>
							<span> BDT <?php echo $v_product->price; ?></span>
                             <form action="<?php echo base_url(); ?>welcome/add_to_cart" method="post">
                                <input type="hidden" value="1" name="quantity" id="qty">
                                <input type="hidden" name="product_id" value="<?php echo $v_product->product_id; ?>" >
								 <!--<input type="hidden" name="product_id" value="<?php echo $product_info->product_id;?>"> -->
                                <button class="btn btn-primary" input type="submit" value="add to cart"> Add to cart</button>

                            </form>                           
						</div>
						
						<div class="clearfix"> </div>
						
						
					</div>
					</div>
				
					</div>
		<?php } ?>
				</div>
	
	
	
	<?php echo $this->pagination->create_links();?>
	
	
	
	
	
	
	