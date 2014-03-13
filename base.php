<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header', $header_template_name);
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
    <main class="main <?php echo roots_main_class(); ?> <?php if(current_theme_supports('sidebar-left')) { echo 'pull-right';} ?>" role="main">
        <img src="http://fikstores/wp-content/uploads/2014/03/homeimg.jpg" class="img-home">
        <?php //include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <div class="sidebar <?php echo roots_sidebar_class(); ?>">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
          <aside class="m-sidebar" role="complementary">
            <?php include roots_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        </div><!-- /.sidebar -->

      <?php endif; ?>

    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php
    do_action('get_footer', $footer_template_name);
  ?>

</body>
</html>
