<?php get_header();?>
<?php 
    $image = get_the_post_thumbnail_url();
?>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<?php
									while(have_posts()) {
										the_post();
									}
								?>
								
								<img src="<?=$image?>">
 								<div class="text">
									<h1><?php the_title();?></h1>
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


<?php get_footer() ?>