<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="google-site-verification" content="z_pgoIjD1wMLlMPuOLzWaW28bSiDmdmpI9dacA-qv38" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_site_url(); ?>/favicon.png">

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-10325471-1']);
        _gaq.push(['_setDomainName', 'femgineer.com']);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <?php if (is_page_template('templates/transform-ideas.php')) { ?>
        <!-- Facebook Conversion Code for TYI Leads -->
        <script>(function() {
                var _fbq = window._fbq || (window._fbq = []);
                if (!_fbq.loaded) {
                    var fbds = document.createElement('script');
                    fbds.async = true;
                    fbds.src = '//connect.facebook.net/en_US/fbds.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(fbds, s);
                    _fbq.loaded = true;
                }
            })();
            window._fbq = window._fbq || [];
            window._fbq.push(['track', '6017725049054', {'value':'0.01','currency':'USD'}]);
        </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6017725049054&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
        <!-- end facebook conversion code for tyi leads -->
        <!-- image for facebook -->
        <meta property="og:title" content="How to Transform Your Ideas into Software Products"/>
        <meta property="og:image" content="http://femgineer.com/transform-ideas/images/transform-ideas-large-facebook.png"/>
        <meta property="og:url" content="http://femgineer.com/transform-ideas/"/>
        <!-- end image for facebook -->
        <!-- Facebook Conversion Code for How to Transform Your Ideas into Software Products -->
        <script type="text/javascript">
            var fb_param = {};
            fb_param.pixel_id = '6016654010654';
            fb_param.value = '0.01';
            fb_param.currency = 'USD';
            (function(){
                var fpw = document.createElement('script');
                fpw.async = true;
                fpw.src = '//connect.facebook.net/en_US/fp.js';
                var ref = document.getElementsByTagName('script')[0];
                ref.parentNode.insertBefore(fpw, ref);
            })();
        </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6016654010654&amp;value=0.01&amp;currency=USD" /></noscript>
        <!-- FB end -->
    <?php } else { ?>
        <script src="//load.sumome.com/" data-sumo-site-id="52ec45f8c340b0bf66341dfc9400b3d2e8a302c72ce9d049f9972eb54e71f722" async="async"></script>
    <?php } ?>

    <?php wp_head(); ?>

    <link rel='stylesheet' id='twentythirteen-style-css'  href='<?php echo get_template_directory_uri(); ?>/css/fonts.css' type='text/css' media='all' />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel='stylesheet' id='twentythirteen-style-css'  href='<?php echo get_template_directory_uri(); ?>/css/blog.css' type='text/css' media='all' />
    <link rel='stylesheet' id='twentythirteen-style-css'  href='<?php echo get_template_directory_uri(); ?>/css/responsive.css' type='text/css' media='all' />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/magnific-popup.css">
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.magnific-popup.js"></script>
  
    <?php if (is_single() || is_author() || is_archive()) { ?>
    <style>ul li.blog-menu a{color:#eed91e;text-decoration:none;background:#724683}ul li.blog-menu a:after{content:'';bottom:-5px;position:absolute;left:0;height:5px;width:100%;background:#2ea9a5;opacity:0;display:block}ul li.blog-menu a:hover::after,ul li.blog-menu > a::after{opacity:1}@media (max-width:767px){ul li.blog-menu > a,ul li.blog-menu a:hover,ul li.blog-menu:focus > a,ul li.blog-menu a:focus{color:#eed91e;text-decoration:none;background-color:transparent}ul li.blog-menu > a:after,ul li.blog-menu a:hover:after,ul li.blog-menu:focus:after > a,ul li.blog-menu a:focus:after{opacity:0}}</style>
    <?php } ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
            <div class="top-header">
                <div class="main">
                    <div id="navbar" class="navbar">
                        <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                            <a class="repo_nlogo" href="<?php echo get_site_url(); ?>" title="logo">
                                <img alt="logo" src="<?php echo get_field('logo_image','option'); ?>" />
                            </a>
                            <?php //wp_nav_menu(array('menu'=>'topmenu', 'container_id'=>'menuBlock', 'menu_class' => 'nav-menu','walker'  => new Walker_Custom_Menu()));
                                wp_nav_menu(array('menu'=>'topmenu', 'container_id'=>'menuBlock', 'menu_class' => 'nav-menu', 'walker'=>new themeslug_walker_nav_menu()));
                            ?>

                            <form action="<?php echo get_site_url(); ?>" class="search-form" method="get" role="search">
                                <label>
                                    <span class="search-field"><i class="fa fa-search"></i></span>
                                </label>
                                <div class="search-bar">
                                <input  placeholder="SEARCH..." type="text" id="s"  name="s" class="s" value="<?php echo $_REQUEST['s'];?>">
                                <input  type="submit" class="search-submit" value="Search"  style="display:none;">
                                </div>
                            </form>
                        </nav>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->
        <div id="main" class="site-main">
