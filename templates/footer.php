<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <?php dynamic_sidebar('sidebar-footer-right'); ?>
    <div class="copyright col-lg-2 pull-right">
    	<p class="">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    	<p class="">Diseño | FLUXOP</p>
    <div class="pull-right"><?php the_fikstores_badge(); ?></div>
    </div>
    <?php wp_footer(); ?>
  </div>
</footer>

