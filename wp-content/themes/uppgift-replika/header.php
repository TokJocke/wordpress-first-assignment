<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<!-- Hämtar Webbplatsrubrik -->
	<title><?=get_bloginfo("name");?></title>
	<!-- Skapar krok -->
	<?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<!-- Hämtar Webbplatsrubrik & url -->
						<a class="logo" href="<?=get_bloginfo("url");?>"> <?=get_bloginfo("name");?> </a>
					</div>
					<div class="col-sm-6 hidden-xs">
					<!-- Skapar en sökruta -->
					<?php get_search_form()?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
		<!-- Hämtar nav meny för headern som skapas i adminpanelen -->
		<?= wp_nav_menu([
			"container_class" => "container",
			'theme_location' => 'nav-menu'
			//orginal = #nav > .container > .row > .col-xs-12 > .menu > li 
			//min WP ? #nav > .container > .menu > li  
		]); ?>

		</nav>

		<main>