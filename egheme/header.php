<?php global $theme_options;?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<!-- COMMON META TAG -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#009de6">
<!-- COMMON META TAG -->
  <!--PAGE TITLE-->
  <title>
    <?php wp_title( '|', true, 'right' ); ?>
    <?php bloginfo( 'name' ); ?>
  </title>
  <!--PAGE TITLE-->
 

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">

<?php wp_head(); ?>


</head>
<body 
      <?php body_class( 'home' ); ?>>



  <!-- scrollup -->
  <div class="scrollup swich<?php echo $theme_options['opt-switch'];?>"><i class="fa fa-arrow-up" ></i></div>
  <!-- scrollup -->



 <div class="box">
 
  <div class="nav-hed">
     
  <a class="logo" href="<?php echo home_url();?>">
<img src="<?php echo $theme_options['header-logo']['url'];?>" alt="Logo" width="171" height="85">
</a>

  </div>
  <ul class="mobile-menu">
              <?php
$args = array(
'theme_location'   => '',
'menu'         => 'mobile',
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

<header class="top-head sticky<?php echo $theme_options['opt-switch2'];?>">

<div class="menubars2">
    <div class="container ">
        <div class="row justify-content-between align-items-center">
    
  <a class="logo" href="<?php echo home_url();?>">
<img src="<?php echo $theme_options['header-logo']['url'];?>" alt="Logo" width="171" height="85">
</a>
     
   <div class="menu-right">
<div class="btn-group-header">
    <ul class="socil-header">
<li><a href="<?php echo $theme_options['social-houzz'];?>"  title="houzz">
<i class="fa fa-houzz"></i>
</a></li>

<li><a href="<?php echo $theme_options['social-yelp'];?>" title="yelp">
<i class="fa fa-yelp"></i>
</a></li>




</ul>
    <ul class="btn-header mobile-hide">
          
   <li><a class="phone-top" href="tel:<?php echo $theme_options['phone'];?>"><?php echo $theme_options['phone'];?></a></li>
                             
                     <li> <a href="#" class="user-btn">Book Service Today</a> </li>        
                                
                                </ul>
  <div class="menu_icon_box">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

</div>

   <nav class="nav">
          <ul id="menu-bg">
                   <?php
$args = array(
'theme_location'   => '',
'menu'         => 'top-menu',
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
        </nav>



      </div>
      

  
    

     
    </div>
</div>
</div>



 
</header>
 





            
        

<div class="section overflow-visible ">
 


  <?php if (is_front_page()) { ?>



  <?php 
    $banner_image = get_field('banner_image'); 
    $banner_title = get_field('banner_title'); 
     $banner_sub_title = get_field('banner_sub_title');
     $yelp = get_field('yelp');
  ?>

  <?php if ($banner_image): ?>
    <div class="banner-home" style="background-image: url('<?php echo esc_url($banner_image['url']); ?>'); background-size: cover; background-position:top center;">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="banner-content">
              <div class="banner-content-holder">
               <?php if ($banner_title): ?>
              <h1 class="banner-title"><?php echo esc_html($banner_title); ?></h1>
            <?php endif; ?>

              <?php if ($banner_sub_title): ?>
           <p><?php echo esc_html($banner_sub_title); ?></p>
            <?php endif; ?>

         

            <a class="ph-number" href="tel:<?php echo $theme_options['phone'];?>"><span>Call:</span> <?php echo $theme_options['phone'];?></a>

<div class="banner-btn-group">
<a class="btn-green" href="#">Book Service Today</a>
<?php if ($yelp): ?>
    <a href="<?php echo $theme_options['social-yelp'];?>"> <img src="<?php echo esc_url($yelp['url']); ?>" alt="<?php echo esc_attr($yelp['alt']); ?>"></a>
<?php endif; ?>


</div>
 </div>
            </div>
           
           
          </div>
        </div>
      </div>
    </div>

  <?php endif; ?>




 <?php }
else if ( is_home() || is_category() || is_archive() || is_search()) { ?>
  <div class="inner-banner">
  <div class="container">
  <div class="row justify-content-center">
<div class="col-12 text-center" data-aos="fade-up">
<h3> blog</h3>

</div>

  </div>
   </div>                        
 
  </div>

  <?php }  elseif ( is_single() ) { ?>
  <!---single---->
  <div class="inner-banner">
  <div class="container">
  <div class="row justify-content-center">
<div class="col-12 text-center" data-aos="fade-up">
<h3> blog</h3>

</div>

  </div>
   </div>                        
 
  </div>
  <!---blog-baner--->
    
<?php }
elseif ( is_404() ) { ?>
 

<?php }
elseif ( is_page(array('contact-us')) ) { ?>
 
 <div class="inner-banner paddin-banner" >
     <div class="container">
  <div class="row">
<div class="col-12 text-center" data-aos="fade-up">

<?php $headline = get_field( 'titel'); ?>
<?php if($headline) { ?>
  <h3><?php the_field( 'titel' ); ?></h3>
<?php } else { ?>
<h3> <?php the_title(); ?></h3>
<?php } ?>

</div>

  </div>
   </div>
   
  </div>

 <?php  } else { ?>
  <?php
// Default image 
$templateDir = get_bloginfo('template_directory');
$defaultImg = "{$templateDir}/assets/images/learn.jpg";

$acfBanner = get_field('banner_image');

if (!empty($acfBanner)) {
    $thumbimg = is_array($acfBanner) ? $acfBanner['url'] : $acfBanner;
}
elseif (has_post_thumbnail()) {
    $thumbimg = get_the_post_thumbnail_url();
}
else {
    $thumbimg = $defaultImg;
}
?>

<div class="inner-banner-new">
    <img src="<?php echo esc_url($thumbimg); ?>" alt="banner">
</div>

   
    
  <?php } ?>
</div>

