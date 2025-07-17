<?php
get_header();
?>
	<div class="container toys" >
		<h2 class="subtitle"><?php the_title();?></h2>
	</div>
	<div id = "primary" class="contenet-area">

		<main id="primary" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div>
	

<?php
get_footer();
?>