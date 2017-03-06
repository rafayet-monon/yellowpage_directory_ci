
<div id="features" class="features">

		<div class="container">
		
<h3><font color="#2A79B9">Popular Service</font></h3>    
							
					
<div class="container">




	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css"  type="text/css">
	
	
	
	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style_service.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url();?>font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	
	
	
	<!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>
	
	




    
    
	<div id="page-content" class="index-page" >
		<div id="container">
            
            <?php
                                foreach ($popular_service as $v_service)
                                    
                                {?>
			<!-- These are our grid blocks -->
			<div class="item" style="background-color: wheat;">
                            
                            
                            
				<!--<a class="example-image-link" href="images/01.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/01.jpg" alt=""/></a>-->
				<div class="content-item">
					
					<h3 class="title-item"><a href="<?php echo base_url();?>welcome/service_details/<?php echo $v_service->service_id;?>"><?php echo $v_service->company_name;?></a></h3>
                    
                    <h4 class="title-item"><a href="#">Services: <?php echo $v_service->service;?></a></h4>
                                        <p class="info"><?php echo $v_service->service_description;?></p> <br>
                                        
					<ul class="list-inline">
						<li><a href="#"><i class="fa fa-mobile"></i> <?php echo $v_service->mobile;?></a></li>
					
					</ul>
				</div>
				<div class="bottom-item">
					
					<span class="user f-right"><a href="#"><?php echo $v_service->address;?></a></span>
				</div>
			</div>
                        
                       
			 <?php } ?>
				
			</div>
		</div>
    
        
	
    </div>
	
    <!-- Once the page is loaded, initialized the plugin. -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.1.1.js" ></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	
	<!-- jQuery Pinterest -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.pinto.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>
	
    


  
		
		<div class="container">
<h3><font color="#2A79B9">Popular company</font></h3>
		<?php
        foreach ($popular_company as $v_company) {
            ?>
			
			<div class="about-grids" >
<div class="col-md-4 about-grid" >
				
					<img src="<?php echo base_url()?><?php echo $v_company->company_image?>" alt=" " class="img-responsive" style="padding-top: 50px;height: 300px;width: 400px;"   />
					
					<div class="about-grid-john" style="background-color: wheat;">
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
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
</br>
</br>
</br>
</br>
			<h3 >Our Features</h3>
			<p class="vel">Some Key Points</p>
			</br>
			</br>
			<div class="services-grids">
				<div class="col-md-6 services-grid-left">
					<div class="col-xs-4 services-grid-left1">
						<i class="hovicon effect-2 sub-a feat"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></i>
					</div>
					<div class="col-xs-8 services-grid-left2">
						<h4>Free Service</h4>
						<p>Help general people by letting them search any service they need saving valuable time and effort.
</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-grid-right">
					<div class="col-xs-4 services-grid-left1">
						<i class="hovicon effect-2 sub-a feat"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></i>
					</div>
					<div class="col-xs-8 services-grid-left2">
						<h4>Free Business add</h4>
						<p>Help service providers to advertise their services.
</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="services-grids">
				<div class="col-md-6 services-grid-left">
					<div class="col-xs-4 services-grid-left1">
						<i class="hovicon effect-2 sub-a feat"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></i>
					</div>
					<div class="col-xs-8 services-grid-left2">
					</br>
					
						<h4>E commerce solution</h4>
						<p>Help user to buy product easily</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-grid-right">
					<div class="col-xs-4 services-grid-left1">
						<i class="hovicon effect-2 sub-a feat"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></i>
					</div>
					<div class="col-xs-8 services-grid-left2">
						<h4>Easily Customizable</h4>
						<p>Service can be easily Cumtomed by the service provider</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>