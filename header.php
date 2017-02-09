<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>Claudia De Leon Blank Template</title>
    <?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	</head>
	<body>
		<div class="container">
			<header class="row">
				<div class="twelve columns">
					<h1><?php bloginfo('name'); ?>
					<p><?php bloginfo('description'); ?></p>
				</div>
			</header>
      <!-- end of header | begin section content -->
      <!-- Menu -->
<div class="row">
	<div class="twelve columns">
		<?php wp_nav_menu(array(
			'sort_column' => 'menu_order',
			'container_class' => 'blank-menu-header'
			));?>
	</div>
</div>
