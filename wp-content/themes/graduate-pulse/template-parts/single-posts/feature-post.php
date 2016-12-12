<div class='container-fluid single-feature-post-image' style="background-image: linear-gradient(rgba(20,20,20, .4), rgba(20,20,20, .4)), url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full')[0] ?>');">
    <div class='row'>
        <div class='col-xs-12 feature-headings-col'>
            <div class='feature-headings'>
                <h1 class='single-feature-title'><?php echo the_title() ?></h1>
                <div class='single-feature-meta-wrapper'>
                    <p>By <a href=''><?php the_author(); ?></a> | <?php the_date() ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='container single-feature-content'>
    <div class='row'>
        <div class='col-md-12'>
            <?php the_content(); ?>
        </div>
    </div>
</div>
