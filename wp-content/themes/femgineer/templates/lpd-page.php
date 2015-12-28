<?php
/**
 *Template Name: LPD Page
 */

get_header(); ?>



<script type="text/javascript">
	$(function() {
		
		 
		//$( ".accordion" ).each(function(){
			$(".accordion").accordion({
				heightStyle: "content" 
			});
		//})
		
		
	});
	</script>
    
<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    
    <div class="green-bg">
      <div class="course-top-content lpd-blog1">
        <div class="main"><?php $top_titlw = get_field('top_titlw');?>
          <?php 
		  	echo '<h1>'.$top_titlw.'</h1>';
			$select_testimonials = get_field('select_testimonials');
            if (!empty($select_testimonials)) {
			foreach($select_testimonials  as $select_testimonia) { ?>
                 <div class="testimonial-list"><p><i class="fa-left-quote-white"></i></i><?php echo $select_testimonia->post_content; ?><i class="fa-right-quote-white"></i></i></p>
                  <div class="test-details"> <?php echo get_the_post_thumbnail($select_testimonia->ID); ?>
                   <div class="test-name">- <?php echo $select_testimonia->post_title;?>, <?php echo get_field('position',$select_testimonia->ID);?>
                    </div>
                   </div> 
                  </div>
		<?php } } ?>
          <div class="lpd-top-list">
          <?php 
		  
		  the_field('top_content'); 
		  //echo do_shortcode('[SEND_GUIDE color="purple"]');?>
          </div>
        </div>
      </div>
    </div>
    
    <div id="course-freetrial-top" class="purple-bg course-blog7 lpd-blog2 innerpurple-bg cf">
       <div class="main">
       
         
         <div class="form-section"> 
              <?php //speaker_text 
		  echo  '<p>'.get_field('free_trail_text').'</p>'; 
		 ?>  
               <form method="post" id="guide-form" novalidate="novalidate" action="//femgineer.us6.list-manage.com/subscribe/post?u=21e8e255f2ac03e542d1abcaa&amp;id=7e7073ed2f" name="mc-embedded-subscribe-form" target="_blank">
                <div class="form-details">
                
                <input type="email" name="EMAIL" placeholder="Email Address*" class="txt-box"></div><button class="green main-button button" type="submit" name="subscribe"><span>Start The Trial</span></button>
                
                </form>
            </div>
       
       </div>
    </div>
    
    
    <div class="lpdacordian"> 
          
                 <?php $faq_list = get_field('faq');
                 ?>
                 
                  <div id="acdn">
                       <div id="accordion"  class="accordion">
                        <?php 
						$id= 0; 
						foreach($faq_list as $faq_lis)
						{
							$select_Background = $faq_lis['select_Background'];
							$bgcolor = $select_Background[0]['colour_one'];
							 $image = $select_Background[0]['image'];
							 $text_color = $select_Background[0]['text_color'];
							  $arrow_color = $select_Background[0]['arrow_color'];
							// echo '<style type="text/css"> #accordion'.$id.' a{color:'.$text_color.';}</style>';
							
						
							echo '<h3 id="accordion'.$id.'" class="fq_title" style=" background-color:'.$bgcolor.'; color:'.$text_color.'; "><div class="accordion-text "><div class="accordion-lpd"><div class="main"><div class="arrow-img" style="background-color:'.$arrow_color.';"></div><a href="#" style="color:'.$text_color.';">'.$faq_lis['qiestion'].'</a><img src="'. $image.'" class="image_lpdq"></div></div></div></h3>';
							?>
                        <div>
                        <div class="accordion-details"><div class="main  border-link"><?php echo $faq_lis['answer']; ?>
                        
                        <?php $sub_accordian =  $faq_lis['sub_accordian']; 
							if($sub_accordian)
							{
								$htmlsub = '<div class="accordion nested_acordian">';
								
								foreach($sub_accordian as $sub_accordi)
								{
									$htmlsub.='<h3 class="nested_title"><a class="nohover" href="javascript:{}">'.$sub_accordi['title'].'</a></h3><div>'.$sub_accordi['conteant'].'</div>';
								}
								$htmlsub.='</div>';	
								
								echo $htmlsub ; 
							}
						?>
                        	
                             <?php 
		            $select_testimonials = $faq_lis['select_testimonials'];
				   if( $select_testimonials)
				   {
							foreach($select_testimonials  as $select_testimonia)
								{ ?>
								 <div class="testimonial-list"><p><i class="fa-left-quote"></i><?php echo $select_testimonia->post_content; ?><i class="fa-right-quote"></i></p>
								  <div class="test-details"> <?php echo get_the_post_thumbnail($select_testimonia->ID); ?>
								   <div class="test-name"><strong><?php echo $select_testimonia->post_title;?></strong> <?php echo get_field('position',$select_testimonia->ID);?>
									</div>
								   </div> 
								  </div>
						<?php 	}
						
				   }
		  ?>
                       </div> </div></div>
                        
                        <?php 
							$id++;
						}
						?>
                       
                        
                      </div>
                    </div>        
               
          
   </div>
   
    
   <div id="course-freetrial-bottom" class="purple-bg course-blog7 lpd-blog2 innerpurple-bg cf">
       <div class="main">
       
         
         <div class="form-section"> 
              <?php //speaker_text 
		  echo  '<p>'.get_field('free_trail_text').'</p>'; 
		 ?>     <form method="post" id="guide-form-2" novalidate action="//femgineer.us6.list-manage.com/subscribe/post?u=21e8e255f2ac03e542d1abcaa&amp;id=7e7073ed2f" name="mc-embedded-subscribe-form" target="_blank">
                <div class="form-details">
                <input type="email" name="EMAIL" placeholder="Email Address*" class="txt-box"></div><button class="green main-button button" type="submit" name="subscribe"><span>Start The Trial</span></button>
               </form>
            </div>
       
       </div>
    </div>

   
    <?php endwhile; ?>
  </div>
  <!-- #content --> 
</div>
<?php get_footer(); ?>
