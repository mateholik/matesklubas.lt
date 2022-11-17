<div class="main__sidebar">
  <div class="sidebar">
    <div class="sidebar__btn">
      <a href="https://matesklubas.lt/negali-issirinkti/" class="btn">ATLIK TESTĄ</a>
    </div>
    <div class="sidebar__block">
      <a href="https://matesklubas.lt/produkto-kategorija/mate/" class="sidebar__block-title">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/daigelis.svg" alt="daigelis">
        MATÈ:
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
    <div class="sidebar__block">
      <div class="sidebar__block-title title-for-fb">
        Sekite naujienas Facebook'e:
      </div>
      <iframe
        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmatesklubass&tabs=timeline&width=254&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=969696006719798"
        width="254" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
        allowfullscreen="true"
        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>
  </div>
</div>