<?php
/**
 * Template name: Kontaktai
 *
 * @package storefront
 */

get_header(); ?>
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <br>
<div class="about-page">
    <p>Matės klubas - tai bendruomenė jungianti matės gerbėjus. Čia dalinamės naudinga informacija, patarimais ir receptais, o mūsų el. parduotuvėje galite įsigyti mūsų patikrintus gaminius malonioms akimirkoms su Mate arbata.</p>
    <p>Tikimės, jog Matesklubas.lt rasite viską, ko tik gali prireikti kelionėje po egzotišką, galbūt daugeliui paslaptingą, tačiau nuostabios energijos kupiną matės pasaulį. </p>

    <h3>Tapk klubo nariu:</h3>
    <a href="https://www.facebook.com/groups/1098983160306904/" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="fb-icon">
        Facebook grupė
    </a>
    <a href="https://www.facebook.com/matesklubass" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="fb-icon">
        Facebook puslapis
    </a>

    <h3>Susisiekite su mumis: </h3>
    <a href="mailto:mateholikai@gmail.com">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/mail.svg" alt="mail-icon">
        mateholikai@gmail.com
    </a>
    <a href="tel:+37067900146">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/phone.svg" alt="phone-icon">
        +37067900146
    </a>

<!--    <p><strong>Kontaktinis asmuo:</strong> Andrius Vitkauskas</p>-->
<!--    <p><strong>Individualios veiklos nr.:</strong> 947070</p>-->


</div>
<?php get_footer();
