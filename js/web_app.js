var isPlaying = false;
var holder1 = "";
var holder2 = "";
var myAudio;

var myInterval;

function closeWinButton() {

    var adminAction = document.getElementById("adminAction")

    adminAction.style.display = 'none';
}

function startGame() {


    setCookie("counter", 0, 30);

    setCookie("counter_player", 0, 30);

    var number_gamer = document.getElementById("number_gamer").value

    var number_spy = document.getElementById("number_spy").value


    if (number_gamer < number_spy) {

        alert("تعداد جاسوس غیرمجاز است!")

    } else {



        setCookie("number_gamer", number_gamer, 30);
        setCookie("number_spy", number_spy, 30);
        // Myrand(1, number_gamer , number_spy);


        var arr_spy = Myrand(1, getCookie("number_gamer"), getCookie("number_spy"))

        setCookie("arr_spy", JSON.stringify(arr_spy), 30);


        var category = document.getElementById("category").value
        setCookie("category", category, 30);


        var time = document.getElementById("time").value
        setCookie("time", time, 30);


        var ch_help = document.getElementById("ch_help").checked
        console.log(ch_help);
        setCookie("ch_help", ch_help, 30);
        /*
            document.getElementById('display').innerHTML =
                document.getElementById("user_input").value;*/

        const obj = getWord();

        setCookie("word", obj.word, 30);
        setCookie("word_help", obj.help, 30);

        var form_first = document.getElementById("form_first")
        var head_online = document.getElementById("head_online")
        var start_game = document.getElementById("start_game")

        // alert("number_gamer: "+number_gamer +"number_spy: "+number_spy +"time: "+time );

        form_first.style.display = 'none';
        head_online.style.display = 'none';
        start_game.style.display = 'block';


    }

}

function Myrand(min, max, num) {

    //r = how many numbers you want to extract

    var numbers = []; // new empty array

    var r, n, p;

    /*min = 1;
    max = 50;*/
    r = num;

    for (let i = 0; i < r; i++) {
        do {
            n = Math.floor(Math.random() * (max - min + 1)) + min;
            p = numbers.includes(n);
            if (!p) {
                numbers.push(n);
            }
        }
        while (p);
    }

    return numbers;
}


function change_text() {

    // document.getElementById("num_spy").value = Myrand(1, number_gamer , number_spy);


    var arr_spy = JSON.parse(getCookie('arr_spy'));


    // document.getElementById("num_spy").textContent =  p.toString();


    var counter = Number(getCookie("counter")) + 1;

    setCookie("counter", counter, 30);

    if (counter < getCookie("number_gamer") * 2) {


        if (counter % 2 === 0) {

            document.getElementById("img_cart").src = "../wp-content/themes/spy/images/spy_icon.png";
            document.getElementById("text_game").textContent = "گوشی را رد کنید";
            document.getElementById("text_game").style.color = "#d04c4c";
            document.getElementById("btn_game").textContent = "کلیک کنید";


        } else {
            document.getElementById("text_game").style.color = "#333333";

            document.getElementById("img_cart").src = "../wp-content/themes/spy/images/spy_icon3.png";

            var counter_player = Number(getCookie("counter_player")) + 1;

            console.log(counter_player);

            // if (counter_player === Number(getCookie("spy"))) {
            if (arr_spy.includes(counter_player)) {

                if (getCookie("ch_help") === true || getCookie("ch_help") === "true") {
                    console.log(getCookie("ch_help"))
                    document.getElementById("text_game").textContent = "جاسوس - راهنما: " +
                        getCookie("word_help");
                } else {
                    console.log("un check help")
                    document.getElementById("text_game").textContent = "جاسوس هستید! ";
                }

                document.getElementById("btn_game").textContent = "کلیک کنید";

            } else {
                document.getElementById("text_game").textContent = getCookie("word");
                document.getElementById("btn_game").textContent = "کلیک کنید";
            }

            setCookie("counter_player", counter_player, 30);
        }


    } else if (counter === getCookie("number_gamer") * 2) {

        document.getElementById("img_cart").style.display = 'none';
        document.getElementById("text_game").textContent = "اماده اید؟";
        document.getElementById("btn_game").textContent = "شروع بازی";


    } else {

        // document.getElementById("text_game").textContent=getCookie("word");

        var btn_game = document.getElementById("btn_game");
        btn_game.style.display = 'none';

        var btn_reset = document.getElementById("btn_reset");
        btn_reset.style.display = 'block';
        btn_reset.textContent = "تمام";

        var text_game = document.getElementById("text_game");
        text_game.style.display = 'none';

        var text_time = document.getElementById("text_time");
        text_time.style.display = 'block';
        var Minutes = getCookie("time") * 60,

            display = document.querySelector('#text_time');
        startTimer(Minutes, display);
    }


}


function getWord() {


    const place = [

        {"word": "آرامگاه شاهچراغ", "help": "مذهبی"},
        {"word": "آبشار چرند", "help": "گردشگری"},
        {"word": "آبشار سراب", "help": "گردشگری"},
        {"word": "آبشار شاهدوست", "help": "گردشگری"},
        {"word": "آبعلی", "help": "آب"},
        {"word": "آبگرم قم", "help": "گرم"},
        {"word": "آرامگاه هفت تپه", "help": "هفت"},
        {"word": "آسیاب", "help": "قدیمی"},
        {"word": "آتشکده گلستان", "help": "آتش"},
        {"word": "استوا", "help": "آفریقا"},
        {"word": "آسمان بنفش", "help": "بالا"},
        {"word": "آفتابگردان", "help": "خورشید"},
        {"word": "آلاسکا", "help": "ایالات متحده"},
        {"word": "آمستردام", "help": "هلند"},
        {"word": "یونان", "help": "باستانی"},
        {"word": "آمفی تئاتر روم", "help": "هنر"},
        {"word": "آکواریوم", "help": "آب"},
        {"word": "کوه البرز", "help": "ارتفاع"},
        {"word": "لندن", "help": "انگلستان"},
        {"word": "تئاتر", "help": "هنر"},
        {"word": "برزیل", "help": "زرد"},
        {"word": "بابلسر", "help": "شمال"},
        {"word": "اصفهان", "help": "ایران"},
        {"word": "باغ فردوسی", "help": "پارسی"},
        {"word": "باغ ملی", "help": "درخت"},
        {"word": "باغ", "help": "سرسبزی"},
        {"word": "بازار خان‌", "help": "اصفهان"},
        {"word": "بازار چینی", "help": "خرید"},
        {"word": "بازار جهان‌پور", "help": "اصفهان"},
        {"word": "بازار گنبد", "help": "اصفهان"},
        {"word": "بازار هایکو", "help": "ژاپن"},
        {"word": "البرز", "help": "ایران"},
        {"word": "تایلند", "help": "دریا"},
        {"word": "بایرن مونیخ", "help": "آلمان"},
        {"word": "اندونزی", "help": "جزیره"},
        {"word": "بندر عباس", "help": "حنوب"},
        {"word": "برج ایفل", "help": "پاریس"},
        {"word": "برج خلیفه", "help": "دبی"},
        {"word": "برج کریستال", "help": "نیویورک"},
        {"word": "برج مرکزی", "help": "دبی"},
        {"word": "برج میزراباد", "help": "تهران"},
        {"word": "پاریس", "help": "فرانسه"},
        {"word": "نیویورک", "help": "ایالات متحده"},
        {"word": "بورسای طلا", "help": "قیمتی"},
        {"word": "بیت المقدس", "help": "فلسطین"},
        {"word": "تاج محل", "help": "هند"},
        {"word": "لندن", "help": "انگلستان"},
        {"word": "نیویورک", "help": "آمریکا"},
        {"word": "تایوان", "help": "چین"},
        {"word": "تجریش", "help": "ایران"},
        {"word": "ترمینال تهران", "help": "اتویوس"},
        {"word": "اسرائیل", "help": "دو مثلث"},
        {"word": "فلسطین", "help": "مسلمان"},
        {"word": "ایتالیا", "help": "پیتزا"},
        {"word": "توکیو", "help": "ژاپن"},
        {"word": "هند", "help": "پنجابی"},
        {"word": "جزایر شیشه‌ای", "help": "آب"},
        {"word": "جزیره نورفولک", "help": "آب"},
        {"word": "جنوب گرجستان", "help": "پایین"},
        {"word": "چابهار", "help": "ایران"},
        {"word": "جنگل", "help": "سبز"},
        {"word": "حرم", "help": "مذهبی"},
        {"word": "حرم حضرت معصومه", "help": "قم"},
        {"word": "حرم رضوی", "help": "ایران"},
        {"word": "حرم امام رضا", "help": "مشهد"},
        {"word": "حرم امام حسین", "help": "عراق"},
        {"word": "حرم امام موسی", "help": "عراق"},
        {"word": "حسینیه ارشاد", "help": "مذهبی"},
        {"word": "نقش جهان", "help": "اصفهان"},
        {"word": "گنبد کاووس", "help": "بیستون"},
        {"word": "آتشکده", "help": "آتش"},
        {"word": "هفت تپه", "help": "تاریخی"},
        {"word": "باغ علاءالدین", "help": "درخت"},
        {"word": "تخت سلیمان", "help": "قدیمی"},
        {"word": "پل خواجه نصیرالدین", "help": "گذرگاه"},
        {"word": "پل خرمشهر", "help": "گذرگاه"},
        {"word": "مرقد امام خمینی", "help": "خاک"},
        {"word": "آرامگاه حافظ", "help": "شاعر"},
        {"word": "تپه سیوند", "help": "کوه"},
        {"word": "باغ‌های فین", "help": "شاهنامه"},
        {"word": "روسیه", "help": "سرد"},
        {"word": "کاخ گلستان", "help": "ناصرالدین"},
        {"word": "میدان نقش جهان", "help": "دایره"},
        {"word": "آرامگاه سعدی", "help": "شاعر"},
        {"word": "حمام", "help": "آب"},
        {"word": "کاخ نیاوران", "help": "پادشاهی"},
        {"word": "آرامگاه امیرکبیر", "help": "دارالفنون"},
        {"word": "باغ فین", "help": "شاهنامه"},
        {"word": "چشمه علیصدر", "help": "آب"},
        {"word": "مسجد جامع", "help": "مذهبی"},
        {"word": "زاینده‌رود", "help": "آب"},
        {"word": "چهارباغ حافظ", "help": "شاعر"},
        {"word": "حمام قلعه نو", "help": "آب"},
        {"word": "خانه سیاه", "help": "موزه"},
        {"word": "کاخ شهرستان", "help": "ناصرالدین"},
        {"word": "آرامگاه", "help": "خاک"},
        {"word": "اصفهان", "help": "نصف جهان"},
        {"word": "مرقد شیخ صفی", "help": "خاک"},
        {"word": "کوه سهند", "help": "کوهستان"},
        {"word": "امامزاده سیدچمن علی", "help": "آرامگاه"},
        {"word": "مسجد جامع یزد", "help": "مذهبی"},
        {"word": "مسجد جامع کاشان", "help": "مذهبی"},
        {"word": "میدان", "help": "چرخش"},
        {"word": "مرقد فخرالدین اسعد", "help": "مولوی"},
        {"word": "قلعه نو", "help": "قدیمی"},
        {"word": "بازار تبریز", "help": "خرید"},
        {"word": "امامزاده ابراهیم", "help": "آرامگاه"},
        {"word": "مسجد شیخ لطف‌الله", "help": "مذهبی"},
        {"word": "کوه دماوند", "help": "کوهستان"},
        {"word": "میدان امام خمینی", "help": "اصفهان"},
        {"word": "آرامگاه خواجو", "help": "دانشمند"},
        {"word": "مرقد شاه", "help": "خاک"},
        {"word": "خانه دکتر حسابی", "help": "موزه"},
        {"word": "کاخ شهربانو", "help": "ناصرالدین"},
        {"word": "گورستان باباصفی", "help": "آرامگاه"},
        {"word": "بازار قدیم کاشان", "help": "خرید"},
        {"word": "آرامگاه حضرت ابوالفضل", "help": "خاک"},
        {"word": "مسجد جامع تبریز", "help": "مذهب"},
        {"word": "مسجد جامع شهرکرد", "help": "مذهب"},
        {"word": "پل خواجو", "help": "گذرگاه"},
        {"word": "آرامگاه خواجه‌رحیم", "help": "دانشمند"},
        {"word": "آرامگاه مولوی", "help": "شاعر"},
        {"word": "مرقد شیخ بحرالعلوم", "help": "علوم"},
        {"word": "مسجد جامع همدان", "help": "عبادتگاه"},
        {"word": "آرامگاه سید عبدالله", "help": "مرقد"},
        {"word": "مرقد شیخ احمد جام", "help": "احمد"},
        {"word": "مسجد شیخ لطف‌الله", "help": "خانه خدا"},
        {"word": "خانه نصیرالدین طوسی", "help": "قدیمی"},
        {"word": "مسجد جامع شیراز", "help": "عبادتگاه"},
        {"word": "آرامگاه سلطان عبدالعظیم", "help": "خاک"},
        {"word": "آرامگاه خواجه کرمانی", "help": "دانشمند"},
        {"word": "مرقد شیخ طوسی", "help": "دانشمند"},
        {"word": "مسجد جامع قم", "help": "شیخ"},
        {"word": "حمام عمو حسین", "help": "آب"},
        {"word": "آرامگاه میرداماد", "help": "دانشمند"},
        {"word": "کاخ نادری", "help": "پادشاه"},
        {"word": "آرامگاه حسن صباح", "help": "خاک"},
        {"word": "امامزاده امیرکبیر", "help": "خاک"},
        {"word": "مسجد جامع یزدگرد", "help": "عبادتگاه"},
        {"word": "کاخ سفید", "help": "ایالات متحده"},
        {"word": "خرم‌آباد", "help": "ایران"},
        {"word": "ارامگاه نادر", "help": "مشهد"},
        {"word": "خورشیدگردان", "help": "ایران"},
        {"word": "دبی", "help": "عربی"},
        {"word": "دریاچه وان", "help": "ترکیه"},
        {"word": "دماوند", "help": "ایران"},
        {"word": "دنیزلی", "help": "ایران"},
        {"word": "ترکمنستان", "help": "همسایه"},
    ];

    const foods = [
        {"word": "آلبالو", "help": "میوه"},
        {"word": "انار", "help": "میوه"},
        {"word": "انگور", "help": "میوه"},
        {"word": "اکبرجوجه", "help": "مرغ"},
        {"word": "بادمجان", "help": "سبزیجات"},
        {"word": "بادام", "help": "میوه"},
        {"word": "بستنی", "help": "شیرین"},
        {"word": "بامیه", "help": "شیرین"},
        {"word": "پرتقال", "help": "میوه"},
        {"word": "پفک", "help": "ترد"},
        {"word": "پنیر", "help": "لبنیات"},
        {"word": "ترشی", "help": "خوراکی شور"},
        {"word": "توت فرنگی", "help": "میوه"},
        {"word": "توت", "help": "میوه"},
        {"word": "جوجه کباب", "help": "غذایی"},
        {"word": "جوجه", "help": "مرغ"},
        {"word": "چای سیاه", "help": "نوشیدنی"},
        {"word": "چای سبز", "help": "نوشیدنی"},
        {"word": "چیپس", "help": "ترد"},
        {"word": "حلوا", "help": "شیرین"},
        {"word": "خرما", "help": "میوه"},
        {"word": "غذای دریایی", "help": "آب"},
        {"word": "دلمه", "help": "برگ"},
        {"word": "دوغ", "help": "نوشیدنی"},
        {"word": "ذرت", "help": "سبزیجات"},
        {"word": "رب انار", "help": "ملس"},
        {"word": "زرشک", "help": "سبزیجات"},
        {"word": "زعفران", "help": "ادویه"},
        {"word": "زیتون", "help": "سبزیجات"},
        {"word": "سالاد ماکارونی", "help": "مخلوط"},
        {"word": "سالاد", "help": "غذای سبک"},
        {"word": "سبزیجات", "help": "سبز"},
        {"word": "سیب", "help": "میوه"},
        {"word": "شکلات", "help": "شیرینی"},
        {"word": "شیرینی", "help": "جشن"},
        {"word": "صبحانه", "help": "وعده غذایی"},
        {"word": "عسل", "help": "شیرین"},
        {"word": "عدسی", "help": "غذایی"},
        {"word": "فست فود", "help": "غذایی"},
        {"word": "فلفل دلمه‌ای", "help": "سبزیجات"},
        {"word": "فلفل سبز", "help": "سبزیجات"},
        {"word": "فلفل قرمز", "help": "ادویه"},
        {"word": "فلفل", "help": "ادویه"},
        {"word": "فیله مرغ", "help": "گوشت"},
        {"word": "قارچ", "help": "سبزیجات"},
        {"word": "قند", "help": "شیرینی"},
        {"word": "کتلت", "help": "غذایی"},
        {"word": "کلم", "help": "سبزیجات"},
        {"word": "کنسرو ماهی", "help": "غذای دریایی"},
        {"word": "کوکی", "help": "شیرینی"},
        {"word": "کیک", "help": "شیرینی"},
        {"word": "گوجه فرنگی", "help": "سبزیجات"},
        {"word": "گوشت بره", "help": "گوسفند"},
        {"word": "گوشت گاو", "help": "شاخ"},
        {"word": "گوشت مرغ", "help": "پر دار"},
        {"word": "گوشت", "help": "قصاب"},
        {"word": "لوبیا", "help": "سبزیجات"},
        {"word": "لواشک", "help": "شیرینی"},
        {"word": "ماست", "help": "لبنیات"},
        {"word": "مرغ", "help": "بال دار"},
        {"word": "موز", "help": "میوه"},
        {"word": "نان", "help": "غذایی"},
        {"word": "نوشابه", "help": "نوشیدنی"},
        {"word": "هات داگ", "help": "غذایی"},
        {"word": "هویج", "help": "سبزیجات"},
        {"word": "ویتامین", "help": "سوخت و ساز"}
    ];

    const things = [
        {"word": "تلویزیون", "help": "نمایش"},
        {"word": "مبل", "help": "صندلی"},
        {"word": "پنجره", "help": "شیشه"},
        {"word": "قلم", "help": "نوک"},
        {"word": "گوشی", "help": "گوش"},
        {"word": "دوربین", "help": "لنز"},
        {"word": "رادیو", "help": "آنتن"},
        {"word": "کامپیوتر", "help": "صفحه کلید"},
        {"word": "لباس", "help": "دوخت"},
        {"word": "لامپ", "help": "نور"},
        {"word": "کلاه", "help": "سر"},
        {"word": "کفش", "help": "زیرپا"},
        {"word": "پیراهن", "help": "دکمه"},
        {"word": "شلوار", "help": "دکمه"},
        {"word": "جوراب", "help": "پا"},
        {"word": "ماشین لباسشویی", "help": "تمیز"},
        {"word": "یخچال", "help": "سرد"},
        {"word": "میز", "help": "پایه"},
        {"word": "صندلی", "help": "پشتی"},
        {"word": "تخت", "help": "خواب"},
        {"word": "کتاب", "help": "صفحه"},
        {"word": "قلم‌مو", "help": "سر"},
        {"word": "مدادرنگی", "help": "مو"},
        {"word": "پاک‌کن", "help": "تمیز"},
        {"word": "کاغذ", "help": "چوب"},
        {"word": "چراغ", "help": "نور"},
        {"word": "موس", "help": "دکمه"},
        {"word": "کیبورد", "help": "دکمه"},
        {"word": "موبایل", "help": "صفحه نمایش"},
        {"word": "کنسول بازی", "help": "سرگرمی"},
        {"word": "لوازم آرایشی", "help": "زنانه"},
        {"word": "حوله", "help": "نرمی"},
        {"word": "کتانی", "help": "نرمی"},
        {"word": "سبد", "help": "دسته"},
        {"word": "کتونی", "help": "لباس"},
        {"word": "آینه", "help": "شیشه"},
        {"word": "پرده", "help": "بافت"},
        {"word": "پتو", "help": "گرم"},
        {"word": "تشک", "help": "نرمی"},
        {"word": "کیف", "help": "دسته"},
        {"word": "کفش‌دوزک", "help": "حیوان"},
        {"word": "سواری", "help": "حمل"},
        {"word": "ماشین", "help": "فرمون"},
        {"word": "دوچرخه", "help": "چرخ"},
        {"word": "موتورسیکلت", "help": "بنزین"},
        {"word": "قایق", "help": "چوب"},
        {"word": "هواپیما", "help": "بال"},
        {"word": "تلسکوپ", "help": "لنز"},
        {"word": "دوربین عکاسی", "help": "لنز"},
        {"word": "گوشی دوربین", "help": "لنز"},
        {"word": "لپ تاپ", "help": "کیبرد"},
        {"word": "دستگاه نوازندگی", "help": "موسیقی"},
        {"word": "تلفن ثابت", "help": "گوشی"},
        {"word": "گرامافون", "help": "اهنگ"},
        {"word": "ویالون", "help": "موسیقی"},
        {"word": "پیانو", "help": "اهنگ"},
        {"word": "گیتار", "help": "سیم"},
        {"word": "ترمومتر", "help": "دما"},
        {"word": "ترازو", "help": "وزن"},
        {"word": "کاسه", "help": "عمق"},
        {"word": "قوری", "help": "دسته"},
        {"word": "چاقو", "help": "برش"},
        {"word": "کارد", "help": "برش"},
        {"word": "چوب", "help": "درخت"},
        {"word": "خودکار", "help": "نوک"},
        {"word": "خمیردندان", "help": "تمیز"},
        {"word": "خشک‌کن", "help": "باد"},
        {"word": "سشوار", "help": "گرما"},
        {"word": "یخ‌ساز", "help": "سرد"},
        {"word": "ماهیتابه", "help": "چربی"},
        {"word": "قاب عکس", "help": "شیشه"},
        {"word": "خرطومی", "help": "آب"},
        {"word": "ماشین حساب", "help": "اعداد"},
        {"word": "نظامی", "help": "تیر"},
        {"word": "نقاشی", "help": "رنگ"},
        {"word": "دسته بازی", "help": "سرگرمی"},
        {"word": "آویز", "help": "تزیینی"},
        {"word": "کمد", "help": "درب"},
        {"word": "تابلو", "help": "دیوار"},
        {"word": "ساعت دیواری", "help": "زمان"},
        {"word": "شیرآلات", "help": "آب"},
        {"word": "سرویس چای", "help": "گرم"},
        {"word": "ظروف آشپزخانه", "help": "آشپزی"},
        {"word": "سینی", "help": "جا"},
        {"word": "چایخوری", "help": "ظرف"},
        {"word": "چنگال", "help": "کنار غذا"},
        {"word": "قاشق", "help": "کنار غذا"},
        {"word": "کارت حافظه", "help": "ذخیره سازی"},
        {"word": "اسپیکر", "help": "صدا"},
        {"word": "هدست", "help": "گوش"},
        {"word": "کابل", "help": "انتقال"},
        {"word": "کیس کامپیوتر", "help": "تکنولوژی"},
        {"word": "هارد دیسک", "help": "ذخیره سازی"},
        {"word": "سی دی", "help": "ذخیره سازی"},
        {"word": "دی وی دی", "help": "ذخیره سازی"},
        {"word": "رم", "help": "ذخیره سازی"},
        {"word": "موس پد", "help": "زیر"},
        {"word": "ماوس", "help": "دکمه"},
        {"word": "مانیتور", "help": "نمایشگر"},
        {"word": "پرینتر", "help": "چاپ"},
        {"word": "اسکنر", "help": "اسکن"},
        {"word": "اسپری", "help": "ضدعفونی کردن"},
        {"word": "پاک کننده چشم", "help": "تمیز"},
        {"word": "پاک کننده صورت", "help": "تمیز"},
        {"word": "شامپو", "help": "شستشو"},
        {"word": "صابون", "help": "تمیزکننده"},
        {"word": "ضد آفتاب", "help": "محافظت از پوست"},
        {"word": "عطر", "help": "بوی خوش"},
    ];

    const jobs = [
        {"word": "آرایشگر", "help": "آرایش"},
        {"word": "آهنگر", "help": "فلزکاری"},
        {"word": "معلم ریاضی", "help": "اعداد"},
        {"word": "نصاب", "help": "انبردست"},
        {"word": "اتومبیل‌ساز", "help": "ساختن"},
        {"word": "مدیر ارشد", "help": "مدیریت"},
        {"word": "استاد", "help": "تدریس"},
        {"word": "استودیویی", "help": "فیلم‌برداری"},
        {"word": "اشپز", "help": "آشپزی"},
        {"word": "تعمیر اسلحه", "help": "شلیک"},
        {"word": "اطلاعاتی", "help": "مخفی"},
        {"word": "مدیرپژوه", "help": "مافوق"},
        {"word": "اقتصاددان", "help": "پول"},
        {"word": "امنیتی", "help": "مخفی"},
        {"word": "انباردار", "help": "محافظ"},
        {"word": "انفورماتیکی", "help": "رایانه"},
        {"word": "مترجم", "help": "خارجی"},
        {"word": "اهنگساز", "help": "موسیقی"},
        {"word": "آهنگر", "help": "ساختن"},
        {"word": "باغبان", "help": "گیاه"},
        {"word": "بازیگر", "help": "تئاتر"},
        {"word": "بازاریاب", "help": "تبلیغات"},
        {"word": "بازرس", "help": "کنترل"},
        {"word": "باربر", "help": "حمل"},
        {"word": "هواشناس", "help": "هوا"},
        {"word": "بانکدار", "help": "پول"},
        {"word": "بخشدار", "help": "مدیریت شهری"},
        {"word": "بدنساز", "help": "ورزش"},
        {"word": "برقکار", "help": "سیم"},
        {"word": "برنامه‌نویس", "help": "کد"},
        {"word": "دکتر", "help": "درمان"},
        {"word": "پرستار", "help": "مراقبت"},
        {"word": "پزشک", "help": "درمانگر"},
        {"word": "پلیس", "help": "امنیت"},
        {"word": "پیشخدمت", "help": "سرویس دهی"},
        {"word": "تبلیغاتی", "help": "مشتری"},
        {"word": "تحقیقاتی", "help": "سوال"},
        {"word": "مترجم", "help": "زیرنویس"},
        {"word": "فیلم بردار", "help": "دوربین"},
        {"word": "تعمیرکار", "help": "آچار"},
        {"word": "لیدر تور", "help": "سرگرمی"},
        {"word": "صدا سیما", "help": "فیلم"},
        {"word": "تولیدکننده", "help": "محصول"},
        {"word": "توسعه‌دهنده", "help": "پیشرفت"},
        {"word": "جانورشناس", "help": "حیوان"},
        {"word": "زمین شناس", "help": "زمین"},
        {"word": "جهانگرد", "help": "سفر"},
        {"word": "جوشکار", "help": "فلز"},
        {"word": "ناشر", "help": "تکثیر"},
        {"word": "چشم‌پزشک", "help": "دیدن"},
        {"word": "حسابدار", "help": "مالی"},
        {"word": "حقوق دان", "help": "قانون"},
        {"word": "خدماتی", "help": "نظافت"},
        {"word": "خبرنگار", "help": "اطاعات"},
        {"word": "فروشنده", "help": "پول"},
        {"word": "شیشه بر", "help": "ساختن"},
        {"word": "خیاط", "help": "دوخت"},
        {"word": "دامپزشک", "help": "حیوان"},
        {"word": "دانشجو", "help": "درس"},
        {"word": "دانشمند", "help": "تحقیق"},
        {"word": "گل و گیاه", "help": "کاشت"},
        {"word": "درمانگر", "help": "بیماری"},
        {"word": "دستیار", "help": "کمک کننده"},
        {"word": "منشی", "help": "میز"},
        {"word": "طراح دکور", "help": "دیزاین"},
        {"word": "دندانپزشک", "help": "ارتودنسی"},
        {"word": "دهقان", "help": "کشاورزی"},
        {"word": "دوچرخه فروش", "help": "پدال"},
        {"word": "برگزارکننده دورهمی", "help": "گروهی"},
        {"word": "دونده", "help": "پا"},
        {"word": "راننده", "help": "فرمان"},
        {"word": "رئیس", "help": "مدیریت"},
        {"word": "رزرواسیون", "help": "بلیط"},
        {"word": "رسانه", "help": "تلویزیون"},
    ];

    const every = [
        {"word": "کاغذ", "help": "نوشتن"},
        {"word": "رنگ", "help": "رنگارنگ"},
        {"word": "تابستان", "help": "گرم"},
        {"word": "طوفان", "help": "باد"},
        {"word": "قارچ", "help": "خوراکی"},
        {"word": "شمع", "help": "روشنایی"},
        {"word": "تنباکو", "help": "سیگار"},
        {"word": "کفش", "help": "پا"},
        {"word": "سماق", "help": "طعم دارویی"},
        {"word": "ماهی", "help": "آب"},
        {"word": "ساعت", "help": "زمان"},
        {"word": "آفتاب", "help": "روشنایی"},
        {"word": "باد", "help": "هوا"},
        {"word": "موش", "help": "جستجوی غذا"},
        {"word": "خورشید", "help": "روشنایی"},
        {"word": "ماه", "help": "شب"},
        {"word": "شیر", "help": "شیر دادن"},
        {"word": "نخود", "help": "خوراکی"},
        {"word": "سیب", "help": "میوه"},
        {"word": "گوجه فرنگی", "help": "میوه"},
        {"word": "سیر", "help": "بوی بد"},
        {"word": "پیاز", "help": "بوی بد"},
        {"word": "کیوی", "help": "میوه"},
        {"word": "بادام", "help": "خوراکی"},
        {"word": "کاهو", "help": "سبزیجات"},
        {"word": "شکلات", "help": "شیرین"},
        {"word": "قهوه", "help": "تلخ"},
        {"word": "شیرینی", "help": "شیرین"},
        {"word": "سوسیس", "help": "گوشتی"},
        {"word": "نان", "help": "خوراکی"},
        {"word": "گربه", "help": "حیوان خانگی"},
        {"word": "سگ", "help": "حیوان خانگی"},
        {"word": "موز", "help": "میوه"},
        {"word": "خیار", "help": "سبزیجات"},
        {"word": "بادام زمینی", "help": "خوراکی"},
        {"word": "آلوچه", "help": "خوراکی"},
        {"word": "کلم", "help": "سبزیجات"},
        {"word": "هویج", "help": "سبزیجات"},
        {"word": "خرما", "help": "میوه"},
        {"word": "شیرینی پزی", "help": "خوراکی"},
        {"word": "آلو", "help": "میوه"},
        {"word": "تن ماهی", "help": "خوراکی"},
        {"word": "کشمش", "help": "میوه خشک"},
        {"word": "کدو", "help": "سبزیجات"},
        {"word": "خردل", "help": "طعم تند"},
        {"word": "زردآلو", "help": "میوه"},
        {"word": "توت فرنگی", "help": "میوه"},
        {"word": "انار", "help": "میوه"},
        {"word": "آناناس", "help": "میوه"},
        {"word": "مرکبات", "help": "میوه"},
        {"word": "انبه", "help": "میوه"},
        {"word": "فلفل دلمه ای", "help": "سبزیجات"},
        {"word": "شلغم", "help": "سبزیجات"},
        {"word": "کلم بروکلی", "help": "سبزیجات"},
        {"word": "نارنگی", "help": "میوه"},
        {"word": "شیرینی نان", "help": "خوراکی"},
        {"word": "آرد", "help": "نان و شیرینی"},
        {"word": "آنیسون", "help": "طعم دارویی"},
        {"word": "ماست", "help": "لبنیات"},
        {"word": "کره", "help": "شیرینی و نان"},
        {"word": "سردی", "help": "خوراکی"},
        {"word": "کلم پیچ", "help": "سبزیجات"},
        {"word": "کلم شمشیری", "help": "سبزیجات"},
        {"word": "ماکارونی", "help": "خوراکی"},
        {"word": "گوشت", "help": "خوراکی"},
        {"word": "مرغ", "help": "خوراکی"},
        {"word": "ماهی قزل آلا", "help": "خوراکی"},
        {"word": "کدو حلوایی", "help": "خوراکی"},
        {"word": "پرتقال", "help": "میوه"},
        {"word": "لیمو", "help": "میوه"},
        {"word": "لوبیا", "help": "خوراکی"},
        {"word": "بامیه", "help": "سبزیجات"},
        {"word": "کشک بادمجان", "help": "خوراکی"},
        {"word": "بادمجان", "help": "سبزیجات"},
        {"word": "هویج سرخ شده", "help": "خوراکی"},
        {"word": "پفک", "help": "خوراکی"},
        {"word": "ذرت", "help": "خوراکی"},
        {"word": "برنج", "help": "خوراکی"},
        {"word": "سیر", "help": "خوراکی"},
        {"word": "پنیر", "help": "لبنیات"},
        {"word": "خامه", "help": "لبنیات"},
        {"word": "شیرینی ژله ای", "help": "خوراکی"},
        {"word": "کیک", "help": "خوراکی"},
        {"word": "کلوچه", "help": "خوراکی"},
        {"word": "زعفران", "help": "طعم دارویی"},
        {"word": "زنجبیل", "help": "طعم دارویی"},
        {"word": "چای", "help": "نوشیدنی"},
        {"word": "قهوه سفید", "help": "نوشیدنی"},
        {"word": "آب", "help": "نوشیدنی"},
        {"word": "آب کرفس", "help": "نوشیدنی"},
        {"word": "آب لیمو", "help": "نوشیدنی"},
        {"word": "آب نبات", "help": "نوشیدنی"},
        {"word": "آب پرتقال", "help": "نوشیدنی"},
        {"word": "آب هویج", "help": "نوشیدنی"},
        {"word": "کنسرو ماهی", "help": "خوراکی"},
        {"word": "سوپ", "help": "خوراکی"},
        {"word": "دانمارکی", "help": "شیرینی"},
        {"word": "شیرینی زبان", "help": "خوراکی"},
        {"word": "آب آلوچه", "help": "نوشیدنی"},
        {"word": "ماهی قرمز", "help": "خوراکی"},
        {"word": "آب پرتقال شیرین", "help": "نوشیدنی"},
        {"word": "آب آناناس", "help": "نوشیدنی"},
        {"word": "آب نارنگی", "help": "نوشیدنی"},
        {"word": "آب توت فرنگی", "help": "نوشیدنی"},
        {"word": "خرما", "help": "سیاه"},
        {"word": "آب هویج", "help": "نوشیدنی"},
    ];


    var category = getCookie("category");

    console.log(category);

    let random = "";

    if (category === "مکان") {

        // console.log("place");
        random = Math.floor(Math.random() * place.length);
        console.log(place[random]);
        return place[random];

    } else if (category === "خوراکی") {

        // console.log("foods");
        random = Math.floor(Math.random() * foods.length);
        return foods[random];

    } else if (category === "شغل") {
        // console.log("jobs");
        random = Math.floor(Math.random() * jobs.length);
        return jobs[random];

    } else if (category === "اشیا") {
        // console.log("things");
        random = Math.floor(Math.random() * things.length);
        return things[random];

    } else if (category === "همه") {
        // console.log("every");
        random = Math.floor(Math.random() * every.length);
        return every[random];

    }


}


function startTimer(duration, display) {
    // clearTimeout(duration);


    var timer = duration, minutes, seconds;

    myInterval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {

            document.getElementById("text_game").textContent = getCookie("جاسوس برنده شد");

            var btn_reset = document.getElementById("btn_reset");
            btn_reset.textContent = "بازی دوباره";


        }
    }, 1000);
}

function reset_game() {
    // window.location.replace("http://spy-game.ir/online-web/");
    clearInterval(myInterval);
    // document.querySelectorAll('#text_time').forEach(e => e.remove());
    var text_time = document.getElementById("text_time");
    text_time.style.display = 'none';


    var form_first = document.getElementById("form_first")
    var head_online = document.getElementById("head_online")
    var start_game = document.getElementById("start_game")

    // alert("number_gamer: "+number_gamer +"number_spy: "+number_spy +"time: "+time );

    form_first.style.display = 'block';
    head_online.style.display = 'block';
    start_game.style.display = 'none';

    var btn_game = document.getElementById("btn_game");
    btn_game.style.display = 'block';

    var btn_reset = document.getElementById("btn_reset");
    btn_reset.style.display = 'none';

    document.getElementById("img_cart").style.display = 'block';

    var text_game = document.querySelector('#text_game');
    text_game.style.display = 'block';
    text_game.textContent = "نفر اول کلیک کند!";
}

function setCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    } else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/; SameSite=None; Secure";
}


function setCookie2(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));

    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) === 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return null;
}
function getCookie2(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return null;
}

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}


function revisedRandId() {
    return Math.random().toString(36).replace(/[^a-z]+/g, '').substr(2, 10);
}

function saveAs(url) {

    $file_path = url;
    if (file_exists($file_path)) {
        $file_name = basename($file_path);
        $file_size = filesize($file_path);
        header('Content-type: application/octet-stream');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: '.$file_size);
        header('Content-Disposition: attachment; filename='.$file_name);
        readfile($file_path);
        exit();
    } else {
        die('The provided file path is not valid.');
    }


}


function number_dowload(id) {

    connect_url(id, 'https://98diha.ir/code/num_download.php');

    // saveAs(url);
}


function Func_copy(id, text) {

    connect_url(id, 'https://98diha.ir/code/counter_sahre.php');

    var textArea = document.createElement("textarea");
    textArea.value = text;

    // Avoid scrolling to bottom
    textArea.style.top = "0";
    textArea.style.left = "0";
    textArea.style.position = "fixed";

    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();

    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Fallback: Copying text command was ' + msg);
    } catch (err) {
        console.error('Fallback: Oops, unable to copy', err);
    }

    document.body.removeChild(textArea);
    // alert("کپی شد");
}


function share_couter(url, windowName, windowFeatures, id) {


    window.open(url, windowName, windowFeatures);

    connect_url(id, "https://98diha.ir/code/counter_sahre.php");


}


function connect_url(id, url) {

    http = new XMLHttpRequest();
    string = "post_id=" + encodeURIComponent(id);
    /*    if (getCookie(id) == null) {
                setCookie(id, id + "a", "2020");*/

    http.open("POST", url, true);
    http.onreadystatechange = function () {
        if (http.readyState == 4) {
            if (http.status == 200) {
                // alert(http.responseText);
            }
        }
    };
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(string);
    // }
}
















//   ...........   start online game   ..........


function game_wold() {

    console.log("game_wold");
}

function game_family() {

    console.log("game_family");

    var page_first = document.getElementById("page_first");
    var page_friend = document.getElementById("page_friend");

    // alert("number_gamer: "+number_gamer +"number_spy: "+number_spy +"time: "+time );

    page_first.style.display = 'none';
    page_friend.style.display = 'block';
}

function create_game_friend() {

    console.log("create_game_friend");

    var page_friend = document.getElementById("page_friend");
    var create_game_friend = document.getElementById("create_game_friend");

    // alert("number_gamer: "+number_gamer +"number_spy: "+number_spy +"time: "+time );

    page_friend.style.display = 'none';
    create_game_friend.style.display = 'block';
}

function join_game_friend() {

    console.log("join_game_friend");

    var page_friend = document.getElementById("page_friend");
    var join_game_friend = document.getElementById("join_game_friend");

    // alert("number_gamer: "+number_gamer +"number_spy: "+number_spy +"time: "+time );

    page_friend.style.display = 'none';
    join_game_friend.style.display = 'block';
}


//   ...........   end online game  ..........