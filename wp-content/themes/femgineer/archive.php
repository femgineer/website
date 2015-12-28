<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
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

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

     
		</div><!-- #content -->
        
        <div class="blog-listing-blog2 cf">
              <div class="main ">
              
              	<?php
				$blogitem = get_field('select_top_category',7237); 
                               foreach($blogitem  as $blogm)
                               {
                                  // echo '<br>'.$blogm;   
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
                                                wp_reset_postdata();
                                        echo '</ul></div>';
                               }
                               
				?>
              
	          </div>
              
       </div>
</div>
<?php //get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>