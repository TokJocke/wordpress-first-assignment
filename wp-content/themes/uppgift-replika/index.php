<!-- Hämtar header.php -->
<?php get_header();?>
<?php //Sparar thumbnail i variabel
    $image = get_the_post_thumbnail_url();
?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="hero">
						<?php //Startar loopen
							while(have_posts()) {
								the_post();
							}
						?>

						<img src="<?=$image?>">
						<div class="text">
							<!--Hämtar titeln från posts  -->
							<h1><?php the_title();?></h1>
							<!--Hämtar innehåll från posts  -->
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Hämtar footer.php -->
<?php get_footer() ?>