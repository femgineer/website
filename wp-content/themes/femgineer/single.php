<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content border-link" role="main">
      
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
  <?php  wpb_get_post_views(get_the_ID()); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
                
                <div class="purple-bg">
                    <div class="main">
                    
                    <div class="form-section">
                       <?php the_field('blog_post_text','option'); ?>
                       <form method="post" id="guide-form" novalidate="novalidate" action="//femgineer.us6.list-manage.com/subscribe/post?u=21e8e255f2ac03e542d1abcaa&amp;id=3600356a93" method="post" name="mc-embedded-subscribe-form" target="_blank">
                          <div class="form-details">
                <input type="text" name="FNAME" placeholder="Firstname*" class="txt-box error">
                                  </div>
                          <div class="form-details">
                <input type="email" name="EMAIL" placeholder="Email Address*" class="txt-box error">
              </div>
                          <div class="form-details">
                          <button type="submit" name="subscribe" class="green main-button button"><span>Join Today!</span></button></div>
                        </form>
                    </div>        
                    </div>
                </div>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>