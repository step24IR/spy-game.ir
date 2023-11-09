<?php /* Template Name: index */ ?>

<?php

$categories = get_the_category();

/*if ( ! empty( $categories ) ) {
    echo esc_html( $categories[0]->slug );
}*/





if($categories[0]->slug == "blog"  ) {

    include('posts.php');

} else{


  include ('/home.php');

}




?>
