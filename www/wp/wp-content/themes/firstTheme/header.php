<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ddsmoothmenu.css"type="text/css" media="screen" />

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
		<div id="site_title">
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		</div>

		<?php wp_nav_menu( array(
			'theme_location' => 'top',
			'container_class' => 'ddsmoothmenu',
			'container_id' => 'templatemo_menu',
		) ); ?>

	</div>

	<div id="content_top">
		<div id="page_title">News Blog Page</div>
		<div id="search_box">
			<?php get_search_form(); ?>
		</div>
		<div class="cleaner"></div>
	</div>
