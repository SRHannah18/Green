

	<?php

	$previous_post = get_adjacent_post(false, '', false);

	?>

	<?php $episode_number = get_post_meta( get_the_ID(), 'episode_number', true );?>

	<?php $previous_episode_number = --$episode_number ; ?>

	
	<div class="next">
		<h4 class="textcenter"> Previous: Episode <?php echo $previous_episode_number;?> with</h4> 

		<div class="next_guest">
			<table>
				<tr>
					<td>
						<?php
						$image = wp_get_attachment_image_src(get_field('guest_avatar',$previous_post->ID), 'thumbnail'); ?>
						<img src="<?php echo $image[0]; ?>" alt="<?php echo (get_field('guest_name', $previous_post->ID)); ?>"/>
					</td>
		
					<td>
						<h6>	
							<?php
							the_field('guest_name',$previous_post->ID);
							?>
						</h6>
					</td>
				</tr>
			</table>	
		</div> 
	

		<h2 class="textcenter">
			<?php
			if(!empty($previous_post)) {
			echo '<a href="' . get_permalink($previous_post->ID) . '" title="' . $previous_post->post_title . '">' . $previous_post->post_title . 
			'</a>';}
			?>
		</h2>
	</div>





