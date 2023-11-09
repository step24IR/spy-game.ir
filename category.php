<?php

$curent_category = get_queried_object();

$category = get_the_category();
$parent = get_category($category[0]->category_parent);
$parent2 = get_category($parent->category_parent);





if ($parent->slug == "blog" ||  $curent_category->slug == "blog"  ) {

    include(TEMPLATEPATH . '/posts.php');

} else {
    include(TEMPLATEPATH . '/home.php');
}

?>
