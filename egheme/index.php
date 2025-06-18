<?php get_header();?>

<section class="section section-blog-list">

<div class="container">
	<div class="row">
	<div class="col-lg-12">
	
 <ul class="nav nav-tabs align-items-center justify-content-center" data-aos="fade-left">
  <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#all">all</a>
    </li>
 <?php 
$terms = get_terms(
    array(
        'taxonomy'   => 'category',
        'hide_empty' => true,
        'exclude' => 1,
    )
);

// Check if any term exists
if ( ! empty( $terms ) && is_array( $terms ) ) {
    // Run a loop and print them all
    foreach ( $terms as $term ) { ?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
    </li>
    <?php } } ; ?>
  
  </ul>


 <div class="tab-content" data-aos="fade-right">
    <div id="all" class="tab-pane fade in active">
    	<div class="row">
 <?php

		 $args = array( 
		 'post_type' => 'post', 
		 'posts_per_page' => -1, 
		 'orderby' => 'menu_order', 
		 'order' => 'DESC' 
		 );

		 query_posts( $args );

		 while ( have_posts() ) : the_post();

		  ?> 


<div class="col-lg-4 col-md-4 col-12">
<div class="servcrs-holder2 matchHeight">
         
         <div class="pic">
  	  <div class="holder" style="background:url(<?php the_post_thumbnail_url('large');?>);  ">
  	  	
  	  </div>
  	  <img src="<?php bloginfo( 'template_url' ); ?>/images/empty-post.png" alt="empty">

  </div>
            <div class="data-text3">
            	
            	<h4><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h4>
            	<span class="entry-date"><?php echo get_the_date( 'j F,Y' ); ?></span>
            	<p><?php the_excerpt() ;?></p>
            	<a class="red-services3" href="<?php the_permalink();?>">Read More <i class="fa fa-angle-right"></i></a>
            </div>
         
           
       </div>
          </div>

  <?php endwhile; ?>


    </div>
    </div>

    <?php
$_terms = get_terms( array('category') );

foreach ($_terms as $term) :

    $term_slug = $term->slug;
    $_posts = new WP_Query( array(
                'post_type'         => 'post',
                'posts_per_page'    => 10, //important for a PHP memory limit warning
                'orderby' => 'ID',
				   		'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => $term_slug,
                    ),
                ),
            ));

    if( $_posts->have_posts() ) :
    	echo '<div id="'. $term->slug.'" class="tab-pane fade">';
   	echo '<div class="row">';
     
     
        while ( $_posts->have_posts() ) : $_posts->the_post();
        ?>
           <div class="col-lg-4 col-md-4 col-12">
<div class="servcrs-holder2 matchHeight">
         
         <div class="pic">
  	  <div class="holder" style="background:url(<?php the_post_thumbnail_url('large');?>);  ">
  	  	
  	  </div>
  	  <img src="<?php bloginfo( 'template_url' ); ?>/images/empty-post.png" alt="empty">

  </div>
            <div class="data-text3">
            	
            	<h4><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h4>
            	<span class="entry-date"><?php echo get_the_date( 'j F,Y' ); ?></span>
            	<p><?php the_excerpt() ;?></p>
            	<a class="red-services3" href="<?php the_permalink();?>">Read More <i class="fa fa-angle-right"></i></a>
            </div>
         
           
       </div>
          </div>
        <?php
        endwhile;
echo '</div>';
      
echo '</div>';
    endif;
    wp_reset_postdata();

endforeach;
?>
<!---this rest add not show acf fild--->
<?php wp_reset_query(); ?>

   

 





</div>
	
	</div>
</div>
</section>




<!-- wraper_search_main -->

<?php get_footer();?>