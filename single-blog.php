<?php /* Template Name: single-post
  Template Post Type: post,download,product */
?>
<?php get_header(); ?>
    <div dir="rtl">
        <div class="container">
            <div class="my-3 my-md-5">
                <div class="d-flex flex-wrap">
                    <div class="col-12 col-lg-4">
                        <?php the_post_thumbnail() ?>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 p-3">
                        <div class="d-flex">
                            <p class="">
                                عنوان:
                            </p>
                            <h1 class="ms-2 fs-3">
                                <?php the_title(); ?>
                            </h1>
                        </div>
                        <div class="d-flex mt-2 col-12 col-lg-3">
                            <i class="fas icc fa-calendar-alt me-1"></i>
                            <p>تاریخ:</p>
                            <div class="ms-2">
                                <?php echo get_the_date(); ?>
                            </div>
                        </div>
                        <div class="d-flex mt-2 col-12 col-lg-3">
                            <i class="fas icc fa-user-edit me-1"></i>
                            <p>نویسنده:</p>
                            <div class="ms-2">
                                <?php

                                echo get_the_author();


                                ?>
                            </div>
                        </div>
                        <div class="d-flex mt-2  col-12 ">
                            <i class="fas icc fa-eye me-1"></i>
                            <p>تعداد بازدید:</p>
                            <div class="ms-2">
                                <?php
                                customSetPostViews(get_the_ID()); //single.php
                                ?>
                                <?php
                                $post_views_count = get_post_meta(get_the_ID(), 'post_views_count', true);
                                // Check if the custom field has a value.
                                if (!empty($post_views_count)) {
                                    echo $post_views_count;
                                }
                                ?>

                                <?php //popular post query
                                query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num& order=DESC');
                                if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <?php
                                endwhile;
                                endif;
                                wp_reset_query();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap">

                <div class="d-flex flex-column col-md-7 me-md-5 col-12 col-lg-7 me-lg-5 ">
                    <p class="fs-6 ">
                        <?php the_content() ?>
                    </p>
                </div>
                <div class="col-md-4 col-12 col-lg-4 ">
                    <aside>
                        <div class="container d-flex flex-column ">
                            <?php
                            $recent_post = new WP_Query(array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'cat' => '-1',
                                'order' => 'DESC',
                                'orderby' => 'ID',
                                'posts_per_page' => '5',
                                'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
                            )); ?>
                            <?php
                            if ($recent_post->have_posts()) : ?>
                                <div class="d-flex">
                                    <i class="fas fa-square icon-share"></i>
                                    <p class="ps-2">
                                        آخرین مطالب
                                    </p>
                                </div>
                                <?php
                                while ($recent_post->have_posts()) : $recent_post->the_post(); ?>
                                    <li class="list-group-item  ">
                                        <div class="py-2">
                                            <a class="d-flex link-recent"
                                               href="<?php echo get_permalink(); ?>"
                                               target="_blank">

                                                <?php the_post_thumbnail(''); ?>
                                                <div class="d-flex flex-column">
                                                    <h6 class="title-recent-posts "><?php the_title(); ?></h6>
                                                    <div class="d-flex mt-2 date-recnet">
                                                        <i class="fas icc fa-calendar-alt me-1"></i>
                                                        <p>تاریخ:</p>
                                                        <div class="ms-2">
                                                            <?php echo get_the_date(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>

                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>



                        </div>
                </div>

                </aside>
            </div>
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

        <div class="d-flex justify-content-center m-2 p-2 bg-light ">

            <?php

            $comments_args = array(
                // Change the title of send button
                'label_submit' => __('ارسال', 'textdomain'),
                // Change the title of the reply section
                'title_reply' => __('دنبال چه اهنگی هستی؟', 'textdomain'),
                // Remove "Text or HTML to be displayed after the set of comment fields".
                'comment_notes_after' => '',
                // Redefine your own textarea (the comment body).
                'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
            );
            comment_form($comments_args);


            ?>


        </div>


        <div class=" m-3 p-3">

            <ol class="commentlist ">
                <?php
                //Gather comments for a specific page/post
                $comments = get_comments(array(
                    'post_id' => get_the_ID(),
//                            'status' => 'approve' //Change this to the type of comments to be displayed
                ));

                //Display the list of comments
                wp_list_comments(array(
                    'per_page' => 5, //Allow comment pagination
                    'reverse_top_level' => false //Show the oldest comments at the top of the list
                ), $comments);
                ?>
            </ol>

        </div>

    </div>
    </div>

<?php get_footer(); ?>