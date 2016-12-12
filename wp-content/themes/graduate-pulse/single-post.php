<?php get_header(); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
    if (in_category(array('feature', 'highlight'))):
        get_template_part('template-parts/single-posts/feature-post', get_post_format());
    endif;
 endwhile; endif;
 ?>
<?php get_footer(); ?>
