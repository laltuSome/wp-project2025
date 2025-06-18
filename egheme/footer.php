 
<?php global $theme_options;?>
<div class="footer-main">
<footer class="footer">
<div class="container">
    <div class="row">

<div class="col-lg-3 col-12">
  <div class="footer-info">
<a class="logo-footer" href="<?php echo home_url();?>" >
<img src="<?php echo $theme_options['footer-logo']['url'];?>" alt="Logo" width="127" height="139">
</a>

<div class="footer-contact-list">
            <ul>
              <li>
                <span><i class="fa fa-map-marker"></i></span>
                <?php echo $theme_options['footer-address']; ?>
              </li>
              <li>
                <span><i class="fa fa-phone"></i></span>
                <a href="tel:<?php echo $theme_options['phone']; ?>"> <?php echo $theme_options['phone']; ?></a>
              </li>
              <li>
                <span><i class="fa fa-envelope"></i></span>
                <a href="mailto:<?php echo $theme_options['email-footer1']; ?>"><?php echo $theme_options['email-footer1']; ?></a>
              </li>
            
            </ul>
          </div>

           <ul class="socil-header green-color">
<li><a href="<?php echo $theme_options['social-houzz'];?>"  title="houzz">
<i class="fa fa-houzz"></i>
</a></li>

<li><a href="<?php echo $theme_options['social-yelp'];?>" title="yelp">
<i class="fa fa-yelp"></i>
</a></li>

<li><a href="<?php echo $theme_options['social-facebook'];?>"  title="facebook">
<i class="fa fa-facebook"></i>
</a></li>

<li><a href="<?php echo $theme_options['social-instagram'];?>"  title="instagram">
<i class="fa fa-instagram"></i>
</a></li>


</ul>
</div>
</div>

<div class="col-lg-2 col-12">
  <div class="footer-holder">
  <p class="footer-heading">Important Links</p>
<ul class="footer-menu">
   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'Footer Menu',
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

<div class="col-lg-4 col-12">
  <div class="footer-holder">
  <p class="footer-heading">Services</p>
<ul class="footer-menu">
   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'Services footer1',
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


<div class="col-lg-3 col-12">
    <div class="footer-holder">
<ul class="footer-menu mt-5">
   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'Services footer2',
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
  </div>



  
</footer>

<div class="foot-menu-copy">
    <div class="container">
      <div class="row justify-content-between align-items-center">
     <div class="col-lg-3 col-12"><div class="min-height1"></div></div>

         
  <div class="col-lg-9 col-12">
    <p class="text-copy">© <?php echo date('Y'); ?> | emerald green plumbing, All Rights Reserved.</p>
  </div>
          
  
</div>
    </div>
  </div>

 </div>



    


<?php wp_footer(); ?>
</body>
</html>
