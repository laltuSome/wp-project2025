<?php global $theme_options;?>
<?php get_header(); ?>
<?php
$term = get_queried_object();
?>
 <!-- service-details-area -->
    <section class="service-details-wrapper">
        <div class="container">
            <!-- service-details-content -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-details-content-outer">
                    <?php the_field('service_information_content', $term); ?>

                    <?php if( have_rows('service_information_content_slide', $term) ): 
                    $counter = 0;
                    ?>
  
                    <?php while( have_rows('service_information_content_slide', $term) ): the_row(); 
                    $counter++;
                   $text1 = get_sub_field('page_content', $term );
                    ?>

                 <?php echo $text1;?>

                     <?php endwhile; ?>
                    <?php endif; ?>
<div class="cat-form"> <?php echo do_shortcode('[contact-form-7 id="89" title="home page form"]') ?></div>
                     <?php the_field('service_information_content2', $term); ?>
                       
                    <div class="type-sce">
 <?php the_field('service_information_type', $term); ?>
                    </div>
                      
                        
                      
                    </div>
                </div>
          
           
            </div>
        </div>
    </section>

    <section class="faq-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                      <div class="service-details-content-item-row service-details-content-faq-box">
                            <div class="page_hdng faq-hdng">
                                <?php the_field('faq_section_main_title', $term); ?>
                            </div>
                             
                              <div class="accordion accordion-flush" id="accordionFlushExample" itemscope itemtype="https://schema.org/FAQPage">                           
                                <?php 
                                $i=0;
                                while( have_rows('faq_section_content', $term ) ): the_row();                           
                                $text9 = get_sub_field('faq_section_title', $term );
                                $text10 = get_sub_field('faq_section_description', $term ); 
                                $i++;                                        
                                ?>
                       
  <div class="accordion-item mb-1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
    <h3 class="accordion-header" id="flush-heading<?php echo $i; ?>" itemprop="name">
      <span class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
     <?php echo $text9;?>
      </span>
    </h3>
    <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i; ?>" data-bs-parent="#accordionFlushExample" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
      <div class="accordion-body" itemprop="text"><?php echo $text10;?> </div>
    </div>
  </div>





              
                                <?php endwhile; ?>                                
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

        <section class="link-sec">
        <div class="container">
            <div class="row link-holder-cont g-0">
                <div class="col-lg-5 col-md-5 col-12">
<?php $categories = array('commercial-roofing','commercial-roof-installation','commercial-roof-repair','commercial-roof-replacement','commercial-roof-inspection','commercial-roof-inspection','commercial-roof-inspection','commercial-roof-inspection'); ?>
              <div class="service-links-widget">
                <h3 class="service-heading">Services</h3>
               <?php if(is_category($categories)) { ?>
               <ul>
                                <?php
                                    $defaults = array(
                                        'theme_location'  => '',
                                        'menu'            => 'commercial',
                                        'container'       => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => '',
                                        'menu_id'         => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'false',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '%3$s',
                                        'depth'           => 0,
                                        'walker'          => ''
                                    );
                                    ?>
                                <?php wp_nav_menu($defaults);?>
                            </ul>
                            <?php } else { ?>
                           <ul>
                                <?php
                                    $defaults = array(
                                        'theme_location'  => '',
                                        'menu'            => 'residential',
                                        'container'       => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => '',
                                        'menu_id'         => '',
                                        'echo'            => true,
                                        'fallback_cb'     => 'false',
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '%3$s',
                                        'depth'           => 0,
                                        'walker'          => ''
                                    );
                                    ?>
                                <?php wp_nav_menu($defaults);?> 
                             </ul>
                            <?php } ?>
                              </div>
                </div>
                  <div class="col-lg-7 col-md-7 col-12 color-dk">
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
  
 
<!-- START OF PRODUCT SCHEMA -->
<?php the_field('product_schema', $term); ?>
<!-- START OF PRODUCT SCHEMA -->

<!-- START OF LOCAL BUSINESS SCHEMA -->
<!-- <?php //the_field('local_business_schema', $term); ?> -->
<!-- END OF LOCAL BUSINESS SCHEMA -->   
<?php get_footer();
