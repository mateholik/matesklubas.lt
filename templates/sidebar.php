<div class="main__sidebar">
    <div class="sidebar">
        <p class="sidebar__text">Mes galime tau padėti išsirinkti tau skirtą matę</p>
        <div class="sidebar__btn">
            <a href="#" class="btn btn--sidebar">Negali išsirinkti?</a>
        </div>
        <div class="sidebar__block">
            <a href="https://matesklubas.lt/produkto-kategorija/mate/" class="sidebar__block-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/daigelis.svg" alt="daigelis">
                MATĖ:
            </a>
            <ul>
<!--                --><?php //getSubCategories(39, 'sidebar'); ?>
                <?php getSubCategories(24, 'sidebar'); ?>
            </ul>
        </div>
        <div class="sidebar__block">
            <a href="https://matesklubas.lt/produkto-kategorija/kalabasos/" class="sidebar__block-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/kalabasas.svg" alt="kalabasas">
                KALABASOS:
            </a>
            <ul>
<!--                --><?php //getSubCategories(44,'sidebar'); ?>
                <?php getSubCategories(19,'sidebar'); ?>
            </ul>
        </div>
        <div class="sidebar__block">
            <a href="https://matesklubas.lt/produkto-kategorija/bombiles/" class="sidebar__block-title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bombiles.svg" alt="bombiles">
                BOMBILĖS:
            </a>
            <ul>
<!--                --><?php //getSubCategories(49,'sidebar'); ?>
                <?php getSubCategories(16,'sidebar'); ?>
            </ul>
        </div>
    </div>
</div>