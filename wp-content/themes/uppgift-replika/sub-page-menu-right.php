<?php
/**
 * Template Name: sub-page-menu-right
 * Template Post Type: post, page, produc
 */
?>

<?php get_header();?>



<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                            <?php 
                                while(have_posts()) {
                                    the_post();
                                
                            ?>
							<h1><?php the_title();?></h1>
                            <?php the_content();?>
                        
                        
                        <?php } ?>
                        </div>
               
						<aside id="secondary" class="col-xs-12 col-md-3">
                                <?php wp_nav_menu([
                                    'container' => false,
                                    'menu_class' => 'side-menu',
                                    'theme_location' => 'sub-menu'
                                ]) ?>
						</aside>
					</div>
				</div>
			</section>








<?php get_footer() ?>