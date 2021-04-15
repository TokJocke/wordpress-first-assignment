<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-xs-12 col-md-9">
			<h1><?= the_archive_title();?></h1>
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
					<?php the_excerpt();?>
			
				</article>

			<?php //Stänger loop 
					};
					the_posts_pagination();  
					
			?>
		</div>
									
        <aside id="secondary" class="col-xs-12 col-md-3">
            <div id="sidebar">
                <ul>
                    <?php dynamic_sidebar("sidebar");?>
                </ul>
            </div>
        </aside>
				
							
						
						
		</aside>
	</div>
</div>

<?php get_footer() ?>