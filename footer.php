<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 footer-bottom-left">
                    <p>Made With <i class="fa fa-heart"></i> By Taiwa. &copy; 2017 All rights reserved.</p>
                </div>
                <div class="col-md-7 col-sm-12 footer-bottom-menu">
                	<ul class="list-unstyled">
                		<li><a href=""><?php _e('[:en]Legal Notice[:fr]Mentions Légales'); ?></a></li>
                		<li><a href=""><?php _e('[:en]Terms and Conditions[:fr]Conditions Générales'); ?></a></li>
                		<li><a href=""><?php _e('[:en]About[:fr]A propos'); ?></a></li>
                	</ul>
					<p id="back-top"><a href="#top"><i class="fa fa-angle-up"></i></a></p>
                </div>


                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.11&appId=1941375599442713';
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112630818-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

 gtag('config', 'UA-112630818-1');
</script>
</body>
</html>
