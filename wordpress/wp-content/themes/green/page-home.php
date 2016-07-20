<!-- Home Page for Green Podcast.
	Needs to show, Logo or title, six episode avatars, guest names, and excerpt.
	Also Header and Footer. -->


<?php get_header(); ?>

<!-- // Template Name: Home -->



	<?php 
	if( have_posts() ):

		while( have_posts() ): the_post(); ?>


			<?php get_template_part('content', get_post_format()); ?>  <!-- this gets the content from content.php the same as the 3 lines below -->

			<!-- <h3><?php the_title(); ?></h3>

			// <div class="thumbnail-img"> <?php the_post_thumbnail(); ?></div> ***had to remove string thumbnail

			<p><?php the_content(); ?></p> -->

			<?php get_the_excerpt();
				the_excerpt();?>
		<?php endwhile;

	endif;	
	?>

<?php get_footer(); ?>