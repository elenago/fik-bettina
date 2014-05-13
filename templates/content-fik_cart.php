<?php
/**
 * The template used for displaying page content in page.php
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="msgproduct"><?php echo fik_messages(); ?></div>
		<header class="entry-header">
			<h1 class="entry-title">CESTA DE LA COMPRA</h1>
		</header>
		<?php the_fik_checkout(); ?>
		<div class="entry-content">
			<?php // the_content(); No content in the cart page! ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
