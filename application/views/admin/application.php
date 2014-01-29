<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <title>Document</title>

        <link rel="stylesheet" href="<?php echo base_url('assets/css/') . '/normalize.min.css'; ?>"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/css/') . '/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/') . '/backend-style.css'; ?>">

        <!--[if lt IE 9]>
                <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <script src="js/HTML5Shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="main-header">
            <div class="container">
                <div class="navbar">
                    <div class="navbar-inner">
                        <a class="brand" href="#">Meilin Consulting CMS</a> 
                        <ul class="nav pull-right">



                            <li class="dropdown">
                                <a class="dropdown-toggle" id="dLabel" data-toggle="dropdown" data-target="#" href="#">Content Description 
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                    <li><a href="<?php echo site_url('admin/home_contents'); ?>">Home Desc</a></li>
                                    <li><a href="<?php echo site_url('admin/company_contents'); ?>">Company Desc</a></li>
                                    <li><a href="<?php echo site_url('admin/team_contents'); ?>">Team Desc</a></li>
                                    <li><a href="<?php echo site_url('admin/event_contents'); ?>">Event Desc</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a class="dropdown-toggle" id="dLabel" data-toggle="dropdown" data-target="#" href="#">Event 
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                    <li><a href="<?php echo site_url('admin/part_events'); ?>">Part Event</a></li>
                                    <li><a href="<?php echo site_url('admin/events'); ?>">Event</a></li>
                                </ul>
                            </li>

                            <li><a href="<?php echo site_url('admin/services'); ?>">Services</a></li>
                            <li><a href="<?php echo site_url('admin/teams'); ?>">Teams</a></li>
                            <li><a href="<?php echo site_url('admin/contacts'); ?>">Contacts</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" id="dLabel" data-toggle="dropdown" data-target="#" href="#">Control Management 
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                    <li >
                                        <a href="<?php echo site_url('admin/slider_images'); ?>">
                                            Slider Image
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('admin/companylogos'); ?>">
                                            Company Logo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('admin/headerlogos'); ?>">
                                            Header Logo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('admin/registrations'); ?>">
                                            Customers
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li >
                                <a href="<?php echo site_url('admin/login/logout'); ?>">
                                    <i class="icon-cog"></i>Log Out</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <?php $this->load->view($body); ?>

        <footer>
            <div class="container">
                <hr>
                <p class="text-center">&copy2013 - Meilin Consulting</p>
            </div>
        </footer>

        <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/') . '/jquery-1.10.1.min.js'; ?>"><\/script>')</script>
        <script src="<?php echo base_url('assets/js/') . '/bootstrap.min.js'; ?>"></script>
        <script src="<?php echo base_url('assets/js/') . '/main.js'; ?>"></script>


    </body>
</html>