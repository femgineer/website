<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

        </div><!-- #main -->

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer cf">
                <div class="main">
                    <div class="footer-left">
                        <a href="<?php echo get_site_url(); ?>" class="footer-logo">
                            <img src="<?php echo get_field('footer_logo','option');?>"/>
                        </a>
                        <?php $copyright = get_field('copyright','option');?>
                        <div class="footer-left-text">
                            <ul>
                                <li><?php echo $copyright[0]['copyright_text']; ?></li>
                                <li>|</li>
                                <li><?php echo $copyright[0]['privacy_plicy']; ?></li>
                            </ul>
                            <p><?php echo $copyright[0]['powered_by']; ?></p>
                        </div>
                        <div class="footer-femgineer">
                        </div>
                    </div>
       
                    <div class="footer-right">
                        <?php wp_nav_menu(array('menu'=>'footermenu')); ?>
                        <div class="social-icon">
                            <ul>
                            <?php
                                $social_icon = get_field('social_icon','option');
                                foreach($social_icon as  $social_ic) {
                                    echo '<li><a target="_blank" href="'.$social_ic['link'].'" title="'.$social_ic['title'].'"><i class="fa '.$social_ic['image_class'].'"></i></a></li>';
                                }
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- #colophon -->
    </div><!-- #page -->
</div>

<!-- image preloads starts here-->
 <div class="preloader">
    <img src="<?php echo get_template_directory_uri(); ?>/images/plus.png" alt="btn hover">
    <img src="<?php echo get_template_directory_uri(); ?>/images/minus.png" alt="btn hover">
 </div>
<!-- image preloads ends here-->

<?php wp_footer(); ?>

<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/menu.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.validate.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/css_browser_selector.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/placeholder.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>

<!-- bxSlider CSS file -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/general.js'></script>
    
<script type="text/javascript">
    jQuery('.simplebtn').click(function(){
        var kurl = jQuery(this).val();
        window.location.href = kurl;
    });
    jQuery(window).load(function(){
        jQuery('.contact-form').eq(2).addClass('last');
    });
</script>
    
<script type="text/javascript">
    function setEqualHeight(columns) {
        var tallestcolumn = 0;
        columns.each(function() {
            currentHeight = jQuery(this).height();
            if(currentHeight > tallestcolumn) {
                tallestcolumn = currentHeight;
            }
        });

        columns.height(tallestcolumn);
    }

    jQuery(document).ready(function(){
        jQuery('#menu-topmenu').responsiveMenu({'mobileResulution':'767'});
    });
</script>

<script type="text/javascript" src="//www.hellobar.com/hellobar.js"></script>
<script type="text/javascript">
    new HelloBar(56228,80495);
</script>

<!-- start olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){f[z]=function(){(a.s=a.s||[]).push(arguments)};var a=f[z]._={},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={0:+new Date};a.P=function(u){a.p[u]=new Date-a.p[0]};function s(){a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){hd="head";return["<",hd,"></",hd,"><",i,' onl'+'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{b.contentWindow[g].open()}catch(w){c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{var t=b.contentWindow[g];t.write(p());t.close()}catch(x){b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({loader:"static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});olark.identify('6469-335-10-9286');/*]]>*/</script><noscript><a href="https://www.olark.com/site/6469-335-10-9286/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
</body>
</html>