<!-- Post Page -->
<?php /* Template Name: Post Page */ ?>
<?php get_header(); ?>

<!-- Banner -->
<div class="banner">
    <img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" class="img-responsive" alt="Responsive image">
</div>
<hr>

<!-- Page content -->
<div class="container content-body">
    <div class="row">
        <div class="col-md-3 hidden-print hidden-xs hidden-sm">
            <?php if ( is_active_sidebar( 'home_left_1' ) ) : ?>
                <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                    <?php dynamic_sidebar( 'home_left_1' ); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>
        </div>

        <div class="col-md-9 blog-main">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();

                    get_template_part( 'content', get_post_format() );

                endwhile; endif;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>