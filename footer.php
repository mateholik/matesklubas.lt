<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

<?php if( !is_checkout() && !is_cart() && !is_page_template('template-quiz.php') ) { ?>
    </div>
    </main>
<?php }?>


</div> <!--container end -->
<div style="clear: both"></div>

<footer class="footer">
    <div class="footer--before">
        <picture>
            <source media="(min-width: 769px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-footer.svg">
            <source media="(max-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/no-img.jpg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-footer.svg" alt="before">
        </picture>
    </div>
   <div class="footer__top">
       <div class="container">
           <div class="footer__menus">
               <div class="menu">
                   <h3 class="footer__title">MATĖ</h3>
                   <?php getSubCategories(24,'footer'); ?>
<!--                   --><?php //getSubCategories(35,'footer'); ?>
               </div>
               <div class="menu">
                   <h3 class="footer__title">KALABASOS</h3>
<!--                   --><?php //getSubCategories(44,'footer'); ?>
                   <?php getSubCategories(19,'footer'); ?>
               </div>
               <div class="menu">
                   <h3 class="footer__title">BOMBILĖS</h3>
<!--                   --><?php //getSubCategories(49,'footer'); ?>
                   <?php getSubCategories(16,'footer'); ?>
               </div>
               <div class="menu">
                   <h3 class="footer__title">PAGALBA PIRKėjui </h3>
                   <?php
                       wp_nav_menu( array(
                           'theme_location' => 'footer-menu',
                           'container_class' => 'custom-menu-class' ) );
                   ?>
               </div>
               <style>

                   .about img {
                       width: 2rem;
                       margin-right: 1rem;
                   }
                   .about a {
                       display: flex;
                       align-items: center; margin-bottom: 0.5rem;
                       font-size: 1.4rem;
                       line-height: 2.8rem;
                       color: #AAAAB0;
                   }
                   .about a:hover {
                       color: white;
                   }
                   @media(max-width: 768px) {
                       .about {
                        }
                   }
               </style>
               <div class="about">
                   <h3 class="footer__title">Sekite mus!</h3>

                   <a href="https://www.facebook.com/groups/1098983160306904/" target="_blank" rel="noopener noreferrer">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="fb-icon">
                       Facebook grupė
                   </a>
                   <a href="https://www.facebook.com/matesklubass" target="_blank" rel="noopener noreferrer">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="fb-icon">
                       Facebook puslapis
                   </a>
                   <a href="https://www.instagram.com/matesklubas" target="_blank" rel="noopener noreferrer">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/instagram.svg" alt="instagram-icon">
                       Instagram
                   </a>
                   <a href="https://www.youtube.com/channel/UCiL5qWJ7cer2tAvY7Y7sNwA" target="_blank" rel="noopener noreferrer">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/youtube.svg" alt="youtube-icon">
                       Youtube
                   </a>
               </div>
           </div>
       </div>
   </div>
    <div class="footer__bottom">
        <p>Matės Klubas © <?php echo date("Y"); ?> - Visos teisės saugomos</p>
    </div>
</footer>
</div><!-- #page -->

<?php
    $live = $_SERVER['SERVER_NAME'];
    if($live == 'matesklubas.lt') { ?>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v6.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="696622920756854"
         theme_color="#FA9511"
         greeting_dialog_display="hide"
         logged_in_greeting="Sveiki, kuo galime padėti? :)"
         logged_out_greeting="Sveiki, kuo galime padėti? :)">
    </div>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>
