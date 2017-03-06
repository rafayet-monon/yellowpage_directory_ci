  <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css"  type="text/css">
	
	
	
	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style_service.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo base_url();?>font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	
	
	
	<!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>
	



<div class="container">




	
  
	




    
    
		<?php
foreach ($all_published_division as $v_div)


{ echo "<h1>".$v_div->division_name."</h1>";
								$division_id=$v_div->division_id;

								?>
	<div id="page-content" class="index-page">
		<div id="container">
            
            <?php
                                foreach ($all_published_service_by_sub_category as $v_service)
                                    
                                { 
				
								
								if($division_id==$v_service->division_id){ ?>
			<!-- These are our grid blocks -->
			<div class="item">
                            
                            
                            
				<!--<a class="example-image-link" href="images/01.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/01.jpg" alt=""/></a>-->
				<div class="content-item">
					
					<h3 class="title-item"><a href="#"><?php echo $v_service->company_name;?></a></h3>
                    
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
                        
                       
								<?php } }?>
				
			</div>
		</div>
<?php }?>
    
        
	
    </div>
	
    <!-- Once the page is loaded, initialized the plugin. -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.1.1.js" ></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	
	<!-- jQuery Pinterest -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.pinto.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>
	
	<?php echo $this->pagination->create_links();?>
    


 
