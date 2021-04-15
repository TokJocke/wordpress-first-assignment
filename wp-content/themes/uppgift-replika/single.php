<?php get_header();?>
<?php 
    $image = get_the_post_thumbnail_url();
?>

<section>


	<?php 
		while( have_posts() ){
			the_post();
	?>
	<div class="container">
		<div class="row">
			<div id="primary" class="col-xs-12 col-md-9">
				<article>
					<img src="<?= $image;?>" />
					<h1 class="title"><?php the_title();?></h1>
					<ul class="meta">
						<li>
							<i class="fa fa-calendar"></i> <?= get_the_date();?>
						</li>
						<li>
							<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author();?></a>
						</li>
						<li>
							<i class="fa fa-tag"></i> <?= print_categories(); ?>
						</li>
					</ul>
					<?php the_content();?>
				</article>
			</div>
			<aside id="secondary" class="col-xs-12 col-md-3">
				<div id="sidebar">
					<?php dynamic_sidebar("sidebar");?>




				</div>
			</aside>
		</div>

	<?php }; ?>
</section>

<?php get_footer() ?>