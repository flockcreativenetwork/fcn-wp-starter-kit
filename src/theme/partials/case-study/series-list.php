<?php $series = get_field('series_list') ?>

<div class="container">	
	<!-- site-content -->
        <div class="series-list">
            <h2 class="section-title -two-color"> Daftar Materi <span class="blue"> <?php the_title() ?> </span></h2>
            <div class="row">
                <?php 
                foreach($series as $post) : 
                    setup_postdata($post); 
                    get_template_part( 'content', get_post_format() );
                endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>
</div>
