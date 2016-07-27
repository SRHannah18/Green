

<div class="guest_summary width">
<!-- Guest Avatar -->
	<?php $image = wp_get_attachment_image_src(get_field('guest_avatar'), 'full'); ?>
	<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('guest_avatar')) ?>" />

	<?php $episode_number = get_post_meta( get_the_ID(), 'episode_number', true );?>
	
	<!-- Guest Name -->
	<div class="padbottom">
		<p>Listen to </p><h2><?php the_field('guest_name'); ?></h2><p> in Episode <?php echo $episode_number; ?></p>
	</div>
	<!-- Title -->
	<h1 class="textcenter"><?php the_title(); ?></h1>

	<!-- Guest Bio -->
	<h3><?php the_field('summary');?></h3>

</div>