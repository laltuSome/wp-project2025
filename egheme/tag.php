<?php
/**
 * The template for displaying Tag pages
 *
 * @package WordPress
 * @subpackage OrangeSheep
 * @since OrangeSheep 1.0
 */

get_header(); ?>



   <?php if(have_posts()):?>
<section class="section blog-list-page">
<div class="container">
<!--<div class="row">
  <div class="col-12">
    <h2 class="page-titel-tag"><?php printf( __( 'Tag: %s', 'twentyfourteen' ), single_tag_title( '', false ) ); ?></h2>
  </div>
</div>-->
<div class="row">
   <div class="col-lg-8 co-md-8 col-12">
    <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
        $ls_image2 = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' );
        ?>
  
       <article class="post-holder">
 
<div class="artical-rigth">

   <div class="data-post">

        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
        <div class="articl-bar">
          
          <ul>
            <li><i class="fa fa-commenting-o" ></i><?php echo get_comments_number(); ?> comments </li>
            <li class="cat-lis"><i class="fa fa-tags" ></i><?php the_category(); ?></li>
       <li><i class="fa fa-calendar" ></i><?php echo get_the_date('M');?> <?php echo get_the_date('j');?>  <?php echo get_the_date('Y');?> </li>
          </ul>
        </div>
           
      
</div>
  <div class="blogpic-holder">
  <div class="pic">
      <a href="<?php the_permalink();?>" class="holder" style="background:url(<?php the_post_thumbnail_url('large');?>);  ">
        
      </a>
      <img src="<?php bloginfo( 'template_url' ); ?>/images/10-6.png" alt="empty">

  </div> </div>
   <p><?php the_excerpt();?></p>

</div>
      

  
    

  
    
      </article>

  
    <?php   endwhile;?>
          <!-- <button type="button" class="btn btn-lg btn-primary gray-button">Newer</button>
          <button type="button" class="btn btn-lg btn-primary find-btn">Older</button> -->
          <?php next_posts_link(__('Newer', 'kubrick')) ?>
          <?php previous_posts_link(__('Older', 'kubrick')) ?>
        </div>
  
      <?php endif;?>
   <div class="col-lg-4 co-md-4 col-12">
<?php get_sidebar();?>
  </div>
    </div>
  </div>
</section>
<!-- Recent Blog Area Close -->
<?php get_footer();?>
