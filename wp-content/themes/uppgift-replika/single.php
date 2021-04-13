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

                <?php }?>



						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
											<li class="page_item current_page_item">
												<a href="">Blogg</a>
											</li>
											<li class="page_item">
												<a href="">Exempelsida</a>
											</li>
											<li class="page_item">
												<a href="">Kontakt</a>
											</li>
											<li class="page_item page_item_has_children">
												<a href="">Om mig</a>
												<ul class="children">
													<li class="page_item">
														<a href="">Intressen</a>
													</li>
													<li class="page_item page_item_has_children">
														<a href="">Portfolio</a>
														<ul class="children">
															<li class="page_item">
																<a href="">Projekt 1</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="page_item">
												<a href="">Startsida</a>
											</li>
										</ul>
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
											<li>
												<a href="arkiv.html">oktober 2016</a>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
											<li class="cat-item">
												<a href="">Natur</a> (1)
											</li>
											<li class="cat-item">
												<a href="">Okategoriserade</a> (3)
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>

            <?php get_footer() ?>