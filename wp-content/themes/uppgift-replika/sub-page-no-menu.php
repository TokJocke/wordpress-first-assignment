<?php
/**
 * Template Name: sub-page-no-menu
 * Template Post Type: post, page, produc
 */
?>

<?php get_header();?>


<section>
    <div class="container">
        <div class="row">
            <div id="primary" class="col-xs-12">
                <?php // Startar loop
                    while(have_posts()) {
                        the_post();
                ?>

                <h1>
                    <?php the_title();?>
                </h1>
                <?php the_content();?>
                
                
                <?php // Stänger loop
                    } 
                ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>