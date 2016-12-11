<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class='container-fluid'>
    <div class='row'>
        <div class='col-xs-12'>
            Hero image
            title
            Meta content
        </div>
    </div>
</div>

<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            Content
        </div>
    </div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
