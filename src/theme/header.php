<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Site Verification -->
    <meta name="google-site-verification" content="8QEfjdn7ru5ocwHDXTlSvprNqH5TU2irLQJxOqEPmdY" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
    
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110577987-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-110577987-1');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="navbar navbar-expand-lg">
    <?php get_template_part('./partials/header/brand') ?>
    <?php get_template_part('./partials/header/nav') ?>
</header>
<?php edit_post_link( 'Edit', '<p class="edit-button">', '</p>' ); ?>
