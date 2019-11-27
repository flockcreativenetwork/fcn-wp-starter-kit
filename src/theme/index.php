<?php get_header(); ?>

<?php 
    $title = 'Mau <span class="cta"> Upgrade Skill </span> apa hari ini ?';
    $caption = 'Temukan berbagai tutorial dan studi kasus dalam dunia informatika di sini';
    get_page_header($title, $caption);
?>

<!-- container -->
<div class="container">	
	<!-- site-content -->
	<div class="site-content">

		<!-- main-column -->
		<div class="row">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
				?>
		</div>
		<!-- /main-column -->

		<?php
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>

		<div class="pagination side">
			<?php echo paginate_links(); ?>
		</div> 
	</div>
	<!-- /site-content -->
</div>
<!-- /container -->

<?php get_footer(); ?>
