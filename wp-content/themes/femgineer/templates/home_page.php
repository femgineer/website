<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<div id="primary" class="content-area">



  <div id="content" class="site-content" role="main">



    <?php /* The loop */ ?>



    <?php while ( have_posts() ) : the_post(); ?>



    <div class="green-bg">



      <div class="top-content">



        <div class="main">

          <?php the_content(); ?>


          <div class="form-section">



            <p><?php the_field('form_title');?> </p>



	        <form action="//femgineer.us6.list-manage.com/subscribe/post?u=21e8e255f2ac03e542d1abcaa&amp;id=3600356a93" method="post" id="guide-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>

  <div class="form-details">

    <input type="text" name="FNAME" placeholder="First Name*" class="txt-box">

    <!--<div class="error-box"><div class="error-box-left"></div> <div class="error-box-mid"></div> <div class="error-box-right"></div><div class="clear"></div></div>-->

  </div>

  <div class="form-details">

    <input type="email" name="EMAIL" placeholder="Email Address*" class="txt-box">



    <!--<div class="error-box"><div class="error-box-left"></div> <div class="error-box-mid"></div> <div class="error-box-right"></div><div class="clear"></div></div>-->

  </div>

  <button type="submit" name="subscribe" class="purple main-button button submitBtn" id="formSubmit hfg"><span><?php the_field('send_me_ton_text'); ?></span></button>

</form>



          </div>  



        </div>



      </div>



    </div>



   <div class="main">



    <div class="testimonials">



     <ul>



    <?php 



		/* testimonial on home page */



		 $select_testimonial = get_field('select_testimonial'); 



		foreach($select_testimonial  as $select_testimonia)



		{ 

		$i=0; 		?>



        <script>

                            jQuery(document).ready(function() {

                            setEqualHeight(jQuery(".row<?php echo $i; ?>"));

                            });

                         </script>



    <li class="testmlist"><p class="row<?php echo $i; ?>"><i class="fa-left-quote"></i><?php echo $select_testimonia->post_content; ?><i class="fa-right-quote"></i></p> <div class="test-details"> <?php echo get_the_post_thumbnail($select_testimonia->ID,array(100,107)); ?> <div class="test-name"><strong><?php echo $select_testimonia->post_title;?></strong> <?php echo get_field('position',$select_testimonia->ID);?></div></div> </li>



    <?php 	}



		?>



        



        </ul>



        </div>



        </div>



        



        <div class="what-we-do-section border-link" id="what-we-do">



        <div class="main">



        <h2><i class="fa fa-paper-plane-o"></i> <?php the_field('what_we_do_title'); ?></h2>



        <ul>



        <?php 



		$what_we_du = get_field('what_we_du');



		foreach($what_we_du  as $what_we)



		{



			echo '<li><img src="'.$what_we['image'].'" alt="" title="" />



            '.$what_we['content'].'</li>';



			



		}



		?>



      



        </ul>



        </div>



        



        </div>



        



        <div class="purple-bg">



      	<div class="main">


        <div class="form-section">



            <p><?php the_field('form_title');?> </p>



  	    <form action="//femgineer.us6.list-manage.com/subscribe/post?u=21e8e255f2ac03e542d1abcaa&amp;id=3600356a93" method="post" id="guide-form-2" name="mc-embedded-subscribe-form" target="_blank" novalidate>	    



              <div class="form-details">



                <input type="text" name="FNAME" placeholder="First Name*" class="txt-box">                



              </div>



              <div class="form-details">



                <input type="email" name="EMAIL" placeholder="Email Address*" class="txt-box">



              </div>



              <button type="submit" name="subscribe" class="green main-button button" id="formSubmit hfg"><span><?php the_field('send_me_ton_text'); ?></span></button>



            </form>



          </div>



        </div>



        </div>



        



        <div class="main">



        <div class="client-logo cf">

<?php $logo_title = get_field('logo_title'); 
	if($logo_title ){
?>
  <h2><?php echo $logo_title; ?></h2> <?php } ?>

        <ul>
        <?php $add_logos_item = get_field('add_logos_item');
			foreach($add_logos_item  as $add_logos)
			{
				if($add_logos['link'])
				{
					echo '<li><a title="'.$add_logos['title'].'" target="_blank" href="'.$add_logos['link'].'" title="'.$add_logos['title'].'"><img src="'.$add_logos['logo'].'" alt="'.$add_logos['title'].'" /></a></li>';	

				}else
				{
					echo '<li><img src="'.$add_logos['logo'].'" alt="'.$add_logos['title'].'" /></li>';	
				}

			}
		?>
        </ul>

        </div>

        </div>

    <?php endwhile; ?>

  </div>

  <!-- #content --> 

</div>

<!-- #primary -->

<?php get_footer(); ?>