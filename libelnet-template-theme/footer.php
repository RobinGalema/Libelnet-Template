<footer class="footer-primary">

<section>
    <div class="container">
        <div class="row">
            <div class="col-11 col-md-4">
            <div class="h-100 row justify-content-center justify-content-md-start align-items-center">
            <?php if( is_active_sidebar('footer-left')):?>
                        <?php dynamic_sidebar('footer-left');?>
                    <?php endif;?>
            </div>
            </div>
            <div class="col-11 col-md-4">
                <div class="h-100 socials-container row justify-content-center align-items-center">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-11 col-md-4">
                <div class="h-100 row justify-content-center justify-content-md-end align-items-center">
            <?php if( is_active_sidebar('footer-right')):?>
                        <?php dynamic_sidebar('footer-right');?>
                    <?php endif;?>
            </div>
            </div>
        </div>
    </div>
</section>

</footer>

<?php wp_footer();?>

</body>
</html>