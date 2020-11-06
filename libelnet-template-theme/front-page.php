<?php get_header();?>


<main id="main-primary">
    <section>
        <div class="container">
            <h1><?php the_title();?></h1>
        </div>
    </section>

    <section>
        <div class="container">
            <?php get_template_part('includes/section','content');?>
        </div>
    </section>
</main>


<?php get_footer();?>