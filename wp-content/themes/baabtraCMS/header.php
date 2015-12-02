<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="utf-8">

    <?php // force Internet Explorer to use the latest rendering engine available ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title(''); ?></title>

    <?php // mobile meta (hooray!) ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="BAABTRA, IT training &and; placement company at CAFIT Cyber Park Calicut/Kozhikode, Bangalore. Python, JAVA, .NET, PHP, Android, AngularJS. Ph 08592058444" />
    <meta name="services" content="IT training in Calicut, IT jobs in Calicut, Android training in Calicut, PHP training in Calicut, Python training in Calicut, Software courses in Calicut, IT jobs in Cochin, IT jobs in Ernakulam, IT jobs in Info Park, IT jobs in Trivandrum, IT jobs in Techno Park, IT jobs in Kerala" />

    <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->
    <?php // or, set /favicon.ico for IE10 win ?>
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php // wordpress head functions ?>
    <?php wp_head(); ?>
    <?php // end of wordpress head ?>

 


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main_baabtra.css" type="text/css" media="all" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/baabtra.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">

<style>
.wow:first-child {
	visibility: hidden;
}
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-26502703-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div id="global-wrapper">
  <div class="main_header">
    <div class="header_parent_wrap" style="position:fixed; width:100%; z-index:9999999;">
      <header>
        <div class="container">
          <div class="logo_sect"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="logo_def" alt=""  width="213" height="80"/></a> </div>
          <nav role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar" style=" background-color:#105366"></span> <span class="icon-bar" style=" background-color:#105366"></span> <span class="icon-bar" style=" background-color:#105366"></span> </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse" style=" padding:0px; overflow-x:hidden;">
             <ul id="scroll-menu" class="nav navbar-nav " style="margin-top:17px;">
                <li class=""><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a> 
                 <!-- <ul class="sub-menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu_ovr_img.png" class="menu_ovr_img">
                    <li><a href="Pages/aboutus.html">About us</a></li>
                    <li><a href="Pages/inception.html">Inception</a></li>
                    <li><a href="Pages/vision.html">Vision</a></li> 
                    <li><a href="Pages/mission.html">Mission</a></li> 
                    <li><a href="Pages/corevalues.html">Corevalues</a></li>
                  </ul> --></li>
                   <li class=""><a href="<?php echo esc_url( home_url( '/' ) ); ?>aboutus" >ABOUT US</a></li>
                <li class=""><a href="#" style="cursor:text">TRAINING</a>
                  <ul class="sub-menu">
                    <img src="
                    <?php echo get_template_directory_uri(); ?>/images/menu_ovr_img.png" class="menu_ovr_img">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>process">Process</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>software-courses">Courses</a></li>
                    <li><a href="#">Trainees</a></li> 
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>testimonials">Testimonials</a></li> 
                    <li><a href="#">Gallery</a></li>
                  </ul>
                </li>
                <li class=" "><a href="<?php echo esc_url( home_url( '/' ) ); ?>specialities">SPECIALITIES</a></li>
                  <!--  <ul class="sub-menu">
                    <img src="images/menu_ovr_img.png" class="menu_ovr_img">
                    <li><a href="baabtraprofile.html">Baabtraprofile</a></li>
                    <li><a href="99lms.html">99lms</a></li>
                    <li><a href="Massbaab.html">Massbaab</a></li> 
                    <li><a href="Demonstrations.html">Demonstrations</a></li>
                  </ul></li> -->
                <li class="menu_toggler"><a href="#">PLACEMENT</a> 
                 <ul class="sub-menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu_ovr_img.png" class="menu_ovr_img">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>placement-process">Process</a></li>
                    <li><a href="#">Portfolios</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>companies">Companies</a></li> 
                    <li><a href="#">Testimonials</a></li> 
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gallery">Gallery</a></li>
                  </ul></li>
                <li class=""><a href="#facilities">FACILITIES</a> 
                 <ul class="sub-menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu_ovr_img.png" class="menu_ovr_img">
                    <li><a href="#">Hire_and_Train</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Industrial_works</a></li> 
                    
                  </ul></li>
                <!-- <li class=""><a href="#events">EVENTS & DOWNLOADS</a> 
                 <ul class="sub-menu">
                    <img src="images/menu_ovr_img.png" class="menu_ovr_img">
                    <li><a href="#">upcomingevents</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">News</a></li> 
                    <li><a href="#">Brochure</a></li> 
                    <li><a href="#">Powerpoints</a></li>
                  </ul> --></li>
                <li class=""><a href="http://beta.baabtra.com/#/courseUserRegistration/5571465a3b0366e831cf30e1/">TAKE A TEST</a> 
                 <!-- <ul class="sub-menu">
                    <img src="images/menu_ovr_img.png" class="menu_ovr_img">
                    <li><a href="ceo.html">CEO</a></li>
                    <li><a href="#">PannelofCounsultants</a></li>
                    <li><a href="#">LeadingTeam</a>
                  </ul> --></li>
                <li class=""><a href="#contact">CONTACT</a> 
                 <ul class="sub-menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/menu_ovr_img.png" class="menu_ovr_img">
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Query</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>feedback">Feedback</a></li> 
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>360view">360<sup>o</sup> View</a></li>
                  </ul></li>
              </ul>
            </div>
            <!--/.nav-collapse --> 
            
          </nav>
        </div>
      </header>
    </div>
    <div style="width:100%; height:80px; float:left; background-color:#09C"></div>
  </div>