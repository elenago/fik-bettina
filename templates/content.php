<?php if(get_post_type == 'fik_product'): ?>

    <li class="<?php echo get_theme_mod( 'fik_product_thumb_type', 'fik2012-thumb-sq' ); ?>" style="display: inline-block">
        <?php the_post_thumbnail('450-thumbnail', array('class'=>'img-responsive')); ?>
            <h2 class="product-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="product-price"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_fik_price(); ?></a></div>
    </li>

<?php else: ?>

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

<?php endif; ?>

