<?php
if (comments_open())
    comments_template();


$commenter = wp_get_current_commenter();

$fields = array(
    'author' =>
        '<div class="col-md-4 pt-4 submit-btn">
    <span class="icon-commentbtn1">
         <input type="text" placeholder="نام ونام خانوادگی" class="comment-input input-box w-100 " value="' . esc_attr($commenter['comment_author']) . '" >
    </span>',

    'email' =>
        '<span class="icon-commentbtn2">
       <input type="email" placeholder="پست الکترونیکی" class="text-right comment-input w-100" value="' . esc_attr($commenter['comment_author_email']) . '">
   </span></div>',
);

$comment_form = array(
    'title_reply' => 'پاسخ دهید',
    'title_reply_to' => esc_html__('Leave a Reply to %s :', 'woocommerce'),
    'cancel_reply_link' => '<span class="btn btn-outline-light btn-sm text-primary">(لغو پاسخ)</span>',
    'label_submit' => 'ارسال',
    'class_form' => 'comment-form row px-5',
    'comment_notes_before' => '<p class="comment-notes col-12 mb-3"></p>',
    'submit_button' => '<button class="btn-product  comment-btn">ارسال</button>',
    'comment_field' => '<div class="col-md-8 pt-4 pb-5 text-area-main-comment "><textarea id="comment" name="comment" aria-required="true" rows="4" placeholder="متن خود را تایپ نمایید..."
  class="comment-textarea pt-4 w-90"></textarea>',
    'fields' => $fields,

);

comment_form($comment_form);
if (have_comments()) : ?>
    <ul class="commentlist">
        <?php wp_list_comments(array(
            'style' => 'ul',
            'short_ping' => true,
            'callback' => 'myCustomCommentsList'
        )); ?>
    </ul>
<?php endif; ?>


<?php function myCustomCommentsList($comment, $args, $depth)
{ ?>

    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

        <span class="avatar">
            <?php
            $default_avt = '';
            echo get_avatar($comment, $size = '60', $default = $default_avt);
            ?>
        </span>

        <div class="d-inline-block pr-3 w-100">
            <strong><?php echo get_comment_author(); ?></strong>
            <span class="pr-3 time-comment">
              <?php printf(esc_html__('%1$s at %2$s', 'original-key'), get_comment_date(), get_comment_time()) ?>
            </span>
            <span class="float-left reply">
                <span class="text-muted"> <a href="#"><i class="fas fa-reply text-muted"></i>
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a>
                </span>
            </span>
            <p class="paragragh-comment pt-3"><?php comment_text() ?></p>
        </div>

    </li>
    <?php

}
