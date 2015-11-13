<!DOCTYPE html>
<html lang="en"  class="no-js">
    <head>
        <title><?=$this->data['title'] ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Montserrat:300,400,700' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">




        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery.bxslider.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.theme.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.css" media="screen">
        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/settings.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" media="screen">







        <?php
//            $CssDirectory = $this->utility->fileLocation('assets/css');
//            foreach (glob("$CssDirectory/*") as $file) {
//                $basename = basename($file, ".css");
//                echo link_tag($file);
//            }
        ?>

    </head>
    <body>
        <!-- Container -->
        <div id="container">
            <!-- Header ================================================== -->
            <header class="clearfix">
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="active" href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>pages/about">About</a></li>
                                <li><a href="<?php echo base_url(); ?>projects">Projects</a></li>
<!--                                <li><a href="services.html">Our Services</a>-->
<!--                                    <ul class="drop-down">-->
<!--                                        <li><a href="buildings.html">Small &amp; Large Buildings</a></li>-->
<!--                                        <li><a href="garden.html">Elegant Garden</a></li>-->
<!--                                        <li><a href="projecting.html">Perfect Projectings</a></li>-->
<!--                                        <li><a href="energy.html">Energy Repair</a></li>-->
<!--                                        <li><a href="roads.html">Roads &amp; Paths</a></li>-->
<!--                                        <li><a href="repairing.html">Repairing &amp; Maintenance</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
                                <li><a href="<?php echo base_url(); ?>posts"">blog</a></li>
                                <li><a href="<?php echo base_url(); ?>pages/contact">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>
            <!-- End Header -->
