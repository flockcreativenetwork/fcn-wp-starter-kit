<?php 
    $args = array(
        'post__not_in' => array(get_the_ID()),
        'posts_per_page'=>3,
        'caller_get_posts'=>1
    );

    $query = new WP_Query($args);
?>

<?php if($query->have_posts()) : ?>
<div class="latest-article">
    <h2 class="section-title"> Artikel Terbaru </h2>
    <div class="row">
        <?php while($query->have_posts()) : $query->the_post()?>
            <?php get_template_part( 'content', get_post_format() ) ?>
        <?php endwhile ?>
        <?php wp_reset_query() ?>
    </div>
</div>
<?php endif ?>
