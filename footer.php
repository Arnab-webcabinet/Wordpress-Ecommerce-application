<footer class="footer">
      <div class="top-footer">
         <div class="container-wci">
            <div class="row justify-content-between">
               <div class="col-lg-4 4col-12 ft-sm ">
                  <div class="footr-outr foot-first wow fadeInUp" data-wow-delay="0.2s">
                     <h4>Contact us</h4>
                     <ul>
                        <li class="d-flex"><em><i class="fa fa-map-marker" aria-hidden="true"></i></em><strong><?php echo get_option('address') ?></strong></li>
                        <li class="d-flex align-items-center"><em><i class="fa fa-phone" aria-hidden="true"></i></em><a
                              href="tel:<?php echo get_option('contact_no') ?>"><?php echo get_option('contact_no') ?></a></li>
                        <li class="d-flex align-items-center"><em><i class="fa fa-envelope" aria-hidden="true"></i></em><a
                              href="mailto:<?php echo get_option('email') ?>"><?php echo get_option('email') ?></a></li>
                     </ul><br><br>

                     <h4>Follow Us On</h4>
                     <div class="footr-ul wow fadeInRight" style="visibility: visible;">
                        
                        <ul class="d-flex">
                           <li><a href="<?php echo get_option('facebook_link') ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="<?php echo get_option('twitter_link') ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="<?php echo get_option('instagram_link') ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="<?php echo get_option('linkedin_link') ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="<?php echo get_option('youtube_link') ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-12 ft-sm">
                  <div class="footr-outr foot wow fadeInUp" data-wow-delay="0.4s">
                     <h4>Information</h4>
                     <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'footermenu',
                        'depth'             => 1,
                        'container_class'   => 'menu-top',
                        'menu_class'        => '',
                    ) );
                    ?>
                  </div>
               </div>
               <div class="col-lg-5 col-12 ft-sm no-brdr">
                  <div class="footr-outr foot wow fadeInUp" data-wow-delay="0.4s">
                     <h4>Direction</h4>
                     <?php dynamic_sidebar( 'footer-direction' ); ?>
                  </div>
               </div>
               <div class="bk_rec_btn text-center wow fadeInUp">
                  <div class="img_otr">
				  <?php if ( has_custom_logo() ) { the_custom_logo(); } ?>
					<a href="<?php echo get_home_url(); ?>"><img src="<?php echo bloginfo('template_url') ?>/assets/images/webCabinet-logo.png" /></a>
				</div>
               </div>
               <div class="d-flex last-foot-inn justify-content-between">
                  <div class="last-p wow fadeInLeft" style="visibility: visible;">
                     <p>Copyright © <?php echo date('Y'); ?> <a href="<?php echo get_home_url(); ?>">Web cabinet India</a>. All Rights Reserved. </p>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </footer>

   <!-- Modal -->
   <div class="modal fade evn-pop-up login-popup" id="campaign-my-model2">
      <div class="modal-dialog">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4>Login</h4>
                 <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body cus-mdl">
                <form id="login" action="login" method="post">
                    <p class="alert alert-danger err-status" ></p>
                    <p class="alert alert-success success-status" ></p>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="userName" id="username" name="username">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                  <!-- <i class="fa fa-eye" id="togglePassword"></i> -->
                              </div>
                          </div>
                      </div>
                      <div class="log-outr">
                          <div class="log-innr">
                              <input type="submit" value="login" name="submit" class="yl-btn btn btn-primary"/>
                          </div>
                          <div class="log-innr">
                              <a href="<?php echo wp_lostpassword_url(); ?>" class="pss-btn">Forgot password?</a>
                          </div>
                      </div>
                      <div class="clnt-innr text-center">
                          <p>Don’t have an account?<a href="javascript:void(0);" class="pss-btn">Sign up</a></p>
                      </div>
                      <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                  </form>
              </div>
              <!--  end body -->
          </div>
      </div>
  </div>
  <!--    modal-->
  <div class="modal fade evn-pop-up login-popup" id="campaign-my-model1">
      <div class="modal-dialog">
          <div class="modal-content">
              <!-- Modal Header -->
            <div class="modal-header">
                <h4>sign up</h4>
                 <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
            </div>
              <!-- Modal body -->
              <div class="modal-body cus-mdl">
                <form id="register" action="register" method="post">
                    <p class="alert alert-danger err-status-reg" ></p>
                    <p class="alert alert-success success-status-reg"></p>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="text" class="form-control" placeholder="full name" name="signonname" id="signonname">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="email" class="form-control" placeholder="email address" id="email" name="email">
                              </div>
                          </div>
                      </div>
                      <!-- <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="tel" class="form-control" placeholder="Phone number">
                              </div>
                          </div>
                      </div> -->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="password" class="form-control" placeholder="Password" id="signonpassword" name="signonpassword">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input type="password" class="form-control" placeholder="Confirm password" id="password2" name="password2">
                              </div>
                          </div>
                      </div>
                      <div class="log-outr">
                          <div class="log-innr">
                              <input type="submit" value="sign up" class="yl-btn btn btn-primary"/>
                          </div>
                      </div>
                      <?php wp_nonce_field('ajax-register-nonce', 'signonsecurity'); ?>  
                  </form>
              </div>
              <!--  end body -->
          </div>
      </div>
  </div>
   </div>
   <!--TopScroll-->
   <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <!-- Popper JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="<?php echo bloginfo('template_url') ?>/assets/js/wow.min.js"></script>
   <script src="<?php echo bloginfo('template_url') ?>/assets/js/slick.js"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

<script>
    $(function() {
        $(".err-status").hide();
        $(".success-status").hide();
        $(".err-status-reg").hide();
        $(".success-status-reg").hide();
        setTimeout(() => {
            $(".err-status").fadeOut();
            $(".success-status").fadeOut(); 
        }, 3000);

        //login ---------------------------
        $('form#login').on('submit', function(e) {
            if($('form#login #username').val() == '' || $('form#login #password').val() == '') {
                $(".err-status").show();
                $(".err-status").text("All Fields are required.");
                return false;
            }
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: "<?php echo admin_url( 'admin-ajax.php' ); ?>",
                data: {
                    'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                    'username': $('form#login #username').val(), 
                    'password': $('form#login #password').val(), 
                    'security': $('form#login #security').val()
                },
                success: function(data) {
                    // console.log(data);
                    if (data.loggedin == false){
                        $('form#login p.err-status').text(data.message);
                        $(".err-status").show();
                    }
                    if (data.loggedin == true){
                        $('form#login p.success-status').text(data.message);
                        $(".success-status").show();
                        document.location.href = '<?php echo home_url(); ?>';
                    }
                },
                error : function(error){ 
                    console.log(error); 
                }
            });
            e.preventDefault();
        });


        //register
        $('form#register').on('submit', function(e) {
            var signonname = $('form#register #signonname').val();
            var email = $('form#register #email').val();
            var signonpassword = $('form#register #signonpassword').val();
            var confirmpassowd = $('form#register #password2').val();
            if( signonname == '' || email == '' || signonpassword == '' || confirmpassowd == '') {
                $(".err-status-reg").show();
                $(".err-status-reg").text("All Fields are required.");
                return false;
            } 
            if(signonpassword != confirmpassowd) {
                $(".err-status-reg").show();
                $(".err-status-reg").text("Password Does Not Match.");
                return false;
            } 
            
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: "<?php echo admin_url( 'admin-ajax.php' ); ?>",
                data: {
                    'action': 'ajaxregister', //calls wp_ajax_nopriv_ajaxregister
                    'username': signonname, 
                    'password': signonpassword, 
                    'email': email,
                    'security': $('form#register #signonsecurity').val()
                },
                success: function(data) {
                    // console.log(data);
                    
                    if (data.loggedin == false){
                        $('form#register p.err-status-reg').text(data.message);
                        $(".err-status-reg").show();
                    }
                    if (data.loggedin == true){
                        $('form#register p.success-status-reg').text(data.message);
                        $(".success-status-reg").show();
                    }
                    
                },
                error : function(error){ 
                    console.log(error); 
                }
            });
            e.preventDefault();
        });
    });
</script>

   <script src="<?php echo bloginfo('template_url') ?>/assets/js/custom.js"></script>
   <?php wp_footer(); ?>
</body>
</html>
