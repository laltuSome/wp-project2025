<?php get_header();?>

<section class="section blog-list-page">
<div class="container">

<div class="row">
	<div class="col-lg-8 col-md-8 col-12">
					<?php if (have_posts()) : ?>
				
						<?php while (have_posts()) : the_post(); ?>
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

						<?php endwhile; ?>

						<!-- search_main_body_list -->
					<!-- search_main_body_pagination -->
					<div class="post-nex">
						<div class="alignleft"><?php next_posts_link('<i class="fa fa-long-arrow-left"></i><span>Back to blog</span>');?></div>
						<div class="alignright"><?php previous_posts_link('<span>Next Post</span> <i class="fa fa-long-arrow-right"></i>');?></div>
					</div>
					<!-- search_main_body_pagination -->
					<?php else : ?>
					<!-- search_main_body_noresult -->
					<div class="search_main_body_noresult">
						<h1>Oh No! No posts found. Try a different search!</h1>
					</div>
					<!-- search_main_body_noresult -->
					<?php endif; ?>
			
					</div>
					
			<div class="col-lg-4 col-md-4 col-12">
<?php get_sidebar();?>
	</div>
		</div>
		<!-- row -->
	</div>
</div>
<!-- wraper_search_main -->

<?php get_footer();?>