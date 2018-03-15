<?php get_header(); ?>

<!--==========================
           Services
    ============================-->
    <section class="services" id="services">
      <div class="container">
        <div class="row ">
          <div class="col-md-4 services-column text-center">
              <div class="img-round">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service1.png" alt="" />
              </div>
              <h3>GET INSPIRED</h3>
              <span class="line-red"></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim a elit viverra elementuma. Aliquam erat volutpat. </p>
          </div><!-- end col -->
          <div class="col-md-4 services-column text-center">
              <div class="img-round">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service2.png" alt="" />
              </div>
              <h3>GET REWARDED</h3>
              <span class="line-red"></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim a elit viverra elementuma. Aliquam erat volutpat. </p>
          </div><!-- end col -->
          <div class="col-md-4 services-column text-center">
              <div class="img-round">
                <img src="<?php echo get_template_directory_uri(); ?>/img/service3.png" alt="" />
              </div>
              <h3>GET SOCIAL</h3>
              <span class="line-red"></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim a elit viverra elementuma. Aliquam erat volutpat. </p>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
    </section>
    <!--==========================
           Phone App
    ============================-->
    <section class="phone" id="phone">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mt-3 img-fluid">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/phone.png" alt=""/>
            </div>
            <div class="col-md-6 inter-row-column pt-4">
              <h4>INTRODUCING THE FUDI APP</h4>
              <p>Morbi eget posuere dolor. Pellentesque cursus aliquet aliquet. Aeneanet felis sit amet diam mollis ullamcorper. Nullam consequat sem a ante vest ibulum tristique. Suspendisse tristique lacus ac mattis porta. </p>
              <p>Vivamus ligula quam, vehicula non lacinia sed, faucibus sit amet libero. In libero dui, eleifend eu nisi id, egestas fringilla odio. In varius quam a massa hendrerit ullamcorper a eu justo. Suspendisse porta mattis convallis.Aenean tempus ligula ac odio rhoncus, quis aliquam dolor accumsan. </p>
              <p>Suspendisse aliquet felis consectetur libero congue, sed pulvinar diam malesuada. Duis vehicula a nibh id hendrerit. Donec sit amet ultricesante, a mattis massa. </p>
              <ul class="icon">
                <li><i class="icon1 img-fluid"></i></li>
                <li><i class="icon2 img-fluid"></i></li>
              </ul>
            </div>
          </div>
        </div>
    </section>
    <!--==========================
           reviews carousel
    ============================-->
    <section class="slide-img py-5" id="reviews">
      <div class="container">
        <div id="main-slider" class="carousel slide text-center" data-ride="carousel">

          <ul class="carousel-indicators"><!--carousel indecator -->
              <li data-target="#main-slider" data-slide-to="0" class="active"></li>
              <li data-target="#main-slider" data-slide-to="1"></li>
              <li data-target="#main-slider" data-slide-to="2"></li>
          </ul><!--indecator end-->

          <div class="carousel-inner " >
          
           <div class="carousel-item active">
              <img src="<?php echo get_template_directory_uri(); ?>/img/person1.jpg" class="d-block img-cercle img-fluid carouselimg" alt=""></img>
                 <p >"I am so happy because I found this recipe, and it just made<br> my life easier. Thanks  so much for sharing"</p><br><br>
               <span>- Michael Dawson, San Francisco, CA -</span>
            </div><!--carousel item -->

            <div class="carousel-item ">
              <img src="<?php echo get_template_directory_uri(); ?>/img/person2.jpg" class="d-block img-cercle img-fluid carouselimg" alt=""></img>
              <p >"I am so happy because I found this recipe, and it just made<br> my life easier. Thanks  so much for sharing"</p><br><br>
               <span>- Michael Dawson, San Francisco, CA -</span>
                 
            </div><!--carousel item -->

            <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/person3.jpg" class="d-block img-cercle img-fluid carouselimg" alt=""></img>
              <p >"I am so happy because I found this recipe, and it just made<br> my life easier. Thanks  so much for sharing"</p><br><br>
               <span >- Michael Dawson, San Francisco, CA -</span>
            </div><!--carousel item -->

          </div><!--carousel-inner-end-->

          <a class="carousel-control-prev" href="#main-slider" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
              <span class="sr-only">Previous</span>
          </a>
           <a class="carousel-control-next" href="#main-slider" data-slide="next">
              <span class="carousel-control-next-icon"></span>
              <span class="sr-only">Next</span>
          </a>

        </div><!--carousel-end-->
      </div><!--caontainer-end-->
    </section><!--section-end-->
    <!--==========================
           Cuisines
    ============================-->
    <section class="cuisines" id="cuisines">
      <div class="container-fluid">   
          <div class="row mt-5">
            <div class="col-lg-12 " >
              <div class="cuisines-top title-page text-center">
                <h2>BROWSE BY CUISINES</h2>
                <span class="line-red"></span>
              </div><!-- end col -->
           </div><!-- end col -->
          </div><!-- end row -->    
          <div class="row mt-5">
           
              <div class=" col-xs-6 col-sm-6 col-md-2 col-lg-2 offset-lg-1 offset-md-1">
                <div class="sous-col">
                  <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/cuisines/s1.jpg" alt="" class="image ">
                  </a>
                  
                </div>     
              </div> 

              <div class=" col-xs-6 col-sm-6 col-md-2 col-lg-2 ">
                <div class="sous-col">
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cuisines/s2.jpg" alt="" class="image ">
                  </a>
                </div>     
              </div> 

              <div class=" col-xs-6 col-sm-6 col-md-2 col-lg-2">
                <div class="sous-col">
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cuisines/s3.jpg" alt="" class="image " >
              
                  </a>
                </div>     
              </div> 

              <div class=" col-xs-6 col-sm-6 col-md-2 col-lg-2 ">
                <div class="sous-col">
                  <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/cuisines/s4.jpg" alt="" class="image ">
                  </a> 
                </div>     
              </div> 

              <div class=" col-xs-6 col-sm-6 col-md-2 col-lg-2 ">
                <div class="sous-col">
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cuisines/s5.jpg" alt="" class="image ">
                  </a>
                </div>     
              </div> 

              <div class=" col-xs-6 col-sm-6 col-md-2 col-lg-2 offset-lg-1 offset-md-1">
                <div class="sous-col">
                  <a href="#">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/cuisines/s6.jpg" alt="" class="image ">
                  </a>
                </div>     
              </div> 

              <div class=" col-xs-6 col-sm-6 col-md-2 col-lg-2 ">
                <div class="sous-col">
                  <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/cuisines/s7.jpg" alt="" class="image " >
                  </a>  
                </div>     
              </div> 

              <div class=" col-xs-6 col-sm-6 col-md-2 col-lg-2 ">
                <div class="sous-col">
                  <a href="#">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/cuisines/s8.jpg" alt="" class="image " >
                  </a>
                </div>     
              </div> 
              <div class=" col-xs-6 col-sm-6 col-md-2 col-lg-2 ">
                <div class="sous-col">
                  <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/cuisines/s9.jpg" alt="" class="image " >
                  </a> 
                </div>     
              </div> 

              <div class=" col-xs-6 col-sm-6 col-md-2 col-lg-2 ">
                <div class="sous-col">
                  <a href="#">
                   <img src="<?php echo get_template_directory_uri(); ?>/img/cuisines/s10.jpg" alt="" class="image " >
                </a>
              </div>
          </div><!-- end row -->
      </div>
    </section>
    <div class=" container mt-5 mb-5">
      <div class="row text-center nombre">
          <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 offset-lg-1 offset-md-1 offset-sm-0 offset-xs-0 ">
            <h4>23,567</h4>
            <p class="legend">Recipes Available</p>
          </div>
          <div class="col-xs-4 col-sm-4  col-md-2 col-lg-2  ">
            <h4>431,729</h4>
            <p>Active Users</p>
          </div>
          <div class="col-xs-4 col-sm-4  col-md-2 col-lg-2">
            <h4>892,173</h4>
            <p>Positive Reviews</p>
          </div>
          <div class="col-xs-4 col-sm-4  col-md-2 col-lg-2 ml-lg-0 ml-md-0 mr-lg-0 mr-md-0 ml-sm-auto mr-sm-auto">
            <h4>56,581</h4>
            <p>Photos & Videos</p>
          </div>
          <div class="col-xs-4 col-sm-4  col-md-2 col-lg-2 ml-lg-0 ml-md-0 mr-lg-0 mr-md-0 ml-sm-auto mr-sm-auto">
            <h4>3,182</h4>
            <p>Spices and Herbs</p>
          </div>
      </div>
    </div>

<?php get_footer(); ?>