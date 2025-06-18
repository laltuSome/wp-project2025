<?php /* Template Name: Home Template */ ?>

<?php get_header();?>


<section class="section section-wel">
  <div class="container">
    <div class="row justify-content-center">
      
      <div class="col-12">
        <div class="page-content text-center mb-5">
          <h2 class="mb-2"><?php the_field('why_choose_title'); ?></h2>
          <?php the_field('why_choose_description'); ?>
          

        </div>
      </div>

      <?php if( have_rows('why_choose_slide') ): ?>
  <?php while( have_rows('why_choose_slide') ): the_row(); 
    $icon = get_sub_field('icon');
    $title = get_sub_field('title');
    $desc = get_sub_field('description'); 
  ?>
    <div class="col-lg-4 col-12">
      <div class="icon-hoder">
        <div class="left-icon">
          <?php if ($icon): ?>
            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
          <?php endif; ?>
        </div>
        <div class="right-icon-data">
          <h3><?php echo esc_html($title); ?></h3>
          <p><?php echo wp_kses_post($desc); ?></p>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>




    </div>
  </div>

<?php
$left_image = get_field('left_image');
$right_image = get_field('right_image');
?>

<div class="left-img-bg">
  <?php if ($left_image): ?>
    <img src="<?php echo esc_url($left_image['url']); ?>" alt="<?php echo esc_attr($left_image['alt']); ?>" sizes="">
  <?php endif; ?>
</div>

<div class="right-img-bg">
  <?php if ($right_image): ?>
    <img src="<?php echo esc_url($right_image['url']); ?>" alt="<?php echo esc_attr($right_image['alt']); ?>" sizes="">
  <?php endif; ?>
</div>


</section>


<section class="section section-services overflow-visible">
  <div class="container">
    <div class="row justify-content-center mb-4">
 <div class="col-lg-8 col-12">
        <div class="page-content text-left">
          <h2 class="mb-2"><?php the_field('service_title'); ?></h2>
          <?php the_field('service_description'); ?>
          

        </div>
      </div>

      <div class="col-lg-4 col-12">
      <div class="btn-slider">
  <div class="custom-prev"><i class="fa fa-angle-left"></i></div>
  <div class="custom-next"><i class="fa fa-angle-right"></i></div>
      </div>
      </div>
    </div>
  </div>

<div class="container-fluid">
<?php if( have_rows('services_slider') ): ?>
<div class="swiper-container services-swiper swiper">
  <div class="swiper-wrapper">

    <?php while( have_rows('services_slider') ): the_row(); 
      $title = get_sub_field('title');
      $desc = get_sub_field('description');
      $link = get_sub_field('link');
      $image = get_sub_field('image');
    ?>
    <div class="swiper-slide">
      <div class="slide-item">
        
        <!-- Left Text -->
        <div class="slide-text">
          <h3><?php echo esc_html($title); ?></h3>
          <p><?php echo wp_kses_post($desc); ?></p>
          <?php if ($link): ?>
            <a href="<?php echo esc_url($link); ?>" class="read-more-icon">
              <i class="fa fa-angle-right"></i>
            </a>
          <?php endif; ?>
        </div>

        <!-- Right Image -->
        <div class="slide-image" >
          <?php if ($image): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="max-width: 100%; height: auto;">
          <?php endif; ?>
        </div>

      </div>
    </div>
    <?php endwhile; ?>

  </div>
  


 
</div>
<?php endif; ?>

</div>

</section>


<?php 
$cta_bg_image = get_field('cta_bg_image');
$cta_title = get_field('cta_title');
$cta_content = get_field('cta_content');
$cta_button_text = get_field('cta_button_text');
$cta_button_link = get_field('cta_button_link');


?>
<section class="section section-ct-bg overflow-visible relativ-class" style="background-image: url('<?php echo esc_url($cta_bg_image); ?>');">
  <div class="bathcestop"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clipart-left2.png" alt="About Image"></div>
  <div class="bathces"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clipart-left2.png" alt="About Image"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="cta-holder text-center">
          <?php if ($cta_title): ?>
            <h2><?php echo esc_html($cta_title); ?></h2>
          <?php endif; ?>

          <?php if ($cta_content): ?>
            <p><?php echo wp_kses_post($cta_content); ?></p>
          <?php endif; ?>

          <div class="btn-cta-group">
           
              <a href="tel:<?php echo $theme_options['phone'];?>"><?php echo $theme_options['phone'];?></a>
          

            <?php if ($cta_button_link && $cta_button_text): ?>
              <a href="<?php echo esc_url($cta_button_link); ?>"><?php echo esc_html($cta_button_text); ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
$about_image = get_field('about_image');
$about_title = get_field('about_title');



$about_image_url = is_array($about_image) ? $about_image['url'] : $about_image;
?>

<section class="section section-about overflow-visible">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-12">
        <div class="image-holder">
          <div class="bathces1"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clipart-left2.png" alt="About Image">
</div>
          <?php if ($about_image_url): ?>
            <img src="<?php echo esc_url($about_image_url); ?>" alt="About Image">
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="page-content text-left ps-lg-4 ps-sm-0 pt-lg-0 pt-sm-4">
          <?php if ($about_title): ?>
            <h2 class="mb-2"><?php echo esc_html($about_title); ?></h2>
          <?php endif; ?>
          <?php the_field('about_content'); ?>


        </div>
      </div>
    </div>
  </div>
</section>

<?php
$bg_image = get_field('whate_bg_image');
$bg_image_url = is_array($bg_image) ? $bg_image['url'] : $bg_image;

$title = get_field('whate_titel');
$content = get_field('whate_content');
?>

<section class="section section-whate-we" style="background-image: url('<?php echo esc_url($bg_image_url); ?>');">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="page-content white-text text-left pe-lg-3 pe-sm-0">
          <?php if ($title): ?>
            <h2 class="mb-3"><?php echo esc_html($title); ?></h2>
          <?php endif; ?>

          <?php if ($content): ?>
            <div class="mb-4"><?php echo wp_kses_post($content); ?></div>
          <?php endif; ?>

          <?php if (have_rows('whate_box')): ?>
            <ul>
              <?php while (have_rows('whate_box')): the_row(); 
                $box_title = get_sub_field('box_title');
                $box_description = get_sub_field('box_description');
              ?>
                <li class="box-holder">
                  <?php if ($box_title): ?>
                    <h3><?php echo esc_html($box_title); ?></h3>
                  <?php endif; ?>

                  <?php if ($box_description): ?>
                    <p><?php echo wp_kses_post($box_description); ?></p>
                  <?php endif; ?>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
          
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section-testimon">
  <div class="container">
    <div class="row">
<div class="col-10">
<div class="page-content text-center">

  <?php 
$yelb = get_field('yelbtch');
if( !empty( $yelb ) ): ?>
    <img class="yelp-btn" src="<?php echo esc_url($yelb['url']); ?>" alt="<?php echo esc_attr($yelb['alt']); ?>" />
<?php endif; ?>

          <h2 class="mb-2"><?php the_field('testimonials_title'); ?></h2>
    </div>



<div class="testimonial-wrapper">
  <div class="swiper testimonial-slider">
    <div class="swiper-wrapper">
      <?php
      $args = array('post_type' => 'testimonial', 'posts_per_page' => -1);
      $query = new WP_Query($args);
      while ($query->have_posts()) : $query->the_post(); ?>
        <div class="swiper-slide">
          <div class="testimonial-box">
               
            <p class="testimonial-desc"> <span class="quote-icon-left">❝</span><?php the_content(); ?><span class="quote-icon-right">❞</span></p>
 
            <div class="reviewer-info">
              <?php if (has_post_thumbnail()): ?>
                <img class="reviewer-thumb" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Reviewer">
              <?php endif; ?>
              <h4 class="reviewer-title"><?php the_title(); ?></h4>
             <?php if (has_excerpt()): ?>
  <span class="reviewer-location"><?php echo get_the_excerpt(); ?></span>
<?php endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <!-- Navigation -->
    <div class="testimonial-button-prev">←</div>
    <div class="testimonial-button-next">→</div>
  </div>
</div>



</div>

    </div>
  </div>
</section>



<?php get_footer();?>