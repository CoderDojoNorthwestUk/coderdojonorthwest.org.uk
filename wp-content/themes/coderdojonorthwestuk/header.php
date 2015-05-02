<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no" />
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link media="all" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/theme.css"  />
    
	<script type="text/javascript">
		var pathInfo = {
			base: '<?php echo get_template_directory_uri(); ?>/',
			css: 'css/',
			js: 'js/',
			swf: 'swf/',
		}
	</script>
	<?php if ( is_singular() ) wp_enqueue_script( 'theme-comment-reply', get_template_directory_uri()."/js/comment-reply.js" ); ?>
	<?php wp_enqueue_script('jquery'); wp_head(); ?>
    <!-- include Cycle2 -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle2.min.js"></script>
    <!-- include one or more optional Cycle2 plugins -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle2.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle2.flip.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle2.swipe.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
	<script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "563b825a-7a01-4292-9b22-943cf1bd6105", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<?php if(is_front_page()|| is_page(3199)): ?>
<body>
<?php else: ?>
<body class="inner">
<?php endif; ?>
	<div id="wrapper">
		<header id="header">
			<div class="header-holder">
				<div class="container" style="width:100%;">
					<div class="row">
						<div class="col-md-12">
							
							<?php if(has_nav_menu('header_left')): ?>
								<nav class="dl-menuwrapper menu left navbar-left">
									<a href="#" class="dl-trigger opener"><span>CLOSE MENU</span></a>
									<?php wp_nav_menu( array(
											'container' => false,
											'theme_location' => 'header_left',
											'menu_class' => 'dl-menu add-nav',
											'items_wrap' => '<ul class="%2$s">%3$s</ul>',
										) ); ?>
								</nav>
							<?php endif; ?>
							
							<?php if(has_nav_menu('header_right'))
								wp_nav_menu( array(
										'container' => 'nav',
										'container_class' => 'nav-right navbar-right hidden-xs',
										'theme_location' => 'header_right',
										'menu_class' => 'nav nav-pills',
										'items_wrap' => '<ul class="%2$s">%3$s</ul>',
									) ); ?>
							
						</div>
					</div>
				</div>
			</div>
			
			
							
			<?php if(is_front_page()|| is_page(3199)): ?>
				<div class="holder">
						<nav class="main-navigation dl-menuwrapper">
							<a href="#" class="dl-trigger opener"><span>Menu</span></a>
                            <span class="nav-text visible-xs">Menu</span></a>
							<?php if(has_nav_menu('primary'))
								wp_nav_menu( array(
										'container' => false,
										'theme_location' => 'primary',
										'menu_class' => 'dl-menu',
										'items_wrap' => '<ul class="%2$s">%3$s</ul>',
										'walker' => new Custom_Walker_Nav_Menu
									) ); ?>
						</nav>
					</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/coderdojonwuk_logo.gif" alt="CoderDojoNorthWest.org.uk"></a></div>
							<span class="logo-text hidden-xs"><?php bloginfo('description'); ?></span>
						</div>
					</div>
				</div>
			<?php else: ?>
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/coderdojonwuk_logo.gif" alt="CoderDojoNorthWest.org.uk"></a></div>
						</div>
						<div class="col-sm-9">
							<div class="holder">
								<nav class="main-navigation dl-menuwrapper">
									<a href="#" class="dl-trigger opener"><span>Menu</span></a>
                            		<span class="nav-text visible-xs">Menu</span></a>
									<?php if(has_nav_menu('primary'))
										wp_nav_menu( array(
												'container' => false,
												'theme_location' => 'primary',
												'menu_class' => 'dl-menu',
												'items_wrap' => '<ul class="%2$s">%3$s</ul>',
												'walker' => new Custom_Walker_Nav_Menu
											) ); ?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</header>