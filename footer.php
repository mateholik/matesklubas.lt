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
               <div class="about">
                   <h3 class="footer__title">Apie Mus</h3>
                   <p class="footer__text">Mūsų <strong>tikslas</strong> ir vizija yra sukurti patį <strong>informatyviausią matės puslapį</strong> lietuvių kalba bei suburti aktyvią matės entuziastų bendruomenę. Tikimės jog su laiku čia rasite viską ko tik gali prireikti pradėjus savo kelionę po egzotišką, galbūt daugeliui paslaptingą, tačiau nuostabios energijos kupiną matės pasaulį </p>
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
