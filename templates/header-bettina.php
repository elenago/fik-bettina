<header class="banner-bettina container" role="banner">
  <div class="header-sup row">
    <div class="lang may col-lg-7">
      <?php
        if (has_nav_menu('language-menu')) :
          wp_nav_menu(array('theme_location' => 'language-menu', 'menu_class' => 'nav nav-pills lang-menu pull-right'));
        endif;
      ?>
    </div>
    <div class="may col-lg-3">
      <?php
        if (has_nav_menu('blogshop-menu')) :
          wp_nav_menu(array('theme_location' => 'blogshop-menu', 'menu_class' => 'nav nav-pills blog-menu'));
        endif;
      ?>
    </div>
    <div class="social col-lg-2">      
      <?php
        if (has_nav_menu('social-menu')) :
          wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
    </div>
  </div>

  <div class="row">
    <div class="font-header-inf may description col-lg-2">tu vestido.es</div>
    <div class="font-header-inf may logo col-lg-5">bettina boutique</div>
    <div class="menus-header col-lg-5">
      <a class="pull-right brand" href="<?php echo home_url('/') ?>">Carrito compra</a>
    </div>

  </div>
</header>

