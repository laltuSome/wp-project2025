<?php /* Template Name: Learn Template */ ?>

<?php get_header();?>

<?php 
  $bg_image = get_field('section_bg_image');
  $bg_url = $bg_image ? esc_url($bg_image['url']) : '';
?>
<section class="section section-wel" style="background-image: url('<?php echo $bg_url; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="container">
    <div class="row justify-content-center">
      
      <div class="col-lg-6 col-12 order-lg-0 order-0 mb-4">
        <div class="page-content">
          <h2><?php the_field('section_title'); ?></h2>
          <?php the_field('section_description'); ?>
          
        </div>
      </div>

      <div class="col-lg-6 col-12 order-lg-1 order-1 mb-4">
              <div class="img-hoder">
        <?php 
          $image = get_field('section_image');
          if ($image): 
        ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endif; ?>
      </div>
</div>

 

      <div class="col-lg-6 col-12 order-lg-3 order-4 mb-4">
              <div class="img-hoder">
        <?php 
          $image2 = get_field('section_image2');
          if ($image2): 
        ?>
          <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">
        <?php endif; ?>
      </div>
</div>

<div class="col-lg-6 col-12 order-lg-4 order-3 mb-4">
        <div class="page-content">
         
          <?php the_field('section_description2'); ?>
          
        </div>
      </div>
    </div>
  </div>
</section>






<section class="section section-forms overflow-visible">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12">
	<div class="from-holder mb-n4">
		<div class="heading-group2 text-center mb-5 aos-init aos-animate" data-aos="fade-up">
		<h2><?php the_field('form_titel'); ?></h2>
		<p><?php the_field('form_sub_titel'); ?></p>
	</div>
	<?php echo do_shortcode('[contact-form-7 id="2872747" title="Footer-top"]');?>

	</div>

</div>
</div>
</div>
</section>


</section>


<?php get_footer();?>