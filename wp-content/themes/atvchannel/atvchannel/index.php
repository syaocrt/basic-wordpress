
<?php get_header(); ?>


<div id="sidebar" class="widgets-area">
	<?php dynamic_sidebar('sidebar-1'); ?>
</div>

<div>
<p> MAKE SOME CHANGES</p>
<?php
if (have_posts ()) :
	while ( have_posts () ) : the_post ();?>
	<h1><a href="<?php echo get_permalink($ID); ?>"><?php the_title();?></a></h1>
	<i><a href="<?php echo get_the_author_link(); ?>">Author: <?php the_author(); ?></a></i>
	<p> Posted on <?php  echo get_the_time(); ?></p>
	<p><?php the_excerpt();?></p>
	
	<?php endwhile; ?>
 <?php
else :
	echo ('Sorry, no posts were found');
endif;
?>
</div>


<?php get_footer(); ?>