<article class="single-post__wraper">
    <div class="single-post__meta">
        <div class="row">
            <div class="col-md-8">
                <span class="d-flex flex-align-center">
                    <span class="post-author-initial"> <?php echo substr(get_the_author_meta('display_name'), 0, 1)?></span>
                    <span class="post-author-name"> <?php echo get_the_author_meta('display_name') ?></span>
                    <span class="post-date"><?php echo get_the_date() ?></span>
                </span>
            </div>
        </div>
    </div>
    <div class="featured-image">
        <?php the_post_thumbnail() ?>
    </div>
    <div class="single-post__content">
        <div class="content-header">
        <?php 
            $categories = get_the_category();
            $cat_output = '';
            $separator = ', ';
            if ( $categories) { ?>

                <div class="post-categories">
                    <?php 
                        foreach($categories as $category) {
                            $output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $separator;
                        }
                        echo trim( $output, $separator);
                    ?>
                </div>

            <?php } ?>
            <!-- End Categories -->
            <h2 class="post-title text-display dark"> <?php the_title() ?></h2>
        </div>
        <div class="content-body">
            <?php the_content() ?>
        </div>
    </div>
</article>


