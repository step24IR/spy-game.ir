<?php /* Template Name: callToUs
  Template Post Type: post,page,download,product */
?>

<?php get_header(); ?>

<div dir="rtl">
    <div class="d-flex">
        <section class="container clone d-flex flex-wrap">
            <div class="col-12 my-5 col-lg-8 container d-flex shadow ">
                <form action="post contianer shadow form-box">
                    <input
                            type="text"
                            placeholder="نام و نام خانوادگی"
                            class="input my-lg-3 mx-2 form-control"
                            required
                    />
                    <input
                            type="email"
                            placeholder="name@email.com"
                            class="input my-lg-3 mx-2 col-12 col-lg-6 my-4 form-control"
                            required
                    />

                    <input
                            type="text"
                            placeholder="موضوع"
                            class="input my-lg-3 mx-2 col-12 col-lg-6 my-4 form-control"
                            required
                    />
                    <input
                            type="text"
                            placeholder="پیام شما"
                            class="input my-lg-3 mx-2 col-12 col-lg-6 my-4 form-control"
                            required
                    />
                    <button class="link-products">ارسال</button>
                </form>
                <div>
                    <img src="../wp-content/themes/spy/images/callwithus.jpg" class=" img-fluid" alt="callwithus">
                </div>
            </div>

            <div class="col-lg-3 col-12 mx-lg-4 my-3">
                <div class=" shadow">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="my-2">
                                <i class="fas ic fa-map-marker-alt"></i>
                                <span> آدرس : </span>
                                <span>مشهد، صیاد شیرازی 40 - شرکت مهندسی ویراد</span>
                            </div>

                        </li>
                        <li class="list-group-item">
                            <div class="my-2">
                                <i class="fas ic fa-phone-alt"></i>
                                <span> تلفن تماس: </span>
                                <a href="tel:09360154562" class="linkTo"> 09358668218</a>
                            </div>
                        </li>

                        <span class="my-2 mx-3">شبکه های اجتماعی</span>
                        <div class="d-flex mx-lg-2 ">
                            <a href="https://instagram.com/spy-game.ir" class="social-m" >
                                <i  class="fab fa-instagram "></i>
                            </a>
                            <a href="https://t.me/spygame_ir" class="social-m">
                                <i  class="fab fa-telegram "></i>
                            </a>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
    </div>


</div>

<?php get_footer(); ?>


