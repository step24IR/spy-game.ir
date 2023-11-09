<?php /* Template Name: posts
Template Post Type: post,page,download,product */
?>

<?php get_header(); ?>
<div dir="rtl">



    <div >
        <div >
            <div class="d-flex justify-content-center flex-wrap">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => '6',
                        'category_name' => 'blog',
                        'paged' => $paged,
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                        include('item_post.php');
                    endwhile; endif;/* rewind or continue if all posts have been fetched */ ?>


            </div>
            <?php include('pagination.php'); ?>
        </div>



    </div>

    <!--Start content-->






</div>

<?php get_footer(); ?>