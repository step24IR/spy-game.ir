<?php /* Template Name: single-post
  Template Post Type: post,download,product */
?>
<?php

$categories = get_the_category();
if ( ! empty( $categories ) ) {
    $categories =  $categories[0]->slug;
}

if ($categories == "other-games" ) {
    include(TEMPLATEPATH . '/single-blog.php');
}
elseif ($categories == "blog" ) {
    include(TEMPLATEPATH . '/single-blog.php');
}
?>
<?php the_meta(); ?>
