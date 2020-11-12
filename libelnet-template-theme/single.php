<?php get_header();?>


<main id="main-primary">

	<section>
		<div class="container">

			<h1><?php the_title();?></h1>

			<?php get_template_part('includes/section','blogcontent');?>

		</div>
	</section>

</main>


<?php get_footer();?>