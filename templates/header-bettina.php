<header class="banner-bettina container" role="banner">
  <div class="header-sup row">
    <div class="lang may col-sm-7">
      <?php
        if (has_nav_menu('language-menu')) :
          wp_nav_menu(array('theme_location' => 'language-menu', 'menu_class' => 'nav nav-pills lang-menu pull-right'));
        endif;
      ?>
    </div>
    <div class="titulo may col-sm-3 no-padding">
      <?php
        if (has_nav_menu('blogshop-menu') || has_nav_menu('blogshop2-menu')) :
          if(roots_display_sidebar()) :
            wp_nav_menu(array('theme_location' => 'blogshop2-menu', 'menu_class' => 'nav nav-pills blog-menu'));
          else :
            wp_nav_menu(array('theme_location' => 'blogshop-menu', 'menu_class' => 'nav nav-pills blog-menu'));
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

  <div class="row presponsive">
     <div class="font-header-inf may description col-lg-7 no-padding-left">
         <?php if(roots_display_sidebar()): ?>
            <a href="<?php echo home_url('/') ?>" class="logovestido pull-left"><img src="/wp-content/themes/fik-bettina/assets/img/logovestido.png" class=""></a>
            <a href="<?php echo home_url('/') ?>" class="logobettina pull-left"><img src="/wp-content/themes/fik-bettina/assets/img/logobettina.png" class=""></a>

             <!--<a href="<?php echo home_url('/') ?>" class="logobettina pull-left"><img src="/wp-content/themes/fik-bettina/assets/img/logo.png" class="img-responsive"></a>-->
         <?php else: ?>
             <a href="<?php echo home_url('/blog/') ?>" class="logobettina pull-left"><img src="/wp-content/themes/fik-bettina/assets/img/logoblog.png" class="img-responsive"></a>
         <?php endif; ?>
     </div>
   
    <!--<p >tu vestido.es</p>-->
   <!-- <div class="font-header-inf may logo col-lg-5"><a href="#" class="logobettina"><img src="http://fikstores/wp-content/uploads/2014/03/logo.png"></a></div>
    --><div class="menus-header col-lg-5">
      <a class="pull-right brand cesta" href="http://www.tuvestido.es/cart/"><span class="hidden-xs">Cesta de compra<span></a>
    </div>

  </div>
</header>

