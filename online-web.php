<?php /* Template Name: online-web */ ?>


<?php get_header(); ?>

<div  style="background-image: url('../wp-content/themes/spy/images/spy22.jpg') "
     onload="loadImage()" dir="rtl" class="m-3 bg-dark p-2">
    <h1 class="p-2 text-white">
        <?php echo get_the_title(); ?>
    </h1>


    <div id="head_online">

        <h3 class="mb-4 text-white">بازی دورهمی جاسوس - تحت وب (Web Application)</h3>

        <div class="d-flex mt-2  col-12 ">

            <i class="fas icc fa-user me-1"></i>
            <p class="text-white">تعداد کاربران:</p>
            <div class="ms-2 text-white">

                <?php
                $count = setPostViews(999999998);
                echo $count;
                ?>

            </div>

            <div class="m-2 p-2 "></div>

            <i class="fas icc fa-eye me-1"></i>
            <p class="text-white">تعداد بازدید:</p>
            <div class="ms-2 text-white">

                <?php
                $count = customSetPostViews(99999999);
                echo $count;
                ?>
            </div>



        </div>

        <div class="d-flex mt-2  col-12 ">

        </div>


        <details class="text-white">
            <summary>
                <span id="open">ادامه متن</span>
                <span id="close">بستن x</span>
            </summary>
            <h4>بازی جاسوس چیست ؟</h4>
            <p>
                بازی جاسوس یک بازی دورهمی شبیه به مافیا که همه اعضا یک کلمه مثل سوزن می بینند اما
                جاسوس اونو نمی بینه بعد شهروند ها باید با سوال پرسیدن از حول محور سوزن (کلمه مورد
                نظر درست کننده هستش یا خراب کننده مثل قیچی) جاسوس پیدا کنند. خوب بدیعیست که اگر شخصی
                جواب اشتباه بدهد به احتمال زیاد جاسوس هست.
            </p>
        </details>

    </div>


    <div style="background-color: #ece9e9; opacity: 0.8;" class="m-3 p-3" id="form_first">
        <form action="" id="numform">
            <div class="form-group">
                <label for="number_gamer">تعداد بازیکنان</label>
                <input type="number" class="form-control p-3" id="number_gamer" name="number_gamer"
                       value="3"
                       placeholder="3">
                <small id="emailHelp" class="form-text text-muted">سعی کنید تعداد جاسوس را زیاد
                    نکنید!</small>
            </div>

            <label class="mt-2" for="number_spy">تعداد جاسوس</label>
            <select class="form-control p-3" id="number_spy">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>

            </select>

            </br>
            <label class="mt-2" for="exampleFormControlSelect1">دسته بندی</label>
            <select class="form-control p-3" id="category" name="category">
                <option>مکان</option>
                <option>شغل</option>
                <option>خوراکی</option>
                <option>اشیا</option>
                <option>همه</option>
            </select>

            <label class="mt-2" for="exampleInputEmail1">زمان</label>
            <select class="form-control p-3" id="time" name="time">
                <option>3</option>
                <option>5</option>
                <option>10</option>
                <option>15</option>

            </select>


            <div class="form-check m-3">
                <input type="checkbox" class="form-check-input" id="ch_help" checked>
                <label class="form-check-label" for="exampleCheck1">فعال بودن راهنما</label>
            </div>

        </form>

        <button id="startGame" onclick="startGame()" class="w-100 btn btn-dark p-2 text-white" >شروع بازی</button>
    </div>


    <!--    <div class="d-flex justify-content-center ">-->
    <div class=" d-flex  justify-content-center">
        <div style="display: none" id="start_game">

            <div class="text-center shadow  p-3 mb-5 bg-white rounded ">

                <img id="img_cart" style="width: 200px; height: 200px;"
                     src="../wp-content/themes/spy/images/spy_icon.png">

                <h3 style="display:none;" class=" m-3 p-3" id="text_time">time</h3>
                <h3 class=" m-3 p-3" id="text_game">نفراول کلیک کند</h3>

            </div>


            <div class="btn btn-primary p-2 w-100" onclick="change_text()" id="btn_game">شروع</div>
            <div style="display: none" class="btn btn-primary" onclick="reset_game()"
                 id="btn_reset">تمام
            </div>


        </div>
    </div>


</div>

<script>

    document.getElementById("startGame").addEventListener("click", startGame);

    window.addEventListener("load", (event) => {
        console.log("page is fully loaded");
        closeWinButton();
        if (getCookie("number_gamer")) {
            document.getElementById("number_gamer").value = getCookie("number_gamer");
            document.getElementById("number_spy").value = getCookie("number_spy");
            document.getElementById("category").value = getCookie("category");
            document.getElementById("time").value = getCookie("time");
            document.getElementById("ch_help").checked = JSON.parse(getCookie("ch_help"));
        }

    });
</script>


<?php get_footer(); ?>
