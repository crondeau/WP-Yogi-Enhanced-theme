<?php get_header(); ?> 

<div id="main">
	
	<section id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<?php the_content(); ?>
			
		</article>

	</section><!-- #content -->

	<div id="sidebar" class="quote">
		
		<?php $quote = get_post_meta($post->ID, 'page-quote', true);
		
		  if ($quote) { ?>
			
		   <p><?php echo $quote; ?></p>
		
		  <?php } 
		
		  else { ?>
			
		   <p>"You forgot to insert a quote..."</p>
		
		<?php } ?>
		
	</div>

	<?php endwhile; endif; ?>

</div><!-- #main -->

<?php get_footer(); ?>