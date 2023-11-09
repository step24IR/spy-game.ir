<?php /* Template Name: course-single
  Template Post Type: post,page,download,product */ ?>
<?php get_header(); ?>
<main dir="rtl" class="d-flex flex-wrap container pb-5 my-5">
    <aside
            class=" col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 pe-3"
    >
        <div class="card card-1 card-sidebar">
            <?php the_post_thumbnail() ?>
            <div class="card-body ">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text d-none">
                <div class="d-flex text-aling">
                    <span>قیمت</span>
                    <span id="price_course">
                    <?php
                    $mykey_values = get_post_custom_values('price_course_starter');
                    foreach ($mykey_values as $key => $value) {
                        echo "$value";
                    } ?>
                    </span>
                    <i class="fas fa-dollar-sign"></i></div>
                <span id="price_course_starter">
                    <?php
                    $mykey_values = get_post_custom_values('price_course_starter');
                    foreach ($mykey_values as $key => $value) {
                        echo "$value";
                    } ?>
              </span>
                <span id="price_course_midlevel">

                    <?php
                    $mykey_values = get_post_custom_values('price_course_midlevel');
                    foreach ($mykey_values as $key => $value) {
                        echo "$value";
                    } ?>
              </span>
                <span id="price_course_senior">

                         <?php
                         $mykey_values = get_post_custom_values('price_course_senior');
                         foreach ($mykey_values as $key => $value) {
                             echo "$value";
                         } ?>
                                      </span>
                </span>
                </p>
            </div>
            <ul class="p-0">
                <li class="">
                    <span> مدت: </span>
                    <span>
                12جلسه
                <i class="far fa-clock"></i>
              </span>
                </li>
                <li class="">نام استاد:
                    <?php
                    $mykey_values = get_post_custom_values('teacher_name');
                    foreach ($mykey_values as $key => $value) {
                        echo "$value";
                    } ?>
                    <i class="fas fa-chalkboard-teacher"></i>
                </li>
                <li class="">
                    زمان دوره:
                    <?php
                    $mykey_values = get_post_custom_values('time-course');
                    foreach ($mykey_values as $key => $value) {
                        echo "$value";
                    } ?>
                    <i class="fas fa-calendar"></i>
                </li>
            </ul>

        </div>
    </aside>
    <section class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
        <div>
            <div id="mySlider"></div>
            <h1> <?php the_title(); ?></h1>
            <p class="my-4">
                <?php the_content() ?>
            </p>
        </div>
        <h3 class="my-5 py-5">در این دوره یاد خواهید گرفت</h3>
        <!-- tabs for levels learn -->
        <div>
            <input
                    class="input-multi-tabs"
                    id="tab1"
                    type="radio"
                    name="tabs"
                    checked
                    onclick="insertPrice();"
            />
            <label class="label-multi-tabs" for="tab1">مقدماتی</label>

            <input class="input-multi-tabs" id="tab2" type="radio" name="tabs"
                   onclick="insertPriceMidLevel();"
            />
            <label class="label-multi-tabs" for="tab2">متوسط</label>

            <input class="input-multi-tabs" id="tab3" type="radio" name="tabs"
                   onclick="insertPriceSenior();"/>
            <label class="label-multi-tabs" for="tab3">پیشرفته</label>

            <section class="section-tabs" id="content1">
                <div class="d-flex container">
                    <ul>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson1_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson2_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson3_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson4_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson5_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson6_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson7_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson8_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson9_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson10_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson11_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('lesson12_starter');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section-tabs" id="content2">
                <div class="d-flex container">
                    <ul>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_1');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_2');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_3');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_4');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_5');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_6');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_7');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_8');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_9');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_10');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_11');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('mid_level_lesson_12');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section-tabs" id="content3">
                <div class="d-flex container">
                    <ul>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_1');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_2');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_3');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_4');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_5');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_6');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_7');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_8');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_9');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_10');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_11');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?php
                            $mykey_values = get_post_custom_values('Senior_lesson_12');
                            foreach ($mykey_values as $key => $value) {
                                echo "$value";
                            } ?>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- tabs for levels learn -->

        <div>
            <h3 class="my-4 py-4">نیازمندی ها</h3>
            <div class="container">
                <ul>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <?php
                        $mykey_values = get_post_custom_values('Need_1');
                        foreach ($mykey_values as $key => $value) {
                            echo "$value";
                        } ?>

                    </li>

                </ul>
            </div>
        </div>
        <div>

            <div class="pt-5 mt-5">
            <p class="text-center fs-1">
                برای شرکت در دوره ها با ما تماس بگیرید
            </p>
                <div class="links">
                    <div class="link">
                        <a class="icon-contact-link" href="tel:+989358668218">
                            <div class="icon-contact-form">
                                <i class="fas fa-phone-volume icon-social-contact"></i>
                            </div>
                        </a>
                    </div>
                    <div class="link">
                        <a class="icon-contact-link" href="https://instagram.com/spy-game.ir">
                            <div class="icon-contact-form">
                                <i class="fab fa-instagram icon-social-contact"></i>
                            </div>
                        </a>
                    </div>
                    <div class="link">
                        <a class="icon-contact-link" href="https://wa.me/989358668218">
                            <div class="icon-contact-form">
                                <i class="fab fa-whatsapp icon-social-contact"></i>
                            </div>
                        </a>
                    </div>
                    <div class="link">
                        <a class="icon-contact-link" href="https://t.me/mrrobot_98">
                            <div class="icon-contact-form">
                                <i class="fab fa-telegram icon-social-contact"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">

            <?php
            comment_form() ?>
            </div>
        </div>
    </section>


</main>
<script>
    document.getElementById("submit").value = "ارسال";
    document.getElementById("comment").placeholder = "پیام خود را ارسال کنید";
    document.getElementById("comment").className= 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12'
    var priceStarter = document.getElementById('price_course_starter').innerText;
    var priceMidLevel = document.getElementById('price_course_midlevel').innerText;
    var priceSenior = document.getElementById('price_course_senior').innerText;
    var priceCourse = document.getElementById('price_course');

    function insertPrice() {
        var x = priceStarter;
        priceCourse.innerText = x;
        console.log(x)
    }

    function insertPriceMidLevel() {
        var x = priceMidLevel;
        priceCourse.innerText = x;
        console.log(x)
    }

    function insertPriceSenior() {
        var x = priceSenior;
        priceCourse.innerText = x;
        console.log(x)
    }

</script>
<?php get_footer(); ?>
