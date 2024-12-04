<!DOCTYPE HTML>
<html lang="en" <?php language_attributes(); ?>>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <title><?php wp_title(); ?></title>
   <meta name="description" content="" />
   <meta name="author" content="admin" />
   <meta name="viewport" content="width=device-width; initial-scale=1.0" />
   <link rel="shortcut icon" href="<?php echo bloginfo('template_url') ?>/assets/images/favicon.png" alt=""/>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/assets/css/bootstrap.css" />
   <link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/assets/css/animate.css" media="all" />
   <link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/assets/css/slick.css" />
   <link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/assets/css/custom.css" />
   <link rel="stylesheet" href="<?php echo bloginfo('template_url') ?>/assets/css/responsive.css" />
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <div class="webcabinet-main-wraper">
   <!--Header Start-->
   <header>
      <div class="upper_hdr_otr">
         <div class="container-wci">
            <div class="upper_hdr_inr">
               <div class="ship">
                  <h3><span> Shipping Available. </span>Our shipping center is located</h3>
               </div>
               <div class="cart_login">
                  <ul>
				  <?php if (is_user_logged_in()) { ?>
					<li><a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a></li>
                    <?php } else { get_template_part('ajax', 'auth'); ?>
                    <li><a href="" data-toggle="modal" data-target="#campaign-my-model2">LogIn</a></li>
                    <li><a href="" data-toggle="modal" data-target="#campaign-my-model1">Create Account</a></li>
					<?php } ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="cus_nav" id="header_id">
         <div class="cus_nav_outr">
            <div class="container-wci">
               <div class="cus_nav_innr">
                  <div class="logo_area">
                     <a href="<?php echo get_home_url(); ?>"><img class="img-fluid" src="<?php echo bloginfo('template_url') ?>/assets/images/webCabinet-logo.png" alt="" /></a>
                  </div>
                  <div class="nav_area">
                     <div class="right_nav">
                        <div class="navbar-header">
                           <nav class="navbar navbar-expand-lg">
                              <button class="navbar-toggler" type="button" data-toggle="collapse"
                                 data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                 aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="navbar-toggler-icon"></span>
                              </button>
                              <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'headermenu',
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'navbarNavDropdown',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker(),
                                    ) );
                                ?>
                           </nav>
                        </div>
                     </div>
                  </div>
                  
                  <div class="scar_cat hdr-btn">
                     <form action="<?php echo home_url( '/' ); ?>" method="get" role="search">
                        <input type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search here...." required="">
                        <input type="hidden" name="post_type" value="product">
                        <button type="submit" value="Search" id="searchsubmit" class="submit"><i class="fa fa-search"></i></button>
                     </form>
                     <div class="cata">
                        <ul>
                           <li><a href="<?php echo home_url( '/' ); ?>my-account"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
                           <li>
                              <a class="crtt" href="<?php echo wc_get_cart_url(); ?>">
                                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                 <span class="cartcount"><?php echo WC()->cart->get_cart_contents_count() ?></span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!--Header End-->