<html>
    <head>
        <link rel="stylesheet" href="<?=base_url();?>assets/css/style_login_register.css"/>
    
        
        <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link href="<?=base_url();?>assets/css/upload_photo_css/jquery.fileupload.css" rel="stylesheet" />
        <link href="<?=base_url();?>assets/css/upload_photo_css/jquery.fileupload-ui.css" rel="stylesheet" />
         <noscript><link rel="stylesheet" href="<?=base_url();?>assets/css/upload_photo_css/jquery.fileupload-noscript.css"></noscript>
		<noscript><link rel="stylesheet" href="<?=base_url();?>assets/css/upload_photo_css/jquery.fileupload-ui-noscript.css"></noscript>
          <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css"/>
          <script src="<?=base_url();?>assets/js/jquery-1.11.3.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    </head>
    <body id='page-top'>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Real Estate</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="<?=base_url();?>">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?=base_url();?>anunt/add">Add announce</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                         
                             <?php
                        if($this->session->userdata('loggedIn') == false){
                        ?>
                        <li>
                            <a class="page-scroll" href="<?=base_url();?>account/login">Login / Register</a>
                        </li>
                             <?php } else {?>
                        
                        <li>
                            <a id="logout_button"  class="page-scroll" href="<?=base_url();?>account/logout">Logout</a>
                        </li>
                        <li>
                             <a id="username_email" class="page-scroll" style="color:#fff;font-weight:bold"><?php echo $this->session->userdata("username") ;?>{<?php echo $this->session->userdata("email"); ?>}</a>
                        </li>
                             <?php } ?>
                        
                        
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        

    