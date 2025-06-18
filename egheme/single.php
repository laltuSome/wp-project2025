<?php get_header(); ?>
<?php
$terms = get_the_terms( $post->ID, 'category' );
if ( !empty( $terms ) ){
    $term = array_shift( $terms );
}
?>

  <section class="service-details-wrapper">
        <div class="container">
            <!-- service-details-content -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-details-content-outer">

                           <h1><?php the_title(); ?></h1>
                                <?php the_content(); ?>
                    
<div class="cat-form"> <?php echo do_shortcode('[contact-form-7 id="89" title="home page form"]') ?></div>
               
                      
                        
                      
                    </div>
                </div>
          
           
            </div>
        </div>
    </section>
   

     <section class="link-sec mt-5">
        <div class="container">
            <div class="row link-holder-cont g-0">
          
                  <div class="col-lg-12 col-md-12 col-12 color-dk">
<?php
                $loop = new WP_Query( array(
                    'post_type' => 'post',
                    'cat' => $term->term_id ,
                    'posts_per_page' => -1
                ) );
                ?>
<?php if (  $loop->have_posts() ) : ?>
 <div class="service-links-widget">
                <h3>Larn More</h3>
       
            <ul class="ul">
                <?php            
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <li>
               <a href="<?php the_permalink();?>">
                 <?php the_title(); ?>
                     </a>
                </li>
                <?php
                endwhile;               
                ?>
            </ul>
 </div>
<?php endif; ?>
                </div>
            </div>
        </div>
    </section>

   
<?php get_footer();
