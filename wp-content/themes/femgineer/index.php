<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<script>
var bno=0;
						var pages =0;
                        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
						jQuery(document).ready(function($) {
							
                                    jQuery('.addmore').click(function(){
										$('.loder').css('display','block');
										
										bno++;
										pages = pages+<?php echo get_option('posts_per_page '); ?>;
										jQuery.ajax({
											url: ajaxurl,
											
											data: {
												'action':'get_blog_itemtext',
												'pages':pages,
												
												},
											   success:function(data) {
												   
												  if(data)
												  {
												   $('.bloglist'+0).append(data);
												   $('.loder').css('display','none');
												  }else
												  {
													 $('.addmore').remove(); 
													 $('.loder').css('display','none');
												  }
												}
											
										}); 
								   }); 
                          });   
                       </script>

<div id="primary" class="content-area blog-listing">
	<div id="content" class="site-content" role="main">
        <div class="bggreen cf">
        <img src="<?php echo get_template_directory_uri(); ?>/images/blog-listing-bg.png" alt="" title="" class="blog-listing-img1" />
             <div class="main ">
               
               <h2><?php echo $title = get_field('title',7237);?></h2>
              
             </div>
             <img src="<?php echo get_template_directory_uri(); ?>/images/blog-listing-bg2.png" alt="" title="" class="blog-listing-img2" />
        </div>
        
        <div class="main cf"> 
        <div class="blog-listing-blog1">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-blogs', get_post_format() ); ?>
                
			<?php endwhile; ?>
              <div class="bloglist0"> </div>
            <img src="<?php echo get_site_url();?>/loader.gif"  class="loder" />
            <div class="nav-links">
           

             							<div class="nav-previous nav-nex"><a href="javascript:;" class="addmore" ><span>Older posts  <i class="fa fa-angle-right"></i></span></a></div>
			
		

		</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

     
		</div><!-- #content -->
        
        <div class="blog-listing-blog2 cf" id="most-popular-posts">
              <div class="main ">
              <h3>Most Popular Posts in</h3>
              	<?php
				$blogitem = get_field('select_top_category',7237); 
                               foreach($blogitem  as $blogm)
                               {
                                  $yourcat = get_category($blogm);
                                        if ($yourcat) {
                                        echo '<div class="populer_blog"><h4>' . $yourcat->name . '</h4>';
                                        }
                                        echo '<ul>';
                                        $args = array( 'posts_per_page' => 4, 'category' => $blogm, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC' );
                        
                                                $myposts = get_posts( $args );
                                                foreach ( $myposts as $post ) : setup_postdata( $post ); 
                                                    echo '<li>
                                                        <a href="'.get_the_permalink($post->ID).'">'.get_the_title($post->ID).'</a>
                                                    </li>';
                                                 endforeach; 
                                        echo '</ul></div>';
                               }
                               
				?>
              
	          </div>
              
       </div>
</div>
    </div>
</div>
<?php get_footer(); ?>