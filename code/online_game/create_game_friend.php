<div id="create_game_friend" class="p-3" style="display: none;
 background-image: url('../wp-content/themes/spy/images/spy-online.png')  ;">


    <div class="container h-100">

        <div style="background-color: #ece9e9; opacity: 0.8;" class="m-3 p-3"
             id="form_create_friend">
            <form  action="" id="numform">
                <div class="form-group">

                    <label for="name_game_friend">نام گروه</label>
                    <input type="text" class="form-control p-3" id="name_game_friend"
                           name="name_game_friend"
                           placeholder="spy24">
                    <small id="name_gamer_help" class="form-text text-muted">نام گروه باید یکتا باید
                        و برای وصل شدن دوستان شماست</small>

                </div>

                <div class="form-group">
                    <label for="password_game_friend">رمز ورود</label>
                    <input type="password" class="form-control p-3" id="password_game_friend"
                           name="password_game_friend"
                           placeholder="spy24">
                    <small id="password_gamer_help" class="form-text text-muted">رمز را فقط به کسانی
                        که میخواهید به گروه شما ملحق بشوند بدهید..</small>
                </div>
                <div class="form-group">

                    <label for="number_gamer_friend">تعداد بازیکنان</label>
                    <input type="number" class="form-control p-3" id="number_gamer_friend"
                           name="number_gamer"
                           value="3"
                           placeholder="3">
                    <small id="password_gamer_help" class="form-text text-muted">اگر میخواهید تعداد نامحدود باشد عدد صفر را وارد کنید</small>
                </div>

            </form>

            <button onclick="startGameFriend()" class="w-100 btn-1 btn-dark m-2 p-2">ساختن بازی</button>
        </div>


    </div>

</div>

