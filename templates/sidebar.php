<div class="main__sidebar">
    <div class="sidebar">
        <p class="sidebar__text">Mes galime tau padėti išsirinkti tau skirtą matę</p>
        <div class="sidebar__btn">
            <a href="#" class="btn btn--sidebar">Negali išsirinkti?</a>
        </div>
        <div class="sidebar__block">
            <h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/daigelis.svg" alt="daigelis">
                Matė arbatos:
            </h3>
            <ul>
                <?php
                $mateArgs = array(
                    'taxonomy' => 'product_cat',
                    'child_of'      => 44, //put here the id of parent term, which chldren you want to get
                    'hide_empty' => false,
                );
                $mates = get_terms( $mateArgs );
                foreach($mates as $mate) {
                    echo  '<li><a href="'. get_term_link($mate->slug, 'product_cat') .'">'. $mate->name .'   <span>(' . $mate->count  . ')</span></a></li>';
                    ?>
                    <?php
                }
                ?>
            </ul>
        </div>
        <div class="sidebar__block">
            <h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/kalabasas.svg" alt="kalabasas">
                kalabasai:
            </h3>
            <ul>
                <?php
                $kalabasArgs = array(
                    'taxonomy' => 'product_cat',
                    'child_of'      => 44, //put here the id of parent term, which chldren you want to get
                    'hide_empty' => false,
                );
                $kalabasai = get_terms( $kalabasArgs );
                foreach($kalabasai as $kalabas) {
                    echo  '<li><a href="'. get_term_link($kalabas->slug, 'product_cat') .'">'. $kalabas->name .'   <span>(' . $kalabas->count  . ')</span></a></li>';
                    ?>
                    <?php
                }
                ?>
            </ul>
        </div>
        <div class="sidebar__block">
            <h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bombiles.svg" alt="bombiles">
                bombilai:
            </h3>
            <ul>
                <?php
                $bombilesArgs = array(
                    'taxonomy' => 'product_cat',
                    'child_of'      => 49, //put here the id of parent term, which chldren you want to get
                    'hide_empty' => false,
                );
                $bombiles = get_terms( $bombilesArgs );
                foreach($bombiles as $bombile) {
                    echo  '<li><a href="'. get_term_link($bombile->slug, 'product_cat') .'">'. $bombile->name .'   <span>(' . $bombile->count  . ')</span></a></li>';
                    ?>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>