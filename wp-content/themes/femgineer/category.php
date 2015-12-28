<?php
/**
 * The template for displaying Category pages
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
        <div class="bggreen blog-filter cf">
         <img src="<?php echo get_template_directory_uri(); ?>/images/blog-filter-img.png" alt="" title="" class="blog-filter-img" />
             <div class="main ">
              
               
               <h2>Filtered Results for</h2>
             <h1>  <?php printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) ); ?>
              </h1>
              
             </div>
        </div>
        
        <div class="main cf"> 
        <div class="blog-listing-blog1">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-blogs', get_post_format() ); ?>
			<?php endwhile; ?>
<div class="pagination-bg">
		<?php wp_simple_pagination(); ?>	
</div>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

     </div>
		</div><!-- #content -->
        
        

<?php //get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>