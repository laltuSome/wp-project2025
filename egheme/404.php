<?php get_header();?>

<!-- main -->
<main class="main">
	<!-- wraper_error_main -->
	<div class="error-bg" style="background:url('<?php echo $theme_options['error-img']['url'];?>')">
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					    <div class="error-content">
<h4>Menu</h4>
 


<ul class="footer-menu error">
   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'footer-menu',
'container'      => '',
'container_class'  => '',
'container_id'     => '',
'menu_class'     => 'menu',
'menu_id'      => 'menu-bg',
'echo'         => true,
'fallback_cb'    => 'wp_page_menu',
'before'       => '',
'after'        => '',
'link_before'    => '',
'link_after'     => '',
'items_wrap'     => '%3$s',
'depth'        => 0,
'walker'       => '' );
?>
              <?php wp_nav_menu( $args ); ?>
</ul>


    </div>
				</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					    <div class="error-content">
<h4>Services</h4>
 


<ul class="footer-menu error">
   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'services-menu',
'container'      => '',
'container_class'  => '',
'container_id'     => '',
'menu_class'     => 'menu',
'menu_id'      => 'menu-bg',
'echo'         => true,
'fallback_cb'    => 'wp_page_menu',
'before'       => '',
'after'        => '',
'link_before'    => '',
'link_after'     => '',
'items_wrap'     => '%3$s',
'depth'        => 0,
'walker'       => '' );
?>
              <?php wp_nav_menu( $args ); ?>
</ul>


    </div>
				</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					    <div class="error-content">
<h4>Insurance</h4>
 


<ul class="footer-menu error">
   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'insurance-menu',
'container'      => '',
'container_class'  => '',
'container_id'     => '',
'menu_class'     => 'menu',
'menu_id'      => 'menu-bg',
'echo'         => true,
'fallback_cb'    => 'wp_page_menu',
'before'       => '',
'after'        => '',
'link_before'    => '',
'link_after'     => '',
'items_wrap'     => '%3$s',
'depth'        => 0,
'walker'       => '' );
?>
              <?php wp_nav_menu( $args ); ?>
</ul>


    </div>
				</div>

			</div>
			<!-- row -->
		</div>
	</div>
	<!-- wraper_error_main -->
</main>
<!-- main -->

<?php get_footer();?>