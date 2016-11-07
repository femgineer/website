<?php
/**
 *Template Name: Press
 */

get_header(); ?>
<script>
jQuery(document).ready(function($) {
	$('.popup-youtube').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
        fixedContentPos: false
	});
});
</script>

<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="press-navbar">
       <div class="main">
      <img src="<?php echo get_template_directory_uri(); ?>/images/press-img.png" alt="" title="" class="press-img1" />
         <div class="press-nav cf">
         <?php the_content(); ?>
        
         </div>
       </div>
       </div>
        <div class="bglightgreen press-blog2" id="latest-press">
           <div class="main">
               <h2><?php the_field('latest_press_coverage_title'); ?></h2>
               <?php 
			   $html='';
			   $latest_press = get_field('latest_press');
			   if($latest_press)
			   {
			   $latest_press = get_field('latest_press');
				   foreach($latest_press as $latest_pres)
				   {
					
					$img = $latest_pres['image'];
					$textt =  $latest_pres['content_text'];
					if($img)
					{
							$html.='<li><div class="press-leftimage"><img src="'.$img.'" class="slignleft"></div><div class="press-righttext border-link">';
							if($textt[0]['title'])
							{
								if($textt[0]['link'])
								{
								$html.='<h3 class="title_top"><a class="nohover" href="'.$textt[0]['link'].'">'.$textt[0]['title'].'</a></h3>';
								}else
								{
									$html.='<h3>'.$textt[0]['title'].'</h3>';
								}
							}
							if($textt[0]['text'])
								{
									$html.= $textt[0]['text'];
								}
							if($textt[0]['link'])
								{
									$html.= '<a class="nohover" href="'.$textt[0]['link'].'">Read More</a>';
								}
							
							$html.= '</div></li>';	
					}else
					{
						$html.='<li><div class="fultext">';
						if($textt[0]['title'])
							{
								if($textt[0]['link'])
								{
								$html.='<h3 class="title_top"><a class="nohover" href="'.$textt[0]['link'].'">'.$textt[0]['title'].'</a></h3>';
								}else
								{
									$html.='<h3>'.$textt[0]['title'].'</h3>';
								}
							}
							if($textt[0]['text'])
								{
									$html.= $textt[0]['text'];
								}
							
							
							$html.= '</div></li>';
					}
					   
				   }
				  
			   echo '<ul>'.$html.'</ul>';
			   
			   }
			   ?>
               
           </div>
          
          </div>
          
           <div class="white-bgn press-blog2" id="contributed">
           <div class="main">
               <h2><?php the_field('contributed_articles_title'); ?></h2>
               <?php 
			   $html='';
			   $latest_press = get_field('contributed_articles');
			   if($latest_press)
			   {
				   foreach($latest_press as $latest_pres)
				   {
					
					$img = $latest_pres['image'];
					$textt =  $latest_pres['content_text'];
					if($img)
					{
						$html.='<li><div class="press-leftimage"><img src="'.$img.'" class="slignleft"></div><div class="press-righttext border-link">';
						
						if($textt[0]['title'])
							{
								if($textt[0]['link'])
								{
								$html.='<h3 class="title_top"><a class="nohover" href="'.$textt[0]['link'].'">'.$textt[0]['title'].'</a></h3>';
								}else
								{
									$html.='<h3>'.$textt[0]['title'].'</h3>';
								}
							}
							if($textt[0]['text'])
								{
									$html.= $textt[0]['text'];
								}
							if($textt[0]['link'])
								{
									$html.= '<a class="nohover" href="'.$textt[0]['link'].'">Read More</a>';
								}
						
						$html.= '</div></li>';	
					}else
					{
						$html.='<li><div class="fultext">';
						if($textt[0]['title'])
							{
								if($textt[0]['link'])
								{
								$html.='<h3 class="title_top"><a class="nohover" href="'.$textt[0]['link'].'">'.$textt[0]['title'].'</a></h3>';
								}else
								{
									$html.='<h3>'.$textt[0]['title'].'</h3>';
								}
							}
							if($textt[0]['text'])
								{
									$html.= $textt[0]['text'];
								}
							
							
							$html.= '</div></li>';
					}
				   }
				   
			   }
			   echo '<ul>'.$html.'</ul>';
			   ?>
               
           </div>
          
          </div>
          
          
           <div class="bglightpink press-blog4 " id="press-kit">
           <div class="main border-link">
           <img src="<?php echo get_template_directory_uri(); ?>/images/press-img2.png" alt="" title="" class="press-img2" />
               <h2><?php the_field('press_kit_title'); ?></h2>
               <?php 
			 
			   $about_founder = get_field('about_founder');
			   if($about_founder)
			   {
			   foreach($about_founder as $about_found)
				   {
					 ?>
						<div class="abouttext border-link"><?php echo $about_found['content']; ?></div> 
						<div class="aboutimage"><img src="<?php echo $about_found['image']; ?>"  /></div>
						<div class="positionabout"><p><?php echo $about_found['name_ad_postion']; ?></p>
                      
                        <?php $social_link = $about_found['social_link']; 
						if($social_link )
						{
						$sociall='';
							foreach($social_link  as $social_ic)
							{
								$sociall.= '<li><a class="nohover" target="_blank" href="'.$social_ic['link'].'" title="'.$social_ic['title'].'"><i class="fa '.$social_ic['social_icon_class'].'"></i></a></li>';	
							}
							echo '<ul class="course-social-icon">'.$sociall.'</ul>';
						}
							
						?>
                        
                        
                        </div>
						<?php ?>
					<?php 
					   
			   }
			   }
			
			   ?>
               
              <div class="boilerplate"> <?php 
			   
			   the_field('boilerplate_conent');
			   ?> </div>
               <div class="boilerplate2">
               <?php the_field('backgr_company');?>
               </div>
               
           </div>
          
          </div>
          
           <div class="darkpink press-blog5" id="faqs">
           <div class="main">
               <h2><?php the_field('faqs_tittle'); ?></h2>
               <ul><?php 
			 
			   $faqs = get_field('faqs');
			   $k=0; 
			   if($faqs)
			   {
				   foreach($faqs as $faq)
				   {
					   $class='';
					   if($k%2==0)
					   {
						   $class = 'even';
						}else{ $class = 'odd'; }
					 ?>
						<li class="<?php echo  $class; ?>">
						<h5><?php echo $faq['question'];?></h5>
						<?php echo $faq['answer'];?>
						</li>
					
					<?php 
					   
				   }
			   }
			
			   ?></ul>
               
              
               
           </div>
          
          </div>
          
          <div class="bglightpink press-blog6 border-link" id="poornimas_bio">
           <div class="main">
            <img src="<?php echo get_template_directory_uri(); ?>/images/press-img3.png" alt="" title="" class="press-img3" />
              <?php the_field('poornimas_bio');?>
              <?php $rece_ments = get_field('recent_speaking_engagements'); ?>
              <?php if($rece_ments)
			  { ?>
              <div class="videoarea">
              <div class="video-leftside border-link"> <?php echo do_shortcode($rece_ments[0]['left_content']);?></div>
              <div class="video-rightside border-link"> <?php echo do_shortcode($rece_ments[0]['right_content']);?></div>
              </div>
              <?php } ?>
           
           </div>
           </div>

			<div class="bglightpink press-blog6 border-link" id="karens_bio">
				<div class="main">
					<?php the_field('karens_bio');?>
				</div>
			</div>
           
            <div class="press-blog7" id="downloads">
           <div class="main">
              <h4><?php the_field('download_title');?>downloads</h4>
              <?php $download = get_field('download');
			  if($download){
			   ?>
              <div class="download-area">
              <div class="download-leftside"> <?php echo do_shortcode($download[0]['left_content']);?></div>
              <div class="download-rightside "> <?php echo do_shortcode($download[0]['right_content']);?> </div>
              <div class="download-block  cf" ><?php the_field('download_block_cover'); ?></div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/press-img4.png" alt="" title="" class="press-img4" />
              </div>
             
             <?php } ?>
           </div>
           </div>
          
    <?php endwhile; ?>
  </div>
  <!-- #content --> 
</div>
<?php get_footer(); ?>
