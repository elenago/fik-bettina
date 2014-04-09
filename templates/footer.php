<footer class="content-info" role="contentinfo">
    <aside class="fm-sidebar" role="complementary">
            <?php include roots_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
    <div class="fcontainer container">
      <div class="social1">      
      <?php
        if (has_nav_menu('social-menu')) :
          wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
      </div>
    </div>
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <?php dynamic_sidebar('sidebar-footer-right'); ?>
    <div class="copyright col-lg-2 pull-right">
    	<p class="">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    	<p class=""><a href="http://www.fluxop.com/" target="_blank">Diseño | FLUXOP</a></p>
    <div class="pull-right"><?php the_fikstores_badge(); ?></div>
    </div>
    <?php wp_footer(); ?>
  </div>
</footer>

