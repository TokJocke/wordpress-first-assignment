<?php get_header() ?>

<section>

	<div class="container">
		<div class="row">
			<div id="primary" class="col-xs-12 col-md-9">
				<h1><?=  get_the_title(get_option('page_for_posts'));?></h1>
				<?php //Startar loop 
						while(have_posts()) {
						the_post(); 
				?>
					<article>
						<img src="<?= get_the_post_thumbnail_url()?>"/>
						<h2 class="title">
							<a href="<?php the_permalink();?>"><?php the_title();?></a>
						</h2>
						<ul class="meta">
							<li>
								<i class="fa fa-calendar"></i> <?= get_the_date();?>
							</li>
							<li>
								<i class="fa fa-user"></i> <?php the_author_posts_link();?>
							</li>
							<li>
								<i class="fa fa-tag"></i> <?php print_categories(); ?>
							</li>
						</ul>
						<?php the_excerpt(); //möjligtvis the content istället beroende på vad Ian vill ha?>
				
					</article>

				<?php //Stänger loop 
						};
						the_posts_pagination();  
						
				?>
<!-- 
				<nav class="navigation pagination">
					<h2 class="screen-reader-text">Inläggsnavigering</h2>
					<a class="prev page-numbers" href="">Föregående</a>
					<span class="page-numbers current">1</span>
					<a class="page-numbers" href="">2</a>
					<a class="next page-numbers" href="">Nästa</a>
				</nav> -->
			</div>
						
						
						
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<?php dynamic_sidebar("sidebar");?>
								</ul>
							</div>
								
								
							
							
						</aside>
					</div>
				</div>
			</section>


<?php get_footer() ?>