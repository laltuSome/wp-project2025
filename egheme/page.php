<?php
get_header(); 
wp_reset_query();
?>
<?php
while ( have_posts() ) : the_post();
?>

<div class="container">
<?php the_content(); ?>

</div>
<?php 
endwhile;
?>						
<?php get_footer(); ?>
