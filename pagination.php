<div id="page">
    <div class="m-2 d-flex justify-content-center">
        <nav class="pagination">
            <?php
            global $wp_query; // اضافه کردن این خط برای دسترسی به $wp_query
            $big = 999999999; // یک عدد خیلی بزرگ به عنوان مقدار پیش‌فرض

            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages // استفاده از $wp_query به جای $query
            ));
            ?>
        </nav>
    </div>
</div>