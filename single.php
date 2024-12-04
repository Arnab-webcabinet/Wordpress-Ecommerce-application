<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<section class="inner_banner">
   <div class="bnr_hd">
      <h3><?php echo get_the_title(); ?></h3>
      <ul class="breadcrumb">
        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
        <li><?php echo get_the_title(); ?></li>
      </ul>
   </div>
</section>
    <section class="blog_details inner_cmn_mrgn">
           <div class="container-fluid">
        
           <div class="blog_det_innr">
               <div class="row">
                   <div class="col-md-9">
                   	<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
						the_post(); 
					?>
                       <div class="blog_det_otr">
                           <div class="blog_det_img">
                                <?php the_post_thumbnail(); ?>
                           </div>
                           <div class="blog_det_dt">
                               <ul>
                                   <li><img src="<?php echo get_template_directory_uri(); ?>/images/blog_cal.png" alt=""><?php echo get_the_date( 'F j, Y' );?></li>
                                   <li><img src="<?php echo get_template_directory_uri(); ?>/images/blog_chat.png" alt=""><?php echo get_comments_number(); ?> comment</li>
                               </ul>
                           </div>
                           <h2><?php the_title(); ?></h2>
                           <div class="blog_det_con">
                               <?php the_content(); ?>

                           <!----------- 19.3 ----------->
                            <div class="blg-social-icon-innr">
                                <div class="shre-innr">
                                    <a href="javascript:void(0);">Share <i class="fa fa-share" aria-hidden="true"></i></a>
                                </div>
                               <div class="blg-social-icon">
                                    <ul>
                                        <li><a href="https://www.instagram.com/share?u=<?php echo esc_url(the_permalink()); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li>
                                          <a href="http://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink()); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="https://twitter.com/Pinterest/share?u=<?php echo esc_url(the_permalink()); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.youtube.com/share?u=<?php echo esc_url(the_permalink()); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/share?u=<?php echo esc_url(get_permalink()); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                   </ul>
                               </div>
                            </div>
                            <!-- comment  -->
                            <?php 
                                if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                                }   
                            ?>
                            
                           </div>
                       </div>
                    <?php
                    	} // end while
						} // end if
					?>
                   </div>
                   <div class="col-md-3 wow fadeInRight">
                       <div class="blog_side">
                           <div class="hdr-btn">
                               <form method="get" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                     <input type="text" name="s" placeholder="Search..." required="required">
                                     <button type="submit" value="Search" id="searchsubmit" class="submit"><i class="fa fa-search"></i></button>
                                     <input type="hidden" name="post_type" value="post" />
                                </form>
                            </div>
                           
                           <div class="catagories blg_side_otr">
                               <h3>Catagories</h3>
                               <?php
                               $categories = get_categories( array(
								    'orderby' => 'name',
								    'parent'  => 0
								) );
                               ?>
                               <ul class="cat_list blg_side">
                               	<?php foreach ( $categories as $category ) { ?>
                                   <li><?php echo $category->name; ?></li>
                                  <?php } ?>
                               </ul>
                           </div>
                           
                           <div class="rec_post blg_side_otr">
                               <h3>Recent Post</h3>
                                <?php
                                $args = array(
								'post_type'=> 'post',
								'orderby'    => 'ID',
								'post_status' => 'publish',
								'order'    => 'DESC',
								'posts_per_page' => 4 // this will retrive all the post that is published 
								);
								$result = new WP_Query( $args );
	                               	if ( $result-> have_posts() ) :
									$i = 0;
									while ( $result->have_posts() ) : $result->the_post();
                                ?>
                                <div class="rec_pst_otr">
                                   <div class="rec_po_inr">
                                       <div class="post_no">
                                            <h4><?php echo $i=$i+1; ?></h4>
                                       </div>
                                       <div class="post_con">
                                           <strong><?php echo the_title();?></strong>
                                           <p><?php echo get_the_date( 'F j, Y' );?></p>
                                       </div>
                                   </div>
                                </div>
	                            <?php
	                            	endwhile;
									endif; 
									wp_reset_postdata();  
								?>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           </div>
    </section>

<?php get_footer(); ?>
