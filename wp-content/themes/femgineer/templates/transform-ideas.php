<?php
/**
 *Template Name: Transform Ideas
 */

get_header(); ?>

<div id="primary" class="content-area">
  <div id="content" class="site-content" role="main">
    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    
    <div class="green-bg">
      <div class="trans-top-content">
      	<?php $top_slider = get_field('top_slider');
		//print_r($top_slider);
		foreach($top_slider as $top_slid)
		{ ?>
         <div class="main">
         <?php $image =  $top_slid['image'];
		 
		 $titles = $top_slid['ttile'];
		 	if($image)
			{
				echo '<img class="alignleft" src="'.$image.'">';
			}
			 
			 $select_testimonial = $top_slid['select_testimonials'];
			 foreach($select_testimonial  as $select_testimonia)
				{ ?>
                 <div class="testimonial-list trans-testimonial-list">
                 <?php echo '<h1>'. $titles .'</h1>'; ?>
                 <p><i class="fa-left-quote-white"></i><?php echo $select_testimonia->post_content; ?><i class="fa-right-quote-white"></i></p>
                  <div class="test-details"> <?php echo get_the_post_thumbnail($select_testimonia->ID); ?></div>
                   <div class="test-name"> - <?php echo $select_testimonia->post_title;?> <?php echo get_field('position',$select_testimonia->ID);?>
                    </div>
                   
                  </div>
		<?php 	}
			
		  ?>
         
         </div>
 <?php } ?>
      
        
      </div>
    </div>
    
    <div class="purple-bg trans-blog">
       <div class="main">
       <div class="trans-purplebg-text">
         <?php //speaker_text 
		 the_field('this_book_will_showu');
		 ?> <div class="form-section"> 
         <form method="post" id="guide-form" novalidate action="//femgineer.us6.list-manage.com/subscribe/post?u=21e8e255f2ac03e542d1abcaa&amp;id=8accc8d481" name="mc-embedded-subscribe-form" target="_blank">
         	<div class="form-details">
                <input type="email" name="EMAIL" placeholder="Email Address*" class="txt-box">
                <!--<div class="error-box"><div class="error-box-left"></div> <div class="error-box-mid"></div> <div class="error-box-right"></div><div class="clear"></div></div>-->
              </div><button type="submit" name="subscribe" class="green main-button button"><span>get the preview!</span></button>
         </form> </div>
         </div>
       </div>
    </div>
    
    <div class="trans-blog1" id="your-ideas-can-change-the-world"> 
           <div class="main border-link border-link">
           
             <?php the_field('your_change_the_world');
			 
			 ?>
            
           </div>
   </div>
   
    <div class="bglightgreen trans-blog2" id="follow-a-proven-guide"> 
           <div class="main border-link border-link">
            <?php the_field('follow_a_proven_your_ideas');
			 ?>
           </div>
   </div>
  
    
    <div class="trans-blog3" id="interviews-with-founders"> 
           <div class="main border-link">
           <h2><?php the_field('foundeployees_title');?></h2>
            <ul>
             <?php $foundeloyees = get_field('founders_early_employees');
			 $i=1;
			 foreach($foundeloyees as $foundeloy)
			 {
				 $class='odd';
			     if( $i%2 ==0)
				 {
					$class ='even';
				 }
				 ?>
                 <li class="<?php echo $class; ?>">
                 <img src="<?php echo $foundeloy['image']; ?>" />
                 <div class="content"><?php echo $foundeloy['content']; ?></div>
                 </li>
                 <?php
				 
				 $i++; 
			 }
			 
			 ?>
             </ul>
            <img src="<?php echo get_field('employee_bg_image');?>" class="employeeimg" />
           </div>
   </div>
   
 
         <div class="testimonials bglightpink trans-blog4" id="people-are-already-raving">
         <div class="main">
            <h2><?php echo get_field('people_are_already_raving_title');?></h2>
             <ul>
            <?php 
                //testimonial on home page
                 $select_testimonial = get_field('select_people'); 
                foreach($select_testimonial  as $select_testimonia)
                { ?>
               
            <li class="testmlist border-link"><p><i class="fa-left-quote"></i><span><?php echo $select_testimonia->post_content; ?></span><i class="fa-right-quote"></i></p> <div class="test-details"> <?php echo get_the_post_thumbnail($select_testimonia->ID); ?> <div class="test-name"><strong><?php echo $select_testimonia->post_title;?></strong> <?php echo get_field('position',$select_testimonia->ID);?></div></div> </li>
            <?php 	}
                ?>
                
                </ul>
        </div>
       </div>



    <?php
        $for_a_limited_time = get_field('for_a_limited_time');
        if (!empty($for_a_limited_time[0]['text'])) {
    ?>
    <div class="green-bg trans-blog5 inner-green-bg cf">
      	<div class="main border-link">
         <?php
		 $image = $for_a_limited_time[0]['image'];
		 $texts = $for_a_limited_time[0]['text'];
		 ?>
         <img src="<?php echo $image ; ?>" class="trans-img" /><p><?php echo $texts; ?></p>
        </div>
    </div>
    <?php } ?>

    <?php
        $product_pro = get_field('product_pro');
        if (!empty($product_pro[0]['left_conten'])) {
    ?>
    <div class="course-blog14 trans-blog6 cf" id="product-pro">
           <div class="main">
            
            <div class="leftcontent border-link"><?php echo $product_pro[0]['left_conten']; ?></div>
            <div class="rightcontent border-link"><?php echo $product_pro[0]['add_imges']; ?></div>
    
          </div>
    </div>
    <?php } ?>

    <?php
        $course_syllabus_title = the_field('course_syllabus_title');
        if ($course_syllabus_title) {?>
    <div class="bglightgreen trans-blog3 trans-blog7" id="course-syllabus"> 
           <div class="main border-link">
           <h2><?php the_field('course_syllabus_title');?></h2>
           	<ul>
             <?php
             $k=1; $course_syllabus = get_field('course_syllabus');
			 foreach($course_syllabus as $course_sylla) {
				$image =$course_sylla['image'];
				$cnttext  =$course_sylla['content'];
				$clas='odd';
				if($k%2 == 0)
				{
					$clas="even";
				}?>
                <li> <img src="<?php echo $image;  ?>" />
                <div class="content">
                	<?php echo $cnttext; ?>
                  </div>  
                </li>
                <?php
				
				$k++;
			 }?>
             </ul>
            
           </div>
   </div>
  <?php } ?>
   
    <div class="trans-blog6 trans-blog8 cf" id="starter-kit"> 
           <div class="main border-link">
           <h2><?php the_field('starter_kit_title');?></h2>
             
             <?php $starter_kit = get_field('starter_kit');
			 
			 
			  ?>
				<div class="leftcontent">
                	<?php echo do_shortcode($starter_kit[0]['left_content']);  ?>
                </div>
                <div class="rightcontent">
                	<?php echo do_shortcode($starter_kit[0]['right_content']);  ?>
                </div>
			 <?php 
			 
			 ?>
            
           </div>
     </div>
     
    <div class="purple-bg trans-blog9 cf" id="the-guide">
        <div class="main border-link">
         	<?php $the_guide = get_field('the_guide'); ?>
            <h2><?php the_field('the_guide_title');?></h2>
            <div class="colum-one"><?php echo do_shortcode($the_guide[0]['column_one']);?></div>
            <div class="colum-two"><?php echo do_shortcode($the_guide[0]['column_two']);?></div>
            <div class="colum-three"><?php echo do_shortcode($the_guide[0]['column_three']);?></div>
            
        </div>
    </div>
        
    <div class="trans-blog10 cf" id="about-the-author"> 
           <div class="main">
           <?php $get_sample = get_field('get_sample_content');?>
             <div class="starkit-left">
                	<?php echo do_shortcode($get_sample[0]['left_content']);  ?>
                    <div class="form-section"> 
        <form method="post" id="guide-form-2" novalidate action="//femgineer.us6.list-manage.com/subscribe/post?u=21e8e255f2ac03e542d1abcaa&amp;id=8accc8d481" name="mc-embedded-subscribe-form" target="_blank">
         	<div class="form-details">
                <input type="email" name="EMAIL" placeholder="Email Address*" class="txt-box">
                </div><button type="submit" name="subscribe" class="lightpurple2 main-button button"><span>send me samples!</span></button>
         </form> </div>
                </div>
                <div class="starkit-right">
                	<?php echo do_shortcode($get_sample[0]['right_content']);  ?>
                </div>
            
           </div>
     </div>
   <div class="bglightgreen trans-blog11" id="thanks-to-our-sponsors"> 
           <div class="main cf">
           
            
			<h2><?php the_field('thanks_spnsors_title');?></h2>
			<?php $sponsors_list = geT_field('sponsors_list'); 
			echo '<ul>';
			foreach($sponsors_list as $sponsors)
			{
				if($sponsors['link'])
				{
				
				echo '<li><a target="_blank" href="'.$sponsors['link'].'" title="'.$sponsors['title'].'"><img alt="'.$sponsors['title'].'" src="'.$sponsors['logo'].'"/></a></li>';	
				}else
				{
					echo '<li><img alt="'.$sponsors['title'].'" src="'.$sponsors['logo'].'"/></li>';	
				}
			}
			echo '</ul>';
			 ?>
           </div>
    </div>
    
  
     
       
    <?php endwhile; ?>
  </div>
  <!-- #content --> 
</div>
<?php get_footer(); ?>
