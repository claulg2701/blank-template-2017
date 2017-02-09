<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>Claudia De Leon Blank Template</title>
    <?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	</head>
	<body>
		<div class="container"> <!-- ends in footer -->
			<header class="row">
				<div class="nine columns">
					<h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
					<p><?php bloginfo('description'); ?></p>
				</div>
        <!-- Add Search Form -->
      	<div class="three columns">
      		<?php get_search_form(); ?>
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
