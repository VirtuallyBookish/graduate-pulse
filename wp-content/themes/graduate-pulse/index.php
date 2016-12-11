<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div class="row feature-posts">
                <div class="col-sm-12 feature-col">
                <?php query_posts('category_name=feature'); ?>
                <?php
    			if ( have_posts() ) : while ( have_posts() ) : the_post();
    				get_template_part( 'template-parts/post-listing/feature-post', get_post_format() );

    			endwhile; endif;
    			?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row highlight-posts">
                <div class="col-sm-12 highlight-col">
                <?php query_posts('category_name=highlight'); ?>
                <?php
    			if ( have_posts() ) : while ( have_posts() ) : the_post();

    				get_template_part( 'template-parts/post-listing/highlight-post', get_post_format() );

    			endwhile; endif;
    			?>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php query_posts(array('category__not_in' => array(2,3))); ?>
                <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/post-listing/normal-post', get_post_format() );

                endwhile; endif;
                ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
