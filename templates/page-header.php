<?php if(!is_page('Home') && !is_post_type_archive('fik_product') && !is_front_page() && !is_home()): ?>
<div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>
<?php endif;?>
