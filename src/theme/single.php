<?php get_header(); ?>
<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <!-- site-content -->
            <div class="single-content single">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        if ( get_post_format() == false ) {
                            get_template_part( 'content', 'single' );
                        } else {
                            get_template_part( 'content', get_post_format() );
                        }
                endwhile;
                else :
                    get_template_part( 'content', 'none' );
                endif;
                ?>
            </div>
            <!-- /site-content -->
        </div>
        <div class="col-md-3">
            <?php get_template_part('./partials/commons/related-post') ?>
        </div>
        
    </div>

    <?php get_template_part('./partials/commons/latest-article') ?>
</div>
<!-- container -->
<?php get_footer(); ?>
