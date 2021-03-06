<?php
/**
 * Master Template. This template will be used to display your blog posts and pages if page.php does not exist.
 *
 * @package blm_basic
 */

get_header(); ?>

<div id="main">
	
	<section id="content">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<p class="date"><?php the_time('F dS, Y'); ?></p>
			
			<?php the_post_thumbnail(); ?>
			
			<?php the_content(__('Read more'));?>

			<?php get_template_part('inc/meta'); ?>

		</article>
		
	<?php comments_template(); ?>
	
	<?php endwhile; else: ?>

	    <h2><?php _e( 'Not Found', 'blm_basic' ); ?></h2>

		<p><?php _e( 'Sorry, you seem to be looking for something that simply is not here.', 'blm_basic' ); ?></p>

	<?php endif; ?>
	
	<?php get_template_part('inc/nav'); ?>
	
	</section>

<?php get_sidebar(); ?>

</div><!-- end of main div -->

<?php get_footer(); ?>