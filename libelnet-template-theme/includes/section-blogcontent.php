<?php if( have_posts() ): while( have_posts() ): the_post();?>


		<p><?php echo get_the_date('D j F Y');?></p>


        <?php the_content();?>
        
        <button class="t-btn mt-3">
            <a href="<?php echo home_url();?>/category/blog"><i class="fas fa-arrow-circle-left mr-2"></i>Terug naar het overzicht</a>
        </button>
        

<?php endwhile; else: endif;?>