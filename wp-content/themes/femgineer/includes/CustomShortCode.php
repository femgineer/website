<?php
/*
	Try to make naming convention of function and shortcode like
	function = fn_Abc_Xyz()
	Shortcode = sc_Abc_Xyz()
*/

/*------shortcode description ------*/
//[BUTTON color="" title="" link="" arrow="right/left"]
/*1. lightpurple
2. purple
3. green
4. yellow
5. black
6. gray 
7)darkgreen { background: #21928e; }
8)darkpurple{ background:#734478;}
arrow
*/
function  button_code($att)
{
	$color = $att['color'];
	$title = $att['title'];
	$link = $att['link'];
	$arraow = $att['arrow'];
	
	if($arraow)
	{
		if($arraow=='right')
		{
	     return "<button  value='".$link."' class='".$color." main-button button simplebtn'><span>".$title." <i class='fa fa-angle-right'></i></span></button>";
		}
		if($arraow=='left')
		{
			 return "<button  value='".$link."' class='".$color." main-button button simplebtn'><span><i class='fa fa-angle-left'></i>".$title." </span></button>";
		}
	}else
	{
		return "<button  value='".$link."' class='".$color." main-button button simplebtn'><span>".$title."</span></button>";
		}
	
	//return "<button  value='".$link."' class='".$color." main-button button simplebtn'><span>".$title."</span></button>";
}
add_shortcode('BUTTON','button_code');

//link  same as button [LINK color="" title ="" arrow="" link=""]

function  links_code($att)
{
	$color = $att['color'];
	$title = $att['title'];
	$link = $att['link'];
	$arraow = $att['arrow'];
	
	if($arraow)
	{
		if($arraow=='right')
		{
	     return "<a  href='".$link."' class='".$color." main-button nohover button simplebtnk'><span>".$title." <i class='fa fa-angle-right'></i></span></a>";
		}
		if($arraow=='left')
		{
			 return "<a  href='".$link."' class='".$color." main-button nohover button simplebtnk'><span><i class='fa fa-angle-left'></i>".$title." </span></a>";
		}
	}else
	{
		return "<a  href='".$link."' class='".$color." main-button nohover button simplebtnk'><span>".$title."</span></a>";
		}
	
	//return "<button  value='".$link."' class='".$color." main-button button simplebtn'><span>".$title."</span></button>";
}
add_shortcode('LINK','links_code');

//[TESTIMONIAL id=”2″]
function testimonialssingle($att)
{
	//echo '<pre>';
	$posts = get_post($att['id']);
	//print_r($posts);
	
	return '<div class="testmlist"><p><i class="fa-left-quote"></i><span>'.$posts->post_content.'</span><i class="fa-right-quote"></i></p> <div class="test-details">'.get_the_post_thumbnail($posts->ID).'</div><div class="test-name"><strong>'.$posts->post_title.'</strong> '.get_field('position',$posts->ID).'</div></div>';
}
add_shortcode('TESTIMONIAL','testimonialssingle');


//post shortcode
/*
[quote author=”Lawrence De’Ath”]The risk was that our best customer would think we weren’t committed – or perhaps not able to develop an installed product. We chose to develop a saas product, and begged our top customer to be patience. We presented it as a prototype we would all learn from.[/quote]
*/

/*function quotein_post($atts, $content = null)
{
$author = $atts['author'];
if($author)
{
$author ="<div class='quote-author'>".$author."</div>";
}
$pcontent = do_shortcode($content);

return "<div class='su-quote'><i class='moon-quotes-left'></i><div class='su-quote-shell'>'".$pcontent."</div>".$author."</div>";
}
add_shortcode('quote','quotein_post'); */

//video popup [POPUP_VIDEO url="" image="" align=""] align="left,right,center"
function popup_video($arg)
{
	$videourl = $arg['url'];
	$image = $arg['image'];
	$align = $arg['align'];
	
	//return '<a class="popup-youtube" href="'.$videourl.'"><img src="'.$image.'" alt="uvidoimg" width="300" height="169" class="align'.$align.'" /></a>';
	
	return '<a class="popup-youtube nohover" href="'.$videourl.'"><img src="'.$image.'"></a>';
}
add_shortcode('POPUP_VIDEO', 'popup_video');


function nested_acordian( $atts, $content = null ) {
	//return '<span class="caption">' . do_shortcode($content). '</span>';
	    $string = str_replace("<br/>", " ", $content );
	    $string = str_replace("<br>", " ", $string );
		$string = str_replace("<p></p>", " ", $string );
	  $pattern = "/<p[^>]*><\\/p[^>]*>/";
       $strng =  preg_replace($pattern, '', $string); 
	return '<div class="accordion">'.do_shortcode($strng).'</div>';
}
add_shortcode( 'ACCORDIAN', 'nested_acordian' );

function add_acordiantitle($atts, $content = null)
{
	//$string = str_replace(array('<br/>', '&', '"'), ' ', $content);
	//$string = str_replace(array('<br>', '&', '"'), ' ', $string);
	//  $pattern = "/<p[^>]*><\\/p[^>]*>/";
      // $strng =  preg_replace($pattern, '', $string); 
	return '<h3><a class="nohover" href="javascript:{}">'.$content.'</a></h3>';
}
add_shortcode( 'TITLE', 'add_acordiantitle' );

function add_acordiancontnet($atts, $content = null)
{
		//$string = str_replace(array('<br/>', '&', '"'), ' ', $content);
		//$string = str_replace(array('<br>', '&', '"'), ' ', $string);
		//$pattern = "/<p[^>]*><\\/p[^>]*>/";
       // $strng =  preg_replace($pattern, '', $string); 
	return '<div>'.do_shortcode($content).'</div>';
}
add_shortcode( 'CONTENT', 'add_acordiancontnet' );


?>