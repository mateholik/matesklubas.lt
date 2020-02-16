<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>
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
                   <p class="footer__text">Esame arbatos mėgėjai atradę matės arbatas, todėl norime pasidalinti ir su Jumis. Mūsų produkcija išsiskiria skoniu bei kokybe, todėl siūlome begale skirtingų arbatų rūšių. </p>
               </div>
           </div>
       </div>
   </div>
    <div class="footer__bottom">
        <p>Matės Klubas © <?php echo date("Y"); ?> - Visos teisės saugomos</p>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
