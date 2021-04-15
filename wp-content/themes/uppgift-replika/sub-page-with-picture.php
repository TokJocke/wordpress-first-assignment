<?php
/**
 * Template Name: sub-page-with-picture
 * Template Post Type: post, page, produc
 */
?>

<?php get_header();?>

<section>
    <div class="container">
        <div class="row">
        <?php // Startar loopen
            while(have_posts()){
                the_post();
        ?>

            <div class="col-xs-12 col-sm-8 col-md-6">
                <h1>
                    <?php the_title();?>
                </h1>
                <?php the_content();?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6">
                <img src="<?= get_the_post_thumbnail_url();?>" />
            </div>

        <?php // Slutar loopen
            } 
        ?>

        </div>
    </div>
</section>


<?php get_footer() ?>