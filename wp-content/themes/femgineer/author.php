<?php
/**
 * The template for displaying Author archive pages
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
              
               
               <h2><?php printf( __( 'All posts by %s', 'twentythirteen' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h2>
             			<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<?php get_template_part( 'author-bio' ); ?>
			<?php endif; ?>
              
             </div>
        </div>
        
        <div class="main cf"> 
        <div class="blog-listing-blog1">
		<?php if ( have_posts() ) : ?>

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
        
        
    </div>
</div>
<?php get_footer(); ?>