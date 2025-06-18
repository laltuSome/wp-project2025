<?php /* Template Name: Contact Template */ ?>

<?php get_header();?>

<section class="section section-contatc">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-7 col-md-12 col-12">
			
			<div class="from-shortcode-holder">
				<?php the_field('contact_content'); ?>
				<?php echo do_shortcode('[contact-form-7 id="181" title="contact page"]');?>
			</div>
		</div>
		<div class="col-lg-5 col-md-12 col-12">
		
		<div class="info-holder">
					<h3>Contact Info</h3>
  <ul class="addres-contact">
    
      <li><span><i class="fa fa-phone" ></i> </span> <a href="tel:<?php echo $theme_options['phone'];?>"><?php echo $theme_options['phone'];?></a></li>
        <li><span><i class="fa fa-envelope" ></i></span> <a href="mailto:<?php echo $theme_options['email-footer'];?>"><?php echo $theme_options['email-footer'];?></a></li>
        <li><span><i class="fa fa-map-marker"></i></span> <?php echo $theme_options['address-footer'];?></li>
  </ul>
						</div>

							<div class="map">
							<?php the_field('contact_map'); ?>
						</div>

		</div>
		
	</div>




</div>
</section>





<?php get_footer();?>