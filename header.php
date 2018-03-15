<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body id="home">
    <!--==========================
             Header
    ============================-->
    <header class="header" id="home"> 
       <!-- navigation-->
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" style="width:70px;"  alt="" title="" /></img></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <?php //bootstrap_menu(); ?>
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                  <a style="color: #fff" class="nav-link" href="#" data-toggle="modal" data-target="#sign-in">Sign In </a>
                  <!-- The Modal -->
                    <div class="modal fade" id="sign-in">
                        <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Sign IN</h4>
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                             <!-- Modal body -->
                             <div class="modal-body">
                              <form class="form" action="">
                                 <label for="email">Email address:</label>
                                 <input type="email" class="form-control" id="email">
                                 <label  for="pwd">Password:</label>
                                 <input type="password" class="form-control" id="pwd">
                                 <div class="form-check">
                                    <label class="form-check-label">
                                     <input class="form-check-input" type="checkbox"> Remember me
                                    </label>
                                  </div>
                                 <button type="" class="btn btn-primary">Submit</button>
                              </form>
                            </div>

                           <!-- Modal footer -->
                           <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                         </div>
                       </div>
                     </div>
                </li>
                <li class="nav-item">
                  <a style="color: #fff" class="nav-link" href="#" data-toggle="modal" data-target="#sign-up">Sign Up</a>
                 <!-- The Modal -->
                    <div class="modal fade" id="sign-up">
                        <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Sign Up</h4>
                               <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                             <!-- Modal body -->
                             <div class="modal-body">
                               <form class="form" action="">
                                 <label for="email">Email address:</label>
                                 <input type="email" class="form-control" id="email">
                                 <label  for="pwd">Password:</label>
                                 <input type="password" class="form-control" id="pwd">
                                 <label  for="pwd">Confirm Password:</label>
                                 <input type="password" class="form-control" id="cf-pwd">
                                 <div class="form-check">
                                    <label class="form-check-label">
                                     <input class="form-check-input" type="checkbox"> Accepte Conditions
                                    </label>
                                  </div>
                                 <button type="" class="btn btn-primary">Submit</button>
                              </form>
                            </div>

                           <!-- Modal footer -->
                           <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                         </div>
                       </div>
                     </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/nav.png"  alt="" title="" /></img>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Home</a>
                    <a class="dropdown-item" href="#services">Services</a>
                    <a class="dropdown-item" href="#phone">Phone App</a>
                    <a class="dropdown-item" href="#reviews">Reviews</a>
                    <a class="dropdown-item" href="#cuisines">Cuisines</a>
                  </div>
                </li>
              </ul>

            </div>
        </nav>
      </div>

      
      
      <!-- Favourite-->
      <section id="favourite" class="pt-5 text-center">
        <div class="container pt-5">
          <h1>Find Your Favourite</h1>
          <h2>RECIPES</h2>
          <a href="#" class="btn btn-lg btn-outline-light">GET STARTED</a>
          <h3>OR SEND US YOUR OWN RECIPES AND<u> GET REWARDED!</u></h3>
        </div>
      </section><!-- #favourit -->
    </header>


  





    



