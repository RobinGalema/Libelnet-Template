<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<main id="primary" class="site-main">
    <section id="404" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>404 - Pagina niet gevonden!</h1>
                    <p>Oeps, deze pagina kon niet worden gevonden. <br>
                        Deze is mogelijk verwijderd, hernoemd of bestaat helemaal niet.</p>
                    <a href="<?php echo home_url(); ?>">Terug naar de homepage</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();