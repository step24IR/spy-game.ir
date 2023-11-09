    <div class="card col-12 col-sm-12 col-lg-3 col-md-3 col-xl-3 col-xxl-3" >
        <?php the_post_thumbnail() ?>
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <div class="card-text py-3"><?php the_excerpt() ?></div>
            <div class="slm">
                <a href="<?php echo get_permalink(); ?>" class="btn-read-more">
                    <span class="btn-text">بیشتر بخونم</span>
                    <span class="btn-waves"></span>
                </a>
            </div>

        </div>
    </div>


