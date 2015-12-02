<?php
/*
Template Name: feedback
*/
?>
<?php get_header(); ?>
  
  <!----section----start---->
  
  <div class="container-fluid">
            <div class="container" style="width:100%;padding-left: 0;padding-right: 0;">
                <div class="row">
                 <div id="contact" class="container-fluid" style="background:#1f4860; padding:0;">
    <div class="container">
      <div class="row" style="margin-left:-20px; margin-right:-20px; margin-bottom:20px;">
        <div class="col-sm-12" style="text-align:center; padding-top:10%;">
          <h2 class="wow fadeInUp sction_title" style="color:#f2f2f2;">Contact Us</h2>
          <div class="row">

               <div class="intro col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                    <p class="txt_cntcts wow fadeInUp">We’d love to hear from you.</p>
                    <ul class="list-unstyled contact-details">
                        <li><i class="fa fa-envelope txt_cntcts wow fadeInUp"></i><a style="color:white" href=mailto:info@baabtra.com>info@baabtra.com</a>
                        </li>
                        <li><i style="margin-top: 5px;"class="fa fa-phone-square txt_cntcts wow fadeInUp"></i><a style="color:white">+91 495 2295550 / +91 495 4025550 / +91 495 2436990</a>
                        </li>
                    </ul>
                </div> 



            <!-- <div class="col-sm-12" style=" float:left; margin-top:50px; margin-bottom:40px; text-align:center;"> <span class="txt_cntcts wow fadeInUp">Email:info@baabtra.com</span>  --><!-- <span class="txt_cntcts wow fadeInUp" > +91 9895767088</span> --><!-- <span class="txt_cntcts wow fadeInUp" > +91 8592058444</span> </div> -->
            <div class="col-sm-7 " style=" margin:19px; display:inline-block; float:none;">
              <form id="frmcontact" method="post">
                <div class="col-sm-12 wrpr_inputs " style="padding:0;">
                <input type="text" name"frm_fullname"="" id="fullname" class="required wow fadeInUp " placeholder="Name *">
                <input type="text" name="frm_Email" id="email" class="required email wow fadeInUp" placeholder="Email *">
                <textarea name="frm_Message" id="message" class="required wow fadeInUp" placeholder="Message *"></textarea>
                <button type="button" class="btn btn_bnr wow fadeInUp" style="background-color:#2275ab; width:240px; height:60px; margin-top:10px; margin-bottom:80px; float:left;">
                <h5 style="color:#fff; font-weight:400; font-size:22px; line-height:45px;"> Submit</h5>
                </button>
              </form>
            </div>
                 <ul class="social-icons list-inline animated fadeInUp delayp4" style="opacity: 0;"> <li><a href="http://www.twitter.com/baabtra" target="_blank"><i class="fa fa-twitter"></i></a></li> <li><a href="http://www.facebook.com/baabtra" target="_blank"><i class="fa fa-facebook"></i></a></li> <li><a href="http://www.linkedin.com/in/baabtra" target="_blank"><i class="fa fa-linkedin"></i></a></li> <li><a href="https://plus.google.com/+Baabtra/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li> </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---section-end-->

<?php get_footer(); ?>