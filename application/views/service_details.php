
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
	
	




    
    
	<div id="page-content" class="index-page">
		<div id="container">
            
           
			<!-- These are our grid blocks -->
			<div class="item">
                            
                            
                            
				<!--<a class="example-image-link" href="images/01.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/01.jpg" alt=""/></a>-->
				<div class="content-item" style="background-color: wheat;">
					
					<h3 class="title-item"><a href="#"><?php echo $single_service->company_name;?></a></h3>
                    
                    <h4 class="title-item"><a >Services: <?php echo $single_service->service;?></a></h4>
                                        <p class="info"><?php echo $single_service->service_description;?></p> <br>
                                        
					<ul class="list-inline">
						<li><a ><i class="fa fa-mobile"></i> <?php echo $single_service->mobile;?></a></li>
					
					</ul>
				</div>
				<div class="bottom-item">
					
					<span class="user f-right"><a ><?php echo $single_service->address;?></a></span>
				</div>
			</div>
                        
            
				
			</div>
		</div>
    
        
	
    </div>
	
	
            
            
            <!-- post comments start -->
            <article class="post-comments" style="background-color: #F3D489;">
                <h3>comments</h3>
                
                <?php
                foreach ($comments_by_service_id as $comments)
                {
                ?>
                <!-- post comments list items start -->
                <ul class="comments-li">
                    <li>
                        <article class="comment">
                            
                          <div class="comment-meta" style="background-color: wheat;>
                                <a href="#"><label>Name:</label><?php echo $comments->f_name;?></a>
                            </div>

                            <div class="comment-body" >
                                <p style="background: content-box;"><label>Comment:</label><?php echo $comments->comments;?></p>
                            </div>
                        </article>
                    </li><!-- post comments list item end -->

                </ul><!-- post comments list items end -->
                <?php }?>
            </article><!-- post comments end -->
            
            <?php
            $message = $this->session->userdata('message');
            if($message)
            {
            ?>
            <h4 class="alert_success"><?php echo $message;?></h4>
            <?php
                $this->session->unset_userdata('message');
            }
            ?>
            <br/>
            <?php
			$user_id=$this->session->userdata('user_id');
						//$email_id=$this->session->userdata('email_id');

            if($user_id)
            {
            ?>
             <!--comment form start--> 

            <section id="respond">
			                <?php echo $this->session->flashdata('msg'); ?>

                <h3 id="reply-title">post a comment</h3>
            <?php echo form_open('welcome/post_comments') ?>

                <form action="<?php echo base_url();?>welcome/post_comments" method="post">
                    <input type="hidden" name="service_id" value="<?php echo $single_service->service_id;?>">
					                    <input type="hidden" name="service_email" value="<?php echo $single_service->service_email;?>"  value="<?php echo set_value('service_email'); ?>">
										    <div class="col-xs-12 .col-md-8">
                           <!--<label for="txt_email" class="control-label">Employee Email</label>
                            <input class="form-control" id="txt_email" name="txt_email" placeholder="Email" value="<?php echo set_value('txt_email'); ?>" type="email" />   -->
                        </div>

                    <input type="hidden" name="publication_status" value="0">
                    <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
					
<div class="form-group">
                        

                        <div class="col-sm-6">
                            <textarea class="form-control autogrow" id="field-ta" name="comments"  placeholder="Comment......."></textarea>
                        </div>
                    </div>
                    <br>
					<br>
					
                            <input id="btn_signup" name="btn_signup" type="submit" class="btn btn-primary" value="Comment" />

                </form>
				            <?php echo form_close(); ?>

                <div id="comment-response"></div>
            </section> 
             <!--comment form end--> 
            <?php }
            else {
            ?>
<p>Please <a>Login</a> to post your comment.</p>
            <?php }?>
        </article>
	
	
    <!-- Once the page is loaded, initialized the plugin. -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.1.1.js" ></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	
	<!-- jQuery Pinterest -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.pinto.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>
	
	
    