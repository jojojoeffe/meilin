<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <title>Home - Meilin Consultant</title>

        <link rel="stylesheet" href="<?php echo base_url('assets/css/') . '/normalize.min.css'; ?>"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/css/') . '/bootstrap.css'; ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/') . '/style.css'; ?>">


        <!--[if lt IE 9]>
                <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <script src="js/HTML5Shiv.js"></script>
        <![endif]-->



        <!-- bjqs.css contains the *essential* css needed for the slider to work -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/') . '/bjqs.css'; ?>">

        <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
        <link rel="stylesheet" href="<?php echo base_url('assets/css/') . '/demo.css'; ?>">

        <!-- load jQuery and the plugin -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="<?php echo base_url('assets/js/') . '/bjqs-1.3.min.js'; ?>"></script>

    </head>

    <body>	

        <!--  <nav class="user_nav"> 
             <div class="container">
                 <div class="row">
                     <div class="span12">
                         <h3>MEILIN CONSULTING GROUP</h3>	
                     </div>
                 </div>
             </div>
         </nav> -->

        <header>
            <div class="container">
                <div class="row">

                    <div class="span4">
                        <div class="logo">
                            <?php foreach ($header_logos as $header_logo): ?>
                                <img src='<?php echo $header_logo->image_url() ?>'>  
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="span8">
                        <nav class="main_nav">
                            <ul>
                                <li><a href="<?php echo site_url('/' . "home") ?>">HOME</a></li>
                                <li><a href="<?php echo site_url('/' . "company") ?>">COMPANY</a></li>
                                <li><a href="<?php echo site_url('/' . "services") ?>">SERVICE</a></li>
                                <li><a href="<?php echo site_url('/' . "teams") ?>">TEAM</a></li>
                                <li><a href="<?php echo site_url('/' . "contacts") ?>">CONTACT</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </header>

        <?php $this->load->view($body); ?>

        <footer>
            <div class="container">
                <div class="row-fluid">
                    <?php foreach ($contacts as $contact): ?>
                    <div class="span3">
                        <div class="span2">
                            <span class="fs1" aria-hidden="true" data-icon="&#xe000;"></span>
                        </div>
                        <div class="span10">
                            <strong>Visit</strong>
                            <br>
                            <?php echo $contact->region ?>
                            <br>
                            <?php echo $contact->province ?>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="span2">
                            <span class="fs1" aria-hidden="true" data-icon="&#xe001;"></span>
                        </div>
                        <div class="span10">
                            <strong>Call</strong>
                            <br>
                            <?php echo $contact->tel_local ?> 
                            <br>
                            <?php echo $contact->fax ?>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="span2">
                            <span class="fs1" aria-hidden="true" data-icon="&#xe002;"></span>
                        </div>
                        <div class="span10">
                            <strong>Contact</strong>
                            <br>
                           <?php echo $contact->email ?>
                            <br>
                            <span class="fs2" aria-hidden="true" data-icon="&#xe003;"></span>
                            <span class="fs2" aria-hidden="true" data-icon="&#xe004;"></span>
                            <span class="fs2" aria-hidden="true" data-icon="&#xe005;"></span>
                        </div>
                    </div>

                    <div class="span3">
                        <div class="span2">
                            <span class="fs1">&copy</span>
                        </div>
                        <div class="span10">
                            2023 by Meilin Consultant.
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </footer>


        <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/') . '/jquery-1.10.1.min.js'; ?>"><\/script>')</script>
        <script src="<?php echo base_url('assets/js/') . '/bootstrap.min.js'; ?>"></script>
        <script src="<?php echo base_url('assets/js/') . '/jquery.elevateZoom-2.5.5.min.js'; ?>"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>	
        <script src="<?php echo base_url('assets/js/') . '/gmaps.js'; ?>"></script>
        <script src="<?php echo base_url('assets/js/') . '/main.js'; ?>"></script>

    </body>
</html>