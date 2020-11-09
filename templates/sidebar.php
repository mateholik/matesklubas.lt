<style>
    .atention {
        border: 0.2rem solid orange;
        border-radius: 1rem;
        padding: 1rem;
        margin-bottom: 3rem;
        color: #222;
        border-bottom: .4rem solid #cf7d10;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }
</style>
<div class="main__sidebar">
    <div class="sidebar">
        <div class="atention">
            <strong>DĖMESIO!</strong>
            <br>
            Norint gauti prekes <strong>iki Kalėdų</strong>, būtina <strong>pateiki </strong> užasakymą <strong>iki gruodžio 13 d.</strong>
        </div>
        <div class="sidebar__btn">
            <a href="https://matesklubas.lt/negali-issirinkti/" class="btn btn--sidebar">ATLIK TESTĄ</a>
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
        <div class="sidebar__block">
			<a href="https://www.matesklubas.lt/produkto-kategorija/guayusa/" class="sidebar__block-title">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/ajavaska.svg" alt="ajavaska">
				GUAYUSA
			</a>
		</div>
		<div class="sidebar__block">
			<a href="https://www.matesklubas.lt/produkto-kategorija/rinkiniai/" class="sidebar__block-title">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/gift.svg" alt="dovana">
				DOVANŲ RINKINIAI
			</a>
		</div>
    </div>
</div>
