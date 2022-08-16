<?php 
$menu_name = 'menu_1';
$locations = get_nav_menu_locations();
$header_menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
?>

<?php
	// echo '<pre>';
	// print_r( $header_menu_items );
	// echo '</pre>';
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?> <?php wp_title("",true); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php echo carbon_get_theme_option('aga_script'); ?>

	<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="537641" data-tilda-page-id="27234823" data-tilda-page-alias="narbulihouse" data-tilda-formskey="e9398ca19c33a3b2f723b008eb44f765" data-tilda-lazy="yes" data-tilda-project-headcode="yes" style="overflow-x: hidden;">


		<div id="rec439703513" class="r t-rec" style=" " data-animationappear="off" data-record-type="967">
			<!-- T967 -->
			<div id="nav439703513marker"></div>
			<div class="t967__mobile">
				<div class="t967__mobile-container">
					<div class="t967__mobile-text t-name t-name_md" field="text">&nbsp;</div>
					<div class="t967__mobile-burger"> <span></span> <span></span> <span></span> <span></span> </div>
				</div>
			</div>
			<div id="nav439703513" class="t967 t967__hidden t967__positionfixed " style="background-color: rgba(255,255,255,1); box-shadow: 0px 1px 3px rgba(0,0,0,0.20);" data-bgcolor-hex="#ffffff" data-bgcolor-rgba="rgba(255,255,255,1)" data-navmarker="nav439703513marker" data-appearoffset="" data-bgopacity-two="" data-menushadow="20" data-bgopacity="1" data-menu-items-align="center" data-menu="yes">
				<div class="t967__maincontainer ">
					<div class="t967__top" style="height:8vh;">

						<div class="t967__logo">
							<div style="display: block;"> <a href="/" style=""> <img src="http://retreatlatvia/wp-content/uploads/tilda/537641/pages/27234823/tild3262-3661-4436-a261-323061336161___3.png" class="t967__imglogo t967__imglogomobile" imgfield="img" style="max-width: 300px; width: 300px;" alt=""> </a> </div>
						</div>

						<div class="t967__listwrapper t967__mobilelist">
							<ul class="t967__list">

							<?php foreach ( $header_menu_items as $header_menu_item ) : ?>

								<li class="t967__list-item" style="padding:0 50px 0 0;">
									<a class="t-menu__link-item" 
									   href="<?php echo $header_menu_item->url; ?>" 
									   data-menu-submenu-hook="" 
									   style="color:#2d3338;font-weight:300;font-family:'Montserrat';" 
									   data-menu-item-number="<?php echo $key + 1 ?>">
									    <?php echo $header_menu_item->title; ?>
									</a>
								</li>

							<?php endforeach; ?>

								<!-- <li class="t967__list-item" style="padding:0 50px 0 0;"><a class="t-menu__link-item" href="#rec439703519" data-menu-submenu-hook="" style="color:#2d3338;font-weight:300;font-family:'Montserrat';" data-menu-item-number="1">About us</a> </li>
								<li class="t967__list-item" style="padding:0 50px;"><a class="t-menu__link-item" href="#rec439703521" data-menu-submenu-hook="" style="color:#2d3338;font-weight:300;font-family:'Montserrat';" data-menu-item-number="2">Services</a> </li>
								<li class="t967__list-item" style="padding:0 50px;"><a class="t-menu__link-item" href="#rec474921632" data-menu-submenu-hook="" style="color:#2d3338;font-weight:300;font-family:'Montserrat';" data-menu-item-number="3">Group retreats</a> </li>
								<li class="t967__list-item" style="padding:0 50px;"><a class="t-menu__link-item" href="#rec439703528" data-menu-submenu-hook="" style="color:#2d3338;font-weight:300;font-family:'Montserrat';" data-menu-item-number="4">Archetype Rooms</a> </li>
								<li class="t967__list-item" style="padding:0 0 0 50px;"><a class="t-menu__link-item" href="#rec439703540" data-menu-submenu-hook="" style="color:#2d3338;font-weight:300;font-family:'Montserrat';" data-menu-item-number="5">Contacts</a> </li> -->
							</ul>
						</div>

						<div class="t967__additionalwrapper">
							<div class="t967__additional-descr t967__additionalitem" style="color:#2d3338;font-weight:300;">
								+ 371 256 45 213
							</div>
							<div class="t967__button-wrap">
								<a href="#popup:myform1" 
								   target="" 
								   class="t967__button t-btn t-btn_md " 
								   style="color:#2d3338;background-color:#aedb01;border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;" 
								   role="button" 
								   aria-haspopup="dialog">
									Request a callback
								</a>
							</div>
						</div>

					</div>
					<div class="t967__bottom" style="height:20;">
						<div class="t967__bottomwrapper" style="height:20;">
							<div class="t967__listwrapper t967__desktoplist">

								<ul class="t967__list t967__menualign_center" style="">

								<?php foreach ( $header_menu_items as $key => $header_menu_item ) : ?>

									<li class="t967__list-item" style="padding:0 50px 0 0;">
										<a class="t-menu__link-item" 
										   href="<?php echo $header_menu_item->url; ?>" 
										   data-menu-submenu-hook="" 
										   style="color:#2d3338;font-weight:300;font-family:'Montserrat';" 
										   data-menu-item-number="<?php echo $key + 1 ?>">
											<?php echo $header_menu_item->title; ?>
										</a>
									</li>

								<?php endforeach; ?>

								<!-- <li class="t967__list-item" style="padding:0 50px 0 0;"><a class="t-menu__link-item" href="#rec439703519" data-menu-submenu-hook="" style="color:#2d3338;font-weight:300;font-family:'Montserrat';" data-menu-item-number="1">About us</a> </li>
									<li class="t967__list-item" style="padding:0 50px;"><a class="t-menu__link-item" href="#rec439703521" data-menu-submenu-hook="" style="color:#2d3338;font-weight:300;font-family:'Montserrat';" data-menu-item-number="2">Services</a> </li>
									<li class="t967__list-item" style="padding:0 50px;"><a class="t-menu__link-item" href="#rec474921632" data-menu-submenu-hook="" style="color:#2d3338;font-weight:300;font-family:'Montserrat';" data-menu-item-number="3">Group retreats</a> </li>
									<li class="t967__list-item" style="padding:0 50px;"><a class="t-menu__link-item" href="#rec439703528" data-menu-submenu-hook="" style="color:#2d3338;font-weight:300;font-family:'Montserrat';" data-menu-item-number="4">Archetype Rooms</a> </li>
									<li class="t967__list-item" style="padding:0 0 0 50px;"><a class="t-menu__link-item" href="#rec439703540" data-menu-submenu-hook="" style="color:#2d3338;font-weight:300;font-family:'Montserrat';" data-menu-item-number="5">Contacts</a> </li> -->
								
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<style>@media screen and (max-width: 980px) {
				#rec439703513 .t967__leftcontainer{
				padding: 20px;
				}
				}
				@media screen and (max-width: 980px) {
				#rec439703513 .t967__imglogo{
				padding: 20px 0;
				}
				}
			</style>
			<style>@media screen and (max-width: 980px) {
				#rec439703513 .t967__mobile{
				background-color: #ffffff;
				}
				}
			</style>
			<script> 
				t_onReady(function() {
				t_onFuncLoad('t_menu__highlightActiveLinks', function(){t_menu__highlightActiveLinks('.t967__desktoplist .t967__list-item a');});
				t_onFuncLoad('t_menu__findAnchorLinks', function(){t_menu__findAnchorLinks('439703513', '.t967__desktoplist .t967__list-item a');});
				});
				t_onFuncLoad('t_menu__setBGcolor', function(){
				window.addEventListener('resize', t_throttle(function() {
				t_menu__setBGcolor('439703513', '.t967');
				}));
				});
				t_onReady(function() {
				t_onFuncLoad('t_menu__setBGcolor', function(){t_menu__setBGcolor('439703513', '.t967');});
				});
			</script>
			<script> 
				t_onReady(function() {
				var rec = document.querySelector('#rec439703513');
				if(!rec) return;
				var wrapperBlock = rec.querySelector('.t967');
				if(!wrapperBlock) return;
				t_onFuncLoad('t967_createMobileMenu', function(){t967_createMobileMenu('439703513', 'yes');});
				});
			</script>
			<style>#rec439703513 .t-menu__link-item{
				-webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
				transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out; 
				position: relative;
				}
				#rec439703513 .t-menu__link-item:not(.t-active):not(.tooltipstered)::after {
				content: '';
				position: absolute;
				left: 0;
				bottom: 20%;
				opacity: 0;
				width: 100%;
				height: 100%;
				border-bottom: 0px solid #2d3338;
				-webkit-box-shadow: inset 0px -1px 0px 0px #2d3338;
				-moz-box-shadow: inset 0px -1px 0px 0px #2d3338;
				box-shadow: inset 0px -1px 0px 0px #2d3338;
				-webkit-transition: all 0.3s ease;
				transition: all 0.3s ease;
				}
				#rec439703513 .t-menu__link-item.t-active:not(.t978__menu-link){
				color:#2d3338 !important; font-weight:300 !important; }
				#rec439703513 .t-menu__link-item.t-active::after {
				content: '';
				position: absolute;
				left: 0;
				-webkit-transition: all 0.3s ease;
				transition: all 0.3s ease;
				opacity: 1;
				width: 100%;
				height: 100%;
				bottom: -0px;
				border-bottom: 0px solid #2d3338;
				-webkit-box-shadow: inset 0px -1px 0px 0px #2d3338;
				-moz-box-shadow: inset 0px -1px 0px 0px #2d3338;
				box-shadow: inset 0px -1px 0px 0px #2d3338;
				}
				#rec439703513 .t-menu__link-item:not(.t-active):not(.tooltipstered):hover{
				color: #2d3338 !important; }
				#rec439703513 .t-menu__link-item:not(.t-active):not(.tooltipstered):hover::after{
				opacity: 1;
				bottom: -0px; }
				@supports (overflow:-webkit-marquee) and (justify-content:inherit)
				{
				#rec439703513 .t-menu__link-item,
				#rec439703513 .t-menu__link-item.t-active {
				opacity: 1 !important;
				}
				}
			</style>
			<!--[if IE 8]>
			<style>#rec439703513 .t967 {
				filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9ffffff', endColorstr='#D9ffffff');
				}
			</style>
			<![endif]-->
		</div>

		<!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a> -->