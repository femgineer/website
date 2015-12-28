<?php
/**
 *Template Name: Privacy policy
 */

get_header(); ?>
<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
       <div class="main">
       <h1><?php the_title(); ?></h1>
      </div>
      <div class="bglightgreen">
     
      <div class="main">
       <img src="<?php echo get_template_directory_uri(); ?>/images/privacy-img.png" class="privacy-img1" />
         <img src="<?php echo get_template_directory_uri(); ?>/images/privacy-img2.png" class="privacy-img2" />
         <div class="topterms cf border-link">
         <?php the_content(); ?>
         
         </div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/privacy-img3.png" class="privacy-img3" />
         </div>
         </div>
       </div>
        <div class="main">
         <div class="topprivacy cf border-link" id="privacy-policy">
         <?php the_field('privacy_policy'); ?>
         
         </div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/privacy-img4.png" class="privacy-img4" />
       </div>
       
         
       <?php // comments_template();
	//the_content(); 
	 ?>
    <?php endwhile; ?>
  </div>
  <!-- #content --> 
</div>
<?php get_footer(); ?>
