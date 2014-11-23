<!DOCTYPE HTML>

<html class="no-js" <?php language_attributes(); ?>>
	
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=.94, minimum-scale=0.8, maximum-scale=1.2, user-scalable=no" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<?php wp_head(); ?> 
	</head>
	
	<body <?php body_class(); ?> >
	
		<div id="page" class="hfeed">
		
			<div id="masthead" class="" role="banner">
			
				<div id="header-bg" class="header-bg" style="background-image:URL('<?php header_image(); ?>');">
			
					<div class="wrapper">
					
						<div class="row">
						
							<?php lupercalia_social_links(); ?>					
						
							<div class="logo grid-25">
							
								<?php lupercalia_logo(); ?>
							
							</div> <!-- .logo .grid-60 -->
							<label for="toggle-down"><span class="icon-menu"></span></label>
							<input type="checkbox" id="toggle-down"/>
							<div class="grid-66 header-nav-wrap">
								<h5>If you want to ask us a question:&nbsp;&nbsp;<a href="mailto:info@easyroom4you.co.uk">info@easyroom4you.co.uk</a>&nbsp;&nbsp;<a href="02034890334">T: 0203 489 03 34</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="07838240074">M: 078 382 40074</a></h5>
								<nav id="navigation" class="navigation" role="navigation">
									<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu' ) ); ?>
								</nav> <!-- .navigation .grid-100 -->
							</div>
						</div> <!-- .row -->	
						
					
					</div> <!-- .wrapper -->	

				</div> <!-- .header-bg .row -->
				
				<?php lupercalia_front_page_slider(); ?>
		
		</div> <!-- #masthead .row -->
		
		<?php lupercalia_breadcrumb(); ?>