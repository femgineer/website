<?php
/**
 *Template Name: Speaking
 */

get_header(); ?>

<script>
jQuery(document).ready(function($) {
	
	$('.popup-modal').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
		
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
	
	$('.popup-youtube').magnificPopup({
		type: 'inline',
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
       <div class="main">
         <div class="topspeaking cf">
         <?php the_content(); ?>
         <div class="talking-cont-top border-link">
         <?php the_field('top_content');?>
         </div>
         </div>
       </div>
       <div class="bggreen speaking-blog cf" id="watch-our-founder">
         <div class="main">
             <div class="watch-founder-section">
             	<h2><?php the_field('watch_our_founder');?></h2>
                <ul>
               
                <?php 
				$watch_video = get_field('watch_our_founder_videos');
				
				foreach($watch_video as $watch_vide)
				{ ?>
				<li>
                
                <?php 	 $video_name = $watch_vide['video_name'];
					 $video_image = $watch_vide['video_image'];
					 
					 $video_link = $watch_vide['video_link']; 	
				?>
             <a class="popup-youtube" href="<?php echo $video_link ; ?>">
                
                <img src="<?php echo $video_image; ?>" />
                </a>
                <?php echo $video_name; ?>
				</li>
				<?php } 
				?>
               
                </ul>
             </div>
         </div>
         </div>
         <div class="main">
            <div class="inspireteam speaking-blog2 cf" id="inspire-your-team">
             <div class="inspire-title"><?php the_field('inspire_your_team_heading');?></div>
               <?php 
			   $inspire_your_team = get_field('inspire_your_team');
			  echo '<ul class="inspireitem cf">';
			  $j=1;
			   foreach($inspire_your_team as $inspire_your)
			   {
				  
				   
				   if($j%2==0)
				   { echo '<li class="even cf">';}else {echo '<li class="odd cf">';}
				   
				   echo '<img src="'.$inspire_your['image'].'">';
				   echo  '<div class="inspire-details-right border-link">'.$inspire_your['content'].'</div>';
				   echo '</li>';
				   $j++; 
			   }
			    echo '</ul>';
			   ?>
            
            </div>
         
         </div>
      
          <div class="speking-btm-part" id="praice-for-poornima">  
         <div class="testimonials bglightpink">
         <div class="main">
            <h2><?php echo get_field('praise_for_poornima_title');?></h2>
             <ul>
            <?php 
                 $select_testimonial = get_field('select_testimonial'); 
				 $i=0;
                foreach($select_testimonial  as $select_testimonia)
                { ?>
                          <script>
                            jQuery(document).ready(function() {
                            setEqualHeight(jQuery(".row<?php echo $i; ?>"));
                            });
                         </script>
            <li class="testmlist "><p class="row<?php echo $i; ?>"><i class="fa-left-quote"></i><span><?php echo $select_testimonia->post_content; ?></span><i class="fa-right-quote"></i></p> <div class="test-details"> <?php echo get_the_post_thumbnail($select_testimonia->ID,array(100,107)); ?> <div class="test-name"><strong><?php echo $select_testimonia->post_title;?></strong> <?php echo get_field('position',$select_testimonia->ID);?></div></div> </li>
            <?php  	
			}
                ?>
                
                </ul>
        </div>
       </div>
       
       <div class="bglightgreen" id="upcoming-events">
       <div class="main">
       <div class="upcoming-events">
       <?php $upcoming_events = get_field('upcoming_events'); ?>
       <h2><?php the_field('upcoming_events_title');?></h2>
      
       <ul>
       	<?php 
			foreach($upcoming_events  as $upcoming_even)
			{ 
				$pid = $upcoming_even->ID;
				$title = $upcoming_even->post_title;
				$date =  get_field('date',$pid );
				$time =  get_field('time',$pid );
				$location =  get_field('location',$pid );
				$event_link =  get_field('event_link',$pid );
				$video_url =  get_field('video_url',$pid );
				$video_url =  get_field('slider',$pid );
			?>
               <?php if($event_link)
					       {?>
                              <li><a href="<?php echo $event_link; ?>"><?php echo $title; ?></a> <span><?php if ($time) { echo $date . ', ' . $time; } else { echo $date; } ?></span> <p><?php echo $location; ?></p></li>
                           <?php } else { ?>
							   <li><a href="#<?php //echo get_the_permalink($pid); ?>"><?php echo $title; ?></a> <span><?php if ($time) { echo $date . ', ' . $time; } else { echo $date; } ?></span> <p><?php echo $location; ?></p></li>
				<?php } ?>
              
		<?php 	}
		?>
   <!--    <li><a href="#">How to Transform Your Ideas into Software Products hosted by 500 Startups 
&amp; sponsored by FamilyNation</a> <span>May 10th 2015, 3-6pm </span> <p>Communications and Marketing, University at Albany, 1400 Washington Avenue, Albany, NY 12222</p></li>-->
      
       </ul>
       </div>
       </div>
       </div>
       <div class="main">
      
       <div class="previousevent" id="previousevent">
       
        <h2><?php the_field('previous_events_title'); ?></h2> 
        
        <img src="<?php echo get_site_url(); ?>/loader.gif" class="loder" />
        
       
    
		<?php $previous_events = get_field('previous_events'); 
		
			foreach($previous_events as $previous_even)
			{
				$cat_name = $previous_even->name;
				$term_id = $previous_even->term_id;
				echo '<h4>'.$cat_name.'</h4>';
				 query_posts(array( 
						'post_type' => 'event',
						'showposts' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'event_year',
								'terms' => $term_id,
								'field' => 'term_id',
							)
						),
						'meta_key'  => 'date',
						'orderby'  => 'meta_value_num',
						'order'   => 'DESC' )
					);
					
					
			
					echo '<ul>';
					 $count=0; 
			    	while ( have_posts() ) : the_post();
						$count++;
						$pid = $post->ID;
						$title = $post->post_title;
						$date =  get_field('date',$pid );
						$time =  get_field('time',$pid );
						$location =  get_field('location',$pid );
						$event_link =  get_field('event_link',$pid );
						$video_url =  get_field('video_url',$pid );
						 $slider =  get_field('slider',$pid );
						
					  ?>
                      
                      <li>
                      	<?php if($event_link){
							?>
                      <a href="<?php echo $event_link; ?>" class="event"><?php echo $title; ?> <?php if($date){echo '('.$date.')';} ?></a> <?php } else { ?>
                      <a href="#<?php //the_permalink(); ?>" class="event"><?php echo $title; ?><?php } ?></a>
                      <?php if($slider){ 
					    ?>   <a href="#popup_id<?php echo $pid; ?>"  class="popup-modal">View Slides</a>
                        <div class="popup-with-zoom-anim mfp-hide mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-fade mfp-ready"  id="popup_id<?php echo $pid; ?>">
                       
                              <div class="mfp-container mfp-iframe-holder"><div class="mfp-content">
                                <div class="mfp-iframe-scaler">
                                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                         <?php 
							  echo $slider;
						   
						?>
                      </div></div></div></div>
                        
					  <?php } ?>
                       <?php if($video_url){?> 
                       <a class="popup-youtube video" href="<?php echo $video_url; ?>">View Video</a>
                      <?php } ?>
                      </li> 
                      <?php 
					 
					endwhile;
					wp_reset_query();
					
					echo '</ul>';

            
			}
		 ?>
      
     <!--  <h4>2014</h4>
       <ul>
       <li><a href="#" class="event">How to Pitch Projects and Get Them Funded, hosted by Upstart (February 26, 2014)</a><a href="#" class="slides">View Slides</a><a href="#" class="video">View Video</a></li>
     
       </ul>-->
       </div>
       
       </div>
       </div>
     
    <?php endwhile; ?>
  </div>
  <!-- #content --> 
</div>
<div id="test-popup" class="white-popup mfp-hide">
 
</div>
<div class="popup-gallery mfp-hide">
	
	
</div>
 
<?php get_footer(); ?>
