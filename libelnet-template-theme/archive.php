<?php
/*
Template Name: Archief template
*/
get_header(); ?>



<div class="container">

		<div id="content" role="main">

		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
		<h3>Archief per maand:</h3>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h3>Kies een categorie:</h3>
		<ul>

			 <?php wp_list_categories( array(
        
        'title_li' => ''
    ) ); ?>
		</ul>
        
        

	</div><!-- #content -->

</div>


<?php get_footer();?>
