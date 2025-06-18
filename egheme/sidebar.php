<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

		 <div class="bar-serachs" id="slide-s">
		 	<h4>Search</h4>
           
                 <form method="get" id="searchform" action="<?php echo home_url();?>">
                <div class="form-row-custom">
                  <input type="search" name="s" id="s" required="" placeholder="Your Search Here...">
                
                  <button type="submit" id="searchsubmit" value="Search"></button>
                </div>
                </form>
        
                    </div>

<ul class="catagori-list">

    <?php wp_list_categories( array(
        'orderby'    => 'name',
        'show_count' => false,
 'title_li' => '<h4 class="side-heading">' . __( 'Browse Categories ', 'textdomain' ) . '</h4>',
        'exclude'    => array( 1 )
    ) ); ?> 
</ul>

<div class="recent-posts">
<h4>Latest Post</h4>
	<?php $postslist = get_posts('numberposts=10&order=DESC'); foreach ($postslist as $post) : setup_postdata($post); ?>

<div class="re-list">
<div class="recent-post-thumbnail"><?php if ( has_post_thumbnail()) : ?>
<a  href="<?php the_permalink(); ?>" > <?php the_post_thumbnail(); ?> </a> <?php endif; ?></div>
<div class="recent-post-data">

<a title="Post: <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
<?php the_time('F j, Y') ?> 


</div>

</div>




<?php endforeach; ?>
</div>

<div class="tag-area">
      <h4>Tags</h4>
		<?php
		$taxonomyName='post_tag';
		$terms_tags = get_terms($taxonomyName, array('hide_empty' => false));   
		  foreach ($terms_tags as $term) {
		?>
      <a href="<?php echo get_term_link( $term );?>" class="tag-style"><?php echo $term->name;?></a>
      <?php } ?>
    </div>


