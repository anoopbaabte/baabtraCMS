<?php
/*
Template Name: courses
*/
?>
<?php get_header(); ?>





  
  <div class="container-fluid" style="background-color:#f2f2f2;" >
    <div class="container">
      <div class="row">
        <div class="col-sm-8" style="padding-top:8%; min-height:450px;">
          <h2 class="wow fadeInUp" style="color:#0072BC;">BAABTRA MENTORING SCHEMES<br> Train to join</h2>
          <p class="wow fadeInUp">
            As a bridge between the software universe and the regional talent, BAABTRA offers customised schemes for various portfolios, giving importance to core skills,technology-based practice and company-oriented grooming.</p>


<h4 class="wow fadeInUp" style="color:#0072BC; margin-bottom:5px;"> Our courses are under the following categories:<h4>

              <?php
              $args=array(
              'post_type'                => 'course',
              //'child_of'                 => 0,
              //'parent'                   => '',
              'orderby'                  => 'name',
              'order'                    => 'ASC',
              //'hide_empty'               => 1,
              //'hierarchical'             => 1,
              'exclude'                  => '',
              'include'                  => '',
              'number'                   => '',
              //'taxonomy'                 => 'my_product_cats',
              //'pad_counts'               => false
              );

              $categories=get_categories($args);

              //print categories as a tree structure
              printCategoryTree($categories,0);


              ?>

        </div>
        <div class="col-sm-4 wow fadeInUp" style="padding-top:8%;"><img src="<?php echo get_template_directory_uri(); ?>/images/img.jpg"></div>
      </div>
    </div>

  </div>

  <!----section----end---->
  
 
    <!----section----start---->

  
  <div class="container-fluid" >
    <div class="container">
      <div class="row" id ="cccc">
        <div class="col-sm-4 wow fadeInUp" style="padding-top:8%;"><img src="<?php echo get_template_directory_uri(); ?>/images/course.jpg"></div>
        <div class="col-sm-8" style="padding-top:8%; min-height:450px;">
          <h2 class="wow fadeInUp" style="color:#3333CC;"><b>BAABTRA MENTORING SCHEMES</b></h2>
          <h3 class="wow fadeInUp" style="color:#0072BC;">MENTORING PROGRAMME FOR FRESHERS</h3>
          <h4 class="wow fadeInUp" style="color:black;">Junior Software Engineer(JSE)</h4>
          <h4 class="wow fadeInUp" style="color:black;">Junior Software Developer(JSD)</h4>
          <h4 class="wow fadeInUp" style="color:black;">Coder and Interface Developer(CID)</h4>
           <h3 class="wow fadeInUp" style="color:#0072BC;">RESKILLING FOR EXPERIENCED HANDS</h3>
           <h4 class="wow fadeInUp" style="color:black;">Software Quality Tester(SQT)</h4>
           <h4 class="wow fadeInUp" style="color:black;">Baabtra Business Analyst(BBA) Programme</h4>

          
          <p class="wow fadeInUp">
</p>
        </div>
      </div>
    </div>
  </div>
  <!----section----end---->
   
  

 <!----section----start---->
  
  <div class="container-fluid" >
    <div class="container">
      <div class="row">
        <div class="col-sm-4 wow fadeInUp" style="padding-top:8%;"><img src="<?php echo get_template_directory_uri(); ?>/images/process_img1.jpg"></div>
        <div class="col-sm-8" style="padding-top:8%; min-height:450px;">
          <h2 class="wow fadeInUp" style="color:#0072BC;"><b>FACILITIES</h2></b>
          <h4 class="wow fadeInUp" style="color:#0072BC;">Online Study Materials</h4>
          <h4 class="wow fadeInUp" style="color:#0072BC;">Virtual Private Server Access</h4>
          <h4 class="wow fadeInUp" style="color:#0072BC;">Pratice-based-Learning</h4>
          <h4 class="wow fadeInUp" style="color:#0072BC;">Seminars</h4>
          <h4 class="wow fadeInUp" style="color:#0072BC;">Industry Interactions</h4>
          
          
          
        </div>
      </div>
    </div>
  </div>
  <!----section----end---->
      <!----section----start---->

  
  
  <!----section----start---->
  
  <div class="container-fluid" style="background-color:#f2f2f2;" >
    <div class="container">
      <div class="row">
        <div class="col-sm-8" style="padding-top:8%; min-height:450px;">
          <h2 class="wow fadeInUp" style="color:#0072BC;">Junior Software Developer(JSD) Mentoring</h2>
          <p class="wow fadeInUp">Duration: 3 months.<br> 
            
                Eligibility: B.Tech, MCA,  (Removed Bsc as its quite hard to train them in 3 months)<br>
                Content: Programming Concepts for the job market, problem-solving skills and analytical skills, Back end data base administration (sql server/ mysql/ oracle), chosen programming language (PHP/.NET/JAVA), and team and meeting skills. 

           </p>
          </div>
        <div class="col-sm-4 wow fadeInUp" style="padding-top:8%;"><img src="<?php echo get_template_directory_uri(); ?>/images/process_img1.jpg"></div>
      </div>
    </div>
  </div>

  <!----section----end---->
  <!----section----start---->
  
  <div class="container-fluid" >
    <div class="container">
      <div class="row">
        <div class="col-sm-4 wow fadeInUp" style="padding-top:8%;"><img src="<?php echo get_template_directory_uri(); ?>/images/process_img1.jpg"></div>
        <div class="col-sm-8" style="padding-top:8%; min-height:450px;">
          <h2 class="wow fadeInUp" style="color:#0072BC;">Junior Software Engineer(JSE) Mentoring</h2>
          <p class="wow fadeInUp"> Duration: 6 months.<br> 
            Eligibility: B. Tech/MCA, B. Sc. Computer Programme/B.Sc. Mathematics/M.sc/BCA.   <br>
            Content: Programming Concepts for the job market, Back end data base administration (sql server/ mysql/ oracle), chosen programming language (PHP/.NET/JAVA), Engineering architecture (MCV architecture/3 tier architecture), Front end development : HTML/ HTML5/CSS3 Client Side scripting: JavaScript/JQuery/ AJAX, Web services: XML/ JSON, multithreading and socket programming, interview meeting and team skills, e-mail etiquette. 
 
</p>
        </div>
      </div>
    </div>
  </div>
  <!----section----end---->



   <!----section----start---->
  
  <div class="container-fluid" style="background-color:#f2f2f2;" >
    <div class="container">
      <div class="row">
        <div class="col-sm-8" style="padding-top:8%; min-height:450px;">
          <h2 class="wow fadeInUp" style="color:#0072BC;">Coder And Interface Developer(CID) Mentoring</h2>
          <p class="wow fadeInUp">Duration: 3 months.<br> 
            Eligibility: Bachelors in any programme with Mathematics at Plus Two level. <br>
            Content:  Website design and web development as careers, HTML 5, CSS3, identifying application requirements, multiple platforms, responsive design and Browser compatibility and slicing, bootstrap design,Jquery plugins.   
          </div>
        <div class="col-sm-4 wow fadeInUp" style="padding-top:8%;"><img src="<?php echo get_template_directory_uri(); ?>/images/process_img1.jpg"></div>
      </div>
    </div>
  </div>

  <!----section----end---->



  <!----section----start---->
  
  <div class="container-fluid" >
    <div class="container">
      <div class="row">
        <div class="col-sm-4 wow fadeInUp" style="padding-top:8%;"><img src="<?php echo get_template_directory_uri(); ?>/images/process_img1.jpg"></div>
        <div class="col-sm-8" style="padding-top:8%; min-height:450px;">
          <h2 class="wow fadeInUp" style="color:#0072BC;">Software Quality Tester(SQT) Mentoring</h2>
          <p class="wow fadeInUp">  
           Duration: 3 months.<br> Eligibility:  Two years programming and coding experience in a software firm.<br>
            Required BAABTRA PROFILE score: A<br>
            Contents: Re-skilling the automated testing tool, automating test strategy and frameworks, leading software release tests (cases and conditions), writing reports and procedures, improving productivity of test script development and execution, leadership skills and middle level communication
</p>
        </div>
      </div>
    </div>
  </div>
  <!----section----end---->


   
  
   

   <!----section----start---->
  
  <div class="container-fluid" style="background-color:#f2f2f2;" >
    <div class="container">
      <div class="row">
        <div class="col-sm-8" style="padding-top:8%; min-height:450px;">
          <h2 class="wow fadeInUp" style="color:#0072BC;">Baabtra Business Analyst(BBA) Programme</h2>
          <p class="wow fadeInUp">Duration: 6 months.<br> 
            Eligibility: three to four years of experience<br> 
            Required BAABTRA PROFILE score: A+
            (Personal Interview is mandatory to get into this programme, as the programme also has eminent visiting faculty from IIT's and ).
             Contents:  Exceptional programming skills and business planning, marketing and analysis, re-orientation of logical and analytical skills for administration. 


            


           

          </div>
        <div class="col-sm-4 wow fadeInUp" style="padding-top:8%;"><img src="<?php echo get_template_directory_uri(); ?>/images/process_img1.jpg"></div>
      </div>
    </div>
  </div>

  <!----section----end---->
  
 <?php get_footer(); ?>