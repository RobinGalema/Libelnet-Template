<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="col-12 col-sm-6 col-lg-4 post">
        <div class="post-container">
            <div class="thumbnail-container">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="card-content-container row">
                <h3><?php the_title(); ?></h3>
                <button class="t-btn">
                    <a href="<?php echo the_permalink(); ?>">Lees meer</a>
                </button>
            </div>
            
        </div>

    </div>

<?php endwhile; else: endif; ?>

</div>
