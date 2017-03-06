
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen"/>
		<script src="<?php echo base_url();?>js/cufon-yui.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>js/Aller.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('ul.oe_menu div a',{hover: true});
			Cufon.replace('h1,h2,.oe_heading');
		</script>
                
                
<div > 
            
              <div class="container">
                  <h3>Choose Sub Category</h3>
			
		
            	
                    <nav class="navbar navbar-light bg-faded">
                           <?php
                                    foreach($all_published_sub_category_by_category as $v_sub_category)
                                   {
                                    ?>
  <!--<ul class="nav navbar-nav">
    <li class="nav-item active">
        <div class="col-md-12">
      <a class="nav-link" href="<?php echo base_url();?>welcome/view_service/<?php echo $v_sub_category->sub_category_id;?>"><?php echo $v_sub_category->sub_category_name;?><span class="sr-only">(current)</span></a>
    </div>
        </li>
   
   
  </ul>-->
  <div class="container">  
  	<div class="col-md-1">
            <div class="container">  
			<ul id="oe_menu" class="oe_menu">
                               <li><a href="<?php echo base_url();?>welcome/view_service/<?php echo $v_sub_category->sub_category_id;?>"><?php echo $v_sub_category->sub_category_name;?><span class="sr-only">(current)</span></a>
                        </ul>
            </div>
                        </div>
  
  
                        
                         <?php } ?>
    
                        </div>
</nav>

	
                   
                </div>
         </div>