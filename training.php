<?php /* Template Name: training */ ?>


<?php get_header(); ?>

<div dir="rtl" class="m-3">
    <!--  <div  class="container d-flex justify-content-center img_page" style="width: 300px">
        <?php /*the_post_thumbnail() */ ?>
    </div>
-->
    <h1 class="p-2">
        <?php echo get_the_title(); ?>
    </h1>

    <div class="border w-75 video_spy" width="75%" id="81674613221">
        <script type="text/JavaScript"
                src="https://www.aparat.com/embed/XgZO0?data[rnddiv]=81674613221&data[responsive]=yes&titleShow=true&autoplay=true"></script>
    </div>


    <div class="mt-2">
        <?php the_content() ?>
    </div>


    <?php include('code/windows_download.php'); ?>


    <div class="tags_post m-2 p-2">
        <?php
        $sep = " ، ";
        $before = "برچسب ها: ";
        $after = "";
        the_tags($before, $sep, $after);
        ?>
    </div>


</div>

<?php get_footer(); ?>
