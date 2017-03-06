<?php
	/*$a=$this->session->userdata('company_id');
	echo'<pre>';
	print_r($a);
	exit();*/


?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Perspective Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo base_url();?>css/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>js/ninja-slider.js" type="text/javascript"></script>
    <style>
        body {font: normal 0.9em Arial;margin:0;}
        a {color:#1155CC;}
        ul li {padding: 10px 0;}
       
    </style>


<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
<!-- //js -->

<!-- pop-up-script -->
<script src="<?php echo base_url();?>js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.img-top a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<!--category links -->

 <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen"/>
		<script src="<?php echo base_url();?>js/cufon-yui.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>js/Aller.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('ul.oe_menu div a',{hover: true});
			Cufon.replace('h1,h2,.oe_heading');
		</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	<div class="header-nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  
					<div class="logo">
                                            <a class="navbar-brand" ><h1>Yellow Page</h1><br><h4><?php   
                                                    $name=$this->session->userdata('f_name');
                                                    
                                                    if($name)
                                                    {
                                                        echo 'Welcome, '.$name ;
                                                    }
                                                     ?></h4></a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				
					<ul class="nav navbar-nav">
						<li class="act"><a href="<?php echo base_url();?>">Home</a></li>
						<li class="hvr-bubble-bottom"><a href="<?php echo base_url();?>welcome/view_company_profile">Company</a></li>
						<li class="hvr-bubble-bottom" ><a href="<?php echo base_url();?>welcome/about_us">About Us</a></li>
						 <?php
                                                                $user_id=$this->session->userdata('user_id');
                                                                if($user_id == NULL)
                                                                {
                                                                ?>
						<li class="hvr-bubble-bottom"><a href="<?php echo base_url();?>welcome/user_login">Log In</a></li>
                                                <?php } 
                                                    else{
                                                         ?>
                                                <li class="hvr-bubble-bottom"><a href="<?php echo base_url();?>welcome/add_company">Start Service</a></li>
												<li class="hvr-bubble-bottom"><a href="<?php echo base_url();?>welcome/add_company_profile">Add Company</a></li>
												<li class="hvr-bubble-bottom"><a href="<?php echo base_url();?>welcome/my_company">My Company</a></li>
                                                <li class="hvr-bubble-bottom"><a href="<?php echo base_url();?>welcome/user_logout">Log Out</a></li>
                                                <!--<li class="hvr-bubble-bottom"><a href="<?php echo base_url();?>welcome/contact_us">Contact</a></li> -->  
                                                 <li class="hvr-bubble-bottom"><a href="<?php echo base_url();?>welcome/service_grid">My Services</a></li>   
                                                    <?php }?>
						
					</ul>
				</div><!-- /.navbar-collapse -->	
				
			</nav>
		</div>
	</div>
<!-- header -->
<!-- header-bottom -->
	<div class="header-bottom">
		<div class="container">
		<?php if(isset($search)){?>
		<!----Search  start--->
		
		  <div class="form-group">
		 
                            </div>
                            <div class="" style="width: 80%; margin: 0 auto; margin-bottom: 40px;margin-top: 20px;">
                                <form action="<?php echo base_url() . 'welcome/search' ?>" method="post">
								
                                    <input type="text" id="search_data" class="form-control search-input" name="search-term" placeholder="What are you looking for?" onkeyup="liveSearch()" autocomplete="off">
									
                                    <div id="suggestions">
                                        <div id="autoSuggestionsList">
                                        </div>
                                    </div>
                                    
									
                         <!--       <label for="field-ta" class="col-sm-3 control-label">Select Division</label>     
                              <div class="col-sm-3">
                            <select name="division_id" class="form-control" required>

                            
                            <option value="" >Select Division</option>
                                <?php 
                                    foreach($all_published_division as $v_division)
                                    {
                                ?>
								
                                <option value="<?php echo $v_division->division_id;?>" ><?php echo $v_division->division_name;?></option>
                                <?php } ?>
                        </select> -->
                                
                                    
                            </div>
							</form>

                        </div>
		<?php }?>
		<!----Search end--->
		
		
		
		
		
		
			<div class="header-bottom-right">
				<div class="header-bottom-right2">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="p"> </a></li>
						<li><a href="#" class="g"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
					</ul>
				</div>
				<div class="header-bottom-right1">
					<ul>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:abir.monon@gmail.com">abir.monon@gmail.com</a></li>
                                                <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><a href="tel:01737190646">01737190646</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header-bottom -->
<!-- banner -->
	    <div id="ninja-slider">
		<?php 


            if(isset($slider)){
            ?>
        <div class="slider-inner">
            <ul>
                <li>
                    <a class="ns-img" href="<?php echo base_url();?>images/5.jpg"></a>
                    <div class="caption cap1">Find Anything</div>
                    <div class="caption cap1 cap2">Anytime</div>
                    <div class="caption">YELLOWPAGE</div>
                </li>
                <li><a class="ns-img" href="<?php echo base_url();?>images/responsive.jpg"></a>
                    <div class="caption cap1">RESPONSIVE</div>
                    <div class="caption cap1 cap2">For All Device</div>
                    <div class="caption">YELLOWPAGE</div>
                </li>
                <li>
                    <a href="/"><img class="ns-img" src="<?php echo base_url();?>images/banner1.jpg" style="cursor:pointer;" /></a>
                    <div class="caption cap1">For Our Country</div>
                    <div class="caption cap1 cap2">For Our People</div>
                    <div class="caption">YELLOWPAGE</div>
                </li>
                <li>
                    <a class="ns-img" href="<?php echo base_url();?>images/7.jpg"></a>
                    <div class="caption cap1">You Can Take Some Rest Now</div>
                    <div class="caption cap1 cap2">It Can Save Your Time</div>
                    <div class="caption">YELLOWPAGE</div>
                </li>
            </ul>
            <div class="fs-icon" title="Expand/Close"></div>
        </div>
			<?php }?>
    </div>
<!-- //banner -->
<!-- services -->
	
<?php 


            if(isset($service)){
            ?>


<div class="services"> 
            
              <div class="container">
                        <h3>All Services</h3>
			<p class="vel">Choose Category</p>
                        
                        
            	
                   <div class="oe_wrapper">
                       <div id="oe_overlay" class="oe_overlay"></div> 
                       <div class="col-md-12">
                           <div class="container">

 <?php
                                    foreach($all_published_category as $v_category)
                                   {
                                    ?>
            

			<div class="col-md-1">
                           
			<ul id="oe_menu" class="oe_menu">
				<li><a href="<?php echo base_url();?>welcome/category_sub_category/<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></a></li>   
                        </ul>
                          
                        </div>

      <?php } ?>
                            

                       </div>

	
                       </div>
                </div>
           
         </div> 
             
             <?php } ?>

          
        
	
<!-- //services -->

<!-- features -->
<div id="features" class="features">
        <?php echo $maincontent;?>
      </div>	
<!-- //features -->
<!-- contact -->
	
<!-- //contact -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			
			<div class="header-bottom-right2 footer-right">
				<ul>
					<li><a href="#" class="facebook"> </a></li>
					<li><a href="#" class="p"> </a></li>
					<li><a href="#" class="g"> </a></li>
					<li><a href="#" class="twitter"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!--Search  stars--->

<script>

            function liveSearch() {

                var input_data = $('#search_data').val();
                if (input_data.length === 0) {
                    $('#suggestions').hide();
                } else {


                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url();?>welcome/search",
                        data: {search_data: input_data},
                        success: function (data) {
                            // return success
                           if (data.length > 0) {
                                $('#suggestions').show();
                                $('#autoSuggestionsList').addClass('auto_list');
                                $('#autoSuggestionsList').html(data);
                           }
                        }
                    });
                }
            }

        </script>
<!--Search end--->


<!--Select division -->


<!--End Division-->





<!-- for bootstrap working -->
	<script src="<?php echo base_url();?>js/bootstrap.js"></script>
<!-- //for bootstrap working -->

 <!-- The JavaScript for cattegory -->
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
        
</body>
</html>
