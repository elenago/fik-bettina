<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="news-single">
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <div class="post-thumbnail">
      <?php the_post_thumbnail('960-thumbnail', array('class'=>'attachment-large wp-post-image img-responsive blog-attachment')); ?>
      </div> 
      <?php the_content(); ?>
    </div>
    <footer>
      <?php dynamic_sidebar('sidebar-shareproductmenu'); ?>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      <div class="navigation">
          <div class="alignleft rojo-logo"><?php previous_post_link('< %link') ?></div>
          <div class="alignright rojo-logo"><?php next_post_link('%link >') ?></div>
      </div>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
