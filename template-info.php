<?php
/*
Template Name: Info Template
*/
?>
<article class="col-sm-5 no-padding">
  	<?php the_post_thumbnail(); ?>
</article>
 <article class="col-sm-7 info">
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'info'); ?>
</article>
