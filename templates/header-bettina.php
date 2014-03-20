<header class="banner-bettina container" role="banner">
  <div class="header-sup row">
    <div class="lang may col-sm-7">
      <?php
        if (has_nav_menu('language-menu')) :
          wp_nav_menu(array('theme_location' => 'language-menu', 'menu_class' => 'nav nav-pills lang-menu pull-right'));
        endif;
      ?>
    </div>
    <div class="may col-sm-3 no-padding">
      <?php
        if (has_nav_menu('blogshop-menu') || has_nav_menu('blogshop2-menu')) :
          if(is_single() || is_page('blog')) :
            wp_nav_menu(array('theme_location' => 'blogshop-menu', 'menu_class' => 'nav nav-pills blog-menu'));
          else :
            wp_nav_menu(array('theme_location' => 'blogshop2-menu', 'menu_class' => 'nav nav-pills blog-menu'));
          endif;
        endif;
      ?>
    </div>
    <div class="social col-sm-2">      
      <?php
        if (has_nav_menu('social-menu')) :
          wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
    </div>
  </div>

  <div class="row">
     <div class="font-header-inf may description col-lg-7"><a href="#" class="logobettina pull-left"><img src="/wp-content/themes/fik-bettina/assets/img/logo.png"></a></div>
   
    <!--<p >tu vestido.es</p>-->
   <!-- <div class="font-header-inf may logo col-lg-5"><a href="#" class="logobettina"><img src="http://fikstores/wp-content/uploads/2014/03/logo.png"></a></div>
    --><div class="menus-header col-lg-5">
      <a class="pull-right brand cesta" href="<?php echo home_url('/') ?>">Cesta de compra</a>
    </div>

  </div>
</header>

