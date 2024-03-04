<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

<div class="homepage">
  <section class="hero">
    <div class="container">
      <div class="wrapper">
        <div class="wrapper__content">
          <h1>
            <span>
              <img width="48" height="32"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/title-icon-mate.png" alt="romb">
              Yerba mate
            </span>
            ENERGIJA, NUOTAIKA IR SVEIKATA
          </h1>
          <p>Pietų Amerikos gėrimas, pasižymintis kavos jėga, arbatos nauda ir šokolado suteikiama euforija.</p>
          <div class="btn__holder">
            <a href="https://www.matesklubas.lt/produkto-kategorija/kita/rinkiniai/" class="btn">išbandyti</a>
          </div>
        </div>
        <div class="wrapper__img">
          <img width="390" height="404" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-ppl.webp"
            alt="img">
        </div>

      </div>
    </div>
  </section>
  <section class="facts">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'yerba mate privalumai' ) 
     ); ?>
      <div class="wrapper">
        <div class="block">
          <div class="accordion">
            <div class="title">Energijos Šaltinis
              <img width="30" height="30" class="plus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
              <img width="30" height="30" class="minus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
            </div>
            <div class="text">Matės arbata suteikia natūralios, ilgai neblėstančios energijos, todėl yra puiki sveikesnė
              alternatyva kavai ar energetiniams gėrimams</div>
          </div>
          <div class="accordion">
            <div class="title">Gerina protinę veiklą
              <img width="30" height="30" class="plus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
              <img width="30" height="30" class="minus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
            </div>
            <div class="text">Gerina atmintį ir nuotaiką, stiprina kognityvines funkcijas. Skatiną produktyvumą ir
              kūrybiškumą.</div>
          </div>
          <div class="accordion">
            <div class="title">Vitaminų ir mineralų šaltinis
              <img width="30" height="30" class="plus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
              <img width="30" height="30" class="minus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
            </div>
            <div class="text">Matė yra itin turtinga maistinėmis medžiagomis, įskaitant A, C, B1, B2, B3, B5 ir E
              vitaminus, mineralus - kalcį, geležį, magnį, manganą, fosforą, kalį, seleną, natrijų, sierą ir cinką. Be
              to, joje randama taninų, mikroelementų, chlorofilo, flavonoidų, 15 amino rūgščių ir 11 polifenolių. Tai
              daugiausiai antioksidantų turinti arbata.</div>
          </div>
        </div>
        <div class="line"></div>
        <div class="block">
          <div class="accordion">
            <div class="title">Stiprina imunitetą
              <img width="30" height="30" class="plus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
              <img width="30" height="30" class="minus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
            </div>
            <div class="text">Arbatoje esantys saponinai, natūralūs emulsikliai, stiprina imuninę sistemą ir turi
              antioksidacinį bei priešuždegiminį poveikį. Taip pat ji gali būti naudinga gydant šlapimo pūslės
              infekcijas ir mažinant sezoninių alergijų simptomus.</div>
          </div>
          <div class="accordion">
            <div class="title">Padeda numesti svorio
              <img width="30" height="30" class="plus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
              <img width="30" height="30" class="minus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
            </div>
            <div class="text">Mažina apetitą, didina energijos sąnaudas, gerina insulinui jautrumą ir skatina riebalų
              deginimą.</div>
          </div>
          <div class="accordion">
            <div class="title">Padeda virškinimui
              <img width="30" height="30" class="plus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
              <img width="30" height="30" class="minus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
            </div>
            <div class="text">Matė yra naudojama tradicinėje medicinoje virškinimo sutrikimams, įskaitant vidurių
              užkietėjimą ir viduriavimą, gydyti. Ji turi antibakterinių savybių, kovojančių prieš E. coli bakteriją, ir
              saponinų, naikinančių žarnyno parazitus. Taip pat gali būti naudinga šlapimo pūslės ir inkstų akmenų
              gydymui.</div>
          </div>
        </div>
        <div class="line"></div>
        <div class="block">
          <div class="accordion">
            <div class="title">Stiprina kaulus
              <img width="30" height="30" class="plus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
              <img width="30" height="30" class="minus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
            </div>
            <div class="text">Matė arbata gali padidinti kaulų tankį net be mankštos, kas yra įdomu, nes kofeinas dažnai
              siejamas su kaulų mineralų netekimu. Tyrimas su menopauzę išgyvenančiomis moterimis, kurioms gresia
              osteoporozė, parodė, kad reguliarus matės vartojimas padidino jų kaulų tankį apie 10%, lyginant su tos
              pačios grupės moterimis, nevartojusiomis šios arbatos, nepaisant to, kad jos nesimankštino.
              (https://pubmed.ncbi.nlm.nih.gov/21920487/)</div>
          </div>

          <div class="accordion">
            <div class="title">Gerina širdies veiklą
              <img width="30" height="30" class="plus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
              <img width="30" height="30" class="minus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
            </div>
            <div class="text">Arbata pasižymi priešuždegiminėmis ir antioksidacinėmis savybėmis, kurios saugo širdies ir
              kraujagyslių sistemą. Be to, teobrominas esantis šioje arbatoje atpalaiduoja kraujagysles ir gerina
              kraujotaką.  https://www.aaem.pl/pdf-119994-52236?filename=Health%20properties%20of.pdf</div>
          </div>

          <div class="accordion">
            <div class="title">Gerina fizinę ištvermę
              <img width="30" height="30" class="plus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
              <img width="30" height="30" class="minus"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
            </div>
            <div class="text">Matė gali padidinti fizinę ištvermę ir pagreitinti atsistatymą po fizinio krūvio, todėl ją
              geria daug garsių sportininkų, pvz.: Edgaras Ulanovas, Lionel Messi, Cristiano Ronaldo ir kiti.</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="feature-product">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'klasikinis rinkinys' ) ); ?>
      <div class="wrapper">
        <div class="left">
          <!-- <p class="bold">Nežinai nuo ko pradėti?</p> -->
          <p>Nežinai nuo ko pradėti? <br>
            Rinkinyje yra viskas, ko
            reikia kokybiškam startui!</p>
          <ul>
            <li>
              <img width="30" height="30" loading="lazy"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/check.svg" alt="romb">
              <div>
                <span>Tradicinė moliūgo kalabasa</span>
              </div>
            </li>
            <li>
              <img width="30" height="30" loading="lazy"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/check.svg" alt="romb">
              <div>
                <span>Nerūdijančio plieno bombilė</span>
              </div>
            </li>
            <li>
              <img width="30" height="30" loading="lazy"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/check.svg" alt="romb">
              <div>
                <span>Dvi populiariausios Yerba Mate
                  arbatos</span>
              </div>
            </li>
          </ul>
          <div class="btn__holder">
            <a href="https://www.matesklubas.lt/produktas/klasikinis-mates-rinkinys-2/" class="btn">Plačiau</a>
          </div>
        </div>
        <div class="img">
          <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rinkinys.webp" alt="mate">

        </div>
      </div>
    </div>
  </section>
  <section class="categories">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'prekių kategorijos' ) 
     ); ?>
      <div class="wrapper">
        <img width="1170" height="177" class="background" loading="lazy"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-cats.jpeg" alt="title-mob-wrap">
        <?php get_template_part('templates/category', null, array( 'category' => 'mate', 'title' => 'Matė arbatos' )); ?>
        <?php get_template_part('templates/category', null, array( 'category' => 'kalabasos', 'title' => 'Kalabasos' )); ?>
        <?php get_template_part('templates/category', null, array( 'category' => 'bombiles', 'title' => 'Bombilės' )); ?>
        <?php get_template_part('templates/category', null, array( 'category' => 'kita', 'title' => 'Kita' )); ?>

      </div>
    </div>
  </section>
  <section id="newsletter" class="newsletter distortion-bg">
    <div class="container">
      <div class="section-title">
        <img width="48" height="32" loading="lazy"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/title-icon-mate.png" alt="romb">
        <h2>prenumeruoti naujienlaiškį</h2>
        <img width="48" height="32" loading="lazy"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/title-icon-mate.png" alt="romb">
      </div>
      <p>Gauk informaciją apie naujas prekes, naujus straipsnius bei video apžvalgas</p>
      <div class="wrapper">
        <?php echo do_shortcode('[sibwp_form id=1]'); ?>
      </div>
    </div>
  </section>
  <section id="products" class="products">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'prekės' ) 
     ); ?>
      <div class="options">
        <span class="active">Populiariausios</span>
        <span>Naujienos</span>
        <span>Išpardavimas</span>
        <span>Rezervuok</span>
      </div>
      <div class="results">
        <div>
          <?php display_top_products_excluding_soldout(8); ?>
        </div>
        <div>
          <?php display_newest_products_excluding_soldout(8); ?>
        </div>
        <div>
          <?php display_sale_products_excluding_soldout(8);  ?>
        </div>
        <div>
          <?php display_soldout_products(8);  ?>

        </div>
      </div>
      <div class="btn__holder">
        <a href="https://www.matesklubas.lt/parduotuve/" class="btn">
          Visos prekės
        </a>
      </div>

    </div>

  </section>
  <?php get_template_part('templates/latestNews'); ?>
</div>

<?php
get_footer();