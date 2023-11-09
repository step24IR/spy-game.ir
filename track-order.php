<?php /* Template Name: track-order
  Template Post Type: post,page,download,product */
?>

<?php get_header(); ?>
    <div dir="rtl" >
        <section class="container shadow my-5">
            <div>
                <p class="py-5">
                    برای رهگیری سفارشتان شماره سفارش و ایمیلی که درهنگام ثبت سفارش وارد
                    کردید را در این قسمت وارد و کلید رهگیری را فشار دهید.
                </p>
            </div>
            <div>
                <form action="post" class="">
                    <div class="d-flex flex-wrap justify-content-evenly">
                        <div class="col-12 col-lg-5 ">
                            <input
                                    type="text"
                                    placeholder="شماره سفارش در ایمیل قبلا ارسال شده"
                                    class="input2 form-control rahgiri"
                                    required
                            />
                        </div>
                        <div class="col-12 col-lg-5 my-3 my-lg-0">
                            <input
                                    type="text"
                                    placeholder="ایمیلی که در هنگام ثبت سفارش وارد کردید"
                                    class="input2 form-control rahgiri"
                                    required
                            />
                        </div>
                    </div>
                    <div class="d-flex my-2">
                        <button class="link-products btn-rahgiri" type="submit">رهگیری</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
<?php get_footer(); ?>