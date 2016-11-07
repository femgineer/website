<?php
/**
 * Template Name: Course
 */


get_header(); ?>



 



<script type="text/javascript">

	$(function() {

		$( "#accordion" ).accordion({

			heightStyle: "content" 

		});

		 $( "#accordion2" ).accordion({

			heightStyle: "content" 

		});

		$(".accordion").accordion({

				heightStyle: "content" 

			});

	});

	

	

	$(document).ready(function(){

	  //$('#foobar').bxSlider();

		/*$('.bxslider').bxSlider({

		  mode: 'fade',

		  nextText: 'next',  

		  prevText: 'prev',  

		   

		   adaptiveHeight: true,

          

		      nextImage: '',   

			  prevImage: '',  

		});

          */

	  

	});

	</script>

<div id="primary" class="content-area">

  <div id="content" class="site-content" role="main">

    <?php /* The loop */ ?>

    <?php while ( have_posts() ) : the_post(); ?>

    

    <div class="green-bg" id="speak-confidently">

      <div class="course-top-content">

        <div class="main">

		

		<?php $course_top = get_field('course_top');?>

          <?php 

		  	if($course_top[0]['title'])

			 {

				echo '<h1>'.$course_top[0]['title'].'</h1>';

			 }

			 

			 $select_testimonial = $course_top[0]['select_testimonial'];

			 echo '<div class="sliderwraper"> 

			 <ul class="bxslider">';

			 foreach($select_testimonial  as $select_testimonia)

				{ ?>

                       <li class="border-link">  <div class="testimonial-list"><p><i class="fa fa-quote-left"></i><span><?php echo $select_testimonia->post_content; ?></span><i class="fa fa-quote-right"></i></p>

                  <div class="test-details"> <?php echo get_the_post_thumbnail($select_testimonia->ID); ?>

                   <div class="test-name">-<?php echo $select_testimonia->post_title;?> <?php echo get_field('position',$select_testimonia->ID);?>

                    </div>

                   </div> 

                  </div>   </li>

		<?php 	}

		

		   echo '</ul></div>';

		  ?>

          <div class="course-top-details">

          <?php 

		  echo $course_top[0]['information_content']; ?>

          </div>

        </div>

      </div>

    </div>

    

    <div class="purple-bg course-blog2 innerpurple-bg" id="confident ">

       <div class="main">

       <div class="course-purplebg-text">

         <?php

		  echo '<p>'.$course_top[0]['speaker_text'].'</p>'; 

		 ?></div>

       </div>

    </div>

    

    <div class="course-blog3" id="speaking-up-can-be-scary"> 

           <div class="main border-link">

           

             <?php the_field('speaking_up_can_be_scary');

			 

			 ?>

            

           </div>

   </div>

   

    <div class="bglightgreen course-blog4" id="say-goodbye-to-sweaty"> 

           <div class="main border-link">

            <?php the_field('say_palms_forever');

			 ?>

           </div>

   </div>

   

    <div class="green-bg course-blog5 inner-green-bg" id="the-confident"> 

           <div class="main border-link">

            <h4><?php the_field('green_background_text'); ?></h4>

           </div>

   </div>

    

    <div class="course-blog6" id="wow-your-audience"> 

           <div class="main border-link">

           

             <?php the_field('wow_your_audience'); ?>

            

           </div>

   </div>

    

    <div class="purple-bg course-blog7 cf" id="get-a-sneak" >

      	<div class="main">

         <div class="form-section"> 

                <?php echo the_field('get_a_sneak_peek'); ?>   

              <form method="post" id="guide-form" novalidate action="//femgineer.us6.list-manage.com/subscribe/post?u=21e8e255f2ac03e542d1abcaa&amp;id=8e84ad5826" name="mc-embedded-subscribe-form" target="_blank">

                <div class="form-details">

                <input type="email" name="EMAIL" placeholder="Email Address*" class="txt-box error"></div><button class="green main-button button" type="submit" name="subscribe"><span>get the preview!</span></button>

                

                </form>

            </div>

        </div>

    </div>

    

    <div class="course-blog6 course-blog8" id="who-is-this-course-for"> 

           <div class="main border-link">

           

             <?php the_field('who_is_this_course_for'); ?>

            

           </div>

   </div>

   

    <div class="bglightpink course-blog6 course-blog9" id="what-can-participants"> 

           <div class="main border-link">

           <img src="<?php echo get_template_directory_uri(); ?>/images/course-img.png" alt="" title="" class="course-img"/>

             <?php the_field('what_from_the_course'); ?>

            

           </div>

   </div>

   

    <div class="course-blog6 course-blog10" id="our-course"> 

           <div class="main border-link crcacordian">

             <img src="<?php echo get_template_directory_uri(); ?>/images/course-img2.png" alt="" title="" class="course-img2"/>

             <?php the_field('our_course'); ?>

             <div id="acdn">

                       <div id="accordion2">

                        <?php 

						$our_courses = get_field('our_courses');

						foreach($our_courses as $our_cours)

						{

							echo ' <h5><a class="nohover" href="javascript:{}">'.$our_cours['qiestion'].'</a></h5>

                                   <div class="border-link">'.$our_cours['answer'];

								   

								   $sub_accordian =  $our_cours['sub_accordian']; 

									if($sub_accordian)

									{

										$htmlsub = '<div class="accordion nested_acordian">';

										

										foreach($sub_accordian as $sub_accordi)

										{

											$htmlsub.='<h3 class="nested_title"><a class="nohover" href="javascript:{}">'.$sub_accordi['title'].'</a></h3><div>'.$sub_accordi['content'].'</div>';

										}

										$htmlsub.='</div>';	

										

										echo $htmlsub ; 

									}

										   

								   echo '</div>';	

								   

								   

						}

						?>

                       

                        

                      </div>

                    </div>

            

           </div>

     </div>

     

    <div class="green-bg course-blog7 inner-green-bg cf" id="sneak-peek">

      	<div class="main">

         <div class="form-section"> 

                 <?php echo the_field('get_a_sneak_peek'); ?>  

                <form method="post" id="guide-form-2" novalidate action="//femgineer.us6.list-manage.com/subscribe/post?u=21e8e255f2ac03e542d1abcaa&amp;id=8e84ad5826" name="mc-embedded-subscribe-form" target="_blank">

                <div class="form-details">

                <input type="email" name="EMAIL" placeholder="Email Address*" class="txt-box error"></div><button type="submit" name="subscribe" class="purple main-button button"><span>get the preview!</span></button>

                

                </form>

            </div>

        </div>

    </div>

    

    <div class="course-blog11" id="meet-your-instructors"> 

           <div class="main border-link">

           <h2><?php the_field('meet_your_instructors_title'); ?></h2>

           

            

             <?php $meet_your_instructors = get_field('meet_your_instructors');

			 foreach($meet_your_instructors as $meet_your)

			 { 

		      $name = $meet_your['name'];

			  $position = $meet_your['position'];

			  $about_text = $meet_your['about_text'];

			  $image = $meet_your['image'];

			  $social_media = $meet_your['social_media'];

			  

			  $social = '';

				foreach($social_media as  $social_ic)

				{

						$social.= '<li><a class="nohover" target="_blank" href="'.$social_ic['link'].'" title="'.$social_ic['title'].'"><i class="fa '.$social_ic['social_button_calss'].'"></i></a></li>';

				}
			 ?>

             <div class="instructor">

             

             	<div class="inst-image">

                <img src="<?php echo  $image; ?>" />

                </div>

                <div class="inst-info ">

                <h5><?php echo $name; ?></h5>

                <span><?php echo $position; ?></span>

                 <ul class="course-social-icon"><?php echo $social; ?></ul>

                 <?php echo $about_text; ?>

                 

                </div>

             	

             </div> 

             	

				 

				 

			 <?php } ?>

            </div>

           

     </div>

     

    <div class="bglightgreen course-blog12" id="why-your-course"> 

           <div class="main border-link">

            <img src="<?php echo get_template_directory_uri(); ?>/images/course-img3.png" alt="" title="" class="course-img3"/>

           

             <?php the_field('why_your_course'); ?>

            

           </div>

   </div>

   

    <div class="white-bg course-blog13" id="students-who-have-already-benefited"> 

           <div class="main">

           <h2><?php the_field('students_who_have_title');?></h2>

           

             <?php $students_benefited = get_field('students_benefited');

			 

			 foreach($students_benefited as $students_benef)

			 {

				echo '<h5>'.$students_benef['title'].'</h5>';	

				 $select_student = $students_benef['select_student']; 

				 echo '<ul>';

				 	foreach($select_student as $select_stude)

					{

						 $id = $select_stude->ID;

						 

					  echo '<li class="border-link">';

					  echo  $post_content = '<p class="textstd"><i class="fa-left-quote"></i></i>'.$select_stude->post_content.'<i class="fa-right-quote"></i></i></p>';

					  echo  $thumbimage = get_the_post_thumbnail($id); 

					 

					  $post_title = $select_stude->post_title;

					 

				 	   $position = get_field('position',$id);

					   
					   echo '<span><strong>'.$post_title.'</strong>'.$position.'</span>';

					 
					 echo '</li>';

					}

				 echo '</ul>';

			 }			 

			 ?>
            
           </div>

     </div>
     
    <div class="course-blog14 bglightpink" id="enroll-now">

        <div class="main border-link">

         <img src="<?php echo get_template_directory_uri(); ?>/images/course-img4.png" alt="" title="" class="course-img4"/>

        <?php the_field('enroll_now'); ?>

        </div>

    </div>
        
    <div class="green-bg course-blog15 darkgreen-bg" id="price"> 

           <div class="main">
           
             <?php the_field('price_area'); ?>

           </div>

     </div>

   <div class="bglightgreen course-blog16" id="frequently-asked-questions"> 

           <div class="main border-link">

            <?php the_field('looking_to_register_text'); ?>

           </div>

    </div>

    <div class="faqsection id="faqs"> 

           <div class="main">

                <h2><?php the_field('faq_title'); ?></h2>

                 <?php $faq_list = get_field('faq_list');

                 ?>

                 

                  <div id="acdn">

                       <div id="accordion">

                        <?php 

						foreach($faq_list as $faq_lis)
						{
							echo '<h3><a href="#">' . $faq_lis['question'] . '</a></h3><div class="border-link">' . $faq_lis['answer'];

						 $sub_accordian =  $faq_lis['sub_accordian']; 

									if($sub_accordian)
									{

										$htmlsub = '<div class="accordion nested_acordian">';

										

										foreach($sub_accordian as $sub_accordi)

										{

											$htmlsub.='<h3 class="nested_title"><a class="nohover" href="javascript:{}">'.$sub_accordi['title'].'</a></h3><div>'.$sub_accordi['content'].'</div>';

										}

										$htmlsub.='</div>';
										
										echo $htmlsub ; 
									}
									
						echo '</div>';
						}
						?>

                      </div>

                    </div>

           </div>

   </div>

    <div class="bglightpink course-blog14 course-blog18" id="tips-tricks"> 

           <div class="main border-link">

            <img src="<?php echo get_template_directory_uri(); ?>/images/course-img5.png" alt="" title="" class="course-img4"/>

             <?php the_field('get_our_favorite_tips'); ?>

           </div>

     </div>

    <div class="green-bg course-blog15 darkgreen-bg" id="pricearea"> 

           <div class="main">

             <?php the_field('price_area'); ?>

           </div>
     </div>

    <div class="bglightgreen course-blog16" id="enrollment> 
           <div class="main border-link">
            <?php the_field('enrollment_closes'); ?>
           </div>
   </div>
    <?php endwhile; ?>
  </div>
  <!-- #content --> 
</div>

<?php get_footer(); ?>

