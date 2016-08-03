<!-- ************************************************** -->

<!-- This is the template used for the Podcast Episodes -->

<!-- ************************************************** -->

<?php get_header(); ?>



<!-- Create Variable for Episode Number.  This is needed to eliminate having a previous episode listed
for the first episode and a next episode listed for the last episode  as well as showing the
episod number in the title-->
<?php $episode_number = get_post_meta( get_the_ID(), 'episode_number', true );?>




<?php get_template_part('guest_summary', get_post_format()); ?>




	<!-- Podcast Episode Player. -->
	<?php get_template_part('player', get_post_format()); ?>
	 <!-- end player -->

	

	<!-- Transcript of Episode -->
	<?php get_template_part('transcript', get_post_format()); ?> <!-- end transcript -->


	<?php get_template_part('guest_bio', get_post_format()); ?>

	
	





<!-- Next and Previous Episode -->



<?php get_template_part('next', get_post_format()); ?>








<?php get_footer();?>









