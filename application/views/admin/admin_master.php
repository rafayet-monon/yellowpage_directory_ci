<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <title><?php echo $title;?></title>


        <link rel="stylesheet" href="<?php echo base_url()?>admin_asset/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
        <link rel="stylesheet" href="<?php echo base_url()?>admin_asset/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
        <link rel="stylesheet" href="<?php echo base_url()?>admin_asset/css/font-icons/font-awesome/css/font-awesome.min.css"  id="style-resource-2">
        <link rel="stylesheet" href="<?php echo base_url()?>admin_asset/css/admin.css"  id="style-resource-5">
        <script src="<?php echo base_url()?>admin_asset/js/jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url()?>js/jsval.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            function checkDelete()
            {
                var chk=confirm('Are You Sure To Delete This ?');
                if(chk)
                    {
                      return true;  
                    }
                 else{
                     return false;
                 }
            }
            
        </script>


    </head>
    <body class="page-body page-fade">

        <!-- ====================== END ======================================= -->

        <div class="page-container">	

            <div class="sidebar-menu">

                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a ><h3>
                           Admin Panel</h3> 
                        </a>
                    </div>

                    <!-- logo collapse icon -->
                    <div class="sidebar-collapse">
                        <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>


                    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                    <div class="sidebar-mobile-menu visible-xs">
                        <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>

                </header>


                <ul id="main-menu" class="">
                    <li id="search">
                        <form method="get" action="#">
                            <input type="text" name="q" class="search-input" placeholder="Search something..." />
                            <button type="submit"><i class="entypo-search"></i></button>
                        </form>
                    </li>
                    <li class="opened active">
                        <a href="<?php echo base_url()?>super_admin"><i class="entypo-gauge"></i><span>Dashboard</span></a>
                    </li>

                  

                    <li>
                        <a href="#"><i class="entypo-newspaper"></i><span>Content</span></a>
                        <ul>
                            <li>
                                <a href="<?php echo base_url()?>super_admin/add_category"><i class="entypo-list"></i><span>Add Category</span></a>
                            </li>
                             <li>
                                <a href="<?php echo base_url()?>super_admin/manage_category"><i class="fa fa-pencil-square-o"></i><span>Manage Category</span></a>
                            </li>

                            <li>
                                <a href="<?php echo base_url() ?>super_admin/add_division"><i class="fa fa-file-text"></i><span>Add Division</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>super_admin/manage_division"><i class="fa fa-pencil-square-o"></i><span>Manage Division</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>super_admin/add_sub_category"><i class="fa fa-file-text"></i><span>Add Sub_Category</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>super_admin/manage_sub_category"><i class="fa fa-pencil-square-o"></i><span>Manage Sub_Category</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>super_admin/add_service"><i class="fa fa-file-text"></i><span>Add services</span></a>
                            </li>
                          <li>
                                <a href="<?php echo base_url()?>super_admin/manage_service"><i class="fa fa-pencil-square-o"></i><span>Manage Service</span></a>
                            </li>
							
							<li>
                                <a href="<?php echo base_url()?>super_admin/manage_company"><i class="fa fa-pencil-square-o"></i><span>Manage Company</span></a>
                            </li>
							
							<li>
                                <a href="<?php echo base_url()?>super_admin/all_comments"><i class="fa fa-pencil-square-o"></i><span>All Comments</span></a>
                            </li>
							
							
							
							
                        </ul>

                    </li>


                </ul>


            </div>	
            <div class="main-content">

                <div class="row">

                    <!-- Profile Info and Notifications -->
                    <div class="col-md-6 col-sm-8 clearfix">

                        <ul class="user-info pull-left pull-none-xsm">

                            <!-- Profile Info -->
                            <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!--<img src="<?php echo base_url() ?>admin_asset/images/thumb-1.png" alt="" class="img-circle" />--->
                                    <?php echo $this->session->userdata('admin_name') ?>
                                </a>
                              
                                <ul class="dropdown-menu">

                                    <!-- Reverse Caret -->
                                    <li class="caret"></li>

                                    <!-- Profile sub-links -->
                                    <li>
                                        <a href="#">
                                            <i class="entypo-user"></i>
                                            Edit Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a href="../neon-x/mailbox/main/index.html">
                                            <i class="entypo-mail"></i>
                                            Inbox
                                        </a>
                                    </li>

                                    <li>
                                        <a href="../neon-x/extra/calendar/index.html">
                                            <i class="entypo-calendar"></i>
                                            Calendar
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="entypo-clipboard"></i>
                                            Tasks
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                        <ul class="user-info pull-left pull-right-xs pull-none-xsm">

                            <!-- Raw Notifications -->
                            
                    <!-- Raw Links -->
                    <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                        <ul class="list-inline links-list pull-right">
                            <li>
                                <a href="<?php echo base_url()?>super_admin/logout">
                                    Log Out <i class="entypo-logout right"></i>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
                <!-- ====================== END ======================================= -->
                <hr />
                <!--CONTENT GOES HERE -->
                <?php echo $admin_content;?>
     
                <br />
                <br />


                <!-- Footer -->
                	</div>







        <link rel="stylesheet" href="<?php echo base_url()?>admin_asset/js/wysihtml5/bootstrap-wysihtml5.css"  id="style-resource-1">
        <link rel="stylesheet" href="<?php echo base_url()?>admin_asset/js/select2/select2-bootstrap.css"  id="style-resource-1">
	<link rel="stylesheet" href="<?php echo base_url()?>admin_asset/js/select2/select2.css"  id="style-resource-2">
        
        <script src="<?php echo base_url()?>admin_asset/js/neon-mail.js" id="script-resource-7"></script>
        <script src="<?php echo base_url()?>admin_asset/js/main-gsap.js" id="script-resource-1"></script>
        <script src="<?php echo base_url()?>admin_asset/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
        <script src="<?php echo base_url()?>admin_asset/js/bootstrap.min.js" id="script-resource-3"></script>
        <script src="<?php echo base_url()?>admin_asset/js/joinable.js" id="script-resource-4"></script>
        <script src="<?php echo base_url()?>admin_asset/js/resizeable.js" id="script-resource-5"></script>
        <script src="<?php echo base_url()?>admin_asset/js/neon-chat.js" id="script-resource-15"></script>
        <script src="<?php echo base_url()?>admin_asset/js/neon-custom.js" id="script-resource-16"></script>
        <script src="<?php echo base_url()?>admin_asset/js/neon-api.js" id="script-resource-6"></script>
        <script src="<?php echo base_url()?>admin_asset/js/wysihtml5/wysihtml5-0.4.0pre.min.js" id="script-resource-7"></script>
        <script src="<?php echo base_url()?>admin_asset/js/wysihtml5/bootstrap-wysihtml5.js" id="script-resource-8"></script>
        
        <script src="<?php echo base_url()?>admin_asset/js/fileinput.js" id="script-resource-7"></script>
        <script src="<?php echo base_url()?>admin_asset/js/bootstrap-datepicker.js" id="script-resource-11"></script>
        <script src="<?php echo base_url()?>admin_asset/js/select2/select2.min.js" id="script-resource-7"></script>

    </body>
</html>