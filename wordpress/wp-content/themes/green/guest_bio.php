
<div class="bio_container">
	<div class="guest_bio">
	<!-- Avatar -->
		<?php $image = wp_get_attachment_image_src(get_field('guest_avatar'), 'thumbnail'); ?>
		<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('guest_avatar')) ?>" class="avatar_bio" />

		<!-- Name -->
		<p>More About </p><h2><?php the_field('guest_name');?></h2> 

		<!-- Bio -->
		<h3><?php the_field('guest_bio');?></h3>

	</div>
</div>