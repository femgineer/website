<?php
/**
 * Template Name: Products
 */

get_header(); ?>
<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
       <div class="main">
         <div class="product-blog1 cf">
         <?php the_content(); ?>
         <!--<div class="talking-cont-top">
         <?php the_field('top_content');?>
         </div>-->
         </div>
       </div>
       <div class="bggreen product-blog-bg cf">
         <div class="main">
             <div class="product-blog2 border-link">
             	<h2><?php the_field('group_text_title');?></h2>
                <ul>
               
                <?php 
				;
				$three_pages_link = get_field('three_pages_link');
				
				foreach($three_pages_link as $watch_vide)
				{ 
				
				?>
				<li>
                
                <?php 	 $video_name = $watch_vide['title'];
					 $video_image = $watch_vide['image'];
					 
					 $video_link = $watch_vide['link']; 
					 
					 if( $video_link )
					 {
						echo '
							<img src="'.$video_image.'" />
							<p><a class="purple main-button nohover button" title="'.$video_name.'" href="'.$video_link.'"> <span><strong>'.$video_name.'</strong></span>
							</a></p>';	 
							
							
					 }else
					 {
						 echo '
							<img src="'.$video_image.'" /><p> <strong>'.$video_name.'</strong></p>';	 
						}	
						
						
				?>
               
             
				</li>
				<?php } 
				?>
               
                </ul>
             </div>
         </div>
         </div>
         <div class="main">
            <div class="product-blog3 cf" id="courses-and-books">
             <div class="inspire-title"><h3><?php the_field('products_title');?></h3></div>
               <?php 
			   $products = get_field('products');
			  echo '<ul class="inspireitem cf">';
			  $ik= 1; 
				$cals = 'odd';
			   foreach($products as $inspire_your)
			   {
				   
				   if($ik%2 == 0)
						{
							$cals = 'even';
						}else
						{
							$cals = 'odd';
					}
				   echo '<li>';
				   
				   echo '<div class="produst-blog-img"><img src="'.$inspire_your['image'].'"></div>';
				   
				   echo  '<div class="inspire-details-right">'.do_shortcode($inspire_your['content']).'</div>';
				   echo '</li>';
				   $ik++;
			   }
			    echo '</ul>';
			   ?>
            
            </div>
         
         </div>
      
        
           <div class="bglightgreen product-blog4" id="freebies">
               <div class="main">
                   <div class="upcoming-events">
                    <div class="inspire-title"><h3><?php the_field('freebies_title');?></h3></div>
                       <div class="leftevents">
                               <?php the_field('blog_text'); 
                               $blogitem = get_field('select_popular_category'); 
                               foreach($blogitem  as $blogm)
                               {
                                  $yourcat = get_category($blogm);
                                        if ($yourcat) {
                                        echo '<h5>' . $yourcat->name . '   <i class="fa fa-angle-right"></i></h5>';
                                        }
                                        echo '<ul>';
                                        $args = array( 'posts_per_page' => 2, 'category' => $blogm, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC' );
                        
                                                $myposts = get_posts( $args );
                                                foreach ( $myposts as $post ) : setup_postdata( $post ); 
                                                    echo '<li>
                                                        <a href="'.get_the_permalink($post->ID).'">'.get_the_title($post->ID).' </a>
                                                    </li>';
                                                 endforeach; 
                                                wp_reset_postdata();
                                        echo '</ul>';
                               }
                               
                               ?>
                        </div>
                        <div class="rightevents">
                        	<?php $video_mini_courses = get_field('video_mini-courses'); 
							echo '<h3>'.get_field('video_courses_title').'</h3>';
							echo '<ul>';
							foreach($video_mini_courses as $video_mini)
							{
								echo '<li><a href="'.$video_mini['link'].'">'.$video_mini['title'].'  <i class="fa fa-angle-right"></i></a>  </li>';	
							}
														echo '</ul>';
							?>
                        </div>
                         <img src="<?php echo get_field('bottom_image');?>"  class="product-img1" />
                   </div>
               </div>
               
           </div>
    <?php endwhile; ?>
  </div>
  <!-- #content --> 
</div>
<?php get_footer(); ?>
