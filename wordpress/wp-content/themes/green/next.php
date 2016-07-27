




<!-- get ID for first episode -->



<?php
// get 10 recent post IDs from category 1
$the_query = get_posts( 'cat=1&posts_per_page=10&fields=ids' );
if($the_query){
	foreach($the_query as $id) {
		
	}
}

$first_episode_ID[] = array_values($the_query)[0]; 

?>



	<!-- Get Count of Published Posts -->
<?php
	$count_posts = wp_count_posts();
	// var_dump($count_posts);
	$published_posts = $count_posts->publish;

?>

<!-- get current episode number -->
<?php $episode_number = get_post_meta( get_the_ID(), 'episode_number', true );

?>


<?php
	
	if( $episode_number == $published_posts){
		$post_ID = $first_episode_ID;
		
	}

	else{
		$post_ID = get_previous_post();
		
	}
?>


<?php 
	$next_post = get_post($post_ID);
	$title = $next_post->post_title;

?>	



<div class="next">
	<h4 class="textcenter"> Up Next: Episode <?php the_field('episode_number',$next_post->ID);?> with</h4> 

	
	<div class="next_guest">
		<table>
			<tr>
				<td>
					<?php
					$image = wp_get_attachment_image_src(get_field('guest_avatar',$next_post->ID), 'thumbnail'); ?>
					<img src="<?php echo $image[0]; ?>" alt="<?php echo(get_field('guest_name',$next_post->ID)); ?>"/>
				</td>
		
				<td>
					<h6>
						<?php
						the_field('guest_name',$next_post->ID);
						?>
			
					</h6>
				</td>
			</tr>
		</table>
	</div>

	<h2 class="textcenter">
	<?php
		if(!empty($next_post)) {
		echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' . $next_post->post_title . 
		'</a>';}

		
		
	?>
	</h2>




</h1>
</div>