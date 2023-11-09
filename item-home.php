<section class="my-5">
    <div class="shadow container  ">
        <section class="d-flex flex-wrap">
            <div class="col-lg-4 col-12 my-5-lg my-md-5 col-sm-12 col-md-6 img-course ">
                <?php the_post_thumbnail() ?>
            </div>
            <div class="d-flex flex-column col-lg-8 text-card-product mx-md-3 my-2 my-md-0 col-12 col-md-5 col-sm-12  my-sm-5 ">
                <h3 class="title-crd ">
                    <?php the_title(); ?>
                </h3>
                <div>
                    <p class="description my-2 ">
                        <?php  the_excerpt() ?>
                    </p>
                    <div class="count-user my-1">
                        <i class="fas fa-users px-1"></i>
                        <span> تعداد داشنجویان: </span>
                    </div>
                    <div class="teacher my-2">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span> نویسنده: </span>
                    </div>
                    <div>
                        <i class="fas fa-clock "></i>
                        <span> مدت دوره: </span>
                    </div>
                    <div class="link-card-product">
                        <a href="<?php echo get_permalink(); ?>" class="link-products link-card-product">بیشتر</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>