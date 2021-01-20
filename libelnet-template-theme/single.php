<?php get_header();?>


<main id="main-primary">

    <section id="blog-post-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                    <h1><?php the_title();?></h1>

                    <?php get_template_part('includes/section','blogcontent');?>
                    
                </div>
            </div>


        </div>
    </section>

</main>


<?php get_footer();?>