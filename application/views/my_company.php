<div class="container">
<?php
        foreach ($all_company_by_user_id as $v_company) {
            ?>
			
			<div class="about-grids">
<div class="col-md-4 about-grid">
				
					<img src="<?php echo base_url()?><?php echo $v_company->company_image?>" alt=" " class="img-responsive" style="padding-top: 50px;height: 250px;width: 350px;"  />
					
					<div class="about-grid-john">
						<div class="john">
							<h4><a href="<?php echo base_url();?>welcome/profile_page/<?php echo $v_company->company_id?>"><?php echo $v_company->company_name;?></a></h4>
							<p><?php echo $v_company->company_description;?></p>
                                                        <p><?php echo $v_company->address;?></p>
														<p><?php echo $v_company->contact_number;?></p>
														<p><?php echo $v_company->company_email;?></p>
						</div>
						
						<div class="clearfix"> </div>
						
						
					</div>
					</div>
				
					</div>
		<?php } ?>
				</div>