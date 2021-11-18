<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	
	
	<?php wp_head(); ?>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/icon-font.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/icon-font.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
</head>
<body <?php body_class(); ?>>
	<nav class="navigation">
		<ul class="navigation__list">
			<li class="navigation__item">
				<a href="/" class="navigation__link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="navigation__logo"></img>
				</a>
			</li>
			<li class="navigation__item">
				<a href="/#about" class="navigation__link">
					<span>About OWS</span>
				</a>
			</li>
			<li class="navigation__item">
				<a href="/#news" class="navigation__link">
					<span>News and Announcements</span>
				</a>
			</li>
			<li class="navigation__item">
				<a href="/#team" class="navigation__link">
					<span>Our Team</span>
				</a>
			</li>
			<li class="navigation__item">
				<!--<a href="https://airtable.com/appljSNzZ7c9SAqXG/tblc4i9yDcWh2wTlP/viwGBJObIqV8po6k7?blocks=bipXF9Lh5Q144ZebZ" class="navigation__link">-->
				<a href="opportunity-dashboard/" class="navigation__link">
					<span>Opportunity Dashboard</span>
				</a>
			</li>
		</ul>
	</nav>
