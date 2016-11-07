<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>
 
<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    
    <?php 
		  $bottom_text = get_field('bottom_text__press_kit_area','option');
	
	?>
    <div class="contact-blog1"> 
        <div class="main">
        <?php the_content(); ?>
        </div>
     </div>
    
    <div class="bglightgreen contact-blog2 cf"> 
           <div class="main">
           <?php
		   $form_shortcode = get_field('form_shortcode');
		    echo do_shortcode(''.$form_shortcode.'');?>
            
           </div>
     </div>
     
     
      <div class="about-btm-content"> 
        <div class="main">
       	<div class="about-one">
        <?php echo $bottom_text[0]['press_kit']; ?>
        </div> 
        <div class="about-one">
         <?php echo  $bottom_text[0]['femgineermedia_title']; ?>
         <?php $femgine_social = $bottom_text[0]['fem_lmedia']; 
		 	$social = '';
				foreach($femgine_social as  $social_ic)
				{
						$social.= '<li><a target="_blank" href="'.$social_ic['link'].'" title="'.$social_ic['title'].'"><i class="fa '.$social_ic['iconclasname'].'"></i></a></li>';
				}
			 	 echo '<ul class="course-social-icon">'.$social.'</ul>'; 
		 ?>
        </div> 
        <div class="about-three">
         <img src="<?php echo $bottom_text[0]['image']; ?>" />
        </div> 
       
      </div>
      
      </div>
     
     
     
     
     
     
     
     
     

   
    <?php endwhile; ?>
  </div>
  <!-- #content --> 
</div>
<?php get_footer(); ?>
