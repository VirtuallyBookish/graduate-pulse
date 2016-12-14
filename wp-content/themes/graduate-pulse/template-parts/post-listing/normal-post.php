<div class="normal-blog-post row">
	<div class="col-xs-12">
		<div class="normal-blog-post-meta">
			<?php the_category(' '); ?>
			<p style="float: right"><?php echo get_the_date(); ?></p>
		</div>
	</div>
	<div class="col-xs-5">
		<div class="normal-blog-post-image" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full')[0] ?>');">>
		</div>
	</div>
	<div class="col-xs-6">
		<h4><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h4>
		<p>By <a href="#"><?php the_author(); ?></a></p>
	</div>
</div>
	<!-- <?php //the_content(); ?> -->
