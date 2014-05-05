<?php if ( is_tax('store-section') || is_post_type_archive( 'fik_product' ) || is_home() || is_page_template( 'page-templates/store-front-page.php' ) || is_search() ) : // Only display product excerpt for home, archive page, store section and search ?>    

    <div class="col-md-6 no-padding-left product-image-frame">

        <?php the_post_thumbnail('460-thumbnail', array('class'=>'img-responsive')); ?>
        <h2 class="product-title" style="margin-top: 10px"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="product-price"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_fik_price(); ?></a></div>
    </div>

    <?php else: ?>
    <article itemscope itemtype="http://schema.org/Product" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="product-gallery col-md-6 no-padding-left">
            <?php if(has_post_thumbnail()) : ?>
                <div class="product-image-frame">
                    <?php
                        // We print the post thumbnail (if it exists) with a maximum size of 620px x 9999px:
                       // the_post_thumbnail('post-thumbnail',array('data-zoom-image' => array_shift(array_values(wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'large' ))),'itemprop' => "image"));                
                    ?>
                    <?php the_post_thumbnail('460-thumbnail',array('class'=>'img-responsive', 'id'=>'prod-img', 'data-zoom-image' => array_shift(array_values(wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' ))))) ?>
                </div>
                <?php 
                // this function outputs a <ul> with class="product-image-thumbnails" where each <li> is a thumbnil that links to a biger image (sizes specified in function). 
                // We also pass the size of the zoom image which url and size are returned as data attributes of the img. The last 2 sizes are the max width of the video thumbnail and the max width of a video embed    
                //the_product_gallery_thumbnails(array(64,64) , array(620,9999), array(1240,930),64,620,FALSE); 
                ?>
            <?php endif; ?>
        </div>
        <div class="product-gallery col-md-6 no-padding-left"  id="descr">
            <header class="header-product">
                <h1 itemprop="name" class="entry-title product-title"><?php the_title(); ?></h1>
            </header>
            <div itemprop="description" class="entry-content">
                <?php echo $post->post_content; ?>

                <?php the_product_gallery_thumbnails('150-thumbnail', array('class'=>'img-responsive'), 'full'); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
            <div class="price-and-purchase">
            <div class="msgproduct"><?php echo fik_messages(); ?></div>
            <?php echo('<form action="" class="fik_add_cart" method="post" enctype="multipart/form-data"><input type="hidden" name="store_product_id" value="' . esc_attr(get_the_ID()) . '">'
            . get_fik_product_select_variations() . get_fik_product_select_quantity()); ?>

            <div class="sizesandshippings">
            <ul class="text-right">
            <li><a href="/guia-de-tallas/" class="sizesinformation"><?php _e('GUÍA DE TALLAS', 'fik-bettina') ?></a></li>
            <li><a href="/envio/" class="shippingsinformation"><?php _e('ENVÍO', 'fik-bettina') ?></a></li>
            </ul>
            </div>
            <div class="sizesandshippingsmodal">
            <div class="sizes col-md-12 panel panel-default">
                <div class="panel-body">
                    <button type="button" class="close">&times;</button>
                    <?php
                        $shipping_page = get_page_by_title('Envío');
                        echo $shipping_page->post_content;
                    ?>
                </div>
            </div>
            <div class="shippings col-md-12 panel panel-default">
                <div class="panel-body">
                    <button type="button" class="close">&times;</button>
                    <?php
                        $shipping_page = get_page_by_title('Guía de tallas');
                        echo $shipping_page->post_content;
                    ?>
                </div>
            </div>
            </div>
            <div class="col-md-12 divprice fik_add_cart">
                <div class="col-md-6 price">
                <?php the_fik_price(); ?>
                </div>
                <div class="col-md-6 text-right">
                <?php echo get_add_to_cart_button(); ?>
                </div>
            </div>
            </form>
            <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                <div id="product-secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-4' ); ?>
                </div><!-- #secondary -->
            <?php endif; ?>
            </div> 
        </div>     
    <?php comments_template('/templates/comments.php'); ?>
  </article>

        <?php endif; ?>

