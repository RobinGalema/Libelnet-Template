<?php if( have_posts() ): while( have_posts() ): the_post();?>


		<p><?php echo get_the_date('D j F Y');?> door <?php echo $fname;?> <?php echo $lname;?></p>


		<?php the_content();?>
        

<?php endwhile; else: endif;?>