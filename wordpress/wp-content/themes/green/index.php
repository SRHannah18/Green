<?php get_header(); ?>


<div class="main margintop clearfix">			
	
	<?php $posts = query_posts( $query_string . '&orderby=title&order=asc' ); ?>
	<?php 
	if( have_posts() ):

		while( have_posts() ): the_post(); ?>
			
				<div class="summary textcenter">

					<div class="summarycontainer">
						<?php $image = wp_get_attachment_image_src(get_field('guest_avatar'), 'full'); ?>
						<img class="margintop" src="<?php echo $image[0]; ?>" 
						alt="<?php echo get_the_title(get_field('guest_avatar')) ?>"/>

						<h2 class="textcenter padvertical"><?php the_title(); ?></h2>

						

						<h3 class="textcenter"><?php the_field('summary'); ?></h3>

						<h3 class="textcenter padvertical"><a href="<?php the_permalink(); ?>">Check it Out!</a></h3>
	 				</div>
	 			</div>
			
		<?php endwhile;

	endif;	
	?>
</div>  

	<?php get_template_part('home-footer', get_post_format()); ?>
