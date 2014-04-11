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
      <?php if (roots_display_sidebar()) : ?>
        <div class="sidebar <?php echo roots_sidebar_class(); ?>">
        <?php
          if (has_nav_menu('primary_navigation')) :
            ?>
            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid no-padding">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
            <?php
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
            ?>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
            <?php
          endif;
        ?>
          <aside class="m-sidebar" role="complementary">
            <?php include roots_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        </div><!-- /.sidebar -->

      <?php endif; ?>

    <main class="main <?php echo roots_main_class(); ?> <?php if(roots_display_sidebar()) { echo 'pull-right';} ?>" role="main">
         <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar2()) : ?>
        <div class="sidebar <?php echo roots_sidebar_class(); ?>">
          <aside class="m-sidebar" role="complementary">
            <?php dynamic_sidebar('sidebar-blog'); ?>
          </aside><!-- /.sidebar -->
        </div><!-- /.sidebar -->
      <?php endif; ?>
      

    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php
    do_action('get_footer', $footer_template_name);
  ?>
  <div class="sizesandshippingsmodaloverlay">&nbsp;</div>
</body>
</html>
