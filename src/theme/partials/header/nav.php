<?php

$args = array(
    'theme_location'    => 'primary_menu',
    'menu_class'        => 'navbar-nav ml-auto w-100 justify-content-end',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'primaryMenu'
);

wp_nav_menu($args);

?>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primaryMenu" aria-controls="primaryMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>