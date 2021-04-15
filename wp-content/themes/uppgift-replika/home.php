<?php get_header() ?>

<section>

	<div class="container">
		<div class="row">
			<div id="primary" class="col-xs-12 col-md-9">
				<!-- 	Hämtar sidtitel -->
				<h1><?=  get_the_title(get_option('page_for_posts'));?></h1>
				<?php //Startar loop 
						while(have_posts()) {
						the_post(); 
				?>
					<article>
						<!-- Hämtar url till bild -->
						<img src="<?= get_the_post_thumbnail_url()?>"/>
						<h2 class="title">
							<!-- hämtar permalänk och titel  -->
							<a href="<?php the_permalink();?>"><?php the_title();?></a>
						</h2>
						<ul class="meta">
							<li>
								<!-- Hämtar datum  -->
								<i class="fa fa-calendar"></i> <?= get_the_date();?>
							</li>
							<li>
								<!-- Hämtar author name och skapar länk till samlingssida -->
								<i class="fa fa-user"></i> <?php the_author_posts_link();?>
							</li>
							<li>
								<!-- Skriver ut kategorier inlägget  tillhör -->
								<i class="fa fa-tag"></i> <?php print_categories(); ?>
							</li>
						</ul>
						<!-- Hämtar sammanfattning av content -->
						<?php the_excerpt();?>
				
					</article>

				<?php //Stänger loop 
						};
						/* Skapar pagination för bloggen */
						the_posts_pagination([
							'screen_reader_text' => "Inläggsnavigering",
							"class" => "pagination"
						]);  
						
				?>

			</div>
						
						
						
			<aside id="secondary" class="col-xs-12 col-md-3">
				<div id="sidebar">
					<ul>
						<!-- Skapar en plats för widget -->
						<?php dynamic_sidebar("sidebar");?>
					</ul>
				</div>
					
					
				
				
			</aside>
		</div>
	</div>
</section>


<?php get_footer() ?>