<?php get_header(); ?>
<div id="main">
	<div id="content">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content();?>
		</div>
	</div>
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
</div><!-- end of main div -->
<?php get_footer(); ?>
