<div class="main__sidebar">
  <div class="sidebar">
    <div class="sidebar__block">
      <?php 
        $main_category_id = 119; // ID of "RINKINIAI NAUJOKAMS" category
        $is_active = (get_queried_object_id() == $main_category_id) ? 'active-item' : '';
      ?>
      <a href="https://www.matesklubas.lt/produkto-kategorija/yerba-mate-rinkiniai/" class="sidebar__block-title <?php echo $is_active; ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/gift.svg" alt="kita">
      RINKINIAI NAUJOKAMS
      </a>
      <ul>
        <?php getSubCategories($main_category_id, 'sidebar'); ?>
      </ul>
    </div>

    <div class="sidebar__block">
      <?php 
        $main_category_id = 24; // ID of "MATÈ" category
        $is_active = (get_queried_object_id() == $main_category_id) ? 'active-item' : '';
      ?>
      <a href="https://www.matesklubas.lt/produkto-kategorija/yerba-mate-arbata/" class="sidebar__block-title <?php echo $is_active; ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/daigelis.svg" alt="daigelis">
        MATÈ:
      </a>
      <ul>
        <?php getSubCategories($main_category_id, 'sidebar'); ?>
      </ul>
    </div>

    <div class="sidebar__block">
      <?php 
        $main_category_id = 19; // ID of "KALABASOS" category
        $is_active = (get_queried_object_id() == $main_category_id) ? 'active-item' : '';
      ?>
      <a href="https://matesklubas.lt/produkto-kategorija/kalabasos/"
        class="sidebar__block-title <?php echo $is_active; ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/kalabasas.svg" alt="kalabasas">
        KALABASOS:
      </a>
      <ul>
        <?php getSubCategories($main_category_id, 'sidebar'); ?>
      </ul>
    </div>

    <div class="sidebar__block">
      <?php 
        $main_category_id = 16; // ID of "BOMBILĖS" category
        $is_active = (get_queried_object_id() == $main_category_id) ? 'active-item' : '';
      ?>
      <a href="https://matesklubas.lt/produkto-kategorija/bombiles/"
        class="sidebar__block-title <?php echo $is_active; ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/bombiles.svg" alt="bombiles">
        BOMBILĖS:
      </a>
      <ul>
        <?php getSubCategories($main_category_id, 'sidebar'); ?>
      </ul>
    </div>

    <div class="sidebar__block">
      <?php 
        $main_category_id = 187; // ID of "KITA" category
        $is_active = (get_queried_object_id() == $main_category_id) ? 'active-item' : '';
      ?>
      <a href="https://matesklubas.lt/produkto-kategorija/kita/" class="sidebar__block-title <?php echo $is_active; ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/gift.svg" alt="kita">
        kitos prekės:
      </a>
      <ul>
        <?php getSubCategories($main_category_id, 'sidebar'); ?>
      </ul>
    </div>

  
  </div>
</div>