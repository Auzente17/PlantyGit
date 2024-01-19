<?php

/* Enqueue des styles du thème enfant */
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()

{
    /* Enqueue du style du thème parent */
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    /* Enqueue du style du thème enfant */
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'), wp_get_theme()->get('Version'));
}

add_filter('wp_nav_menu_items', 'add_link_admin', 10, 2);
	function add_link_admin($items, $args) {
      if(is_user_logged_in() && $args->theme_location === 'main_menu') {
        // Trouver la position de "</li>" après "Nous rencontrer"
        $position = strpos($items, '</li>', strpos($items, 'Nous rencontrer'));
        // Insérer le lien "Admin" avant la position trouvée
        $items = substr_replace($items, '</li><li class="menu-item"><a href="http://localhost:81/Planty/wordpress/wp-admin">Admin</a>', $position, 0);
      
    }

        return $items;
}  

add_filter('wpcf7_autop_or_not', '__return_false');

