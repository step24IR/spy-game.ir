<?php
function register_my_menus()
{
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'menu_popular' => 'menu_popular',

    ));
}

add_action('init', 'register_my_menus');

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    set_post_thumbnail_size(369, 227);
}



function getblogposts($atts, $content = null)
{
    extract(shortcode_atts(array(
        'posts' => 1,
    ), $atts));

    $return_string = '<h3>' . $content . '</h3>';
    $return_string .= '<ul>';
    query_posts(array('orderby' => 'date', 'order' => 'DESC', 'showposts' => $posts));
    if (have_posts()) :
        while (have_posts()) : the_post();
            $return_string .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a>';
            $return_string .= '<div class="excerpt">' . get_the_excerpt() . '</div></li>';
        endwhile;
    endif;
    $return_string .= '</ul>';

    wp_reset_query();
    return $return_string;
}

function new_excerpt_more($more)
{
    return ' <a class="read-more" href="' . get_permalink(get_the_ID()) . '">Continue reading</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');
function custom_excerpt_length($length)
{
    return 20;
}

add_filter('excerpt_length', 'custom_excerpt_length', 100);


/*
 * Set post views count using post meta//functions.php
 */
function customSetPostViews($postID)
{

    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);

    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }


    return $count+40000;
}

function setPostViews($postID)
{

    $user_ip = $_SERVER['REMOTE_ADDR']; //retrieve the current IP address of the visitor
    $key = $user_ip . 'x' . $postID; //combine post ID & IP to form unique key
    $value = array($user_ip, $postID); // store post ID & IP as separate values (see note)
    $visited = get_transient($key); //get transient and store in variable

    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);


    //check to see if the Post ID/IP ($key) address is currently stored as a transient
    if (false === ($visited)) {

        set_transient($key, $value, 60 * 60 * 12);

        if ($count == '') {
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }

    } else {

        if ($count == '') {
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }

    }


    return $count+15000;

}


function my_custom_redirect() {
    if( is_page( 'بلاگ' ) ) {
        wp_redirect( 'https://spy-game.ir/blog', 301 );
        exit;
    }
}
add_action( 'template_redirect', 'my_custom_redirect' );



function redirect_404_posts() {
    if (is_404()) {
        wp_redirect(home_url(), 301);
        exit();
    }
}
add_action('template_redirect', 'redirect_404_posts');