<?php

add_theme_support('post-thumbnails');

function register_my_menus() 
{ 
	register_nav_menus( array( 
	'header-menu' => __( 'Menu de navigation' ))); 
}

add_action( 'init', 'register_my_menus' );

function getNavigationMenu() {  
    $items = wp_get_nav_menu_items('Navigation');  
  
    return $items;  
}

function getHomepageData()  
{  
    $data = [];  
    $data["a-propos"] = [];  
    $data["a-propos"]["titre"] = get_field("titre_a_propos");  
    $data["a-propos"]["contenu"] = get_field("contenu_a_propos"); 
    $data["projets"] = getProjects();
  
    return $data;  
}

function getThumbnailUrlAndAlt($post)  
{  
    $thumbID = get_post_thumbnail_id($post);  
    $thumb = get_post($thumbID);  
    $alt = get_post_meta ( $thumbID, '_wp_attachment_image_alt', true );  
  
    return ["url" => $thumb->guid, "alt" => $alt];  
}

function getProjects()  
{  
    // preparing the request for the posts with the project category  
    $category_id = get_category_by_slug("projet")->term_id;  
    $args = [  
        'numberposts' => 5,  
        'category' => $category_id  
    ];  
  
    // the request  
    $posts = get_posts($args);  
  
    $projects = [];  
  
    // for each of the posts  
    foreach($posts as $post)  
    {  
        $projects[] = [  
            "data" => $post,  
            "image" => getThumbnailUrlAndAlt($post), // retrieve the thumbnails  
            "category" => get_the_category($post->ID)[0]->name // retrieve the name of the subcategory  
        ];  
    }  
  
    return $projects;  
}

