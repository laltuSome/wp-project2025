<?php /* Template Name: About Template */ ?>

<?php get_header();?>



<section class="section section-home1">
	<div class="container">
		<div class="row">
	
		<div class="col-lg-6 col-md-6 col-12 pad-right">
			<div class="wel-texts" >
<?php the_field('services_content'); ?>

	<a href="<?php the_field('residential_url'); ?>" class="services-box" >
<div class="pic-holder">
	<?php $image1 = get_field('residential_image'); ?>
	<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />

</div>
<div class="serv-data">
<?php the_field('residential_content'); ?>
</div>

</a>

</div>
		</div>

		<div class="col-lg-6 col-md-6 col-12 pad-left">
			<a href="<?php the_field('commercial_url'); ?>" class="services-box" >
<div class="pic-holder">
	<?php $image2 = get_field('commercial_image'); ?>
	<img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />

</div>
<div class="serv-data">
<?php the_field('commercial_content'); ?>
</div>

</a>

	<?php $image2 = get_field('contact_image'); ?>
<div class="contact-box" style="background-image:url(<?php echo $image2['url']; ?>);">
	
	<div class="border-holder">
		<img src="<?php echo $theme_options['header-logo']['url'];?>" alt="Logo" width="171" height="85">
		<?php the_field('contact_content'); ?>
		<a class="red-btn" href="<?php the_field('contact_url'); ?>">CONTACT US</a>
	</div>
</div>

		</div>

			</div>



</div>
</section>

<section class="section section-form-about overflow-visible">
<div class="container">
<div class="row">
		
<div class="col-lg-12 col-md-12 col-12 about-form">

	<?php echo do_shortcode('[contact-form-7 id="89" title="home page form"]') ?>


</div>
</div>
</div>
</section>




<?php get_footer();?>