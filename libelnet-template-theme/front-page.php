<?php get_header();?>

<div class="showcase">
    <div class="container h-100 row align-items-center">
        <div class="col-12 col-lg-6">
            <h1><?php the_title(); ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button class="t-btn t-btn-primary"><a href="">Call to action</a></button>
            <button class="t-btn t-btn-secondary"><a href="">Optionele knop</a></button>
        </div>
    </div>
</div>

<main id="main-primary">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php get_template_part('includes/section','content');?>
                </div>
                <div class="col-lg-4">
                    <div class="usp-container">
                    <?php if( is_active_sidebar('page-sidebar')):?>
                        <?php dynamic_sidebar('page-sidebar');?>
                    <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>

</main>


<?php get_footer();?>