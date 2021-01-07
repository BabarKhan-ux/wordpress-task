
<style>

.col-md-4 {
	width: 33%;
	display: inline-block;
}

@media only screen and (max-width: 768px) {
	.col-md-4 {
		width: 100%;
	}
}

</style>

<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php

			

			$args = array(
				'post_type' => 'products'
			);
			$customQuery = new WP_Query( $args );
			while ( $customQuery->have_posts() ) :
			echo '<ul class="col-sm-12 col-md-4" >';
			?>
			<?php $customQuery->the_post(); 
				global $post;
				$post_id = $post->ID;
			?>

			
			<div style="background-color: <?php echo get_post_meta( $post_id, 'background_color', true ) ?>" >
			
			<h3 style="text-align: center"><?php echo get_post_meta( $post_id, 'products_title', true ) ?></h3>
			<?php echo the_post_thumbnail() ?>
			<p  style="text-align:center;"><a href="<?php echo the_permalink(); ?>"> View Product</a></p>
			
			
			</div>


			<?php
			echo '</ul>';
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
