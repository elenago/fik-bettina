<?php
/*
Template Name: Info Template
*/
?>
<article class="col-sm-6 info no-padding-left">
  	<?php the_post_thumbnail(); ?>
</article>
 <article class="col-sm-6">
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'info'); ?>
</article>
