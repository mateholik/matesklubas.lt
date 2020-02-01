<?php
/**
 * Template name: Kontaktai
 *
 * @package storefront
 */

get_header(); ?>

    <div class="contact">
        <div class="row">
            <div class="col form">
                <h2>Parašyk mums!</h2>
                <?php echo do_shortcode('[contact-form-7 id="118" title="Kontaktų forma 1"]') ?>
            </div>
            <div class="col info">
             <h2>Muveris LT, MB</h2>
                <p>
                    <strong>Įmonės kodas:</strong> 304935175 <br>
                    <strong>Vadovas:</strong> Martynas Burbulis<br>
                    <strong>Adresas:</strong> Santariškių g. 75-34, LT-08457 Vilnius<br>
                    <strong>Telefono nr.:</strong> <a href="tel:+37067699059"> +37067699059</a><br>
                    <strong>El. paštas:</strong> <a href="mailto:info@muveris.lt"> info@muveris.lt</a><br>
                </p>
            </div>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </div>

<?php
get_footer();