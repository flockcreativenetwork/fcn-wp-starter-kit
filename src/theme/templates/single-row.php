<?php
/**
* Template Name: Single Row
*/
get_header();
?>

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
    </div>
</div>

<?php get_footer(); ?>