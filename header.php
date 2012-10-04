<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('—', true, 'right'); bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
		<meta charset="utf-8" />
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/html5.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div class="content">
				<h1>
					<a href="<?php echo site_url("/"); ?>" title="<?php bloginfo('name') ?>">
						<img src="<?php bloginfo('template_directory'); ?>/img/signet.png" alt="<?php bloginfo('name') ?>" />
					</a>
					<div id="title">
						<?php 
							$name = explode(" ", get_bloginfo('name'));
							echo $name[0];
							echo " <span id=\"highlight\">{$name[1]}</span> ";
							if(count($name) > 2) {
								echo implode(" ", array_slice($name, 2, count($name)-1));
							}
							bloginfo('description');
						?>
					</div>
					<div class="clear"></div>
				</h1>
				<?php
					function menu_empty(){
					};
					wp_nav_menu(array(
						'container' => 'nav',
						'container_class' => '',
						'theme_location' => 'primary',
						'fallback_cb' => menu_empty,
						'link_before' => ''
					));
				?>
				<aside id="top-right">
					<form action="<?php echo site_url("/"); ?>" method="get">
						<i class="icon-search"></i>
						<input type="search" name="s" placeholder="Suchen" />
					</form>
				</aside>

				<div class="breakers">
					<a class="breaker" href="https://anmelden.junge-piraten.de/">
						<span>Werde</span>
						<span>Jupi!</span>
					</a>
				</div>
			</div>
		</header>
