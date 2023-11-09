<?php /* Template Name: rules */?>

<?php get_header(); ?>

<div dir="rtl" class="m-3">

    <div  class="container d-flex justify-content-center img_page" style="width: 300px">
        <?php the_post_thumbnail() ?>
    </div>
    <h1  class="p-2">
        <?php echo get_the_title(); ?>
    </h1>


    <?php the_content() ?>


    <?php   include('code/windows_download.php'); ?>

    <
    <div class="tags_post m-2 p-2">
        <?php
        $sep = " ، ";
        $before = "برچسب ها: ";
        $after = "";
        the_tags($before, $sep, $after);
        ?>
    </div>


        <div id="pos-article-display-18211"></div>


    </div>




</div>

<?php get_footer(); ?>
