<?php /* Template Name: online */ ?>


<?php get_header(); ?>


<!--<script type="text/javascript" src="../wp-content/themes/spy/js/online_game.js"></script>-->

<div onload="loadImage()" dir="rtl" class="m-3">

    <div class=" d-flex  justify-content-center">
        <h1 class="mb-4 bg-danger p-2 text-white w-75 text-center"> این صفحه در حال ساخت می
            باشد.. </h1>

    </div>

    <div class=" d-flex  justify-content-center">
    <h3 class="mb-4 bg-success p-2 text-white w-75 text-center"> در حال حاضر می توانید تحت وب بازی کنید
        <a class="btn btn-dark p-2 m-2" href="https://spy-game.ir/online-web/">بازی تحت وب جاسوس</a></h3>
    </div>

    <h1 class="p-2">
        <?php echo get_the_title(); ?>
    </h1>

    <p>به صورت آنلاین با دوستان خود جاسوس بازی کنید یا به صورت تصادفی با دیگر بازیکنان بازی
        کنید..</p>
    <details>
        <summary>
            <span id="open">ادامه متن</span>
            <span id="close">بستن x</span>
        </summary>
        <h4>آموزش بازی جاسوس:</h4>
        <p>
            بازی جاسوس یک بازی دورهمی است که همه بازیکنان یک کلمه مثل موبایل می بینند اما
            جاسوس اونو نمی بینه بعد شهروندان باید با سوال پرسیدن از هم (کلمه مورد
            نظر یک چیز جدید است یا قدیمی؟) جاسوس پیدا کنند. خوب مخشص که اگر شخصی
            جواب اشتباه بدهد به احتمال زیاد جاسوس هست.
        </p>
    </details>

    <div id="head_online">

        <div class="d-flex mt-2  col-12 ">

            <i class="fas icc fa-user me-1"></i>
            <p> کاربران آنلاین:</p>
            <div class="ms-2">

                <?php
                $count = 5;
                echo $count;
                ?>

            </div>

        </div>

    </div>

    <?php include('code/online_game/page_first.php'); ?>
    <?php include('code/online_game/page_friend.php'); ?>
    <?php include('code/online_game/create_game_friend.php'); ?>
    <?php include('code/online_game/join_game_friend.php'); ?>


</div>

<script>
    window.addEventListener("load", (event) => {
        closeWinButton();
        if (document.visibilityState === 'visible') {
            console.log("user is focused on the page")
        } else {
            console.log("user left the page")
        }

        console.log("page is fully loaded");


    });



</script>


<?php get_footer(); ?>
