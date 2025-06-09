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

  <section class="hero2">
    <div class="container">
      <div class="wrapper">
        <div class="wrapper__left">
          <h1>
            ENERGIJA, <br> NUOTAIKA IR <br> SVEIKATA
          </h1>
          <p>Pietų Amerikos gėrimas, pasižymintis kavos jėga, arbatos nauda ir šokolado suteikiama euforija.</p>
          <div class="btn__holder">
            <a href="https://www.matesklubas.lt/produkto-kategorija/kita/rinkiniai/" class="btn">
              išbandyti
              <img width="30" height="30" class="arrow"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.svg"
                alt="product background"></a>
          </div>
        </div>
        <div class="wrapper__right">
          <img width="771" height="723" class="bg-image bg-image__mobile"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-img.png" alt="product background">
        </div>

      </div>
    </div>

    <img width="771" height="723" class="bg-image"
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-img.png" alt="product background">
  </section>

  <section class="facts">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'yerba mate privalumai' ) 
     ); ?>
      <div class="wrapper">
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
            pačios grupės moterimis, nevartojusiomis šios arbatos, nepaisant to, kad jos nesimankštino.</div>
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
            kraujotaką.</div>
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
  </section>
  <section class="feature-product">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'klasikinis rinkinys' ) ); ?>
      <div class="description">Nežinai nuo ko pradėti? <br> Rinkinyje yra viskas, ko reikia kokybiškam startui!</div>
      <div class="wrapper">
        <div class="left">
       
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

  <section class="facts">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'D. U. K.' ) 
     ); ?>
      <div class="wrapper">
        <div class="accordion">
          <div class="title"> Koks matės skonis?
            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">Matė primena stiprią žaliąją arbatą, tačiau yra kartesnio skonio su ryškesnėmis žemės,
            medžio, šieno skonio natomis. <br> Tradiciškai ji geriama itin stipri, tačiau geriant pirmą kartą
            tradicinis
            paruošimo būdas gali būti per daug intensyvus, todėl rekomenduotina pradėti su mažesniu kiekiu arba
            įsigyti matę su priedais (su vaisiais, mėtomis ir pan.). <br> Leiskite skonio receptoriams palaipsniui
            priprasti prie specifinio matės skonio ir vėliau galėsite ja mėgautis ir patirti pilną jos naudą ir
            poveikį.
            <br><br>
            Daugiau informacijos apie matės skonio subtilybes rasite
            <a href="https://www.matesklubas.lt/kaip-paruosimo-budas-gali-kardinaliai-pakeisti-mates-skoni/"
              target="_blank">čia</a>.
          </div>
        </div>
        <div class="accordion">
          <div class="title">Kaip paruošti matę?
            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">Matę galima ruošti įvairiais būdais. Populiariausi variantai yra:
            <ul>
              <li>Tradicinis - matė ruošiama kalabasoje ir naudojant bombilę. Tai autentiškas paruošimo būdas
                laikantis
                ilgamečių tradicijų, kuris geriausiai atskleidžia matės gėrimo malonumą.</li>
              <li>Europietiškas - primena tradicinį, tačiau paprastesnis ir jam reikalinga bombilė ir puodelis.</li>
              <li>Ruošimas kavos prese arba arbatinuke - šis būdas pats praktiškiausias ir paprasčiausias, jam
                nereikia
                tradicinių matės indų užteka arbatinuko ar kavos preso.</li>
            </ul>
            Detalias instrukcijas kaip paruošti matę visais šiais būdais rasite <a
              href="https://www.matesklubas.lt/kaip-paruosti-mate/" target="_blank">čia</a>.
          </div>
        </div>
        <div class="accordion">
          <div class="title">Kaip paruošti moliūgo kalabasą pirmam naudojimui?
            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">
            Įsigijus tradicinę moliūgo kalabasą, labai svarbu ją tinkamai paruošti prieš pirmą naudojimą. Taip
            kalabasa
            tarnaus ilgiau ir suteiks matei geresnį skonį.
            Į naują kalabasą įdėkite matės arbatos, užpilkite karštu vandeniu iki viršaus ir palikite mirkti bent parą
            laiko. Tuomet kalabasos vidų gerai išvalykite ir leiskite išdžiūti.
            Detalias instrukcijas kaip paruošti ir prižiūrėti kalabasas rasite
            <a href="https://www.matesklubas.lt/kaip-paruosti-kalabasa-pirmam-naudojimui/" target="_blank">čia</a>.
          </div>
        </div>
        <div class="accordion">
          <div class="title">Kaip išsirinkti tinkamiausią kalabasą?
            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">Kalabasos gali būti moliūgo (tradicinė), medžio (dažniausiai Palo Santo), keramikinės arba
            nerūdijančio plieno.
            Visi variantai kuo puikiausiai tinka gerti matei. Tačiau turėkite omenyje, kad moliūgo ir medžio kalabasos
            reikalauja papildomos priežiūros ir turi teigiamos įtakos matės skoniui. Tuo tarpu keramikines ar
            plienines kalabasas yra lengviau išplauti ir prižūrėti, jos įtakos matės skoniui neturi.
            Todėl kiekvienas gali rinktis pagal savo skonį (rinktis praktišką ar labiau autentišką/tradicinį variantą)
            Daugiau informacijos rasite
            <a href="https://www.matesklubas.lt/kaip-issirinkti-tinkamiausia-kalabasa/" target="_blank">čia</a>.
          </div>
        </div>
        <div class="accordion">
          <div class="title">Kodėl moliūgo kalabasoje atsirado tamsiai žalios dėmės?

            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">Įsigijus naują moliūgo kalabasą, galite pastebėti, kad po kurio laiko joje atsiras tamsiai
            žalios dėmės. Neišsigąskite, tai normalu. Matės arbata dažo žalia spalva ir ilgainiui į moliūgo poras
            įsigeria šis matės pigmentas. Paprastai po ilgesnio naudojimou visas kalabasos vidus pasidengia pilkai
            žalsvu atspalviu.</div>
        </div>
        <div class="accordion">
          <div class="title">Kaip greitai galiu tikėtis pristatymo į paštomatą?
            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">Visi užsakymai pateikti darbo dienomis iki 15 val. yra supakuojami ir perduodami
            kurjeriams tą pačią dieną vakare. Toliau pristatymo laikas priklauso nuo DPD, LP Express ar Omniva
            kurjerių pajėgumų. Dažniausiai siuntos pristatomos per 24 val. Todėl užsakius darbo dieną iki 15 val.
            labai tikėtina, kad jau sekančią dieną siunta bus pristatyta į paštomatą. </div>
        </div>
        <div class="accordion">
          <div class="title">Kodėl negalima užpilti matės verdančiu vandeniu?
            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">Matę geriausia užpilti 60-70 laipsnių temperatūros vandeniu. Kuo vanduo karštesnis tuo
            matė bus kartesnė. Verdantis vanduo ne tik sugadins matės skonį, bet ir ,,išdegins'' daugelių naudingų
            medžiagų esančių matėje.
            Daugiau informacijos apie vandens temperatūros įtaką matės skoniui rasite
            <a href="https://www.matesklubas.lt/kokia-itaka-matei-daro-vandens-temperatura/" target="_blank">čia</a>.
          </div>
        </div>

        <div class="accordion">
          <div class="title">Ar matė turi kofeino?
            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">Taip, matė yra itin tonizuojantis gėrimas. Tipiška kalabasa, kurioje yra apie 30 gramų
            matės lapų, užpilta 5-10 kartų (kol nebelieka skonio) gali turėti apie 300 miligramų kofeino. Palyginimui,
            puodelyje užplikytos kavos gali būti nuo 95 iki 200 miligramų kofeino, atsižvelgiant į kavos paruošimą.

            Daugiau informacijos apie matės ir kavos skirtumus rasite
            <a href="https://www.matesklubas.lt/mate-pries-kava-kuri-gerima-pasirinkti/" target="_blank">čia</a>.

          </div>
        </div>

        <div class="accordion">
          <div class="title">Kiek daugiausiai matės per dieną galiu išgerti?
            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">Klasikinė kalabasa talpina apie 30-50 g sausos matės. Ji užpilama daug kartų, kol nelieka
            skonio (dažniausiai tam sunaudojama iki 2 l vandens). P. Amerikoje suvartoti tokį kiekį vienam asmeniui
            per dieną yra normalu. Tačiau kiekvienas esame unikalus ir reikėtų sekti savo savijautą, jeigu
            netoleruojate kofeino, mažinkite matės kiekį.
            Daugiau informacijos rasite
            <a href="https://www.matesklubas.lt/kiek-daugiausiai-mates-per-diena-galiu-isgerti/"
              target="_blank">čia</a>.
          </div>
        </div>

        <div class="accordion">
          <div class="title">Ar galiu gerti matę prieš miegą?
            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">Visos matės rūšys pasižymi tonizuojančiu poveikiu ir turi panašų kiekį kofeino kaip ir
            kava. Todėl nerekomenduotina gerti prieš miegą, geriausia vartoti ryte ar pirmoje dienos pusėje.
          </div>
        </div>
        <div class="accordion">
          <div class="title">Kuo skiriasi matės rūšys, kurią pasirinkti?
            <img width="30" height="30" class="plus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/plus.svg" alt="plus">
            <img width="30" height="30" class="minus"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/minus.svg" alt="plus">
          </div>
          <div class="text">Tradicinė, nevalyta matė susideda iš smulkintų vidutinio dydžio lapų, labai smulkių
            dalelių ,,dulkių'' ir kotelių. Nuo šių sudedamųjų dalių proporcijų priklauso matės skonio savybės. Kuo
            daugiau smulkių dalelių, tuo skonis stipresnis, kuo lapai stambesni, tuo švelnesnis.
            <ul>
              <li>Populiariausia matė yra argentinietiška (vidutinio stambumo, subalansuotas variantas).</li>
              <li>Paragvajaus matė yra stipresnė, smulkesnio malimo ir dažniausiai turi dūmo poskonį</li>
              <li>Urugvajaus - itin smulki, ją gali būti sudėtinga gerti pradedantiesiems, skonis intensyvus, tačiau
                švelnus
                Braziliška dažniausiai yra švelnaus skonio, stambių lapų ir dažniausiai su priedais (vaisiais ar pan.)
              </li>
            </ul>
            Daugiau informacijos rasite
            <a href="https://www.matesklubas.lt/atkreipkime-demesi-i-mates-sudeti/" target="_blank">čia</a>.
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="categories">
    <div class="container">
      <?php get_template_part( 'templates/title', null, array( 'title' => 'prekių kategorijos' ) 
     ); ?>
      <div class="wrapper">

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
        <h2>Naujienlaiškis</h2>
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