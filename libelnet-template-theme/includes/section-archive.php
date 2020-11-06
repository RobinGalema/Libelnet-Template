<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<h2>Het laatste nieuws</h2>
<div class="blogpost-container">

    <div class="blogpost">

        <div class="blogpost-body">

            <?php if(has_post_thumbnail()):?>

                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail"></a>

            <?php endif;?>

            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
            <?php //the_excerpt();?>
            <p><i><?php echo get_the_date('D j F Y');?></i></p>

            <a href="<?php the_permalink();?>">Lees meer</a>
        </div>

    </div>

    <?php endwhile; else: endif; ?>

</div>
