<div class="col-md-4 col-sm-12">
    <div class="card card--post">
        <!-- Post Thubnail -->
        <a href="<?php the_permalink() ?>" class="card-hero">
            <?php the_post_thumbnail() ?>
        </a>

        <!-- Post Body -->
        <div class="card-body">

            <!-- Categories -->
            <?php 
            $categories = get_the_category();
            $cat_output = '';
            $separator = ', ';
            if ( $categories) { ?>

                <div class="card-categories">
                    <?php 
                        foreach($categories as $category) {
                            $output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $separator;
                        }
                        echo trim( $output, $separator);
                    ?>
                </div>

            <?php } ?>
            <!-- End Categories -->
            
            <h2 class="card-title"> <a href="<?php the_permalink() ?>"> <?php the_title() ?> </a></h2>
        </div>


        <!-- Card Footer -->
        <div class="card-footer">
            <div class="card-footer-wrapper d-flex flex-align-center">
                <span class="card-author d-flex flex-align-center">
                    <span class="cart-author-initial"> <?php echo substr(get_the_author_meta('display_name'), 0, 1)?></span>
                    <span class="cart-author-name"> <?php echo get_the_author_meta('display_name') ?></span>
                </span>
                <span class="card-timepost ml-auto">
                    <?php echo get_the_date() ?>
                </span>
            </div>
        </div>
    </div>
</div>
