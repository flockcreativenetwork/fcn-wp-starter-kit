<?php get_header(); ?>
<!-- container -->
<div class="container">
    <div class="row">
        <div class="col-md-12 col-12">
            <!-- site-content -->
            <div class="single-content single">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        if ( get_post_format() == false ) {
                            get_template_part( 'content', 'single-case-study' );
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
    </div>
</div>
<!-- container -->

<?php 
    if(have_rows('series_list')) {
        get_template_part('./partials/case-study/series-list');
    }
?>
<?php get_footer(); ?>
