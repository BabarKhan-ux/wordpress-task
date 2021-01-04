
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
			echo '<ul class="col-sm-12 col-md-4">';
			?>
			<?php $customQuery->the_post(); ?>

			
			<div>
			
			<h3 style="text-align: center"><?php echo the_title() ?></h3>
			<?php echo the_post_thumbnail() ?>
			<p><?php echo the_content() ?></p>
			<a href="<?php echo the_permalink(); ?>">View Product</a>
			
			
			</div>


			<?php
			echo '</ul>';
			endwhile; // End of the loop.
      
      // Reseting the Post Data
      wp_reset_postdata();
			?>

		</main>
	</div>

<?php

get_footer();
