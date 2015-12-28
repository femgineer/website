<?php
/**
 *Template Name: About Us
 */

get_header(); ?>
 
<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    
    <?php $origin_story_text = get_field('origin_story_text'); 
	      $todaytext =get_field('today-text');
		  
		  $slogan_text = get_field('slogan_text');
		  $the_team_title = get_field('the_team_title');
		  $the_team = get_field('the_team');
		  $bottom_text = get_field('bottom_text__press_kit_area','option');
	
	?>
       <div class="white-bg about-blog1"> 
           <div class="main">
           <div class="inner-main-about">
           
          <h1> <?php the_title();?></h1>
           		<div class="first cf">
                
                <div class="about-left border-link">
                <?php echo $origin_story_text[0]['text']; ?>
                </div>
                 <img src="<?php echo $origin_story_text[0]['image']; ?>" />
                </div>
                
                <div class="second cf">
                  
                 <img src="<?php echo $todaytext[0]['image']; ?>" />
                   <div class="about-left border-link">
                 <?php echo $todaytext[0]['text']; ?>
                 </div>
                </div>
           <div class="about-testimonials">
            <p><i class="fa-left-quote"></i><?php echo $slogan_text ; ?><i class="fa-right-quote"></i></p>
         </div>
      </div>
      </div>
      </div>
    
    <div class="bglightgreen course-blog11 about-testimoals" id="the-team"> 
           <div class="main">
           
          <h2><i class="fa fa-users"></i> <?php echo  $the_team_title;  ?></h2>
           
            
             <?php $meet_your_instructors = get_field('meet_your_instructors');
			 foreach($the_team as $meet_your)
			 { 
		      $name = $meet_your['name'];
			  $position = $meet_your['position'];
			  $about_text = $meet_your['about_info'];
			  $image = $meet_your['image'];
			  $social_media = $meet_your['social_media'];
			 
			  $social = '';
				foreach($social_media  as  $social_ic)
				{
						$social.= '<li><a target="_blank" href="'.$social_ic['link'].'" title="'.$social_ic['title'].'"><i class="fa '.$social_ic['icon_class'].'"></i></a></li>';
				}
			 	// echo '<ul>'.$social.'</ul>'; 
			 ?>
             <div class="instructor">
             	<div class="inst-image">
                <img src="<?php echo  $image; ?>" />
                </div>
                <div class="inst-info">
                <h5><?php echo $name; ?></h5>
                <span><?php echo $position; ?></span>
                 <ul class="course-social-icon"><?php echo $social; ?></ul>
                 <div class="abttext  border-link"><?php echo $about_text; ?></div>
                 
                </div>
             	
             </div>
             	
				 
				 
			 <?php }
			 
			 ?>
            
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
