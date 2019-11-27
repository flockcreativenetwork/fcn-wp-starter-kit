<?php 
    $categories = get_the_category();
    $categories_by_id = array();
    foreach($categories as $cat ){
        $categories_by_id[$cat->cat_ID] = $cat;
    }

    foreach($categories as $cat ){
        unset($categories_by_id[$cat->category_parent]);
    }

    $args = array(
        'category__in' => array(4),
        'post__not_in' => array(get_the_ID()),
        'posts_per_page'=>10,
        'caller_get_posts'=>1
    );

    $query = new WP_Query($args);
?>

<?php if($query->have_posts()) : ?>
    <aside class="sidebar">
        <h2 class="section-title">Tutorial Terkait</h2>
        <ul class="related-post">
            <?php while($query->have_posts()) : $query->the_post() ?>
                <li class="d-flex align-items-start related-post__item">
                    <div class="related-post__image">
                        <?php the_post_thumbnail('square-thumbnail')?>
                    </div>
                    <div class="related-post__meta">
                        <h4 class="related-post__title">
                            <a href="<?php the_permalink() ?>">  <?php echo substr(get_the_title(), 0, 40) ?>... </a>
                        </h4>
                        <span class="related-post__date">
                            <?php echo get_the_date() ?>
                        </span>
                    </div>
                </li>
            <?php endwhile ?>
            <?php wp_reset_query() ?>
        </ul>
    </aside>
<?php endif ?>