<?php get_header();?>

<div id="showcase">

</div>

<main id="main-primary">
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h1><?php echo the_title(); ?></h1>
                    <?php echo the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer();?>