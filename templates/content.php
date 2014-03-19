
<article <?php post_class(); ?>>
  <header>
        <?php get_template_part('templates/entry-meta'); ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-content imgpost">
      <?php the_post_thumbnail(); ?>
  </div>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <a class="verpost col-sm-offset-11" href="<?php the_permalink(); ?>">Ver post</a>
  </div>
</article>
