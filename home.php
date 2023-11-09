
<style>
    .container {
        /*position: absolute;*/
        /*top: 50%;*/
        /*left: 50%;*/
        /*transform: translate(-50%, -50%);*/
        width: 90%;
        max-width: 1200px;
        text-align: center;
    }

    .container .btn {
        display: inline-block;
        width: 90px;
        height: 90px;
        background: #fff;
        box-shadow: 0 5px 15px -5px #aaa;
        margin: 10px;
        border-radius: 30%;
        overflow: hidden;
        position: relative;
        color: #42d2ff;
    }

    .container .btn i {
        position: relative;
        z-index: 4;
        line-height: 70px;
        font-size: 36px;
        transition: 0.3s ease-in-out;
    }

    .container .fa-github {
        color: #383838;
    }

    .container .gh::before {
        content: "";
        position: absolute;
        width: 120%;
        height: 120%;
        background: linear-gradient(#7e7e7e, #3a3a3a);
        transform: rotate(45deg);
        left: -110%;
        top: 90%;
    }

    .container .fa-linkedin {
        color: #0a66c2;
    }

    .container .in::before {
        content: "";
        position: absolute;
        width: 120%;
        height: 120%;
        background: linear-gradient(rgba(255, 35, 35, 0.73), rgba(189, 183, 183, 0.61));
        transform: rotate(45deg);
        left: -110%;
        top: 90%;
    }

    .container .fa-instagram {
        color: #e33d68;
    }

    .container .ig::before {
        content: "";
        position: absolute;
        width: 120%;
        height: 120%;
        background: radial-gradient(circle at 60% 100%, #FED373 4%, #F15245 30%, #D92E7F 62%, #9B36B7 85%, #515ECF);
        transform: rotate(45deg);
        left: -110%;
        top: 90%;
    }

    .container .fa-twitter {
        color: #00c6ff;
    }

    .container .tw::before {
        content: "";
        position: absolute;
        width: 120%;
        height: 120%;
        background: linear-gradient(#00c6ff, #0072ff);
        transform: rotate(45deg);
        left: -110%;
        top: 90%;
    }

    .img_desc img {
        width: 50%;
        height: 50%;
    }

    .container .btn:hover i {
        color: #fff;
        transform: scale(1.4);
    }

    .container .btn:hover::before {
        animation: onHover 0.7s 1;
        left: -10%;
        top: -10%;
    }

    @keyframes onHover {
        0% {
            left: -110%;
            top: 90%;
        }
        50% {
            left: 10%;
            top: -30%;
        }
        100% {
            top: -10%;
            left: -10%;
        }
    }

    .container .fa-youtube {
        color: #ff0000;
    }

    .container .yt::before {
        content: "";
        position: absolute;
        width: 120%;
        height: 120%;
        background: linear-gradient(#9a9a9a, rgba(0, 0, 0, 0.71));
        transform: rotate(45deg);
        left: -110%;
        top: 90%;
    }
</style>

<?php get_header(); ?>


<div dir="rtl">

    <main class="">
        <div class="w-100 mt-4 mb-4 p-3  ">
            <div class="row d-flex justify-content-center text-interduce">
                <div class="col-sm text-center">


                    <h1 class="mb-4 text-main">سایت رسمی بازی جاسوس</h1>
                    <h3 class="mb-4 text-main">مافیا ساده</h3>

                    <!-- <img  alt="بازی جاسوس فارسی" style=" height: 150px;"
                          src="../wp-content/themes/spy/images/spy-header2.png"
                          class="img-fluid w-75"/>-->

                <!--    <div  class="border w-75 video_spy" width="75%" id="81674613221"><script type="text/JavaScript" src="https://www.aparat.com/embed/XgZO0?data[rnddiv]=81674613221&data[responsive]=yes&titleShow=true&autoplay=true"></script></div>-->

                    <div class="d-flex justify-content-center">




                        <video class="border" width="75%" controls>
                            <source src="../wp-content/themes/spy/images/spy-game-video.mp4"
                                    type="video/mp4">

                            <meta itemprop="name" content="spy game tutorial clip">
                            <meta itemprop="description" content="ویدیو آموزش بازی جاسوس">
                            <meta itemprop="thumbnail"
                                  content="../wp-content/themes/spy/images/apy-game-tutorial.PNG">
                            <p>ویدیو آموزش بازی جاسوس</p>

                        </video>

                    </div>


                    


                    <div class=" d-flex justify-content-center">

                        <p class="m-3 p-3 bg-main w-75 ">
                            بازی جاسوس یک بازی هیجان‌انگیز و پرطرفدار است که در آن شما به عنوان یک
                            جاسوس حرفه‌ای، باید به ماموریت‌های مختلفی در سراسر جهان بروید و اطلاعات
                            مهم و محرمانه را جمع‌آوری کنید. بازی جاسوس فارسی و برای سیستم عامل
                            اندروید است و بازی جاسوس برای ایفون هنوز
                            ساخته نشد است. البته یک خبر خوب اینکه بازی جاسوس آنلاین منتشر شده است…
                        </p>

                    </div>

                </div>

                <div class="btn-parent">
                    <a target="_blank" class="btn-home btn-1 "
                       href="http://spy-game.ir/online-web/">
                        <svg>
                            <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                        </svg>
                        شروع بازی تحت وب
                    </a>
                </div>

            </div>
        </div>


        <div class="container mb-4">
            <div class="d-flex flex-wrap justify-content-between">

                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 item-home">
                    <img title="دانلود بازی" alt="دانلود بازی" id="pix-header"
                         src="../wp-content/themes/spy/images/download-spy.png"
                         class="img-fluid w-50 "/>
                    <h2 class="text-main">دانلود بازی</h2>
                    <p class="text-secondary">

                        برای دانلود بازی جاسوس با لینک مستقیم یا دانلود بازی جاسوس از بازار
                    </p>
                    <div class="btn-parent">
                        <a target="_blank" class="btn-home btn-1"
                           href="http://spy-game.ir/download">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                            </svg>
                            دانلود بازی جاسوس
                        </a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 item-home">
                    <img id="pix-header" title="آموزش بازی" alt="آموزش بازی"
                         src="../wp-content/themes/spy/images/spy-who.png"
                         class="img-fluid w-50 "/>
                    <h2 class="text-main">آموزش بازی </h2>
                    <p> اگه نمی دانید بازی جاسوس چیست یا تا الان جاسوس بازی نکرده اید..</p>
                    <div class="btn-parent">
                        <a target="_blank" class="btn-home btn-1"
                           href="http://spy-game.ir/training/">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                            </svg>
                            بازی جاسوس چیست
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 item-home">

                    <img id="pix-header"
                         title="سوالات بازی جاسوس"
                         alt="سوالات بازی جاسوس"
                         src="../wp-content/themes/spy/images/question-spy.PNG"
                         class="img-fluid w-50 "/>

                    <h2 class="text-danger">سوالات بازی</h2>
                    <p class="container text-secondary">
                        اگر می دانید بازی جاسوس چیست اما نمی دانید که چه سوالاتی بپرسید..
                    </p>
                    <div class="btn-parent">
                        <a target="_blank" class="btn-home btn-1"
                           href="http://spy-game.ir/questions/">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                            </svg>
                            سوالات بازی جاسوس
                        </a>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 item-home">

                    <img id="pix-header" title="قوانین جاسوس" alt="قوانین جاسوس"
                         src="../wp-content/themes/spy/images/hacker-icon-spy.png"
                         class="img-fluid w-50 "/>
                    <h2 class="text-main">قوانین بازی </h2>
                    <p>
                        اگر نمی دانید این بازی چه قوانین و مقرارتی دارد یا سوالاتی درباره آن دارید..
                    </p>
                    <div class="btn-parent">
                        <a target="_blank" class="btn-home btn-1"
                           href="http://spy-game.ir/rules/">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                            </svg>
                            قوانین بازی جاسوس
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </main>



</div>

<div class="container">

    <a href="https://www.aparat.com/v/XgZO0" class="btn in">
        <i class="img_desc">
            <img  src="../wp-content/themes/spy/images/aparat.png">
        </i>
    </a>

    <a href="https://cafebazaar.ir/app/com.simurgh.spy" class="btn yt">
        <i class="img_desc">
            <img  src="../wp-content/themes/spy/images/bazaar-logo.png">
        </i>
    </a>

    <a href="https://vrgl.ir/UPuNG" class="btn gh">
        <i class="img_desc">
            <img  src="../wp-content/themes/spy/images/virgool.png">
        </i>
    </a>

    <a href="https://fa.wikipedia.org/wiki/%D8%AC%D8%A7%D8%B3%D9%88%D8%B3%DB%8C" class="btn ig">
        <i class="img_desc">
            <img  src="../wp-content/themes/spy/images/Wikipedia.png">
        </i>
    </a>

    <p>معرفی بازی جاسوس در دیگر سایت ها معتبر</p>
</div>

    <?php get_footer(); ?>
