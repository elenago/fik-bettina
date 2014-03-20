<?php if ( is_tax('store-section') || is_post_type_archive( 'fik_product' ) || is_home() || is_page_template( 'page-templates/store-front-page.php' ) || is_search() ) : // Only display product excerpt for home, archive page, store section and search ?>    
    <li class="<?php echo get_theme_mod( 'fik_product_thumb_type', 'fik2012-thumb-sq' ); ?>" style="display: inline-block">
        <?php the_post_thumbnail('450-thumbnail', array('class'=>'img-responsive')); ?>
            <h2 class="product-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="product-price"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_fik_price(); ?></a></div>
    </li>
    <?php else: ?>
    <article itemscope itemtype="http://schema.org/Product" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="product-gallery col-md-6 no-padding-left">
            <?php if(has_post_thumbnail()) : ?>
                <div class="product-image-frame">
                    <?php
                        // We print the post thumbnail (if it exists) with a maximum size of 620px x 9999px:
                       // the_post_thumbnail('post-thumbnail',array('data-zoom-image' => array_shift(array_values(wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' ))),'itemprop' => "image"));                
                    ?>
                    <?php the_post_thumbnail('450-thumbnail',array('class'=>'img-responsive')) ?>
                </div>
                <?php 
                // this function outputs a <ul> with class="product-image-thumbnails" where each <li> is a thumbnil that links to a biger image (sizes specified in function). 
                // We also pass the size of the zoom image which url and size are returned as data attributes of the img. The last 2 sizes are the max width of the video thumbnail and the max width of a video embed    
                //the_product_gallery_thumbnails(array(64,64) , array(620,9999), array(1240,930),64,620,FALSE); 
                ?>
            <?php endif; ?>
        </div>
        <div class="product-gallery col-md-6 no-padding-right">
            <header class="header-product">
                <h1 itemprop="name" class="entry-title product-title"><?php the_title(); ?></h1>
            </header>
            <div itemprop="description" class="entry-content col-md-12">
                <?php echo $post->post_content; ?>

                <?php the_product_gallery_thumbnails('150-thumbnail',array('class'=>'img-responsive')); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
            <div class="price-and-purchase">

                <?php echo('<form action="" class="fik_add_cart" method="post" enctype="multipart/form-data"><input type="hidden" name="store_product_id">'
        . get_fik_product_select_variations() . get_fik_product_select_quantity() . get_add_to_cart_button() .
        '</form>'); ?>
                <?php the_fik_price(); ?>
                <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                    <div id="product-secondary" class="widget-area" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-4' ); ?>
                    </div><!-- #secondary -->
                <?php endif; ?>
            </div> 
        </div>     
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>

        <?php endif; ?>

