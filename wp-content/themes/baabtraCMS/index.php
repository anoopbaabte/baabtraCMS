<?php get_header(); ?>

<!-- banner -->
<div class="container-fluid" style="margin:0px; padding:0px;">
  <div class="row-fluid" style="margin:0px; padding:0px;">
    <div class="col-xs-12" style="margin:0px; padding:0px;">
      <?php putBannerRotator( "mainBanner" ) ?>
    </div>
  </div>
</div>
<!-- banner end -->
  
  
  
  
  <!---section-start-->
  
  <div class="container-fluid no-margin no-padding" id="specialities" >
      <div class="row-fluid no-margin no-padding">
        <div class="col-sm-12 no-margin no-padding" style="text-align:center;">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/baabtra_prcs.jpg" style="width:100%;"/>
          <h2 class="wow fadeInUp sction_title resp_768 b_process">Baabtra.com Process</h2>
        </div>
      </div>
  </div>
  <!---section-end--> 
  
  <!---section-start-->
  
  <div id="placement" class="container-fluid" style="background:#1f4860;">
    <div class="container">
      <div class="row" style="margin-left:-20px; margin-right:-20px; margin-bottom:20px;">
        <div class="col-sm-12" style="text-align:center; padding-top:10%;">
          <h2 class="wow fadeInUp sction_title" style="color:#fff;">Mentoring Programmes</h2>
          <div class="row">
            <div class="col-sm-12 masonry-grid" style=" float:left; margin-top:50px; text-align:center; margin:0px; padding:0px;">
              <!-- Code to display courses -->

              <?php 
               $args = array( 'post_type' => 'course');
               $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();

                   echo '<div class="col-sm-3  wow fadeInUp item_prgrm" >';
                     echo '<img class="img-thumbnail img-responsive" src="';
                     the_field( 'course_image');
                     echo '"/>';
                     echo '<input type="button" class="btn btn-danger img-thumbnail courseDetailsButton" value="Go to details" />';
                     echo '<div class="col-xs-12 text-left" style="color:white; padding-top:10px;">'; 
                     echo get_the_title();
                     echo '</div>';
                   echo '</div>';

                                 
                endwhile; 
            ?>

              <!-- .End Code to display courses -->
              <div class="col-sm-3  wow fadeInUp item_prgrm" >
                <div class="col-sm-12" style="padding:0;">
                  <button type="button" class="btn btn_bnr col-sm-3 wow fadeInUp" style="width:100%; border:solid 1px #ffffff; margin-bottom:10px;">
                  <h5 style="color:#fff; font-weight:400; font-size:15px; line-height:35px;"> Software Developers</h5>
                  </button>
                </div>
                <div class="col-sm-12" style="padding:0;">
                  <button type="button" class="btn btn_bnr wow fadeInUp" style="width:100%; border:solid 1px #ffffff; ">
                  <h5 style="color:#fff; font-weight:400; font-size:15px; line-height:35px;"> Software engineers</h5>
                  </button>
                </div>
              </div>
            </div>
         <!--    <button type="button" class="btn btn_bnr wow fadeInUp" style="background-color:#2275ab; width:240px; height:60px; margin-top:50px; margin-bottom:80px;">
            <h5 style="color:#fff; font-weight:400; font-size:25px; line-height:45px;"> More</h5>
            </button> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---section-end--> 
  
  <!---section-start-->
  
  <div id="facilities"  class="container-fluid" style="background:#fdfdfd;">
    
      <div class="row-fluid" style="margin-left:-20px; margin-right:-20px; margin-bottom:20px;">
        <div class="col-sm-12" style="text-align:center; padding-top:40px;">
          <h2 class="wow fadeInUp sction_title" style="color:#2275ab;">Technological  Specialities & Facilities</h2>
          <div class="row">
            <div class="col-sm-12" style=" float:left; margin-top:20px; text-align:left;">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default wow fadeInUp">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <div class="plus_icon"><i class="fa fa-plus"></i></div>
                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Industrial Visit </a> </h4>
                  </div>
                 
                </div>
                <div class="panel panel-default wow fadeInUp">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <div class="plus_icon"><i class="fa fa-plus"></i></div>
                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Company Project For Academics </a> </h4>
                  </div>
                </div>
                <div class="panel panel-default wow fadeInUp">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <div class="plus_icon"><i class="fa fa-plus"></i></div>
                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Baabtra.com Profile </a> </h4>
                  </div>
                </div>
                <div class="panel panel-default wow fadeInUp">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <div class="plus_icon"><i class="fa fa-plus"></i></div>
                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 99LMS, Learning Management System </a> </h4>
                  </div>
                </div>
                <div class="panel panel-default wow fadeInUp">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <div class="plus_icon"><i class="fa fa-plus"></i></div>
                    <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Massbaab </a> </h4>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" class="btn btn_bnr wow fadeInUp" style="background-color:#2275ab;  width:240px; height:60px;margin-top:50px; margin-bottom:60px;">
            <h5 style="color:#fff; font-weight:400; font-size:25px; line-height:45px;"> More</h5>
            </button>
          </div>
        </div>
      </div>
  </div>
  <!---section-end--> 
  
  <!---section-start-->
  
  <div id="events" class="container-fluid" style="background:#1f4860;">
    <div class="container">
      <div class="row" style="margin-left:-20px; margin-right:-20px; margin-bottom:20px;">
        <div class="col-sm-12" style="text-align:center; padding-top:10%;">
          <h2 class="wow fadeInUp sction_title" style="color:#fff; padding-bottom:30px; ">Events</h2>
          <div class="row">
            <div class="col-sm-12" style=" float:left; margin-top:20px; text-align:center;">
              <!--first_row-start-->
              <div class="col-xs-12 col-sm-12" style="padding:0;"><!-- <span class="sctn_sml_tle wow fadeInUp">Events</span> --></div>
              <div class="col-sm-3  wow fadeInUp item_prgrm" > <img src="<?php echo get_template_directory_uri(); ?>/images/evnt1.png"/>
                <div class="evnt_title">Industial Visit @ CafiT Square Cyber PArk</div>
              </div>
              <div class="col-sm-3  wow fadeInUp item_prgrm" ><img src="<?php echo get_template_directory_uri(); ?>/images/evnt2.png"/>
                <div class="evnt_title">TechTalk @ St.Joseph College Of Engineering &amp; Technology</div>
              </div>
              <div class="col-sm-3  wow fadeInUp item_prgrm" ><img src="<?php echo get_template_directory_uri(); ?>/images/evnt3.png"/>
                <div class="evnt_title">Sulthan Bin Saquer Al Nuaimi @ Cyber Square of Habitat</div>
              </div>
              <div class="col-sm-3  wow fadeInUp item_prgrm" ><img src="<?php echo get_template_directory_uri(); ?>/images/evnt4.png"/>
                <div class="evnt_title"> Home mentoring @ PEEKAY CICS Arts &amp; Science College.</div>
              </div>
            </div>
            <!---first_row-end-->
            
           
            <button type="button" class="btn btn_bnr wow fadeInUp" style="background-color:#2275ab;  width:240px; height:60px;margin-top:50px; margin-bottom:80px;">
            <h5 style="color:#fff; font-weight:400; font-size:25px; line-height:45px;"> More</h5>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---section-end--> 
  
  
  <!---section-start-->
  
  <div class="container-fluid" style="background:#1f4860;">
    <div class="container">
      <div class="row" style="margin-left:-20px; margin-right:-20px; margin-bottom:20px;">
        <div class="col-sm-12" style="text-align:center; padding-top:10%;">
          <h2 class="wow fadeInUp sction_title" style="color:#fff;">Partners , Memberships &amp; Certifications</h2>
          <div class="row">
            <div class="col-sm-12" style=" float:left; margin-top:50px; margin-bottom:80px; text-align:center;">
              <div class="col-sm-3  wow fadeInUp item_prgrm" ><img src="<?php echo get_template_directory_uri(); ?>/images/prtnrs1.png"/></div>
              <div class="col-sm-3  wow fadeInUp item_prgrm" ><img src="<?php echo get_template_directory_uri(); ?>/images/prtnrs2.png"/></div>
              <div class="col-sm-3  wow fadeInUp item_prgrm" ><img src="<?php echo get_template_directory_uri(); ?>/images/prtnrs3.png"/></div>
              <div class="col-sm-3  wow fadeInUp item_prgrm" ><img src="<?php echo get_template_directory_uri(); ?>/images/prtnrs4.png"/></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---section-end--> 
  
  
  <!---section-start-->
  
  <div id="contact" class="container-fluid" style="background:#1f4860; padding:0;">
    <div class="container">
      <div class="row" style="margin-left:-20px; margin-right:-20px; margin-bottom:20px;">
        <div class="col-sm-12" style="text-align:center; padding-top:10%;">
          <h2 class="wow fadeInUp sction_title" style="color:#f2f2f2;">Contact Us</h2>
          <div class="row">

               <div class="intro col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                    <p class="txt_cntcts wow fadeInUp">We’d love to hear from you.</p>
                    <ul class="list-unstyled contact-details">
                        <li><i class="fa fa-envelope txt_cntcts wow fadeInUp"></i><a class="txt_cntcts wow fadeInUp" style="color:white" href=mailto:info@baabtra.com>info@baabtra.com</a>
                        </li>
                        <li><i style="margin-top: 5px;"class="fa fa-phone-square txt_cntcts wow fadeInUp"></i><h3 class="txt_cntcts wow fadeInUp" style="color:white;">+91 8592058444</h3 ><a style="color:white">+91 495 2295550 / +91 495 4025550 / +91 495 2436990</a>
                        </li>
                    </ul>
                </div> 



            <!-- <div class="col-sm-12" style=" float:left; margin-top:50px; margin-bottom:40px; text-align:center;"> <span class="txt_cntcts wow fadeInUp">Email:info@baabtra.com</span>  --><!-- <span class="txt_cntcts wow fadeInUp" > +91 9895767088</span> --><!-- <span class="txt_cntcts wow fadeInUp" > +91 8592058444</span> </div> -->
            <div class="col-sm-7 " style=" margin:19px; display:inline-block; float:none;">
              <form id="frmcontact" method="post">
                <div class="col-sm-12 wrpr_inputs no-padding">
                <input type="text" name="frm_fullname" id="fullname" class="required wow fadeInUp col-xs-12" placeholder="Name *">
                <input type="text" name="frm_Email" id="email" class="required email wow fadeInUp col-xs-12" placeholder="Email *">
                <textarea name="frm_Message" id="message" class="required wow fadeInUp" placeholder="Message *"></textarea>
                <button type="button" class="btn btn_bnr wow fadeInUp" style="background-color:#2275ab; width:240px; height:60px; margin-top:10px; margin-bottom:80px; float:left;">
                <h5 style="color:#fff; font-weight:400; font-size:22px; line-height:45px;"> Submit</h5>
                </button>
              </form>
            </div>                 
          </div>
        </div>
      </div>       
    </div>
  </div>
  <!---section-end-->

  <!-- Section Start -->
  <div class="container-fluid text-center" style="background:#1f4860; padding:0;">
    <div class="container">
      <div class="row-fluid">
              <ul class="social-icons list-inline animated fadeInUp delayp4" style="opacity: 0;"> <li><a href="http://www.twitter.com/baabtra" target="_blank"><i class="fa fa-twitter"></i></a></li> <li><a href="http://www.facebook.com/baabtra" target="_blank"><i class="fa fa-facebook"></i></a></li> <li><a href="http://www.linkedin.com/in/baabtra" target="_blank"><i class="fa fa-linkedin"></i></a></li> <li><a href="https://plus.google.com/+Baabtra/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li> </ul>
      </div>
    </div>
  <div> 
  <!-- section end -->

  
 


<?php get_footer(); ?>
