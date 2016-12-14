<div class="big-post highlight-post" style="background-image: linear-gradient(rgba(20,20,20, .4), rgba(20,20,20, .4)), url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full')[0] ?>');">
	<div class="highlight-headings">
		<h2 class="big-post-title"><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
		<!-- <p class="feature-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p> -->
		<p class="big-post-meta">Written By <a href="#"><?php the_author(); ?></a></p>
		<?php //the_content(); ?>
	</div>
</div>
