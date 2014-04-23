<?php if(get_post_type == 'fik_product' || is_tax('store-section')): ?>

    <div class="col-md-6 no-padding-left product-image-frame">

        <?php the_post_thumbnail('460-thumbnail', array('class'=>'img-responsive')); ?>
        <h2 class="product-title" style="margin-top: 10px"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="product-price"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_fik_price(); ?></a></div>

    </div>

<?php else: ?>

<article <?php post_class(); ?>>
  <header>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-content imgpost">
      <?php the_post_thumbnail('460-thumbnail', array('class'=>'img-responsive')); ?>
  </div>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <a class="verpost col-sm-offset-11" href="<?php the_permalink(); ?>">Ver post</a>
  </div>
</article>

<?php endif; ?>

