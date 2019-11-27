<?php get_header(); ?>

<?php 
    $title = 'Pelajari Berbagai <span class="cta"> Studi Kasus! </span>';
    $caption = 'Dengan studi kasus, anda akan terlatih menyelesaikan Real Problem yg ada di lapangan';
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

<?php get_footer(); ?>